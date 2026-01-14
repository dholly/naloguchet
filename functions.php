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
    wp_enqueue_script( 
        'fslightbox', 
        'https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.0.9/index.min.js', 
        array(), 
        '3.0.9', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

