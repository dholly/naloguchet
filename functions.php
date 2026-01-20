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

<<<<<<< HEAD
// Каноникал
=======
// Каноникал 
>>>>>>> 44598a57cc4f9bc984e193f143b201a22947c4fe

add_filter( 'wpseo_canonical', 'fix_pagination_canonical_yoast' );

function fix_pagination_canonical_yoast( $canonical ) {
    if ( is_paged() ) {
        if ( is_archive() ) {
            $obj = get_queried_object();
            if ( isset($obj->term_id) ) {
<<<<<<< HEAD
                return get_term_link( $obj );
            }
            return get_post_type_archive_link( get_post_type() );
        }

=======
                return get_term_link( $obj ); 
            }
            return get_post_type_archive_link( get_post_type() );
        }
        
>>>>>>> 44598a57cc4f9bc984e193f143b201a22947c4fe
        if ( is_page() ) {
            global $post;
            return get_permalink( $post->ID );
        }
<<<<<<< HEAD

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
=======
        
        if ( is_home() ) {
            return home_url( '/' ); 
        }
    }
    
    return $canonical;
}
>>>>>>> 44598a57cc4f9bc984e193f143b201a22947c4fe
