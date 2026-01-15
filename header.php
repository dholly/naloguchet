<?php
// Данные для хедера (потом можно заменить на ACF или кастомайзер)
$contacts = [
    'phone' => '+7 (495) 445-60-80',
    'phone_link' => '+74954456080',
    'address' => 'Москва, улица Орджоникидзе, 11',
];

$socials = [
    [
        'name' => 'Telegram',
        'icon' => 'tg.svg',
        'url' => '#',
    ],
    [
        'name' => 'WhatsApp',
        'icon' => 'wh.svg',
        'url' => '#',
    ],
];


$uslugi_posts = get_posts([
    'post_type' => 'uslugi',
    'posts_per_page' => -1,
    'orderby' => 'title',
    'order' => 'ASC',
]);


$uslugi_submenu = [];
foreach ($uslugi_posts as $usluga) {
    $uslugi_submenu[] = [
        'title' => $usluga->post_title,
        'url' => get_permalink($usluga->ID),
    ];
}

$menu_items = [
    [
        'title' => 'Услуги',
        'url' => get_post_type_archive_link('uslugi'),
        'class' => 'has-submenu',
        'submenu' => [
            ['title' => 'Бухгалтерия для ИП', 'url' => home_url('/buhgalteria-ip/')],
            ['title' => 'Бухгалтерия для ООО', 'url' => home_url('/buhgalteria-ooo/')],
            ['title' => 'Бухгалтерия для ОАО', 'url' => home_url('/buhgalteria-oao/')],
            ['title' => 'Восстановление бух. учета', 'url' => home_url('/buh-vosstanovlenie/')],
            ['title' => 'Экспресс аудит бухгалтерии', 'url' => home_url('/express-audit-buhgalterii/')],
        ]
    ],
    [
        'title' => 'Цены',
        'url' => home_url('/kalkulyator'),
    ],
    [
        'title' => 'Сферы бизнеса',
        'url' => get_post_type_archive_link('buhgalterskie-keysi'),
        'class' => 'has-submenu',
        'submenu_class' => 'sub-menu--wide',
        'submenu' => $uslugi_submenu,
    ],
    [
        'title' => 'Кейсы',
        'url' => get_post_type_archive_link('buh_keysi'),
    ],
    [
        'title' => 'О компании',
        'url' => get_post_type_archive_link('clients'),
        'class' => 'has-submenu',
        'submenu' => [
            ['title' => 'Сотрудники', 'url' => home_url('/staff/')],
            ['title' => 'Гарантии', 'url' => home_url('/garantii/')],
        ]
    ],
    [
        'title' => 'Отзывы',
        'url' => home_url('/otzivi/'),
    ],
    [
        'title' => 'Блог',
        'url' => home_url('/blog/'),
        'class' => 'has-submenu',
        'submenu' => [
            ['title' => 'Бухгалтерские документы', 'url' => home_url('/bukhgalterskie-dokumenty/')],
            ['title' => 'Вопрос-ответ', 'url' => home_url('/consultation/')],
        ]
    ],
    [
        'title' => 'Контакты',
        'url' => home_url('/kontakty/'),
    ],
    [
        'title' => 'Калькулятор стоимости',
        'url' => home_url('/kalkulyator'),
        'class' => 'menu__link_calc',
    ],
];
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <!--  Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div class="wrapper">
    <header>
        <div class="header__container">
            <div class="header__row">
                <a href="<?php echo home_url('/'); ?>" class="header__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>

                <div class="header__body">

                    <div class="header__top">

                        <div class="header__item">
                            <div class="socials-row">
                                <span>Мы онлайн</span>
                                <div class="socials-row__social-icons">
                                    <?php foreach ($socials as $social) : ?>
                                        <a href="<?php echo esc_url($social['url']); ?>" class="social__link">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/<?php echo esc_attr($social['icon']); ?>" alt="<?php echo esc_attr($social['name']); ?>">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="header__item">
                            <div class="address-row">
                                <?php echo esc_html($contacts['address']); ?>
                            </div>
                        </div>

                        <div class="header__item">

                            <div class="contacts-row">
                                <a href="tel:<?php echo esc_attr($contacts['phone_link']); ?>" class="contacts-row__tel">
                                    <?php echo esc_html($contacts['phone']); ?>
                                </a>
                            </div>

                            <a href="tel:<?php echo esc_attr($contacts['phone_link']); ?>" id="short-phone-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/phone.svg" alt="Позвонить">
                            </a>


                          <?php echo do_shortcode('[fluentform_modal css_class="header-top__btn btn btn_arr" form_id="3" btn_text="Заказать звонок"]'); ?>
                            <button id="open-sidebar" class="sidebar-btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 12H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 6H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 18H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                    </div>

                    <div class="header__bottom">

                        <div class="bottom__item">
                            <div class="socials-row">
                                <span>Мы онлайн</span>
                                <div class="socials-row__social-icons">
                                    <?php foreach ($socials as $social) : ?>
                                        <a href="<?php echo esc_url($social['url']); ?>" class="social__link">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/<?php echo esc_attr($social['icon']); ?>" alt="<?php echo esc_attr($social['name']); ?>">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                        <div class="bottom__item">
                            <div class="address-row">
                                <?php echo esc_html($contacts['address']); ?>
                            </div>
                        </div>


                        <div class="header__menu">
                            <nav class="menu__body">

                                <div class="menu__header">
                                    <button id="close-sidebar" class="sidebar-btn" aria-label="Закрыть меню">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6L6 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>

                                <ul class="menu__list">
                                  <?php foreach ($menu_items as $item): ?>
                                    <?php if (!empty($item['submenu'])): ?>
                                      <li class="menu__item sub-menu <?= $item['class'] ?? '' ?> <?= $item['submenu_class'] ?? '' ?>">
                                        <a href="<?= $item['url'] ?>" class="menu__link"><?= $item['title'] ?></a>
                                        <ul class="sub-menu__list">
                                          <?php foreach ($item['submenu'] as $sub): ?>
                                            <li class="menu__item">
                                              <a href="<?= $sub['url'] ?>" class="menu__link"><?= $sub['title'] ?></a>
                                            </li>
                                          <?php endforeach; ?>
                                        </ul>
                                      </li>
                                    <?php else: ?>
                                      <li class="menu__item">
                                        <a href="<?= $item['url'] ?>" class="menu__link <?= $item['class'] ?? '' ?>"><?= $item['title'] ?></a>
                                      </li>
                                    <?php endif; ?>
                                  <?php endforeach; ?>
                                </ul>

                                <div class="menu__footer">
                                    <div class="socials-row">
                                        <span>Мы онлайн</span>
                                        <div class="socials-row__social-icons">
                                            <?php foreach ($socials as $social) : ?>
                                                <a href="<?php echo esc_url($social['url']); ?>" class="social__link">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/<?php echo esc_attr($social['icon']); ?>" alt="<?php echo esc_attr($social['name']); ?>">
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                            <div id="sidebar-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php 
    if ( function_exists('yoast_breadcrumb') && ! is_front_page() ) : ?>
    
        <div class="breadcrumbs__container">
             <?php yoast_breadcrumb( '<div class="breadcrumbs__row">', '</div>' ); ?>
        </div>
        
    <?php endif; ?>

    </header>

    <main class="page">