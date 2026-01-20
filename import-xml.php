<?php
/**
 * Привязка img_big к клиентам
 *
 * Использование:
 * php update-clients-img.php media.xml posts.xml [--dry-run]
 *
 * media.xml - экспорт медиафайлов со СТАРОГО сайта
 * posts.xml - экспорт постов (2_clean.xml)
 */

require_once __DIR__ . '/wp-load.php';

if (!defined('ABSPATH')) {
  die("WordPress не загружен\n");
}

// Подключаем административные функции для работы с медиа
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/media.php';
require_once ABSPATH . 'wp-admin/includes/image.php';

// Параметры
$dry_run = in_array('--dry-run', $argv);
$media_xml_file = null;
$posts_xml_file = null;

foreach ($argv as $i => $arg) {
  if ($i === 0) continue;
  if (strpos($arg, '--') === 0) continue;
  if (file_exists($arg)) {
    if (!$media_xml_file) {
      $media_xml_file = $arg;
    } else {
      $posts_xml_file = $arg;
    }
  }
}

if (!$media_xml_file || !$posts_xml_file) {
  die("Использование: php update-clients-img.php <media.xml> <posts.xml> [--dry-run]\n");
}

echo "=== ОБНОВЛЕНИЕ IMG_BIG ДЛЯ КЛИЕНТОВ ===\n";
echo "Медиа XML: $media_xml_file\n";
echo "Посты XML: $posts_xml_file\n";
echo "Режим: " . ($dry_run ? "ТЕСТОВЫЙ (dry-run)" : "БОЕВОЙ") . "\n\n";

// Статистика
$stats = [
  'clients_found'   => 0,
  'img_big_found'   => 0,
  'updated'         => 0,
  'skipped'         => 0,
  'downloaded'      => 0,
  'not_found'       => 0,
];

/**
 * Скачивает медиафайл и добавляет в библиотеку WP
 */
function download_and_create_attachment($url, $dry_run = false) {
  global $stats;

  if (empty($url)) {
    return false;
  }

  $filename = basename(parse_url($url, PHP_URL_PATH));

  if ($dry_run) {
    echo "  [DRY-RUN] Скачал бы: $filename\n";
    return 999999; // Фейковый ID для dry-run
  }

  // Скачиваем
  $tmp = download_url($url, 30);

  if (is_wp_error($tmp)) {
    echo "  [ОШИБКА] Не удалось скачать: $url - " . $tmp->get_error_message() . "\n";
    return false;
  }

  $file_array = [
    'name'     => $filename,
    'tmp_name' => $tmp,
  ];

  // Добавляем в медиабиблиотеку
  $attachment_id = media_handle_sideload($file_array, 0);

  if (is_wp_error($attachment_id)) {
    @unlink($tmp);
    echo "  [ОШИБКА] Не удалось добавить в библиотеку: $filename\n";
    return false;
  }

  // Сохраняем оригинальный URL для повторных импортов
  update_post_meta($attachment_id, '_original_import_url', $url);

  $stats['downloaded']++;
  echo "  [СКАЧАНО] $filename (ID: $attachment_id)\n";

  return $attachment_id;
}

// ШАГ 1: Строим маппинг old_attachment_id => old_url из media.xml
echo "Шаг 1: Читаю медиа XML и строю маппинг ID → URL...\n";

libxml_use_internal_errors(true);
$media_xml = simplexml_load_file($media_xml_file);

if (!$media_xml) {
  die("Ошибка парсинга media.xml\n");
}

$media_ns = $media_xml->getNamespaces(true);
$wp_ns = $media_ns['wp'] ?? 'http://wordpress.org/export/1.2/';

$old_id_to_url = [];

foreach ($media_xml->channel->item as $item) {
  $wp = $item->children($wp_ns);

  if ((string)$wp->post_type !== 'attachment') {
    continue;
  }

  $old_id = (int)$wp->post_id;
  $url = (string)$wp->attachment_url;

  if ($old_id && $url) {
    $old_id_to_url[$old_id] = $url;
  }
}

echo "  Найдено медиафайлов: " . count($old_id_to_url) . "\n\n";

// ШАГ 2: Читаем posts.xml и находим клиентов с img_big
echo "Шаг 2: Читаю посты XML и нахожу клиентов...\n";

$posts_xml = simplexml_load_file($posts_xml_file);

if (!$posts_xml) {
  die("Ошибка парсинга posts.xml\n");
}

$posts_ns = $posts_xml->getNamespaces(true);
$wp_ns = $posts_ns['wp'] ?? 'http://wordpress.org/export/1.2/';

// Маппинг: old_post_id => img_big_old_attachment_id
$clients_img_big = [];

