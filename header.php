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
foreach ($uslugi_posts as $post) {
    $uslugi_submenu[] = [
        'title' => $post->post_title,
        'url' => get_permalink($post->ID),
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
            ['title' => 'Для городов', 'url' => home_url('/dlya-gorodov/')],
            ['title' => 'Восстановление бух. учета', 'url' => home_url('/buh-vosstanovlenie/')],
            ['title' => 'Экспресс аудит бухгалтерии', 'url' => home_url('/express-audit-buhgalterii/')],
            ['title' => 'Для отраслей', 'url' => home_url('/dlya-otraslei/')],
        ]
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
    ],
    [
        'title' => 'Отзывы',
        'url' => home_url('/otzivi/'),
    ],
    [
        'title' => 'Блог',
        'url' => home_url('/blog/'),
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

                            <button id="short-phone-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/phone.svg">
                            </button>

                            <button class="header-top__btn btn btn_arr">Заказать звонок</button>

                            <button id="open-sidebar">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/hamburger.svg">
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
                                <ul class="menu__list">
                                    <li>
                                        <button id="close-sidebar">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/hamburger.svg">
                                        </button>
                                    </li>
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
                            </nav>
                            <div id="sidebar-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="page">