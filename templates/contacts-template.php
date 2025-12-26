<?php
/* Template Name: Контакты */
get_header();

// TODO: Можно перенести в ACF options
$contacts_data = [
    'phone' => '+7 495 445-60-80',
    'phone_link' => '+74954456080',
    'email' => 'info@uchetnalogipravo.ru',
    'schedule' => 'ПН-ПТ: с 9:00 до 18:00',
    'address' => 'г. Москва, ул. Орджоникидзе, 11',
    'metro' => 'Ст. Ленинский проспект',
];
?>

    <section class="page__contacts contacts first">
        <div class="contacts__container">
            <h1 class="contacts__title title title_center">Контакты</h1>
            <div class="contacts__text text">
                Работаем удаленно, пожалуйста согласовывайте визиты в офис заранее. Для обмена документами
                используем ЭДО. Для общения видеосвязь. При необходимости сами приедем к вам в офис.
            </div>
            <div class="contacts__items">
                <a href="tel:<?php echo esc_attr($contacts_data['phone_link']); ?>" class="contacts__item">
                    <div class="contacts__badge">
                        <div class="contacts__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/tel.svg" alt="Phone">
                        </div>
                        <span>Телефон</span>
                    </div>
                    <div class="contacts__info"><?php echo esc_html($contacts_data['phone']); ?></div>
                </a>
                <a href="mailto:<?php echo esc_attr($contacts_data['email']); ?>" class="contacts__item">
                    <div class="contacts__badge">
                        <div class="contacts__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/email.svg" alt="Email">
                        </div>
                        <span>Email</span>
                    </div>
                    <div class="contacts__info"><?php echo esc_html($contacts_data['email']); ?></div>
                </a>
                <div class="contacts__item">
                    <div class="contacts__badge">
                        <div class="contacts__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/time.svg" alt="Time">
                        </div>
                        <span>График работы</span>
                    </div>
                    <div class="contacts__info"><?php echo esc_html($contacts_data['schedule']); ?></div>
                </div>
                <div class="contacts__item contacts__item_big">
                    <div class="contacts__badge">
                        <div class="contacts__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/geo-2.svg" alt="Geo">
                        </div>
                        <span>Адрес</span>
                    </div>
                    <div class="contacts__info"><?php echo esc_html($contacts_data['address']); ?></div>
                </div>
                <div class="contacts__item contacts__item_big">
                    <div class="contacts__badge">
                        <div class="contacts__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/metro.svg" alt="Metro">
                        </div>
                        <span>Метро</span>
                    </div>
                    <div class="contacts__info"><?php echo esc_html($contacts_data['metro']); ?></div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>