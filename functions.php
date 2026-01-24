<?php

// CPT TAXONOMY

include( 'configure/cpt-taxonomy.php' );

// Utilities

include( 'configure/utilities.php' );

// CONFIG

include( 'configure/configure.php' );

// JAVASCRIPT & CSS

include( 'configure/js-css.php' );

// SHORTCODES

include( 'configure/shortcodes.php' );

// ACF

include( 'configure/acf.php' );

// HOOKS ADMIN

if(is_admin()) {
	include( 'configure/admin.php' );
}

add_action('pre_get_posts', function($query) {
    if (!is_admin() && $query->is_main_query()) {

        if ($query->is_home()) {
            $query->set('posts_per_page', 6);
        }

        if ($query->is_post_type_archive('buh_dokumenty')) {
            $query->set('posts_per_page', 8);
        }

        if ($query->is_post_type_archive('buh_keysi')) {
            $query->set('posts_per_page', 6);
        }
    }
});

function register_reviews_cpt() {
    register_post_type('reviews', [
        'labels' => [
            'name'               => 'Отзывы и Письма',
            'singular_name'      => 'Отзыв',
            'add_new'            => 'Добавить отзыв',
            'add_new_item'       => 'Добавить новый отзыв',
            'edit_item'          => 'Редактировать отзыв',
            'new_item'           => 'Новый отзыв',
            'view_item'          => 'Посмотреть отзыв',
            'menu_name'          => 'Отзывы',
        ],
        'public'             => false,
        'show_ui'            => true,
        'supports'           => ['title', 'thumbnail'],
        'menu_icon'          => 'dashicons-thumbs-up',
    ]);
}
add_action('init', 'register_reviews_cpt');


// Вытаскивает картинки из контента, используется в single-staff
function get_content_images_and_text() {
    $content = get_the_content();
    preg_match_all('/<img[^>]+>/i', $content, $matches);
    $images = $matches[0];
    $text_only = preg_replace('/<img[^>]+>/i', '', $content);
    return ['text' => $text_only, 'images' => $images];
}

// Лайтбокс

function my_theme_scripts() {
  // CSS
  wp_enqueue_style(
    'glightbox',
    'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css',
    array(),
    '3.2.0'
  );

  // JS
  wp_enqueue_script(
    'glightbox',
    'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js',
    array(),
    '3.2.0',
    true
  );

}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

// Каноникал

add_filter( 'wpseo_canonical', 'fix_pagination_canonical_yoast' );

function fix_pagination_canonical_yoast( $canonical ) {
    if ( is_paged() ) {
        if ( is_archive() ) {
            $obj = get_queried_object();
            if ( isset($obj->term_id) ) {
                return get_term_link( $obj );
            }
            return get_post_type_archive_link( get_post_type() );
        }

        if ( is_page() ) {
            global $post;
            return get_permalink( $post->ID );
        }

        if ( is_home() ) {
            return home_url( '/' );
        }
    }

    return $canonical;
}


function convert_to_embed($url) {

  if (strpos($url, 'rutube.ru/video/') !== false) {
    preg_match('/video\/([a-zA-Z0-9]+)/', $url, $matches);
    if (!empty($matches[1])) {
      return 'https://rutube.ru/play/embed/' . $matches[1];
    }
  }

  if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/', $url, $matches)) {
    return 'https://www.youtube.com/embed/' . $matches[1];
  }

  return $url;
}


/**
 * Города для гео-страниц
 */
