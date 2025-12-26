<?php
/**
 * Template Name: Экспресс аудит бухгалтерии
 */

get_header();
?>

  <div class="page-wrapper">

    <section class="hero-section first">
      <div class="hero-section__container">

        <div class="hero-wrapper">

          <div class="hero-content">
            <h1 class="hero-title">
              Экспресс-аудит бухгалтерии за 48 часов
            </h1>

            <ul class="hero-features">
              <li class="feature-item">
              <span class="check-icon">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M5.57085 10.5L2.24585 7.175L3.0771 6.34375L5.57085 8.8375L10.9229 3.48541L11.7542 4.31666L5.57085 10.5Z"
                      fill="white"/>
                    </svg>
                </span>
                Найдём ошибки и предложим план восстановления
              </li>
              <li class="feature-item">
                <span class="check-icon">
                          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M5.57085 10.5L2.24585 7.175L3.0771 6.34375L5.57085 8.8375L10.9229 3.48541L11.7542 4.31666L5.57085 10.5Z"
                            fill="white"/>
                          </svg>
                      </span>
                Экстренная помощь при блокировке счёта / проверках
              </li>
              <li class="feature-item">
                      <span class="check-icon">
                              <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M5.57085 10.5L2.24585 7.175L3.0771 6.34375L5.57085 8.8375L10.9229 3.48541L11.7542 4.31666L5.57085 10.5Z"
                                fill="white"/>
                              </svg>
                          </span>
                Любые организациии и системы налогообложения
              </li>
            </ul>

            <div class="hero-buttons">
              <a href="#" class="btn btn_arr" type="button">Узнать стоимость</a>
              <a href="#" class="btn btn_play" type="button">Смотреть видео</a>
            </div>
          </div>

          <div class="hero-image-block">
            <img
              src="<?php echo get_template_directory_uri(); ?>/static/img/team/Oleg-main.png"
              alt="Олег Левин"
              class="hero-person-img"
            >

            <div class="person-card">
              <div class="person-name">Олег Левин - Руководитель направления</div>
              <ul class="person-info">
                <li class="info-point">Опыт 30+ лет</li>
                <li class="info-point">Аттестат аудитора</li>
                <br>
                <li class="info-point">Московский Юридический Институт</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="social-proof-row">
          <div class="proof-card">
            <div class="proof-header">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/profi_ru.png"
                    alt="Profi.ru" class="proof-logo-profi">
              <span class="rating-score">4.92</span>
              <div class="stars">★★★★★</div>
            </div>
            <div class="proof-footer">128 отзывов</div>
          </div>

          <div class="proof-card">
            <div class="proof-header">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/yandex.png"
                    alt="Яндекс" class="proof-logo-yandex">
              <span class="rating-score">5.0</span>
              <div class="stars stars-gold">★★★★★</div>
            </div>
            <div class="proof-footer">72 отзыва</div>
          </div>

          <div class="proof-card">
            <div class="kp-content">
              <span class="top-text"><span class="top-num">ТОП 7</span> Аутсорс компаний Москвы по версии</span>
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/kp.png" alt="KP.RU"
                    class="proof-logo-kp">
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="buh-vos-advantages-section">
      <div class="advantages-section__container">
        <h2 class="section-title buh-ip__title">
          Когда нужен срочный аудит бухучета?</span>
        </h2>

        <div class="scroll-indicator">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
          </svg>
        </div>

        <div class="advantages-grid">

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Сменился бухгалтер — старые данные пропали</h3>
            <p class="card-text">
              После увольнения бухгалтера остались долги, несданная отчётность или “дырки” в учёте.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Пришло требование из ИФНС</h3>
            <p class="card-text">
                Налоговая запросила пояснения или копии документов — мы проверим отчётность и подготовим ответы.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Блокировка счёта в банке</h3>
            <p class="card-text">
              Частая причина — несдача отчётности или ошибки в декларациях. Аудит поможет разблокировать счёт.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Не сходится учёт и налоги</h3>
            <p class="card-text">
              Разные цифры в 1С и отчётности. Проверим НДС, РСВ, 6-НДФЛ, остатки и исправим ошибки.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Перед сделкой, сменой юрлица или кредитом</h3>
            <p class="card-text">
              Проверяем бухгалтерию перед передачей бизнеса, чтобы исключить штрафные риски и доначисления.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Проверки налоговой</h3>
            <p class="card-text">
              Срочная подготовка к проверке — выявим и устраним ошибки до того, как это сделает налоговая.
            </p>
          </div>
        </div>

        <div class="voss-text-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\sign.svg" alt="Восклицательный знак" class="icon">

            <p class="voss-text">
                Если у вас одна из этих ситуаций — действовать нужно сейчас
            </p>
        </div>

      </div>
    </section>

    <section class="express-services-accordion-section">
      <div class="services-accordion__container">

        <h2 class="services-accordion__title">
          Что входит в аудит бухгалтерии?
        </h2>

        <h3 class="services-accordion__subtitle">
           Проверяем учёт по всем направлениям, чтобы выявить ошибки, неточности и риски штрафов.
        </h3>

        <div class="services-accordion">
          
          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Банк и касса</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Сверяем выписки, остатки, корректность кассовых операций и движения по расчётным счетам.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Продажи и закупки</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Проверяем первичные документы, счета-фактуры, книги покупок и продаж, корректность отражения НДС.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Налоги и отчётность</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Анализируем правильность расчётов по УСН/ОСНО, проверяем декларации, 6-НДФЛ, РСВ и отчёты по фондам.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Зарплата и взносы</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Проверяем начисления, удержания, соответствие сумм в отчётности и данных по сотрудникам.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Склад и материалы</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Анализируем движение ТМЦ, остатки, себестоимость, выявляем расхождения между учётом и реальностью.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Основные средства и НМА</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Проверяем амортизацию, карточки учёта, корректность отражения операций.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Сверки с ИФНС и фондами</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Проводим сверки по налогам и взносам, выявляем долги и переплаты.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>База 1С и первичные документы</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Проверяем корректность проводок, настройку плана счетов, наличие первички и соответствие данным отчётности.
              </div>
            </div>
          </div>
        </div>

        <p class="pricing__title">
            Анализируем бухгалтерию так, как это делает налоговая, но до того, как она придёт. После проверки вы получите понятный отчёт с результатами по каждому разделу. Ошибки, риски, и что нужно исправить в первую очередь.
        </p>

        <div class="pricing-points">
            <div class="point">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\round-check.svg"
                    alt="check" class="pricing-point__icon">
                <p class="pricing-point__text">
                    Отчёт с ошибками и нарушениями
                </p>
            </div>
            <div class="point">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\round-check.svg"
                    alt="check" class="pricing-point__icon">
                <p class="pricing-point__text">
                    План восстановления и оптимизации
                </p>
            </div>
            <div class="point">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\round-check.svg"
                    alt="check" class="pricing-point__icon">
                <p class="pricing-point__text">
                    Рекомендации по налогам и отчётности
                </p>
            </div>
            <div class="point">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\round-check.svg"
                    alt="check" class="pricing-point__icon">
                <p class="pricing-point__text">
                    Подробная смета со стоимостью работ по восстановлению
                </p>
            </div>
        </div>
      </div>
    </section>

    <section class="steps express">
      <div class="steps__section">

        <h2>
          Четыре простых шага и вы знаете <span class="text-blue">реальное состояние вашей бухгалтерии</span>
        </h2>

        <div class="step-cards__container">

          <div class="step-card">

            <div class="step-card__heading">
              <span>01 —</span> Заявка и короткий бриф
            </div>

            <div class="step_card__text">
              Оставляете заявку и отвечаете на 5 простых вопросов: форма бизнеса, система налогообложения, период проверки.
            </div>

            <svg width="45" height="30" viewBox="0 0 45 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.00023 10.3527C4.10606 21.9438 14.6574 27.3988 25.1203 24.5953C33.6243 22.3166 39.2776 15.9671 39.7759 8.24498"
                stroke="url(#paint0_linear_262_1346)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M32.5666 12.2476L39.7763 8.24518L43.7787 15.4549" stroke="url(#paint1_linear_262_1346)"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <defs>
                <linearGradient id="paint0_linear_262_1346" x1="24.4379" y1="24.7781" x2="19.2615" y2="5.4596"
                                gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F0572D"/>
                  <stop offset="1" stop-color="#CE441E"/>
                </linearGradient>
                <linearGradient id="paint1_linear_262_1346" x1="38.9251" y1="16.7555" x2="36.8545" y2="9.02807"
                                gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F0572D"/>
                  <stop offset="1" stop-color="#CE441E"/>
                </linearGradient>
              </defs>
            </svg>

          </div>
          <div class="step-card">

            <div class="step-card__heading">
              <span>02 —</span> Безопасная передача данных
            </div>

            <div class="step_card__text">
                Запрашиваем минимальный набор документов: выписки, отчётность, доступ к 1С или облаку.
            </div>

            <svg width="45" height="30" viewBox="0 0 45 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.00023 10.3527C4.10606 21.9438 14.6574 27.3988 25.1203 24.5953C33.6243 22.3166 39.2776 15.9671 39.7759 8.24498"
                stroke="url(#paint0_linear_262_1346)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M32.5666 12.2476L39.7763 8.24518L43.7787 15.4549" stroke="url(#paint1_linear_262_1346)"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <defs>
                <linearGradient id="paint0_linear_262_1346" x1="24.4379" y1="24.7781" x2="19.2615" y2="5.4596"
                                gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F0572D"/>
                  <stop offset="1" stop-color="#CE441E"/>
                </linearGradient>
                <linearGradient id="paint1_linear_262_1346" x1="38.9251" y1="16.7555" x2="36.8545" y2="9.02807"
                                gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F0572D"/>
                  <stop offset="1" stop-color="#CE441E"/>
                </linearGradient>
              </defs>
            </svg>

          </div>
          <div class="step-card">

            <div class="step-card__heading">
              <span>03 —</span> Анализ и сверки
            </div>

            <div class="step_card__text">
              Проверяем все участки учёта: банк, налоги, отчётность, НДС, зарплату, сверки с ИФНС и фондами.
            </div>

            <svg width="45" height="30" viewBox="0 0 45 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.00023 10.3527C4.10606 21.9438 14.6574 27.3988 25.1203 24.5953C33.6243 22.3166 39.2776 15.9671 39.7759 8.24498"
                stroke="url(#paint0_linear_262_1346)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M32.5666 12.2476L39.7763 8.24518L43.7787 15.4549" stroke="url(#paint1_linear_262_1346)"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <defs>
                <linearGradient id="paint0_linear_262_1346" x1="24.4379" y1="24.7781" x2="19.2615" y2="5.4596"
                                gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F0572D"/>
                  <stop offset="1" stop-color="#CE441E"/>
                </linearGradient>
                <linearGradient id="paint1_linear_262_1346" x1="38.9251" y1="16.7555" x2="36.8545" y2="9.02807"
                                gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F0572D"/>
                  <stop offset="1" stop-color="#CE441E"/>
                </linearGradient>
              </defs>
            </svg>

          </div>

          <div class="step-card" id="last-card">

            <div class="step-card__heading">
              <span>04 —</span> Отчёт и консультация
            </div>

            <div class="step_card__text">
              Вы получаете отчёт с выявленными ошибками, рисками и рекомендациями. Мы объясняем всё простыми словами и даём план восстановления.
            </div>

          </div>

        </div>

        <div class="subscribe-block">
          <p>
            Хотите начать прямо сегодня?
          </p>          
          <button class="btn btn_arr">Готов начать</button>
        </div>

      </div>
    </section>

    <section class="express-pricing-table-section">
      <div class="pricing-table__container">
        <h1 class="pricing__title">
            Сроки и стоимость аудита бухгалтерии
        </h1>

        <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\fire.svg"
            alt="fire" id="pricing__icon">

        <p class="pricing__subtitle">
            При заказе <span class="text-blue" style="text-decoration: underline #2d6281;">восстановления бухгалтерии</span> — аудит проводится бесплатно.
        </p>

        <div class="table-wrapper">

          <div class="table-header-cell">ИП/ООО</div>
          <div class="table-header-cell">Система налогообложения</div>
          <div class="table-header-cell">Период проверки</div>
          <div class="table-header-cell">Срок</div>
          <div class="table-header-cell">Стоимость аудита</div>

          <div class="table-cell">ИП</div>
          <div class="table-cell">УСН (доходы)</div>
          <div class="table-cell">До 6 месяцев</div>
          <div class="table-cell">24 часа</div>
          <div class="table-cell">~10 000руб.</div>

          <div class="table-cell">ООО</div>
          <div class="table-cell">УСН (доходы-расходы)</div>
          <div class="table-cell">До 12 месяцев</div>
          <div class="table-cell">48 часов</div>
          <div class="table-cell">~15 000руб.</div>

          <div class="table-cell">ООО</div>
          <div class="table-cell">ОСНО с НДС</div>
          <div class="table-cell">До 12 месяцев</div>
          <div class="table-cell">48 часов</div>
          <div class="table-cell">~20 000руб.</div>

          <div class="table-cell" id="cell-red">ИП или ООО</div>
          <div class="table-cell" id="cell-red">Любая</div>
          <div class="table-cell" id="cell-red">Срочная проверка перед проверкой ИФНС / блокировкой счёта</div>
          <div class="table-cell" id="cell-red">До 24 часов</div>
          <div class="table-cell" id="cell-red">Индивидуально</div>
        </div>

        <div class="industries-footer">
            <div class="footer-left">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\spheres3.png"
                    alt="sphere icons" class="sphere-img">
                <span class="spheres-text">120+ положительных отзывов <br>от бизнеса Москвы и МО</span>
            </div>
            <a href="<?php echo home_url('/otzivi/'); ?>" class="btn btn_arr">Все отзывы</a>
        </div>

      </div>
    </section>

    <section class="trust-money">

      <div class="money__container">
        <div class="money-wrapper">
          <div class="money-wrapper__left">
            <h3 class="money-wrapper__left-header">
              Отвечаем за результат деньгами!
            </h3>
            <p class="money-wrapper__left-body-text">
              Наша ответственность застрахована на 3 млн ₽. Если допустим ошибку — <span class="text-blue">убытки клиента компенсируются страховой компанией.</span>
            </p>
            <p class="money-wrapper__left-body-subtext">
              За 16 лет работы — 0 страховых случаев
            </p>
          </div>
          <div class="money-wrapper__right">
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/banner/money.png" alt="Пачка денег">
          </div>

        </div>
      </div>

    </section>

    <section class="express-tiles-cases">
      <div class="tiles-cases__container">

        <h2 class="case-title">
            Реальные результаты наших клиентов
        </h2>

        <div class="case-tiles__grid">

          <div class="case-card">
            <div class="case-card__case-number">
              <p>Кейс #1</p>
            </div>
            <img class="case-card__icon"
                 src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\online-white.svg"
                 alt="Online shops Icon">
            <h3 class="case-card__title">Интернет-магазин</h3>
            <div class="case-card__desc">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.75417 16.5005L3.52917 11.2755L4.83542 9.96921L8.75417 13.888L17.1646 5.47754L18.4708 6.78379L8.75417 16.5005Z"
                  fill="url(#paint0_linear_262_1127)"/>
                <defs>
                  <linearGradient id="paint0_linear_262_1127" x1="11.0372" y1="16.5005" x2="11.0372" y2="5.47754"
                                  gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F0572D"/>
                    <stop offset="1" stop-color="#CE441E"/>
                  </linearGradient>
                </defs>
              </svg>
              <p>
                Снизили задолженность по налогам на <span class="text-blue" style="font-weight: 590">3,7 млн ₽ (–88%)</span>
              </p>
            </div>
          </div>

          <div class="case-card">
            <div class="case-card__case-number">
              <p>Кейс #2</p>
            </div>
            <img class="case-card__icon"
                 src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\online-white.svg"
                 alt="Online shops Icon">
            <h3 class="case-card__title">Строительная компания</h3>
            <div class="case-card__desc">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.75417 16.5005L3.52917 11.2755L4.83542 9.96921L8.75417 13.888L17.1646 5.47754L18.4708 6.78379L8.75417 16.5005Z"
                  fill="url(#paint0_linear_262_1127)"/>
                <defs>
                  <linearGradient id="paint0_linear_262_1127" x1="11.0372" y1="16.5005" x2="11.0372" y2="5.47754"
                                  gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F0572D"/>
                    <stop offset="1" stop-color="#CE441E"/>
                  </linearGradient>
                </defs>
              </svg>
              <p>
                Вернули переплаченные налоги: <span class="text-blue" style="font-weight: 590">205 000 ₽</span>
              </p>
            </div>
          </div>

          <div class="case-card">
            <div class="case-card__case-number">
              <p>Кейс #3</p>
            </div>
            <img class="case-card__icon"
                 src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\cafe-white.svg"
                 alt="Online shops Icon">
            <h3 class="case-card__title">Строительная компания</h3>
            <div class="case-card__desc">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.75417 16.5005L3.52917 11.2755L4.83542 9.96921L8.75417 13.888L17.1646 5.47754L18.4708 6.78379L8.75417 16.5005Z"
                  fill="url(#paint0_linear_262_1127)"/>
                <defs>
                  <linearGradient id="paint0_linear_262_1127" x1="11.0372" y1="16.5005" x2="11.0372" y2="5.47754"
                                  gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F0572D"/>
                    <stop offset="1" stop-color="#CE441E"/>
                  </linearGradient>
                </defs>
              </svg>
              <p>
                Вернули переплаченные налоги: <span class="text-blue" style="font-weight: 590">205 000 ₽</span>
              </p>
            </div>
          </div>

          <div class="case-card">
            <div class="case-card__case-number">
              <p>Кейс #4</p>
            </div>
            <img class="case-card__icon"
                 src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\online-white.svg"
                 alt="Online shops Icon">
            <h3 class="case-card__title">Интернет-магазин</h3>
            <div class="case-card__desc">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.75417 16.5005L3.52917 11.2755L4.83542 9.96921L8.75417 13.888L17.1646 5.47754L18.4708 6.78379L8.75417 16.5005Z"
                  fill="url(#paint0_linear_262_1127)"/>
                <defs>
                  <linearGradient id="paint0_linear_262_1127" x1="11.0372" y1="16.5005" x2="11.0372" y2="5.47754"
                                  gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F0572D"/>
                    <stop offset="1" stop-color="#CE441E"/>
                  </linearGradient>
                </defs>
              </svg>
              <p>
                Снизили задолженность по налогам на <span class="text-blue" style="font-weight: 590">3,7 млн ₽ (–88%)</span>
              </p>
            </div>
          </div>

          <div class="case-card">
            <div class="case-card__case-number">
              <p>Кейс #2</p>
            </div>
            <img class="case-card__icon"
                 src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\online-white.svg"
                 alt="Online shops Icon">
            <h3 class="case-card__title">Строительная компания</h3>
            <div class="case-card__desc">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.75417 16.5005L3.52917 11.2755L4.83542 9.96921L8.75417 13.888L17.1646 5.47754L18.4708 6.78379L8.75417 16.5005Z"
                  fill="url(#paint0_linear_262_1127)"/>
                <defs>
                  <linearGradient id="paint0_linear_262_1127" x1="11.0372" y1="16.5005" x2="11.0372" y2="5.47754"
                                  gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F0572D"/>
                    <stop offset="1" stop-color="#CE441E"/>
                  </linearGradient>
                </defs>
              </svg>
              <p>
                Вернули переплаченные налоги: <span class="text-blue" style="font-weight: 590">205 000 ₽</span>
              </p>
            </div>
          </div>

          <div class="case-card">
            <div class="case-card__case-number">
              <p>Кейс #3</p>
            </div>
            <img class="case-card__icon"
                 src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\cafe-white.svg"
                 alt="Online shops Icon">
            <h3 class="case-card__title">Строительная компания</h3>
            <div class="case-card__desc">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.75417 16.5005L3.52917 11.2755L4.83542 9.96921L8.75417 13.888L17.1646 5.47754L18.4708 6.78379L8.75417 16.5005Z"
                  fill="url(#paint0_linear_262_1127)"/>
                <defs>
                  <linearGradient id="paint0_linear_262_1127" x1="11.0372" y1="16.5005" x2="11.0372" y2="5.47754"
                                  gradientUnits="userSpaceOnUse">
                    <stop stop-color="#F0572D"/>
                    <stop offset="1" stop-color="#CE441E"/>
                  </linearGradient>
                </defs>
              </svg>
              <p>
                Вернули переплаченные налоги: <span class="text-blue" style="font-weight: 590">205 000 ₽</span>
              </p>
            </div>
          </div>
      
        </div>

        <div class="industries-footer">
          <div class="footer-left">
            <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\spheres2.png"
                 alt="sphere icons" class="sphere-img">
            <span class="spheres-text">Еще более 40 реальных результатов наших клиентов</span>
          </div>
          <a href="<?php echo home_url('/buhgalterskie-keysi/'); ?>" class="btn btn_arr">Все кейсы</a>
        </div>
      </div>
    </section>

    <section class="team-section">
      <div class="team-section__container">
        <div class="team-header">
          <h2 class="team-title">Команда экспертов</h2>
          <p class="team-subtitle">Сильные специалисты с опытом работы от 15 до 30 лет</p>
        </div>

        <div class="slider-navigation team-nav">
          <button class="nav-btn team-prev-btn" aria-label="Назад">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M10 19L3 12L10 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 12H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <button class="nav-btn team-next-btn" aria-label="Вперед">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M14 5L21 12L14 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12H3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
        </div>

        <div class="team-grid" id="teamScrollArea">
            
          <div class="team-card team-card-large">
            <picture class="card__person-img-wrapper">
              <source srcset="<?php echo get_template_directory_uri(); ?>/static/img/team/bulat-avatar-small.png" media="(max-width: 796px)">
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/team/Bulat.png" alt="Булат Яппаров" class="card__person-img">
            </picture>

            <div class="team-card__info">
              <div class="card__person-name">Булат Яппаров</div>
              <div class="card__person-role">Директор ЦПБ</div>
              <div class="card__divider"></div>
              <p class="card__person-desc">
                30 лет в бухгалтерии и налогах. Эксперт по налоговому планированию.
              </p>
            </div>
          </div>

          <div class="team-card">
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/team/Alina.png" alt="Алина Яппарова" class="card__person-img">
            
            <div class="team-card__info">
              <div class="card__person-name">Алина Яппарова</div>
              <div class="card__person-role">Главный бухгалтер</div>
              <div class="card__divider"></div>
              <p class="card__person-desc">
                Два высших образования, опыт работы более 20 лет, в том числе в крупных и известных компаниях.
              </p>
            </div>
          </div>

          <div class="team-card">
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/team/Alexander.png" alt="Александр Сумин" class="card__person-img">
            
            <div class="team-card__info">
              <div class="card__person-name">Александр Сумин</div>
              <div class="card__person-role">Юрист</div>
              <div class="card__divider"></div>
              <p class="card__person-desc">
                Российский государственный университет правосудия. Опыт работы более 15 лет.
              </p>
            </div>
          </div>

          <div class="team-card">
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/team/Elena.png" alt="Елена Колисниченко" class="card__person-img">
            
            <div class="team-card__info">
              <div class="card__person-name">Елена Колисниченко</div>
              <div class="card__person-role">Финансовый директор</div>
              <div class="card__divider"></div>
              <p class="card__person-desc">
                Московский государственный университет имени М.В. Ломоносова. Опыт работы более 25 лет.
              </p>
            </div>
          </div>

          <div class="team-card">
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/team/Oleg.png" alt="Олег Левин" class="card__person-img">
            
            <div class="team-card__info">
              <div class="card__person-name">Олег Левин</div>
              <div class="card__person-role">Внутренний аудитор</div>
              <div class="card__divider"></div>
              <p class="card__person-desc">
                Московский юридический институт. Аттестат аудитора. Опыт работы более 30 лет.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="buh-ip-accordion-faq express">
      <div class="faq-accordion__container">

          <h2 class="faq-accordion__title">
            Частые вопросы об экспресс-аудите бухгалтерии
          </h2>

          <h3 class="faq-accordion__subtitle">
            Мы собрали ответы на самые важные вопросы. Если не нашли нужное — оставьте заявку, и мы проконсультируем вас лично.
          </h3>

        <div class="faq-accordion">
          
          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Что такое экспресс-аудит и чем он отличается от обычного аудита?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Экспресс-аудит — это быстрая проверка состояния бухгалтерии без формальной проверки всех документов. Мы проводим диагностику ключевых участков: налоги, отчётность, банк, НДС, зарплата. Результат — отчёт и план восстановления уже через 48 часов.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Какие документы нужны для аудита?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  От 4 000 ₽/мес за нулевую отчётность. Цена фиксируется в договоре и не меняется.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Это безопасно? Что с конфиденциальностью?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  От 4 000 ₽/мес за нулевую отчётность. Цена фиксируется в договоре и не меняется.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Сколько времени занимает проверка?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  От 4 000 ₽/мес за нулевую отчётность. Цена фиксируется в договоре и не меняется.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Что будет после аудита?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  От 4 000 ₽/мес за нулевую отчётность. Цена фиксируется в договоре и не меняется.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Если я закажу аудит, это не обяжет меня к дальнейшему сотрудничеству?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  От 4 000 ₽/мес за нулевую отчётность. Цена фиксируется в договоре и не меняется.
                </p>
              </div>
            </div>
          </div>

        </div>
    </section>

    <section class="buh-servises-short">
      <div class="buh-servises-short__container">
        <h1 class="buh-servises-short__title">
            Экспресс-аудит бухгалтерии
        </h1>

        <div class="buh-servises-short__text-wrapper" id="seo-text-wrapper">
            <p class="buh-servises-short__text">
                За 48 часов специалисты Центра Профессиональной Бухгалтерии проводят анализ отчётности, 1С, банковских операций и налоговых расчётов, выявляют ошибки и риски штрафов. Мы восстанавливаем бухгалтерию за любой период — от одного месяца до нескольких лет, даже если часть документов утеряна. Специалисты Центра Профессиональной Бухгалтерии проводят аудит, проверяют корректность данных в 1С, сверяют расчёты с ИФНС и фондами, подготавливают и сдают отчётность.
            </p>
        </div>

        <button class="buh-servises-short__expand-btn" id="seo-expand-btn">
            <span>Развернуть</span>
        </button>
      </div>
    </section>

  </div>
<?php
get_footer();