foreach ($posts_xml->channel->item as $item) {
  $wp = $item->children($wp_ns);

  if ((string)$wp->post_type !== 'post') {
    continue;
  }

  // Проверяем категорию clients
  $is_client = false;
  foreach ($item->category as $cat) {
    if ((string)$cat['domain'] === 'category' && (string)$cat['nicename'] === 'clients') {
      $is_client = true;
      break;
    }
  }

  if (!$is_client) {
    continue;
  }

  $stats['clients_found']++;

  $old_post_id = (int)$wp->post_id;
  $title = (string)$item->title;

  // Ищем img_big в мета-полях
  foreach ($wp->postmeta as $postmeta) {
    $key = (string)$postmeta->meta_key;
    $value = (string)$postmeta->meta_value;

    if ($key === 'img_big' && !empty($value) && is_numeric($value)) {
      $clients_img_big[$old_post_id] = [
        'title'              => $title,
        'img_big_old_id'     => (int)$value,
      ];
      $stats['img_big_found']++;
      break;
    }
  }
}

echo "  Найдено клиентов: {$stats['clients_found']}\n";
echo "  С img_big: {$stats['img_big_found']}\n\n";

// ШАГ 3: Обновляем клиентов на новом сайте
echo "Шаг 3: Обновляю клиентов на новом сайте...\n\n";

foreach ($clients_img_big as $old_post_id => $data) {
  $title = $data['title'];
  $img_big_old_id = $data['img_big_old_id'];

  echo "[$title]\n";
  echo "  Old post ID: $old_post_id\n";
  echo "  Old img_big attachment ID: $img_big_old_id\n";

  // Находим URL старого attachment
  if (!isset($old_id_to_url[$img_big_old_id])) {
    echo "  [ОШИБКА] URL для attachment ID $img_big_old_id не найден в media.xml\n\n";
    $stats['not_found']++;
    continue;
  }

  $old_url = $old_id_to_url[$img_big_old_id];
  echo "  Old URL: $old_url\n";

  // Находим клиента на новом сайте по _original_post_id
  $client_posts = get_posts([
    'post_type'      => 'clients',
    'posts_per_page' => 1,
    'meta_query'     => [
      [
        'key'     => '_original_post_id',
        'value'   => $old_post_id,
        'compare' => '='
      ]
    ]
  ]);

  if (empty($client_posts)) {
    echo "  [ОШИБКА] Клиент не найден на новом сайте\n\n";
    $stats['not_found']++;
    continue;
  }

  $client_id = $client_posts[0]->ID;
  echo "  New client ID: $client_id\n";

  // Проверяем, может уже привязан img_big
  $current_img = get_field('img_big', $client_id);
  if ($current_img) {
    echo "  [ПРОПУСК] img_big уже привязан (ID: " . (is_array($current_img) ? $current_img['ID'] : $current_img) . ")\n\n";
    $stats['skipped']++;
    continue;
  }

  // Ищем attachment на новом сайте по _original_import_url
  // Пробуем разные варианты URL (http/https, с www и без)
  $url_variants = [
    $old_url,
    str_replace('http://', 'https://', $old_url),
    str_replace('https://', 'http://', $old_url),
  ];

  $new_attachment_id = null;

  foreach ($url_variants as $url_variant) {
    $attachments = get_posts([
      'post_type'      => 'attachment',
      'posts_per_page' => 1,
      'meta_query'     => [
        [
          'key'     => '_original_import_url',
          'value'   => $url_variant,
          'compare' => '='
        ]
      ]
    ]);

    if (!empty($attachments)) {
      $new_attachment_id = $attachments[0]->ID;
      break;
    }
  }

  if (!$new_attachment_id) {
    // Не нашли на новом сайте — скачиваем со старого
    echo "  Attachment не найден, скачиваю со старого сайта...\n";
    $new_attachment_id = download_and_create_attachment($old_url, $dry_run);

    if (!$new_attachment_id) {
      echo "  [ОШИБКА] Не удалось скачать картинку\n\n";
      $stats['not_found']++;
      continue;
    }
  }

  echo "  New attachment ID: $new_attachment_id\n";

  if ($dry_run) {
    echo "  [DRY-RUN] Привязал бы img_big\n\n";
    $stats['updated']++;
    continue;
  }

  // Привязываем
  $result = update_field('img_big', $new_attachment_id, $client_id);

  if ($result) {
    echo "  [OK] img_big привязан!\n\n";
    $stats['updated']++;
  } else {
    echo "  [ОШИБКА] Не удалось привязать img_big\n\n";
    $stats['not_found']++;
  }
}

// Итоги
echo str_repeat("=", 60) . "\n";
echo "ИТОГИ\n";
echo str_repeat("=", 60) . "\n";
echo "Клиентов в XML: {$stats['clients_found']}\n";
echo "С img_big: {$stats['img_big_found']}\n";
echo "Обновлено: {$stats['updated']}\n";
echo "Скачано картинок: {$stats['downloaded']}\n";
echo "Пропущено (уже есть): {$stats['skipped']}\n";
echo "Не найдено: {$stats['not_found']}\n";
echo "\nГотово!\n";