function get_geo_cities() {
  return [
    'sankt-peterburg' => [
      'name' => 'Санкт-Петербург',
      'name_prepositional' => 'Санкт-Петербурге',
      'address' => 'г. Санкт-Петербург, Дегтярный переулок, 11Б',
    ],
    'ekaterinburg' => [
      'name' => 'Екатеринбург',
      'name_prepositional' => 'Екатеринбурге',
      'address' => 'г. Екатеринбург, ул. Народной Воли, 65',
    ],
    'novosibirsk' => [
      'name' => 'Новосибирск',
      'name_prepositional' => 'Новосибирске',
      'address' => 'г. Новосибирск, ул. Ленина, 21/1к1',
    ],
    'ufa' => [
      'name' => 'Уфа',
      'name_prepositional' => 'Уфе',
      'address' => 'г. Уфа, ул. 50 лет СССР, 34',
    ],
    'krasnodar' => [
      'name' => 'Краснодар',
      'name_prepositional' => 'Краснодаре',
      'address' => 'г. Краснодар, ул. Янковского, 169',
    ],
    'nizhnij-novgorod' => [
      'name' => 'Нижний Новгород',
      'name_prepositional' => 'Нижнем Новгороде',
      'address' => 'г. Нижний Новгород, ул. Тимирязева, 15, корп. 2',
    ],
    'kazan' => [
      'name' => 'Казань',
      'name_prepositional' => 'Казани',
      'address' => 'г. Казань, Московская ул., 19/8',
    ],
    'samara' => [
      'name' => 'Самара',
      'name_prepositional' => 'Самаре',
      'address' => 'г. Самара, Московское ш., 4, стр. 9',
    ],
    'saratov' => [
      'name' => 'Саратов',
      'name_prepositional' => 'Саратове',
      'address' => 'г. Саратов, Астраханская ул., 43, корп. 4',
    ],
    'chelyabinsk' => [
      'name' => 'Челябинск',
      'name_prepositional' => 'Челябинске',
      'address' => 'г. Челябинск, просп. Ленина, 21В',
    ],
    'rostov-na-donu' => [
      'name' => 'Ростов-на-Дону',
      'name_prepositional' => 'Ростове-на-Дону',
      'address' => 'г. Ростов-на-Дону, Ворошиловский просп., 62',
    ],
  ];
}

/**
 * Получить текущий город из URL
 */
function get_current_geo_city()
{
  global $wp_query;
  $city_slug = get_query_var('geo_city');

  if ($city_slug) {
    $cities = get_geo_cities();
    if (isset($cities[$city_slug])) {
      return array_merge(['slug' => $city_slug], $cities[$city_slug]);
    }
  }
  return null;
}

/**
 * Регистрация rewrite rules для городов
 */
function register_geo_cities_rewrite()
{
  $cities = get_geo_cities();
  $city_slugs = implode('|', array_keys($cities));

  // Только главная страница города: /ufa/
  add_rewrite_rule(
    '^(' . $city_slugs . ')/?$',
    'index.php?geo_city=$matches[1]&geo_home=1',
    'top'
  );
}

add_action('init', 'register_geo_cities_rewrite');

/**
 * Регистрация query vars
 */
function register_geo_query_vars($vars)
{
  $vars[] = 'geo_city';
  $vars[] = 'geo_home';
  return $vars;
}

add_filter('query_vars', 'register_geo_query_vars');

/**
 * Подключение шаблона для гео-страниц
 */
function geo_city_template($template)
{
  if (get_query_var('geo_home')) {
    $new_template = locate_template(['template-geo-home.php']);
    if ($new_template) {
      return $new_template;
    }
  }
  return $template;
}

add_filter('template_include', function($template) {
  if (get_query_var('geo_home')) {

    $locations = [
      get_stylesheet_directory() . '/templates/template-geo-home.php',
      get_template_directory() . '/templates/template-geo-home.php',
      get_stylesheet_directory() . '/template-geo-home.php',
      get_template_directory() . '/template-geo-home.php',
    ];

    foreach ($locations as $geo_template) {
      if (file_exists($geo_template)) {
        return $geo_template;
      }
    }
  }
  return $template;
}, 99);

/**
 * FAQ для городов
 */
