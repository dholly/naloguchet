<?php
// Проверяем, есть ли гео-город
$geo_city = get_current_geo_city();
// Адрес зависит от гео-страницы
$default_address = 'г. Москва, ул. Орджоникидзе, 11';
$current_address = $geo_city ? $geo_city['address'] : $default_address;


$contacts = [
    'phone'      => '+7 (495) 445-60-80',
    'phone_link' => '+74954456080',
  'address' => $current_address,
];

$socials = [
    [
        'name' => 'Telegram',
        'icon' => 'tg.svg',
        'url'  => 'https://t.me/cpb_info',
    ],
];

// Получаем услуги для подменю
$uslugi_posts = get_posts([
    'post_type'      => 'uslugi',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
]);

$uslugi_submenu = [];
foreach ($uslugi_posts as $usluga) {
    $uslugi_submenu[] = [
        'title' => $usluga->post_title,
        'url'   => get_permalink($usluga->ID),
    ];
}

// Текущий URL для active state
$current_url = trailingslashit(home_url($_SERVER['REQUEST_URI']));

function is_menu_item_active($item_url, $current_url) {
    $item_url = trailingslashit($item_url);

    // Точное совпадение
    if ($item_url === $current_url) {
        return true;
    }

    // Проверяем подстраницы (для архивов)
    if (strpos($current_url, $item_url) === 0 && $item_url !== home_url('/')) {
        return true;
    }

    return false;
}

// Меню с добавленными родительскими ссылками в подменю
$menu_items = [
    [
        'title'   => 'Услуги',
        'url'     => get_post_type_archive_link('uslugi'),
        'submenu' => array_merge(
            [
                ['title' => 'Бухгалтерия для ИП', 'url' => home_url('/buhgalteria-ip/')],
                ['title' => 'Бухгалтерия для ООО', 'url' => home_url('/buhgalteria-ooo/')],
                ['title' => 'Бухгалтерия для ОАО', 'url' => home_url('/buhgalteria-oao/')],
                ['title' => 'Восстановление бух. учета', 'url' => home_url('/buh-vosstanovlenie/')],
                ['title' => 'Экспресс аудит бухгалтерии', 'url' => home_url('/express-audit-buhgalterii/')],
            ]
        ),
    ],
    [
        'title' => 'Цены',
        'url'   => home_url('/kalkulyator/'),
    ],
    [
        'title'         => 'Сферы бизнеса',
        'url'           => get_post_type_archive_link('buhgalterskie-keysi'),
        'submenu_class' => 'sub-menu--wide',
        'submenu'       => array_merge(
            $uslugi_submenu
        ),
    ],
    [
        'title' => 'Кейсы',
        'url'   => get_post_type_archive_link('buh_keysi'),
    ],
    [
        'title'   => 'О компании',
        'url'     => home_url('/about-company/'),
        'submenu' => array_merge(
            [['title' => 'О компании', 'url' => home_url('/about-company/'), 'is_parent' => true]],
            [
                ['title' => 'Сотрудники', 'url' => home_url('/staff/')],
                ['title' => 'Гарантии', 'url' => home_url('/garantii/')],
            ]
        ),
    ],
    [
        'title' => 'Отзывы',
        'url'   => home_url('/otzivi/'),
    ],
    [
        'title'   => 'Блог',
        'url'     => home_url('/blog/'),
        'submenu' => array_merge(
            [['title' => 'Все статьи', 'url' => home_url('/blog/'), 'is_parent' => true]],
            [
                ['title' => 'Бухгалтерские документы', 'url' => home_url('/bukhgalterskie-dokumenty/')],
                ['title' => 'Вопрос-ответ', 'url' => home_url('/consultation/')],
            ]
        ),
    ],
    [
        'title' => 'Контакты',
        'url'   => home_url('/kontakty/'),
    ],
    [
        'title' => 'Калькулятор стоимости',
        'url'   => home_url('/kalkulyator/'),
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
                          <button type="button" class="address-row js-open-cities-modal">
                            <span><?php echo esc_html($contacts['address']); ?></span>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                              <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                          </button>
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
                          <button type="button" class="address-row js-open-cities-modal">
                            <span><?php echo esc_html($contacts['address']); ?></span>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                              <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                          </button>
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
                                <?php foreach ($menu_items as $item) : ?>
                                  <?php
                                  $has_submenu   = !empty($item['submenu']);
                                  $is_active     = is_menu_item_active($item['url'], $current_url);
                                  $submenu_class = $item['submenu_class'] ?? '';
                                  $link_class    = $item['class'] ?? '';

                                  // Проверяем активность подпунктов
                                  if ($has_submenu) {
                                    foreach ($item['submenu'] as $sub) {
                                      if (is_menu_item_active($sub['url'], $current_url)) {
                                        $is_active = true;
                                        break;
                                      }
                                    }
                                  }
                                  ?>

                                  <?php if ($has_submenu) : ?>
                                    <li class="menu__item sub-menu <?= esc_attr($submenu_class) ?>">
                                      <a
                                        href="<?= esc_url($item['url']) ?>"
                                        class="menu__link <?= $is_active ? 'is-active' : '' ?>"
                                        <?= $is_active ? 'aria-current="page"' : '' ?>
                                      >
                                        <?= esc_html($item['title']) ?>
                                      </a>
                                      <ul class="sub-menu__list">
                                        <?php foreach ($item['submenu'] as $sub) : ?>
                                          <?php
                                          $sub_is_active = is_menu_item_active($sub['url'], $current_url);
                                          $is_parent     = !empty($sub['is_parent']);
                                          ?>
                                          <li class="menu__item <?= $is_parent ? 'menu__item--parent' : '' ?>">
                                            <a
                                              href="<?= esc_url($sub['url']) ?>"
                                              class="menu__link <?= $sub_is_active ? 'is-active' : '' ?>"
                                              <?= $sub_is_active ? 'aria-current="page"' : '' ?>
                                            >
                                              <?= esc_html($sub['title']) ?>
                                            </a>
                                          </li>
                                        <?php endforeach; ?>
                                      </ul>
                                    </li>
                                  <?php else : ?>
                                    <li class="menu__item">
                                      <a
                                        href="<?= esc_url($item['url']) ?>"
                                        class="menu__link <?= esc_attr($link_class) ?> <?= $is_active ? 'is-active' : '' ?>"
                                        <?= $is_active ? 'aria-current="page"' : '' ?>
                                      >
                                        <?= esc_html($item['title']) ?>
                                      </a>
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
      <!-- Модалка городов -->
      <div class="cities-modal" id="cities-modal">
        <div class="cities-modal__overlay"></div>
        <div class="cities-modal__content">
          <button type="button" class="cities-modal__close" id="close-cities-modal">&times;</button>
          <div class="cities-modal__title">Наши офисы</div>
          <div class="cities-modal__list">
            <a href="<?php echo home_url('/kontakty/'); ?>" class="cities-modal__item">
              <span class="cities-modal__city">Москва</span>
              <span class="cities-modal__address">г. Москва, ул. Орджоникидзе, 11</span>
            </a>
            <?php foreach (get_geo_cities() as $slug => $city): ?>
              <a href="<?php echo home_url('/' . $slug . '/'); ?>" class="cities-modal__item">
                <span class="cities-modal__city"><?php echo esc_html($city['name']); ?></span>
                <span class="cities-modal__address"><?php echo esc_html($city['address']); ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </header>

    <main class="page">