<?php
// Данные для футера
$footer_menu = [
    ['title' => 'Цены', 'url' => '/ceny/'],
    ['title' => 'О компании', 'url' => '/o-kompanii/'],
    ['title' => 'Контакты', 'url' => '/kontakty/'],
    ['title' => 'Гарантии', 'url' => '/garantii/'],
    ['title' => 'Кейсы', 'url' => '/kejsy/'],
];

$company_info = [
    ['text' => 'ИП Яппаров Булат Зуфарович'],
    ['text' => 'ОГРНИП 321774600538560'],
    ['text' => 'ИНН 771372793813'],
    ['text' => 'Политика конфиденциальности', 'url' => '/politika-konfidencialnosti/'],
];

$contacts = [
    'phone' => '+7 (495) 445-60-80',
    'phone_link' => '+74954456080',
    'email' => 'info@uchetnalogipravo.ru',
    'address' => 'г. Москва, ул. Орджоникидзе, 11',
    'worktime' => 'Пн–Пт, 9:00–18:00',
];

$copyright = [
    'year_start' => '2009',
    'year_end' => date('Y'),
    'company' => 'Центр Профессиональной Бухгалтерии',
];
?>

</main><!-- .page -->

<footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <a href="<?php echo home_url('/'); ?>" class="footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/static/img/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            <div class="footer__copy">
                © <?php echo esc_html($copyright['year_start']); ?>–<?php echo esc_html($copyright['year_end']); ?> «<?php echo esc_html($copyright['company']); ?>». Все права защищены.
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__row">
                <!-- Меню -->
                <div class="footer__item">
                    <ul class="footer__list">
                        <?php foreach ($footer_menu as $item) : ?>
                            <li class="footer__li">
                                <a href="<?php echo esc_url(home_url($item['url'])); ?>" class="footer__link">
                                    <?php echo esc_html($item['title']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Реквизиты -->
                <div class="footer__item">
                    <ul class="footer__list">
                        <?php foreach ($company_info as $item) : ?>
                            <li class="footer__li">
                                <?php if (!empty($item['url'])) : ?>
                                    <a href="<?php echo esc_url(home_url($item['url'])); ?>" class="footer__link">
                                        <?php echo esc_html($item['text']); ?>
                                    </a>
                                <?php else : ?>
                                    <?php echo esc_html($item['text']); ?>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Контакты -->
                <div class="footer__item">
                    <ul class="footer__list">
                        <li class="footer__li">
                            <a href="tel:<?php echo esc_attr($contacts['phone_link']); ?>" class="footer__link footer__link_tel">
                                <?php echo esc_html($contacts['phone']); ?>
                            </a>
                        </li>
                        <li class="footer__li">
                            <a href="mailto:<?php echo esc_attr($contacts['email']); ?>" class="footer__link footer__link_email">
                                <?php echo esc_html($contacts['email']); ?>
                            </a>
                        </li>
                        <li class="footer__li">
                            <?php echo esc_html($contacts['address']); ?>
                        </li>
                        <li class="footer__li">
                            <?php echo esc_html($contacts['worktime']); ?>
                        </li>
                        <li class="footer__li">
                            <button data-popup="#order" class="footer__link">Заказать звонок</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper -->

<?php wp_footer(); ?>

</body>
</html>