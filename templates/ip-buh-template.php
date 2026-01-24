<?php
/**
 * Template Name: Бухгалтерия для ИП
 */

get_header();
?>

  <div class="page-wrapper">

    <section class="hero-section first">
      <div class="hero-section__container">

        <div class="hero-wrapper">

          <div class="hero-content">
            <h1 class="hero-title buh-ip-main-title">
              Бухгалтерские услуги для ИП отчётность, налоги, спокойствие
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
                Плавный перехват бухгалтерии
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
                Персональный бухгалтер, не робот
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
                Фикс-цена без скрытых платежей
              </li>
            </ul>

            <div class="hero-buttons">
              <a href="/kalkulyator/" class="btn btn_arr" type="button">Узнать стоимость</a>
              <a href="<?php echo esc_url(convert_to_embed('https://rutube.ru/video/c040db92724a5a77fd74480167107e8f/')); ?>"
                 class="btn btn_play glightbox">
                Смотреть видео
              </a>
            </div>
          </div>

          <div class="hero-image-block">
            <img
              src="<?php echo get_template_directory_uri(); ?>/static/img/team/Alina-main.png"
              alt="Алина Яппарова"
              class="hero-person-img"
            >

            <div class="person-card">
              <div class="person-name">Алина Яппарова - Руководитель направления</div>
              <ul class="person-info">
                <li class="info-point">Более 20 лет опыта работы с ИП</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="social-proof-row">

            <a href="https://profi.ru/profile/YapparovBZ/share" class="proof-card" target="_blank">
                <div class="proof-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/profi_ru.png"
                        alt="Profi.ru" class="proof-logo-profi">
                    <span class="rating-score">4.92</span>
                    <div class="stars">★★★★★</div>
                </div>
                <div class="proof-footer">128 отзывов</div>
            </a>

            <a href="https://yandex.ru/maps/org/tsentr_professionalnoy_bukhgalterii/1241002253/?ll=37.596201%2C55.706676&utm_campaign=v1&utm_medium=rating&utm_source=share&z=14" class="proof-card" target="_blank">
                <div class="proof-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/yandex.png"
                        alt="Яндекс" class="proof-logo-yandex">
                    <span class="rating-score">5.0</span>
                    <div class="stars stars-gold">★★★★★</div>
                </div>
                <div class="proof-footer">72 отзыва</div>
            </a>

            <a href="https://www.kp.ru/russia/moskva/luchshie-autsorsingovye-kompanii/" class="proof-card" target="_blank">
                <div class="kp-content">
                    <div class="top-text">
                        <span class="top-num">ТОП 7</span>
                        <span>Аутсорс компаний Москвы по версии</span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/kp.png" alt="KP.RU"
                        class="proof-logo-kp">
                </div>
            </a>
        </div>

      </div>
    </section>

    <section class="advantages-section">
      <div class="advantages-section__container">
        <h2 class="section-title buh-ip__title">
          Подходит для любого ИП</span>
        </h2>
        <p class="buh-ip__subtitle">
            Сопровождаем индивидуальных предпринимателей с любыми объёмами и системами налогообложения — от НПД до УСН и ПСН
        </p>

        <div class="scroll-indicator">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
          </svg>
        </div>

        <div class="advantages-grid">

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Вы только открыли ИП</h3>
            <p class="card-text">
              Поможем выбрать оптимальную систему налогообложения, зарегистрировать ИП и оформить всё “под ключ”.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Ведёте бизнес, но устали считать сами</h3>
            <p class="card-text">
                Перенесём бухгалтерию без простоев, проверим предыдущие отчёты и возьмём на себя налоги, отчётность и расчёты.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Есть сотрудники или подрядчики</h3>
            <p class="card-text">
              Берём на себя начисление зарплаты, отчётность по взносам и взаимодействие с СФР, ФНС.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">У вас онлайн-касса, эквайринг или маркетплейс</h3>
            <p class="card-text">
              Знаем нюансы Wildberries, Ozon, Яндекс.Маркета и агрегаторов — правильно учитываем комиссии, возвраты и продажи.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Бухгалтер всё испортил — нужна проверка и порядок</h3>
            <p class="card-text">
              Проведём аудит, исправим ошибки, восстановим учёт и защитим от штрафов.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Нет времени и желания разбираться в отчётности</h3>
            <p class="card-text">
              Просто ведите бизнес. Мы всё сделаем за вас — вовремя и без риска.
            </p>
          </div>

        </div>
      </div>
    </section>

    <section class="buh-ip-services-accordion-section">
      <div class="services-accordion__container">

          <h2 class="services-accordion__title">
            Все услуги включены в фиксированную цену
          </h2>

          <h3 class="services-accordion__subtitle">
            Никаких скрытых платежей — всё учётное сопровождение <span class="text-blue" style="font-weight: 590">уже входит в стоимость.</span> От первички до сдачи отчётности.
          </h3>

        <div class="services-accordion">

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Учёт и отчётность</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <ul class="accordion-body__bullets">
                  <li>Ведение бухгалтерского и налогового учёта</li>
                  <li>Подготовка и сдача отчётности в ФНС, ПФР, ФСС и Росстат</li>
                  <li>Контроль сроков и уведомлений, чтобы не было просрочек</li>
                  <li>Проверка и корректировка первичных документов</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Налоги и расчёты</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <ul class="accordion-body__bullets">
                  <li>Расчёт и уплата налогов, страховых взносов, ЕНП</li>
                  <li>Оптимизация налоговой нагрузки законными методами</li>
                  <li>Подготовка деклараций (УСН, 3-НДФЛ, 6-НДФЛ)</li>
                  <li>Помощь в выборе выгодной системы налогообложения</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Коммуникация с ФНС</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <ul class="accordion-body__bullets">
                  <li>Подготовка ответов на требования и пояснения</li>
                  <li>Представление интересов клиента при камеральных проверках</li>
                  <li>Консультации по вопросам налоговых уведомлений</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Кадры и зарплата</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <ul class="accordion-body__bullets">
                  <li>Начисление зарплаты, больничных, отпускных</li>
                  <li>Расчёт и уплата страховых взносов</li>
                  <li>Отчётность по сотрудникам (РСВ, СЗВ-ТД, СЗВ-СТАЖ)</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Дополнительные сервисы</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <ul class="accordion-body__bullets">
                  <li>Помощь при регистрации или закрытии ИП</li>
                  <li>Ведение учёта для интернет-магазинов и маркетплейсов</li>
                  <li>Экспресс-аудит и восстановление бухгалтерии</li>
                  <li>Финансовые консультации и планирование</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="buh-ip-pricing-table-section">
      <div class="pricing-table__container">
        <h1 class="pricing__title">
            Цены на бухгалтерию для ИП
        </h1>

        <div class="scroll-indicator">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
          </svg>
        </div>

        <div class="table-wrapper">

          <div class="table-header-cell">Система налогообложения</div>
          <div class="table-header-cell">Стоимость в месяц</div>

          <div class="table-cell">ИП на УСН доходы</div>
          <div class="table-cell">от 12000 руб.</div>

          <div class="table-cell">ИП на патенте</div>
          <div class="table-cell">от 12000 руб.</div>

          <div class="table-cell">ИП на УСН доходы минус расходы</div>
          <div class="table-cell">от 19000 руб.</div>

          <div class="table-cell">ИП на АУСН доходы</div>
          <div class="table-cell">от 12000 руб.</div>

          <div class="table-cell">ИП на АУСН доходы минус расходы</div>
          <div class="table-cell">от 19000 руб.</div>

          <div class="table-cell">ИП на УСН доходы с НДС </div>
          <div class="table-cell">от 17000 руб.</div>

          <div class="table-cell">ИП на УСН доходы минус расходы с НДС</div>
          <div class="table-cell">от 24000 руб.</div>

          <div class="table-cell">ИП на общем режиме с НДС</div>
          <div class="table-cell">от 26000 руб.</div>
        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/caluclator'); ?>

    <section class="buh-ip-why-table-section">
      <div class="pricing-table__container">
        <h1 class="pricing__title">
            Почему ИП выбирают ЦПБ?
        </h1>
        <p class="why__subtitle">
            Вы работаете не с системой, а с людьми, которые знают ваш бизнес, берут ответственность и гарантируют результат
        </p>

        <div class="scroll-indicator">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
          </svg>
        </div>

        <div class="table-wrapper">

          <div class="table-header-cell"></div>
          <div class="table-header-cell">Центр Профессиональной Бухгалтерии</div>
          <div class="table-header-cell">Онлайн-бухгалтерия / банк-сервис</div>

          <div class="table-cell">Кто ведёт бухгалтерию:</div>
          <div class="table-cell">Персональный бухгалтер и главный бухгалтер с опытом 10+ лет</div>
          <div class="table-cell">Конвейерный сервис, алгоритмы и шаблоны</div>

          <div class="table-cell">Ответственность:</div>
          <div class="table-cell">Финансовая страховка до 3 млн ₽, прописано в договоре</div>
          <div class="table-cell">Не несут материальной ответственности</div>

          <div class="table-cell">Опыт и репутация:</div>
          <div class="table-cell">Работаем с 2009 года, 16 лет без штрафов</div>
          <div class="table-cell">Массовый поток клиентов, без персонального контроля</div>

          <div class="table-cell">Качество и контроль:</div>
          <div class="table-cell">Пятиуровневая проверка отчётности, личное одобрение руководителя</div>
          <div class="table-cell">Минимальная проверка, клиент сам отвечает за ошибки</div>

          <div class="table-cell">Общение и поддержка:</div>
          <div class="table-cell">Живое взаимодействие — телефон, WhatsApp, Zoom, встречи</div>
          <div class="table-cell">Только чат или e-mail, часто бот-оператор</div>

          <div class="table-cell">Подход к клиенту:</div>
          <div class="table-cell">Индивидуальные решения под отрасль, систему налогообложения и цели</div>
          <div class="table-cell">Один шаблон для всех, без адаптации под бизнес</div>

          <div class="table-cell">Результат для клиента:</div>
          <div class="table-cell">Отчётность вовремя, экономия налогов, спокойствие</div>
          <div class="table-cell">Отчётность “по факту”, без анализа и защиты</div>

        </div>

        <h2>
            <span class="text-blue">3,7 миллиона рублей мы сэкономили</span> физическому лицу находящемуся за границей
        </h2>
        <div class="why__button">
            <a href="<?php echo home_url('/buhgalterskie-keysi/37-milliona-rublejj-my-sehkonomili-fizicheskomu-licu-nakhodyashhemusya-za-granicejj/'); ?>" class="btn btn_arr">Смотреть кейс</a>
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
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/banner/stack.png">
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
          <?php
          $cases_query = new WP_Query([
            'post_type'      => 'buh_keysi',
            'posts_per_page' => 6,
            'post_status'    => 'publish',
          ]);

          if ($cases_query->have_posts()) :
            $case_num = 0;
            while ($cases_query->have_posts()) : $cases_query->the_post();
              $case_num++;
              $icon = get_field('case_icon');
              ?>
              <div class="case-card">
                <div class="case-card__case-number">
                  <p>Кейс #<?php echo $case_num; ?></p>
                </div>
                <img class="case-card__icon"
                     src="<?php echo $icon ? esc_url($icon['url']) : get_template_directory_uri() . '/static/img/icons/main-page/online-white.svg'; ?>"
                     alt="<?php the_title_attribute(); ?>">
                <h3 class="case-card__title"><?php the_title(); ?></h3>
                <div class="case-card__desc">
                  <svg style="display: none" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.75417 16.5005L3.52917 11.2755L4.83542 9.96921L8.75417 13.888L17.1646 5.47754L18.4708 6.78379L8.75417 16.5005Z" fill="url(#paint0_linear_<?php echo $case_num; ?>)"/>
                    <defs>
                      <linearGradient id="paint0_linear_<?php echo $case_num; ?>" x1="11.0372" y1="16.5005" x2="11.0372" y2="5.47754" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F0572D"/>
                        <stop offset="1" stop-color="#CE441E"/>
                      </linearGradient>
                    </defs>
                  </svg>
                  <p><?php echo get_the_excerpt(); ?></p>
                </div>
              </div>
            <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
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
            <?php
            $reviews_query = new WP_Query([
              'post_type'      => 'clients',
              'posts_per_page' => 6,
              'post_status'    => 'publish',
            ]);

            if ($reviews_query->have_posts()) :
              while ($reviews_query->have_posts()) : $reviews_query->the_post();
                $date = get_the_date('d/m/y');
                $person = get_the_title();
                $short_text = wp_trim_words(get_the_content(), 20, '...');
                ?>
                <div class="reviews__tile">
                  <div class="tile__bage-date">
                    <p><?php echo esc_html($date); ?></p>
                  </div>
                  <p class="tile__body-text">
                    <?php echo esc_html($short_text); ?>
                  </p>
                  <p class="tile__person-date">
                    <?php echo esc_html($person); ?>
                  </p>
                  <a href="<?php the_permalink(); ?>" class="tile__review-link">Смотреть полностью</a>
                </div>
              <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
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
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/tiles/spheres3.png"
                   alt="sphere icons" class="sphere-img">
              <span class="spheres-text">
            120+ положительных отзывов <br>от бизнеса Москвы и МО
          </span>
            </div>
            <a href="<?php echo home_url('/otzivi/'); ?>" class="btn btn_arr">Все отзывы</a>
          </div>
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

        <?php
        $args = [
          'post_type'      => 'staff',
          'posts_per_page' => 5,
          'post_status'    => 'publish',
        ];

        $team_query = new WP_Query($args);

        if ($team_query->have_posts()) :

          $posts_array = $team_query->posts;

          $director = null;
          $team = [];

          foreach ($posts_array as $post_item) {
            if (stripos($post_item->post_title, 'Булат') !== false && stripos($post_item->post_title, 'Яппаров') !== false) {
              $director = $post_item;
            } else {
              $team[] = $post_item;
            }
          }

          if ($director) {
            array_unshift($team, $director);
          } else {
            $team = $posts_array;
          }
          ?>

          <div class="team-grid" id="teamScrollArea">

            <?php foreach ($team as $index => $post) : setup_postdata($post); ?>

              <div class="team-card<?php echo ($index === 0) ? ' team-card-large' : ''; ?>">

                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'card__person-img', 'alt' => get_the_title()]); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/no-photo.svg" alt="<?php the_title(); ?>" class="card__person-img">
                  <?php endif; ?>
                </a>

                <div class="team-card__info">
                  <a href="<?php the_permalink(); ?>" class="card__person-name-link">
                    <div class="card__person-name"><?php the_title(); ?></div>
                  </a>

                  <?php $position = get_field('employee_positions'); ?>
                  <?php if ($position) : ?>
                    <div class="card__person-role"><?php echo esc_html($position); ?></div>
                  <?php endif; ?>

                  <div class="card__divider"></div>

                  <p class="card__person-desc">
                    <?php
                    $education = get_field('employee_education');
                    if ($education) {
                      echo esc_html($education);
                    } else {
                      echo get_the_excerpt();
                    }
                    ?>
                  </p>
                </div>
              </div>

            <?php endforeach; wp_reset_postdata(); ?>



          </div>

        <?php else : ?>
          <p style="text-align: center;">Сотрудников пока нет.</p>
        <?php endif; ?>

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
            Частые вопросы индивидуальных предпринимателей
          </h2>

          <h3 class="buh-ip-faq-accordion__subtitle">
            Мы собрали ответы на самые важные вопросы. Если не нашли нужное — оставьте заявку, и мы проконсультируем вас лично.
          </h3>

        <div class="faq-accordion">

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Могу ли я работать с вами удалённо, если я не в Москве?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Да. Мы ведём клиентов по всей России. Работаем с вашими местными налоговыми, фондами и банками — дистанционно и официально. Все документы и отчётность передаются онлайн, через систему ЭДО.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Как происходит переход от моего бухгалтера или онлайн-сервиса?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Мы проводим экспресс-аудит текущего состояния, формируем перечень документов и берём на себя передачу данных. Ваш бизнес не останавливается ни на день — всё проходит “в фоновом режиме”.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Кто будет моим бухгалтером и как часто он выходит на связь?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  У вас будет персональный бухгалтер и главный бухгалтер-наставник. Всегда на связи в мессенджере, по телефону или Zoom.
                  <br>Раз в месяц — отчёт и сверка. По необходимости — консультации в любое время.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Сколько стоит обслуживание ИП?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Стоимость зависит от системы налогообложения и объёма документов. Оставьте заявку и мы сделаем точный расчёт.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Что, если налоговая пришлёт требование или штраф?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Мы полностью сопровождаем клиента: готовим пояснения, представляем интересы перед ФНС и берём ответственность на себя. Если ошибка за нами — ущерб покрывается страховой компанией.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Вы можете помочь, если в бухгалтерии уже бардак?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Да, и мы часто с этого начинаем. Проводим аудит, восстанавливаем учёт за прошлые периоды, сдаём корректировки и выстраиваем систему, чтобы ситуация не повторялась.
                </p>
              </div>
            </div>
          </div>

        </div>
    </section>

    <section class="buh-servises-short">
      <div class="buh-servises-short__container">
        <h1 class="buh-servises-short__title">
            Бухгалтерские услуги для ИП в Москве и по всей России
        </h1>

        <div class="buh-servises-short__text-wrapper" id="seo-text-wrapper">
            <div class="buh-servises-short__text">
              <p>Сейчас самое время подумать о бухгалтерском обслуживании ИП на аутсорсе. Особенно, если вы только собираетесь открыть ИП или планируете расширять бизнес, наращивая обороты, направления, и вам некому делегировать бухгалтерию.</p>
              <p>Все дело в том, в 2023 году вступают в силу поистине глобальные изменения, касающиеся всех налогоплательщиков.</p>
              <h3>Объединение платежей</h3>
              <p>Теперь НДФЛ, авансовые, страховые, пени, штрафы, проценты нужно платить единым налоговым платежом, ЕНП. Распределять поступившую сумму с единого счета налогоплательщика будет налоговая инспекция. Исключение сделано для НДФЛ иностранных граждан, НПД, госпошлин.</p>
              <p>Налогоплательщик перечисляет сумму совокупной обязанности к уплате на единый счет, который открывает ФНС. Со счета в первую очередь списываются недоимки, затем по порядку: очередные платежи в бюджет и фонды, пени, проценты и штрафы. Платить авансом или платить большими суммами не требуется.</p>
              <p>Много изменений и в порядке исчисления, уплаты и отчетности по налогам. И здесь значительно облегчат задачу бухгалтерские услуги для ИП.</p>
              <h3>Изменения для ИП</h3>
              <p>Меняются сроки уплаты налогов и отчетности по ним, бланки деклараций УСН, порядок возмещения НДС. Например, обеспечительный платеж больше не считается доходом и расходом для целей расчета базы налога на прибыль. Вплоть до 2024 года действуют налоговые каникулы для вновь зарегистрированных ИП на УСН. Изменятся лимиты применения УСН согласно новым коэффициентам-дефляторам. АУСН можно будет применять не только новым, но и существующим ИП.</p>
              <h3>Объединение страховых взносов</h3>
              <p>Рассчитывать страховые взносы теперь нужно от единой базы в размере 1,917 млн. рублей на одного работника в год. Тариф тоже станет единым — 30% для расчета в пределах единой базы, 15,1% — свыше нее. Будет еще три льготных тарифа для особых условий и налогоплательщиков — 0%, 7,6%, 15%, продолжают действовать сниженные тарифы для отдельных организаций и ниш.</p>
              <p>Страховые, как и налоговые, начисления нужно платить одной суммой, которую впоследствии распределит по государственным фондам казначейство. И даже сроки уплаты изменяться: теперь перечисление надо сделать до 28-го числа следующего месяца, а отправить отчет — до 25 числа.</p>
              <h3>Профессиональное ведение бухучета ИП на аутсорсинге</h3>
              <p>Специалисты работают в Центре профессиональной бухгалтерии с момента появления компании в 2009 году и ведут бухгалтерский учет ИП на УСН. Они накопили опыт в 30+ нишах, регулярно проходят профессиональное обучение и следят за изменениями законодательства.</p>
              <p><strong>Какие функции можно делегировать специалистам Центра профессиональной бухгалтерии?</strong></p>
              <ol>
                <li>Открытие ИП. Да, сейчас очень просто открыть ИП через цифровые сервисы, но если вы не успеваете или не понимаете, как это сделать, обратитесь к бухгалтерам компании.
                <li>Оптимизация бухгалтерского учета: разработка индивидуального плана счетов и учетной политики, исключение лишних и параллельных операций.
                <li>Постановка и восстановление учета, в том числе, первичных документов, ТМЦ, расчетов с поставщиками и подрядчиками и прочих.
                <li>Оптимизация налоговой нагрузки: выбор системы налогообложения, заблаговременный расчет сумм начислений, оспаривание требований налоговой и защита интересов клиента, поиск законных путей сокращения налогооблагаемой базы и получения льготных ставок.
                <li>Автоматизация, интеграция с CRM и продажами, объединение налогового и бухгалтерского учета в единой базе.
                <li>Развитие бизнеса. Подготовка аналитики для целей управления и планирования.
                <li>Закрытие ИП в связи с открытием ООО и по иным причинам. Проведение сверок, исправление ошибок, подготовка документов и отчетности.
              </ol>
              <p>Центр профессиональной бухгалтерии страхует ответственность специалистов на 3 000 000 рублей, потому что проводит двойную проверку их работы, силами собственных и привлеченных аудиторов.</p>
              <p>Для стандартных пакетов ведения услуг разработаны тарифы с фиксированной оплатой. В остальных случаях стоимость бухуслуг ИП рассчитывается после беседы с клиентом, индивидуально.</p>
              <p>Уже при первом разговоре специалист предложит варианты снижения расходов, оптимизации бухгалтерского учета и комфортный тариф. Если вы не хотите разбираться с изменениями бухгалтерского учета в 2023 году, доверьтесь профессионалам и экономьте время и средства.</p>
          </div>
        </div>

        <button class="buh-servises-short__expand-btn" id="seo-expand-btn">
            <span>Развернуть</span>
        </button>
      </div>
    </section>

  </div>
<?php
get_footer();