function get_geo_faq($city_prepositional)
{
  return [
    [
      'question' => "Что включает аутсорсинг бухгалтерии в {$city_prepositional}?",
      'answer' => "Аутсорсинг бухгалтерии в {$city_prepositional} включает ведение бухгалтерского и налогового учета, расчет налогов и подготовку обязательной отчетности компании."
    ],
    [
      'question' => "Подходит ли аутсорсинг бухгалтерии в {$city_prepositional} для компаний с разными видами деятельности?",
      'answer' => "Аутсорсинг бухгалтерии в {$city_prepositional} подходит для компаний различных сфер деятельности. Состав услуг определяется с учетом особенностей бизнеса и фиксируется в договоре."
    ],
    [
      'question' => "Как организуется взаимодействие с бухгалтером при аутсорсинге в {$city_prepositional}?",
      'answer' => "Взаимодействие при аутсорсинге бухгалтерии в {$city_prepositional} осуществляется в удаленном формате. Порядок обмена документами и коммуникаций согласуется на этапе начала сотрудничества."
    ],
    [
      'question' => "Кто несет ответственность за ведение бухгалтерского учета при аутсорсинге в {$city_prepositional}?",
      'answer' => "Ответственность за ведение бухгалтерского учета при аутсорсинге в {$city_prepositional} определяется условиями договора на оказание бухгалтерских услуг."
    ],
    [
      'question' => "Можно ли перейти на аутсорсинг бухгалтерии в {$city_prepositional} без остановки работы компании?",
      'answer' => "Переход на аутсорсинг бухгалтерии в {$city_prepositional} осуществляется без приостановки деятельности компании."
    ],
    [
      'question' => "Что требуется от компании для начала аутсорсинга бухгалтерии в {$city_prepositional}?",
      'answer' => "Для начала аутсорсинга бухгалтерии в {$city_prepositional} необходимо предоставить имеющиеся бухгалтерские документы и информацию о деятельности компании."
    ],
    [
      'question' => "В каком формате оказывается услуга аутсорсинга бухгалтерии в {$city_prepositional}?",
      'answer' => "Услуга аутсорсинга бухгалтерии в {$city_prepositional} оказывается в формате аутсорсинга с согласованием объема работ, сроков и условий взаимодействия."
    ],
    [
      'question' => "От чего зависит стоимость аутсорсинга бухгалтерии в {$city_prepositional}?",
      'answer' => "Стоимость аутсорсинга бухгалтерии в {$city_prepositional} зависит от объема операций, структуры компании, численности персонала и сложности бухгалтерского учета. Условия фиксируются в договоре."
    ],
  ];
}

add_action('wp_head', function() {
  if (current_user_can('administrator')) {
    echo '<!-- GEO DEBUG: city=' . get_query_var('geo_city') . ' home=' . get_query_var('geo_home') . ' -->';
  }
});

/**
 * SEO данные для городов
 */
function get_geo_seo_data($city_prepositional) {
  return [
    'title' => "Аутсорсинг бухгалтерии в {$city_prepositional} — бухгалтерское обслуживание для бизнеса | ЦПБ",
    'description' => "Аутсорсинг бухгалтерии в {$city_prepositional}: ведение бухгалтерского и налогового учёта, отчётность, взаимодействие с ИФНС и фондами. Работаем по договору.",
  ];
}

/**
 * Yoast SEO: Title для гео-страниц
 */
add_filter('wpseo_title', function($title) {
  $city = get_current_geo_city();

  if ($city && get_query_var('geo_home')) {
    $seo = get_geo_seo_data($city['name_prepositional']);
    return $seo['title'];
  }

  return $title;
});

/**
 * Yoast SEO: Meta description для гео-страниц
 */
add_filter('wpseo_metadesc', function($description) {
  $city = get_current_geo_city();

  if ($city && get_query_var('geo_home')) {
    $seo = get_geo_seo_data($city['name_prepositional']);
    return $seo['description'];
  }

  return $description;
});

/**
 * Yoast SEO: Canonical URL для гео-страниц
 */
add_filter('wpseo_canonical', function($canonical) {
  $city = get_current_geo_city();

  if ($city && get_query_var('geo_home')) {
    return home_url('/' . $city['slug'] . '/');
  }

  return $canonical;
});

/**
 * Yoast SEO: OG Title для гео-страниц
 */
add_filter('wpseo_opengraph_title', function($title) {
  $city = get_current_geo_city();

  if ($city && get_query_var('geo_home')) {
    $seo = get_geo_seo_data($city['name_prepositional']);
    return $seo['title'];
  }

  return $title;
});

/**
 * Yoast SEO: OG Description для гео-страниц
 */
add_filter('wpseo_opengraph_desc', function($description) {
  $city = get_current_geo_city();

  if ($city && get_query_var('geo_home')) {
    $seo = get_geo_seo_data($city['name_prepositional']);
    return $seo['description'];
  }

  return $description;
});

/**
 * Yoast SEO: OG URL для гео-страниц
 */
add_filter('wpseo_opengraph_url', function($url) {
  $city = get_current_geo_city();

  if ($city && get_query_var('geo_home')) {
    return home_url('/' . $city['slug'] . '/');
  }

  return $url;
});

