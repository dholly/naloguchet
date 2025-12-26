<?php
/*
Template Name: Гарантии
*/

get_header(); 
?>

    <section class="garants-section">
        <div class="garants-section__container">     
            <h1 class="garants-section__title">
                Наши гарантии — Ваша уверенность
            </h1>

            <p class="garants-section__subtitle">
                Отвечаем за работу документально и финансово
            </p>

            <div class="garants-section__tiles-wrapper">
                <div class="garants-section__tile">
                    <div class="garants-section__tile-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\paper.svg"
                            alt="Гарантия 1" class="paper-icon">
                    </div>
                    <p class="garants-section__tile-text">
                        Договор с понятными обязательствами и ответственностью
                    </p>
                </div>

                <div class="garants-section__tile">
                    <div class="garants-section__tile-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\scan.svg"
                            alt="Гарантия 2" class="scan-icon">
                    </div>
                    <p class="garants-section__tile-text">
                        Финансовая страховка на 3 млн ₽
                    </p>
                </div>

                <div class="garants-section__tile">
                    <div class="garants-section__tile-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\shield.svg"
                            alt="Гарантия 3" class="shield-icon">
                    </div>
                    <p class="garants-section__tile-text">
                        Полная конфиденциальность (NDA)
                    </p>
                </div>

                <div class="garants-section__tile">
                    <div class="garants-section__tile-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\briefcase.svg"
                            alt="Гарантия 4" class="briefcase-icon">
                    </div>
                    <p class="garants-section__tile-text">
                        Личная ответственность руководителя и репутация
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="garants-points">
        <div class="garants-points__container">
            <h1 class="garants-points__title">
                Каждый пункт <span style="color: #2d6281">закреплён в договоре</span>
            </h1>
            <p class="garants-points__subtitle">
                Если возникает ситуация, где мы виноваты — клиент получает компенсацию. Если государство меняет правила — мы адаптируем процессы и предупреждаем заранее.
            </p>

            <div class="garants-points__block">
                <span class="garants-points__num">01</span>
                <h3 class="garants-points__point">
                    Финансовая ответственность
                </h3>
                <p class="garants-points__text">
                    Если по нашей вине возникнет ошибка или штраф — ущерб компенсируется страховой компанией.
                </p>
            </div>

            <div class="garants-points__block">
                <span class="garants-points__num">02</span>
                <h3 class="garants-points__point">
                    Конфиденциальность и безопасность данных
                </h3>
                <p class="garants-points__text">
                    Все сотрудники подписывают строгие соглашения о неразглашении (NDA), а работа ведётся только в защищённых контурах 1С и корпоративных CRM.
                </p>
            </div>

            <div class="garants-points__block">
                <span class="garants-points__num">03</span>
                <h3 class="garants-points__point">
                    Непрерывность работы
                </h3>
                <p class="garants-points__text">
                    В ЦПБ действует система резервирования бухгалтеров — если специалист уходит в отпуск или на больничный, его замещает коллега, полностью погружённый в процесс.
                </p>
            </div>

            <div class="garants-points__block">
                <span class="garants-points__num">04</span>
                <h3 class="garants-points__point">
                    Прозрачные условия и фиксированные цены
                </h3>
                <p class="garants-points__text">
                    В договоре ясно прописаны условия сотрудничества. Фиксированные ежемесячные ставки, никаких скрытых платежей. Всё, что не входит в тариф, согласуется заранее.
                </p>
            </div>

            <div class="garants-points__block">
                <span class="garants-points__num">05</span>
                <h3 class="garants-points__point">
                    Юридическая поддержка и защита от ФНС
                </h3>
                <p class="garants-points__text">
                    При обращении из ФНС мы берём коммуникацию на себя — без вашего участия.
                </p>
            </div>
        </div>
    </section>

    <section class="garants-relations">
        <div class="garants-relations__container">
            <h1 class="garants-relations__title">
                Гарантия человеческого отношения
            </h1>
            <div class="relations-block__wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\center\Alina-Yapparova-2.png"
                    alt="Цитата" class="relations-block__photo">
                <div class="relations-block__body">
                    <div class="relations-block__top">
                        <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\quotes.svg"
                            alt="Цитата" class="quote-icon">
                        <p class="relations-block__text">Мы не только страхуем ответственность, но и отвечаем репутацией и отношением. Никогда не оставляем клиента с проблемой один на один — разбираемся до конца, независимо от сложности. Работаем честно, по-человечески, без формализма.</p>
                    </div>
                    <div class="relations-block__bottom">
                        <p class="relations-block__name">— Алина Яппарова</p>
                        <p class="relations-block__prof">Главный бухгалтер</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>