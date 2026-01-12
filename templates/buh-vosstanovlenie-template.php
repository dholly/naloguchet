<?php
/**
 * Template Name: Восстановление бух. учёта
 */

get_header();
?>

  <div class="page-wrapper">

    <section class="hero-section first">
      <div class="hero-section__container">

        <div class="hero-wrapper">

          <div class="hero-content">
            <h1 class="hero-title">
              Восстановление бухгалтерского учёта под ключ
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
                Восстанавливаем любой период — от 1 до 36 месяцев
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
                Экспресс-аудит и смета за 48 часов
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
                Страховка профессиональной ответственности — 3 млн ₽
              </li>
            </ul>

            <div class="hero-buttons">
              <a href="/kalkulyator/" class="btn btn_arr" type="button">Узнать стоимость</a>
              <a href="#" class="btn btn_play" type="button">Смотреть видео</a>
            </div>
          </div>

          <div class="hero-image-block">
            <img
              src="<?php echo get_template_directory_uri(); ?>/static/img/team/Zhanna-main.png"
              alt="Жанна Васильева"
              class="hero-person-img"
            >

            <div class="person-card">
              <div class="person-name">Жанна Васильева - Руководитель направления</div>
              <ul class="person-info">
                <li class="info-point">20+ лет опыта</li>
                <br>
                <li class="info-point">Уральский Экономический Университет</li>
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
          Когда требуется восстановление бухгалтерского учёта?</span>
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
            <h3 class="advantage-card__title buh-ip__card-title">Не сдавалась отчётность 3–12 месяцев</h3>
            <p class="card-text">
                Счёт заблокирован, приходят требования от налоговой — срочно нужно восстановление.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Ошибки и расхождения по налогам</h3>
            <p class="card-text">
              Разные данные в 1С и декларациях, НДС не сходится, требуют уточнения.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">ИФНС или банк запросил документы</h3>
            <p class="card-text">
              Проверка, камеральная, блокировка счёта — нужно срочно подготовить полный пакет учёта.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Потеряна часть первички или нет доступа к 1С</h3>
            <p class="card-text">
              Восстанавливаем даже при неполных данных: сверки, запросы в банки и контрагентам.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Смена юрлица, реорганизация, переход на другую систему налогообложения</h3>
            <p class="card-text">
              Нужно корректно закрыть старый период и передать остатки.
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

    <section class="buh-voss-services-accordion-section">
      <div class="services-accordion__container">

          <h2 class="services-accordion__title">
            Что входит в услугу восстановление бухгалтерского учёта?
          </h2>

          <h3 class="services-accordion__subtitle">
            Мы восстанавливаем учёт за <span class="text-blue">любой период</span> — от 1 месяца до нескольких лет. Даже если часть документов утеряна — запрашиваем данные у банков, контрагентов и через ИФНС.
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
                Проверяем выписки, сверяем остатки, восстанавливаем кассовые ордера и движение денежных средств.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Покупки и продажи</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Восстанавливаем первичные документы, счета-фактуры, книги покупок/продаж, НДС.
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
                Пересчитываем налоги (УСН, ОСНО, НДС, страховые), формируем и сдаём корректные декларации.
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
                Пересчитываем начисления, формируем отчёты по ФСС/ПФР, корректируем ошибки в 6-НДФЛ и РСВ.
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
                Восстанавливаем движение ТМЦ, инвентаризируем остатки, настраиваем учёт МПЗ и себестоимости.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Основные средства</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Восстанавливаем карточки ОС, амортизацию, учёт НМА и лизинга.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Кадровый учёт</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Формируем недостающие приказы, трудовые договоры, личные карточки.
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Сверки с контрагентами и ИФНС</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                Проводим сверки по актам, уточняем долги и переплаты, восстанавливаем корректные сальдо.
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="voss-steps">
      <div class="steps__section">

        <h2>
          Как мы восстанавливаем бухгалтерию?
        </h2>

        <div class="step-cards__container">

          <div class="step-card">

            <div class="step-card__heading">
              <span>01 —</span> Экспресс-аудит (до 48 часов)
            </div>

            <div class="step_card__text">
              <span class="text-blue">Результат:</span> вы понимаете, что именно не в порядке и сколько потребуется на исправление.
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
              <span>02 —</span> План работ и фиксированная смета
            </div>

            <div class="step_card__text">
              <span class="text-blue">Результат:</span> вы знаете точную стоимость и дату, когда учёт будет приведён в порядок.
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
              <span>03 —</span> Восстановление и сверки
            </div>

            <div class="step_card__text">
              <span class="text-blue">Результат:</span> учёт восстановлен и готов к сдаче, все риски и расхождения закрыты.
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
              <span>04 —</span> Сдача отчётности и сопровождение
            </div>

            <div class="step_card__text">
              <span class="text-blue">Результат:</span> полный порядок в учёте и уверенность перед проверками.
            </div>

          </div>

        </div>

        <div class="subscribe-block">
          <p>
            После восстановления вы получаете полный комплект учётных данных, готовых к сдаче отчётности и проверкам
          </p>
        </div>

      </div>
    </section>

    <section class="vos-pricing-table-section">
      <div class="pricing-table__container">
        <h1 class="pricing__title">
            Сроки и стоимость восстановления бухгалтерии
        </h1>

        <div class="pricing__line"></div>

        <p class="pricing__subtitle">
            Цена и сроки индивидуальны и зависят от:
        </p>

        <div class="pricing-points">
            <div class="point">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\round-check.svg"
                    alt="check" class="pricing-point__icon">
                <p class="pricing-point__text">
                    Периода, который нужно восстановить
                </p>
            </div>
            <div class="point">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\round-check.svg"
                    alt="check" class="pricing-point__icon">
                <p class="pricing-point__text">
                    Типа организации и системы налогообложения
                </p>
            </div>
            <div class="point">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\round-check.svg"
                    alt="check" class="pricing-point__icon">
                <p class="pricing-point__text">
                    Наличия документов
                </p>
            </div>
            <div class="point">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\round-check.svg"
                    alt="check" class="pricing-point__icon">
                <p class="pricing-point__text">
                    Количества операций в месяц
                </p>
            </div>
            <div class="point">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\round-check.svg"
                    alt="check" class="pricing-point__icon">
                <p class="pricing-point__text">
                    Наличия требований от ИФНС
                </p>
            </div>
        </div>

        <div class="scroll-indicator">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
          </svg>
        </div>

        <div class="table-wrapper">

          <div class="table-header-cell">ИП/ООО</div>
          <div class="table-header-cell">Система налогообложения</div>
          <div class="table-header-cell">НДС</div>
          <div class="table-header-cell">Сколько месяцев без отчётности</div>
          <div class="table-header-cell">Срок восстановления</div>
          <div class="table-header-cell">Стоимость</div>

          <div class="table-cell">ИП</div>
          <div class="table-cell">УСН (доходы)</div>
          <div class="table-cell">Нет</div>
          <div class="table-cell">До 3х</div>
          <div class="table-cell">5-7 дней</div>
          <div class="table-cell">~20 000руб.</div>

          <div class="table-cell">ИП</div>
          <div class="table-cell">УСН (доходы-расходы)</div>
          <div class="table-cell">Нет</div>
          <div class="table-cell">До 6</div>
          <div class="table-cell">7-10 дней</div>
          <div class="table-cell">~30 000руб.</div>

          <div class="table-cell">ООО</div>
          <div class="table-cell">УСН</div>
          <div class="table-cell">Нет</div>
          <div class="table-cell">До 6</div>
          <div class="table-cell">10-14 дней</div>
          <div class="table-cell">~30 000руб.</div>

          <div class="table-cell">ООО</div>
          <div class="table-cell">ОСНО</div>
          <div class="table-cell">НДС есть</div>
          <div class="table-cell">До 12</div>
          <div class="table-cell">15-25 дней</div>
          <div class="table-cell">~60 000руб.</div>

          <div class="table-cell">ООО</div>
          <div class="table-cell">ОСНО</div>
          <div class="table-cell">НДС есть</div>
          <div class="table-cell">До 24</div>
          <div class="table-cell">25-40 дней</div>
          <div class="table-cell">~90 000руб.</div>

          <div class="table-cell" id="cell-red">ИП или ООО</div>
          <div class="table-cell" id="cell-red">Любая</div>
          <div class="table-cell" id="cell-red">Есть задолженность или требования ИФНС</div>
          <div class="table-cell" id="cell-red">Любой</div>
          <div class="table-cell" id="cell-red">3-10 дней (Экстренно)</div>
          <div class="table-cell" id="cell-red">По запросу</div>

        </div>

        <div class="subscribe-block">
          <p>Хотите узнать, сколько займёт восстановление именно в вашем случае?</p>

          <button class="btn btn_arr">Бесплатная консультация</button>
        </div>
      </div>
    </section>

    <section class="voss-garants-points">
        <div class="garants-points__container">
            <h1 class="garants-points__title">
                Чтобы начать, нужно всего три шага
            </h1>

            <div class="garants-points__block">
                <span class="garants-points__num">01</span>
                <h3 class="garants-points__point">
                    Предоставить доступы и документы
                </h3>
                <p class="garants-points__text">
                    Доступ к 1С (или облачной базе), выписки по счетам за нужный период, первичные документы (счета, акты, накладные), отчётность, если часть уже сдавалась.
                </p>

                <p class="garants-points__bottom_text">
                    Если чего-то не хватает — мы поможем запросить у контрагентов, банка или через ИФНС.
                </p>

            </div>

            <div class="garants-points__block">
                <span class="garants-points__num">02</span>
                <h3 class="garants-points__point">
                    Подписать договор и NDA
                </h3>
                <p class="garants-points__text">
                    После экспресс-аудита согласовываем смету и сроки. Всё фиксируется в договоре и соглашении о конфиденциальности. Можно подписать дистанционно через ЭДО.
                </p>

                <p class="garants-points__bottom_text">
                    Вы получаете прозрачные условия и гарантию безопасности данных.
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

                <p class="garants-points__bottom_text">
                    Через 1–2 дня после передачи данных вы уже получите первый отчёт о состоянии учёта.
                </p>
            </div>

            <div class="subscribe-block">
            <p>Хотите начать прямо сегодня?</p>

            <button class="btn btn_arr">Готов начать</button>
            </div>
        </div>
    </section>

    <section class="reviews">
      <div class="reviews__container">

        <div class="cases-badge">
          <p>• Реальные отзывы</p>
        </div>

        <div class="reviews-wrapper">

          <div class="reviews-wrapper__title">
            <h2 class="reviews__title">
            Что говорят наши клиенты?
            </h2>
          </div>

          <div class="reviews-wrapper__comp">
            <div class="companies-card">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/yandex-maps.png"
                    alt="Яндекс Карты">
              </div>
              <div class="card__score">
                <span class="rating__score">Рейтинг 5.0</span>
                <span class="rating__stars">★★★★★</span>
              </div>

            </div>
            <div class="companies-card">
              <div class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/profi-ru-2.png"
                      alt="Profi.ru">
              </div>
              <div class="card__score">
                <span class="rating__score">Рейтинг 4.92</span>
                <span class="rating__stars">★★★★★</span>
              </div>
            </div>
          </div>

          <div class="reviews-tiles" id="reviewsScrollArea">

            <div class="reviews__tile">
              <div class="tile__bage-date">
                <p>23/05/25</p>
              </div>
              <p class="tile__body-text">
                Перешли из штатного бухгалтера в ЦПБ. Экономим более 500 тыс ₽ в год, отчётность всегда вовремя. Удобно, что можно работать полностью онлайн....
              </p>
              <p class="tile__person-date">
                Анна, Москва (интернет-магазин)
              </p>
              <a href="#" class="tile__review-link">Смотреть полностью</a>
            </div>

            <div class="reviews__tile">
              <div class="tile__bage-date">
                <p>23/05/25</p>
              </div>
              <p class="tile__body-text">
                Перешли из штатного бухгалтера в ЦПБ. Экономим более 500 тыс ₽ в год, отчётность всегда вовремя. Удобно, что можно работать полностью онлайн....
              </p>
              <p class="tile__person-date">
                Анна, Москва (интернет-магазин)
              </p>
              <a href="#" class="tile__review-link">Смотреть полностью</a>
            </div>

            <div class="reviews__tile">
              <div class="tile__bage-date">
                <p>23/05/25</p>
              </div>
              <p class="tile__body-text">
                Перешли из штатного бухгалтера в ЦПБ. Экономим более 500 тыс ₽ в год, отчётность всегда вовремя. Удобно, что можно работать полностью онлайн....
              </p>
              <p class="tile__person-date">
                Анна, Москва (интернет-магазин)
              </p>
              <a href="#" class="tile__review-link">Смотреть полностью</a>
            </div>

          </div>

          <div class="slider-navigation">
            <button class="nav-btn prev-btn" aria-label="Назад">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M10 19L3 12L10 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 12H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <button class="nav-btn next-btn" aria-label="Вперед">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M14 5L21 12L14 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12H3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
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
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/banner/stack.png" alt="Пачка денег">
          </div>

        </div>
      </div>

    </section>

    <section class="buh-ip-tiles-cases">
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

    <section class="steps">
      <div class="steps__section">

        <h2>
          Начать с нами просто — всего 4 шага
        </h2>

        <p class="heading-p">
          Запускаем бухгалтерское обслуживание <span>за 1–3 дня после заявки</span>
        </p>

        <div class="step-cards__container">

          <div class="step-card">

            <div class="step-card__heading">
              <span>01 —</span> Заявка
            </div>

            <div class="step_card__text">
              Оставьте контакты или позвоните
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
              <span>02 —</span> Диагностика
            </div>

            <div class="step_card__text">
              Проводим экспресс-аудит и подбираем тариф
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
              <span>03 —</span> Договор
            </div>

            <div class="step_card__text">
              Подписываем и подключаем ЭДО
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
              <span>04 —</span> Старт
            </div>

            <div class="step_card__text">
              Ведём бухгалтерию, сдаём отчётность, защищаем от штрафов
            </div>

          </div>

        </div>

        <div class="subscribe-block">
          <p>Оставьте заявку на
            бесплатную консультацию!</p>

          <?php echo do_shortcode('[fluentform_modal css_class="btn btn_arr" form_id="3" btn_text="Нужна консультация"]'); ?>
        </div>

      </div>
    </section>

    <section class="buh-ip-accordion-faq">
      <div class="faq-accordion__container">

          <h2 class="faq-accordion__title">
            Ответы на частые вопросы
          </h2>

          <h3 class="buh-ip-faq-accordion__subtitle">
            Мы собрали ответы на самые важные вопросы. Если не нашли нужное — оставьте заявку, и мы проконсультируем вас лично.
          </h3>

        <div class="faq-accordion">

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Можно ли восстановить учёт, если часть документов утеряна?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Да. Мы восстанавливаем даже при неполных данных. Запрашиваем копии документов у банков, контрагентов, ИФНС и ФСС. Главное — чтобы сохранились ключевые данные по операциям и реквизиты компании.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Сколько по времени занимает восстановление?</h3>
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
              <h3>Можно ли начать без доступа к 1С?</h3>
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
              <h3>Как вы обеспечиваете конфиденциальность данных?</h3>
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
              <h3>Что делать, если уже пришло требование из налоговой?</h3>
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
              <h3>Фиксируется ли стоимость в договоре?</h3>
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
              <h3>Можно ли потом передать ведение бухгалтерии вам?</h3>
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
            Восстановление бухгалтерского учёта в Москве
        </h1>

        <div class="buh-servises-short__text-wrapper" id="seo-text-wrapper">
            <p class="buh-servises-short__text">
                Мы восстанавливаем бухгалтерию за любой период — от одного месяца до нескольких лет, даже если часть документов утеряна. Специалисты Центра Профессиональной Бухгалтерии проводят аудит, проверяют корректность данных в 1С, сверяют расчёты с ИФНС и фондами, подготавливают и сдают отчётность.
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