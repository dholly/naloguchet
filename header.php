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

$menu_items = [
    [
        'title' => 'Услуги',
        'url' => get_post_type_archive_link('uslugi'),
    ],
    [
        'title' => 'Кейсы',
        'url' => get_post_type_archive_link('buh_keysi'),
    ],
    [
        'title' => 'Документы',
        'url' => get_post_type_archive_link('buh_dokumenty'),
    ],
    [
        'title' => 'Консультации',
        'url' => get_post_type_archive_link('consultation'),
    ],
    [
        'title' => 'Клиенты',
        'url' => get_post_type_archive_link('clients'),
    ],
    [
        'title' => 'Команда',
        'url' => get_post_type_archive_link('staff'),
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
        'title' => 'Калькулятор',
        'url' => '#calculator',
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
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wrapper">
    <header class="header">
        <div class="header__container">
            <div class="header__row">
                <a href="<?php echo home_url('/'); ?>" class="header__logo logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>
                <div class="header__body">
                    <div class="header__top">
                        <div class="header__item">
                            <div class="header__item-row">
                                <div class="header__online">
                                    Мы онлайн
                                </div>
                                <div class="header__social social">
                                    <?php foreach ($socials as $social) : ?>
                                        <a href="<?php echo esc_url($social['url']); ?>" class="social__link">
                                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/<?php echo esc_attr($social['icon']); ?>" alt="<?php echo esc_attr($social['name']); ?>">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="header__item">
                            <div class="header__address">
                                <?php echo esc_html($contacts['address']); ?>
                            </div>
                        </div>
                        <div class="header__item">
                            <div class="header__row-contacts">
                                <a href="tel:<?php echo esc_attr($contacts['phone_link']); ?>" class="header__tel">
                                    <?php echo esc_html($contacts['phone']); ?>
                                </a>
                            </div>
                            <button class="header__row-btn btn btn_arr">
                                Заказать звонок
                            </button>
                        </div>
                    </div>

                    <div class="header__bottom">
                        <div class="header__menu menu">
                            <button type="button" class="menu__icon icon-menu"><span></span></button>
                            <nav class="menu__body">
                                <ul class="menu__list">
                                    <?php foreach ($menu_items as $item) : ?>
                                        <?php
                                        $link_class = 'menu__link';
                                        if (!empty($item['class'])) {
                                            $link_class .= ' ' . $item['class'];
                                        }
                                        ?>
                                        <li class="menu__item">
                                            <a href="<?php echo esc_url($item['url']); ?>" class="<?php echo esc_attr($link_class); ?>">
                                                <?php echo esc_html($item['title']); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="page">