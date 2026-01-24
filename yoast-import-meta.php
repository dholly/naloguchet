<?php
/**
 * Скрипт импорта мета-тегов в Yoast SEO
 *
 * УСТАНОВКА:
 * 1. Загрузите этот файл в корень WordPress (рядом с wp-config.php)
 * 2. Загрузите CSV файл туда же под именем "meta-import.csv"
 * 3. Откройте в браузере: https://ваш-сайт.ru/yoast-import-meta.php
 * 4. После импорта УДАЛИТЕ этот файл!
 */

// Подключаем WordPress
require_once('wp-load.php');

// Проверка прав (только админ)
if (!current_user_can('manage_options')) {
  die('Доступ запрещён. Войдите как администратор.');
}

// Настройки
$csv_file = __DIR__ . '/meta-import.csv';
$dry_run = isset($_GET['dry_run']); // Добавьте ?dry_run к URL для тестового прогона

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Импорт мета-тегов в Yoast</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; max-width: 1200px; margin: 20px auto; padding: 0 20px; }
    .success { color: #046a38; background: #d4edda; padding: 10px; margin: 5px 0; border-radius: 4px; }
    .error { color: #721c24; background: #f8d7da; padding: 10px; margin: 5px 0; border-radius: 4px; }
    .warning { color: #856404; background: #fff3cd; padding: 10px; margin: 5px 0; border-radius: 4px; }
    .info { color: #0c5460; background: #d1ecf1; padding: 10px; margin: 5px 0; border-radius: 4px; }
    table { border-collapse: collapse; width: 100%; margin-top: 20px; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; font-size: 13px; }
    th { background: #f4f4f4; }
    .length-ok { color: green; }
    .length-warn { color: orange; }
    .length-bad { color: red; }
    .collapsible { cursor: pointer; user-select: none; }
    .collapsible:hover { opacity: 0.8; }
    .content { display: none; overflow: hidden; }
    .content.show { display: block; }
    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 10px; margin: 20px 0; }
    .stat-card { padding: 15px; border-radius: 8px; text-align: center; }
    .stat-card h3 { margin: 0 0 5px 0; font-size: 2em; }
    .stat-card p { margin: 0; opacity: 0.8; }
    .stat-success { background: #d4edda; color: #046a38; }
    .stat-error { background: #f8d7da; color: #721c24; }
    .stat-warning { background: #fff3cd; color: #856404; }
    .stat-info { background: #d1ecf1; color: #0c5460; }
    .btn { display: inline-block; padding: 8px 16px; margin: 5px; border-radius: 4px; text-decoration: none; cursor: pointer; border: none; font-size: 14px; }
    .btn-primary { background: #007bff; color: white; }
    .btn-secondary { background: #6c757d; color: white; }
  </style>
  <script>
    function toggleContent(id) {
      var content = document.getElementById(id);
      content.classList.toggle('show');
    }
  </script>
</head>
<body>
<h1>🔧 Импорт мета-тегов в Yoast SEO</h1>

<?php if ($dry_run): ?>
  <div class="warning">⚠️ <strong>ТЕСТОВЫЙ РЕЖИМ</strong> — данные НЕ будут записаны. Уберите ?dry_run из URL для реального импорта.</div>
<?php endif; ?>

<?php

if (!file_exists($csv_file)) {
  echo '<div class="error">❌ Файл meta-import.csv не найден! Загрузите его в корень WordPress.</div>';
  exit;
}

// Читаем CSV
$handle = fopen($csv_file, 'r');
if (!$handle) {
  echo '<div class="error">❌ Не удалось открыть CSV файл.</div>';
  exit;
}

// Пропускаем BOM если есть
$bom = fread($handle, 3);
if ($bom !== "\xEF\xBB\xBF") {
  rewind($handle);
}

// Читаем заголовки
$headers = fgetcsv($handle);
if (!$headers) {
  echo '<div class="error">❌ Не удалось прочитать заголовки CSV.</div>';
  exit;
}

// Очищаем заголовки от пробелов
$headers = array_map('trim', $headers);

// Определяем индексы колонок
$url_index = array_search('URL', $headers);
$title_index = array_search('Title', $headers);
$desc_index = array_search('Description', $headers);

if ($url_index === false || $title_index === false || $desc_index === false) {
  echo '<div class="error">❌ Не найдены нужные колонки (URL, Title, Description).</div>';
  echo '<div class="info">Найденные колонки: ' . implode(', ', $headers) . '</div>';
  exit;
}

echo '<div class="info">📋 Найдены колонки: URL (индекс ' . $url_index . '), Title (индекс ' . $title_index . '), Description (индекс ' . $desc_index . ')</div>';

$results = [];
$success_count = 0;
$error_count = 0;
$row_num = 1;

while (($row = fgetcsv($handle)) !== false) {
  $row_num++;

  if (count($row) < max($url_index, $title_index, $desc_index) + 1) {
    $results[] = [
      'row' => $row_num,
      'url' => 'N/A',
      'status' => 'error',
      'message' => 'Недостаточно колонок в строке',
      'title' => '',
      'desc' => ''
    ];
    $error_count++;
    continue;
  }

  $url = trim($row[$url_index]);
  $title = trim($row[$title_index]);
  $description = trim($row[$desc_index]);

  if (empty($url)) {
    continue; // Пропускаем пустые строки
  }

  // Заменяем плейсхолдеры на переменные Yoast
  $yoast_replacements = [
    '{H1}' => '%%title%%',
    '{h1}' => '%%title%%',
    '{Title}' => '%%title%%',
    '{title}' => '%%title%%',
    '{Сайт}' => '%%sitename%%',
    '{сайт}' => '%%sitename%%',
  ];

  $title = str_replace(array_keys($yoast_replacements), array_values($yoast_replacements), $title);
  $description = str_replace(array_keys($yoast_replacements), array_values($yoast_replacements), $description);

  // Извлекаем slug из URL
  $parsed_url = parse_url($url);
  $path = isset($parsed_url['path']) ? trim($parsed_url['path'], '/') : '';

  if (empty($path)) {
    // Это главная страница
    $post_id = get_option('page_on_front');
    if (!$post_id) {
      $results[] = [
        'row' => $row_num,
        'url' => $url,
        'status' => 'error',
        'message' => 'Главная страница не настроена в WordPress',
        'title' => $title,
        'desc' => $description
      ];
      $error_count++;
      continue;
    }
  } else {
    // Получаем все типы записей
    $post_types = get_post_types(['public' => true], 'names');

    // Извлекаем slug (последний сегмент URL)
    $slug = basename($path);

    $post = null;

    // 1. Сначала пробуем по полному пути для всех типов
    $post = get_page_by_path($path, OBJECT, array_values($post_types));

    // 2. Пробуем только по slug для всех типов
    if (!$post) {
      $post = get_page_by_path($slug, OBJECT, array_values($post_types));
    }

    // 3. Ищем напрямую в БД по post_name (самый надёжный способ)
    if (!$post) {
      global $wpdb;
      $post_id_found = $wpdb->get_var($wpdb->prepare(
        "SELECT ID FROM {$wpdb->posts} WHERE post_name = %s AND post_status = 'publish' LIMIT 1",
        $slug
      ));
      if ($post_id_found) {
        $post = get_post($post_id_found);
      }
    }

    // 4. Ищем через get_posts по всем типам
    if (!$post) {
      $posts = get_posts([
        'name' => $slug,
        'post_type' => array_values($post_types),
        'post_status' => 'publish',
        'numberposts' => 1
      ]);
      $post = !empty($posts) ? $posts[0] : null;
    }

    if (!$post) {
      $results[] = [
        'row' => $row_num,
        'url' => $url,
        'status' => 'error',
        'message' => "Страница не найдена (slug: $slug, path: $path)",
        'title' => $title,
        'desc' => $description
      ];
      $error_count++;
      continue;
    }

    $post_id = $post->ID;
  }

  // Обновляем мета-теги Yoast
  if (!$dry_run) {
    update_post_meta($post_id, '_yoast_wpseo_title', $title);
    update_post_meta($post_id, '_yoast_wpseo_metadesc', $description);
  }

  $post_type = get_post_type($post_id);

  $results[] = [
    'row' => $row_num,
    'url' => $url,
    'status' => 'success',
    'message' => "ID: $post_id ($post_type)" . ($dry_run ? ' (тест)' : ' ✓'),
    'title' => $title,
    'desc' => $description,
    'title_len' => mb_strlen($title),
    'desc_len' => mb_strlen($description)
  ];
  $success_count++;
}

fclose($handle);

// Функция для определения класса длины
function get_length_class($len, $type) {
  if ($type === 'title') {
    if ($len <= 60) return 'length-ok';
    if ($len <= 70) return 'length-warn';
    return 'length-bad';
  } else {
    if ($len <= 160) return 'length-ok';
    if ($len <= 180) return 'length-warn';
    return 'length-bad';
  }
}

?>

<h2>📊 Сводка</h2>
<div class="stats-grid">
  <div class="stat-card stat-success">
    <h3><?php echo $success_count; ?></h3>
    <p>✅ Успешно</p>
  </div>
  <div class="stat-card stat-error">
    <h3><?php echo $error_count; ?></h3>
    <p>❌ Ошибок</p>
  </div>
  <div class="stat-card stat-warning">
    <h3 id="warnings-count">—</h3>
    <p>⚠️ Превышена длина</p>
  </div>
  <div class="stat-card stat-info">
    <h3><?php echo $success_count + $error_count; ?></h3>
    <p>📋 Всего строк</p>
  </div>
</div>

<h2 class="collapsible" onclick="toggleContent('full-table')">📋 Полная таблица результатов ▼</h2>
<div id="full-table" class="content">
  <table>
    <thead>
    <tr>
      <th>#</th>
      <th>URL</th>
      <th>Статус</th>
      <th>Title <small>(≤60)</small></th>
      <th>Description <small>(≤160)</small></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($results as $r): ?>
      <tr>
        <td><?php echo $r['row']; ?></td>
        <td><small><?php echo htmlspecialchars($r['url']); ?></small></td>
        <td class="<?php echo $r['status']; ?>">
          <?php echo htmlspecialchars($r['message']); ?>
        </td>
        <td>
          <?php if (!empty($r['title'])): ?>
            <span class="<?php echo get_length_class($r['title_len'] ?? 0, 'title'); ?>">
                        [<?php echo $r['title_len'] ?? mb_strlen($r['title']); ?>]
                    </span>
            <?php echo htmlspecialchars(mb_substr($r['title'], 0, 50)) . (mb_strlen($r['title']) > 50 ? '...' : ''); ?>
          <?php endif; ?>
        </td>
        <td>
          <?php if (!empty($r['desc'])): ?>
            <span class="<?php echo get_length_class($r['desc_len'] ?? 0, 'desc'); ?>">
                        [<?php echo $r['desc_len'] ?? mb_strlen($r['desc']); ?>]
                    </span>
            <?php echo htmlspecialchars(mb_substr($r['desc'], 0, 60)) . (mb_strlen($r['desc']) > 60 ? '...' : ''); ?>
          <?php endif; ?>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php
// Генерируем отчёты
$report_dir = __DIR__ . '/import-reports';
if (!file_exists($report_dir)) {
  mkdir($report_dir, 0755, true);
}

$timestamp = date('Y-m-d_H-i-s');
$report_prefix = $dry_run ? 'test' : 'import';

// CSV отчёт
$csv_report_file = $report_dir . "/{$report_prefix}-report_{$timestamp}.csv";
$csv_handle = fopen($csv_report_file, 'w');
fwrite($csv_handle, "\xEF\xBB\xBF"); // BOM для Excel
fputcsv($csv_handle, ['Строка', 'Статус', 'URL', 'Сообщение', 'Title', 'Title длина', 'Description', 'Desc длина', 'Title OK?', 'Desc OK?']);

foreach ($results as $r) {
  $title_len = $r['title_len'] ?? mb_strlen($r['title']);
  $desc_len = $r['desc_len'] ?? mb_strlen($r['desc']);

  fputcsv($csv_handle, [
    $r['row'],
    $r['status'],
    $r['url'],
    $r['message'],
    $r['title'],
    $title_len,
    $r['desc'],
    $desc_len,
    $title_len <= 60 ? 'OK' : ($title_len <= 70 ? 'WARN' : 'BAD'),
    $desc_len <= 160 ? 'OK' : ($desc_len <= 180 ? 'WARN' : 'BAD')
  ]);
}
fclose($csv_handle);

// JSON отчёт (для программной обработки)
$json_report_file = $report_dir . "/{$report_prefix}-report_{$timestamp}.json";
$json_report = [
  'generated' => date('Y-m-d H:i:s'),
  'dry_run' => $dry_run,
  'summary' => [
    'total' => $success_count + $error_count,
    'success' => $success_count,
    'errors' => $error_count,
    'title_warnings' => 0,
    'desc_warnings' => 0
  ],
  'errors_only' => [],
  'warnings_only' => [],
  'all_results' => $results
];

// Считаем предупреждения и собираем ошибки
foreach ($results as $r) {
  $title_len = $r['title_len'] ?? mb_strlen($r['title']);
  $desc_len = $r['desc_len'] ?? mb_strlen($r['desc']);

  if ($r['status'] === 'error') {
    $json_report['errors_only'][] = $r;
  }

  if ($title_len > 60 || $desc_len > 160) {
    $json_report['warnings_only'][] = [
      'row' => $r['row'],
      'url' => $r['url'],
      'title_len' => $title_len,
      'desc_len' => $desc_len,
      'title_issue' => $title_len > 60 ? "Превышен на " . ($title_len - 60) . " симв." : null,
      'desc_issue' => $desc_len > 160 ? "Превышен на " . ($desc_len - 160) . " симв." : null
    ];
    if ($title_len > 60) $json_report['summary']['title_warnings']++;
    if ($desc_len > 160) $json_report['summary']['desc_warnings']++;
  }
}

file_put_contents($json_report_file, json_encode($json_report, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Краткий текстовый отчёт
$txt_report_file = $report_dir . "/{$report_prefix}-summary_{$timestamp}.txt";
$txt_content = "=== ОТЧЁТ ИМПОРТА МЕТА-ТЕГОВ ===\n";
$txt_content .= "Дата: " . date('Y-m-d H:i:s') . "\n";
$txt_content .= "Режим: " . ($dry_run ? 'ТЕСТОВЫЙ' : 'РЕАЛЬНЫЙ ИМПОРТ') . "\n\n";
$txt_content .= "--- ИТОГО ---\n";
$txt_content .= "Успешно: {$success_count}\n";
$txt_content .= "Ошибок: {$error_count}\n";
$txt_content .= "Title > 60 символов: {$json_report['summary']['title_warnings']}\n";
$txt_content .= "Description > 160 символов: {$json_report['summary']['desc_warnings']}\n\n";

if (!empty($json_report['errors_only'])) {
  $txt_content .= "--- ОШИБКИ (страницы не найдены) ---\n";
  foreach ($json_report['errors_only'] as $err) {
    $txt_content .= "Строка {$err['row']}: {$err['url']}\n";
    $txt_content .= "  → {$err['message']}\n";
  }
  $txt_content .= "\n";
}

if (!empty($json_report['warnings_only'])) {
  $txt_content .= "--- ПРЕДУПРЕЖДЕНИЯ (длина мета-тегов) ---\n";
  foreach ($json_report['warnings_only'] as $warn) {
    $txt_content .= "Строка {$warn['row']}: {$warn['url']}\n";
    if ($warn['title_issue']) $txt_content .= "  → Title: {$warn['title_issue']} (всего {$warn['title_len']})\n";
    if ($warn['desc_issue']) $txt_content .= "  → Description: {$warn['desc_issue']} (всего {$warn['desc_len']})\n";
  }
}

file_put_contents($txt_report_file, $txt_content);
?>

<h2>📁 Отчёты сохранены</h2>
<div class="info">
  <p>Файлы отчётов в папке <code>/import-reports/</code>:</p>
  <ul>
    <li><a href="import-reports/<?php echo basename($txt_report_file); ?>" download>📄 <?php echo basename($txt_report_file); ?></a> — краткая сводка</li>
    <li><a href="import-reports/<?php echo basename($csv_report_file); ?>" download>📊 <?php echo basename($csv_report_file); ?></a> — полный отчёт (для Excel)</li>
    <li><a href="import-reports/<?php echo basename($json_report_file); ?>" download>🔧 <?php echo basename($json_report_file); ?></a> — JSON (для разработчиков)</li>
  </ul>
</div>

<script>
  document.getElementById('warnings-count').textContent = '<?php echo count($json_report['warnings_only']); ?>';
</script>

<?php if (!empty($json_report['errors_only'])): ?>
  <h2 class="collapsible" onclick="toggleContent('errors-table')">❌ Ошибки (<?php echo count($json_report['errors_only']); ?>) ▼</h2>
  <div id="errors-table" class="content show">
    <table>
      <thead>
      <tr><th>#</th><th>URL</th><th>Причина</th></tr>
      </thead>
      <tbody>
      <?php foreach ($json_report['errors_only'] as $err): ?>
        <tr class="error">
          <td><?php echo $err['row']; ?></td>
          <td><small><?php echo htmlspecialchars($err['url']); ?></small></td>
          <td><?php echo htmlspecialchars($err['message']); ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>

<?php if (!empty($json_report['warnings_only'])): ?>
  <h2 class="collapsible" onclick="toggleContent('warnings-table')">⚠️ Предупреждения по длине (<?php echo count($json_report['warnings_only']); ?>) ▼</h2>
  <div id="warnings-table" class="content show">
    <table>
      <thead>
      <tr><th>#</th><th>URL</th><th>Title</th><th>Description</th></tr>
      </thead>
      <tbody>
      <?php foreach ($json_report['warnings_only'] as $warn): ?>
        <tr class="warning">
          <td><?php echo $warn['row']; ?></td>
          <td><small><?php echo htmlspecialchars($warn['url']); ?></small></td>
          <td><?php echo $warn['title_issue'] ? "<span class='length-bad'>{$warn['title_len']} симв.</span>" : '<span class="length-ok">OK</span>'; ?></td>
          <td><?php echo $warn['desc_issue'] ? "<span class='length-bad'>{$warn['desc_len']} симв.</span>" : '<span class="length-ok">OK</span>'; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>

<h2>⚠️ Важно!</h2>
<ul>
  <li><strong>Удалите этот файл и папку /import-reports/ после импорта!</strong></li>
  <li>Проверьте несколько страниц вручную в админке WordPress</li>
  <li>Очистите кэш сайта если используете плагины кэширования</li>
</ul>

</body>
</html>