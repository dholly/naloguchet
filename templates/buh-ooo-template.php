<?php
/**
 * Template Name: Бухгалтерия для ООО
 */

get_header();
?>

  <div class="page-wrapper">

    <section class="hero-section first">
      <div class="hero-section__container">

        <div class="hero-wrapper">

          <div class="hero-content">
            <h1 class="hero-title">
              Бухгалтерские услуги для ООО отчётность, налоги, контроль
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
              src="<?php echo get_template_directory_uri(); ?>/static/img/team/Svetlana-main.png"
              alt="Светлана Гречкина"
              class="hero-person-img"
            >

            <div class="person-card">
              <div class="person-name">Светлана Гречкина - Руководитель направления</div>
              <ul class="person-info">
                <li class="info-point">Более 10 лет опыта работы с ООО</li>
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
          Подходит для любого ООО от малого до растущего бизнеса</span>
        </h2>
        <p class="buh-ip__subtitle">
            Ведём бухгалтерию компаний на УСН и ОСНО, с НДС и без, с сотрудниками, филиалами и несколькими расчётными счетами.
        </p>

        <div class="scroll-indicator">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
          </svg>
        </div>

        <div class="advantages-grid">

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Компания с сотрудниками</h3>
            <p class="card-text">
              Расчёт зарплаты, отпусков, больничных, налоги и отчётность по персоналу — всё берём на себя.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">ООО на УСН или ОСНО</h3>
            <p class="card-text">
                Ведём учёт по обеим системам — НДС, прибыль, зарплата, взносы, отчётность в ФНС и фонды.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">ООО, которое растёт и масштабируется</h3>
            <p class="card-text">
              Внедряем систему контроля расходов, финансовые регламенты и автоматизацию отчётности.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">После увольнения бухгалтера или неудачного аутсорсера</h3>
            <p class="card-text">
              Быстро подхватываем учёт, проводим аудит, исправляем ошибки и сдаём отчётность без штрафов.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Компании, которым нужен порядок и контроль</h3>
            <p class="card-text">
              Налаживаем финансовые процессы, документооборот, управленческую отчётность и сверки с контрагентами.
            </p>
          </div>

          <div class="advantage-card buh-ip__card">
            <h3 class="advantage-card__title buh-ip__card-title">Малое ООО без бухгалтера</h3>
            <p class="card-text">
              Берём на обслуживание компанию “с нуля”: организуем учёт, настроим 1С, наладим отчётность и платежи.
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
                  <li>Расчёт и уплата всех налогов (НДС, прибыль, УСН, имущество)</li>
                  <li>Оптимизация налоговой нагрузки законными методами</li>
                  <li>Подготовка деклараций и расчётов по налогам</li>
                  <li>Ведение Книги доходов и расходов (КУДиР)</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Зарплата и кадры</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <ul class="accordion-body__bullets">
                  <li>Расчёт зарплаты, отпусков, больничных и премий</li>
                  <li>Формирование и сдача отчётности по сотрудникам (6-НДФЛ, РСВ, СЗВ-ТД, СЗВ-СТАЖ)</li>
                  <li>Ведение кадрового учёта и личных дел</li>
                  <li>Помощь при приёме и увольнении работников</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Взаимодействие с налоговыми органами</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <ul class="accordion-body__bullets">
                  <li>Подготовка ответов на требования и пояснения</li>
                  <li>Представление интересов клиента в ФНС</li>
                  <li>Сопровождение камеральных и выездных проверок</li>
                  <li>Контроль корректности начислений и сверка с налоговой</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Консультации и финансовое сопровождение</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <ul class="accordion-body__bullets">
                  <li>Финансовый анализ и управленческая отчётность</li>
                  <li>Консультации по налогообложению и оптимизации</li>
                  <li>Экспресс-аудит и восстановление учёта</li>
                  <li>Настройка документооборота и отчётности в 1С</li>
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
            Цены на бухгалтерию для ООО
        </h1>

        <div class="scroll-indicator">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
          </svg>
        </div>

        <div class="table-wrapper">

          <div class="table-header-cell">Система налогообложения</div>
          <div class="table-header-cell">Стоимость в месяц</div>

          <div class="table-cell">ООО на УСН доходы</div>
          <div class="table-cell">от 10000 руб.</div>

          <div class="table-cell">ООО на УСН доходы минус расходы</div>
          <div class="table-cell">от 15000 руб.</div>

          <div class="table-cell">ООО на общем режиме с НДС</div>
          <div class="table-cell">от 19000 руб.</div>
        </div>
      </div>
    </section>

    <section class="calculator-temp">
      <div class="calculator__container">
        <h2 class="calculator__header">
          Рассчитайте стоимость обслуживания <span class="text-blue" >за 1 минуту!</span>
        </h2>

        <div class="calculator__body">
          <div class="calc-body__left"></div>

          <div class="calc-body__right">
            <h3 class="calc-body__right-header">
              Укажите параметры бизнеса и получите примерную цену
            </h3>
            <div class="calc-body__sub-wrapper">
              <p>Подготовим детальный расчёт через 10 минут после заявки</p>
              <a href="#" class="btn btn_arr">Начать</a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section class="buh-ip-why-table-section">
      <div class="pricing-table__container">
        <h1 class="pricing__title">
            Почему ООО выбирают ЦПБ?
        </h1>
        <p class="why__subtitle">
            Вы работаете не с системой, а с людьми, которые знают ваш бизнес, берут ответственность и гарантируют результат
        </p>
        <div class="table-wrapper">

          <div class="table-header-cell"></div>
          <div class="table-header-cell">Центр Профессиональной Бухгалтерии</div>
          <div class="table-header-cell">Штатный бухгалтер</div>

          <div class="table-cell">Кто ведёт бухгалтерию:</div>
          <div class="table-cell">Персональный бухгалтер и главный бухгалтер с опытом 10+ лет</div>
          <div class="table-cell">Один специалист, ограниченный своим опытом и пропускной способностью</div>

          <div class="table-cell">Ответственность:</div>
          <div class="table-cell">Финансовая страховка до 3 млн ₽, прописано в договоре</div>
          <div class="table-cell">Материальная ответственность ограничена; убытки компании фактически не компенсируются</div>

          <div class="table-cell">Опыт и надёжность:</div>
          <div class="table-cell">Работаем с 2009 года, 16 лет без штрафов</div>
          <div class="table-cell">Зависят от одного сотрудника: его навыков, мотивации и состояния</div>

          <div class="table-cell">Качество и контроль:</div>
          <div class="table-cell">Пятиуровневая проверка отчётности, личное одобрение руководителя</div>
          <div class="table-cell">Ошибки часто остаются незамеченными, контроль ограничен</div>

          <div class="table-cell">Компетенции:</div>
          <div class="table-cell">Экспертиза в десятках отраслей, сложные кейсы, НДС, проверки</div>
          <div class="table-cell">Узкая экспертиза, нет опыта в редких ситуациях, проверках, НДС</div>

          <div class="table-cell">Общение и поддержка:</div>
          <div class="table-cell">Живое взаимодействие — телефон, WhatsApp, Zoom, встречи</div>
          <div class="table-cell">Зависит от графика бухгалтера, часто нет оперативности</div>

          <div class="table-cell">Риски для клиента:</div>
          <div class="table-cell">Минимальные — команда + контроль + страхование</div>
          <div class="table-cell">Высокие — болезнь, увольнение, отпуск, срыв сроков</div>

          <div class="table-cell">Подход к клиенту:</div>
          <div class="table-cell">Индивидуальные решения под отрасль, систему налогообложения и цели</div>
          <div class="table-cell">Единый стиль работы, труднее адаптироваться под особенности бизнеса</div>

          <div class="table-cell">Результат для клиента:</div>
          <div class="table-cell">Отчётность вовремя, экономия налогов, спокойствие</div>
          <div class="table-cell">Выполнение текущих задач без анализа и предотвращения ошибок</div>

        </div>

        <h2>
            <span class="text-blue">3,7 миллиона рублей мы сэкономили</span> физическому лицу находящемуся за границей
        </h2>
        <div class="why__button">
            <a href="<?php echo home_url('/buhgalterskie-keysi/37-milliona-rublejj-my-sehkonomili-fizicheskomu-licu-nakhodyashhemusya-za-granicejj/'); ?>" class="btn btn_arr">Смотреть кейс</a>
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
              <a href="https://yandex.ru/maps/org/tsentr_professionalnoy_bukhgalterii/1241002253/?ll=37.596201%2C55.706676&utm_campaign=v1&utm_medium=rating&utm_source=share&z=14" target="_blank" class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/yandex-maps.png"
                     alt="Яндекс Карты">
              </a>
              <div class="card__score">
                <span class="rating__score">Рейтинг 5.0</span>
                <span class="rating__stars">★★★★★</span>
              </div>
            </div>
            <div class="companies-card">
              <a href="https://profi.ru/profile/YapparovBZ/share" target="_blank" class="card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/profi-ru-2.png"
                     alt="Profi.ru">
              </a>
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
            <?php echo $reviews_query->found_posts; ?>+ положительных отзывов <br>от бизнеса Москвы и МО
          </span>
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
            Частые вопросы
          </h2>

          <h3 class="buh-ip-faq-accordion__subtitle">
            Мы собрали ответы на самые важные вопросы. Если не нашли нужное — оставьте заявку, и мы проконсультируем вас лично.
          </h3>

        <div class="faq-accordion">

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Можно ли передать бухгалтерию ООО полностью на аутсорсинг?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Да. Мы берём на себя весь учёт, налоги, зарплату, отчётность и общение с ФНС. Вы освобождаетесь от рутины и получаете готовые отчёты и консультации. Работаем официально, по договору и с финансовой ответственностью.
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
                  Бережно. Мы проводим экспресс-аудит, формируем пакет документов и плавно принимаем дела.
                  <br><br>
                  Бизнес не останавливается, а ваш новый бухгалтер уже контролирует всё с первого дня.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Работаете ли вы с ООО на ОСНО и НДС?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Да. Это наша основная специализация. Мы ведём компании на ОСНО, НДС и УСН, готовим декларации, отвечаем на требования ФНС и проводим сверки.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Что делать, если налоговая прислала требование или штраф?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Ничего — это наша зона ответственности. Мы готовим пояснения, представляем ваши интересы перед ФНС и при необходимости устраняем ошибки. Если ошибка с нашей стороны — ущерб покрывает страховая компания.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>От чего зависит цена?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Цена зависит от системы налогообложения, объёма документов и количества сотрудников. Но вы всегда платите фиксированную сумму — без скрытых доплат.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Можно ли работать с вами, если компания в другом регионе?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Да. Мы ведём бухгалтерию по всей России. Всё взаимодействие — онлайн, но с живым бухгалтером. Отчётность и налоги сдаём в ваши региональные инспекции.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Что, если в бухгалтерии бардак или предыдущий бухгалтер всё запутал?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Мы начнём с восстановления учёта: проведём аудит, разберём ошибки и восстановим порядок. После этого ведение идёт без сбоев.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Можно ли заключить договор с гарантией?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Да. В договоре прописана наша ответственность, сроки и объём услуг. Кроме того, у нас действует страховка ответственности на 3 млн ₽ — ваши риски сведены к нулю.
                </p>
              </div>
            </div>
          </div>

        </div>
    </section>

    <section class="buh-servises-short">
      <div class="buh-servises-short__container">
        <h1 class="buh-servises-short__title">
            Бухгалтерские услуги для ООО в Москве и по всей России
        </h1>

        <div class="buh-servises-short__text-wrapper" id="seo-text-wrapper">
            <div class="buh-servises-short__text">
              <p>Предоставляем бухгалтерские услуги для ООО в Москве c профгарантиями по разумным ценам. Бухгалтерия на аутсорсинг — это удаленное ведение бухучета. Обслуживание ООО малого и среднего бизнеса — независимо от местонахождения. Вы можете быть в Спб (Санкт-Петербурге), Екатеринбурге, Волгограде, любом городе России.</p>
              <p>Осуществляем комплексное бухгалтерское обслуживание ООО на УСН, ОСНО. Нам не надо объяснять специфику вашей деятельности — имеем большой опыт в разных сферах (торговля, производство, услуги). Производим все операции главного бухгалтера, специалиста по налогам, кадровый учет и юридическое сопровождение. Материальная ответственность за профессиональное исполнение по договору: страхование на 3'000'000 руб.</p>
              <h3>Бухгалтерское обслуживание ООО</h3>
              <h4>Цены на бухгалтерские услуги для ООО</h4>
              <p>Организация и ведение бухгалтерского учета компании. Вам больше не придется вникать в План счетов бухгалтерского учета для предприятия или Для чего нужна двойная запись в платежном балансе ООО?. Мы предоставляем полное бухгалтерское сопровождение для ООО по бюджетным ценам на аутсонсинге.</p>
              <p>Наша задача — организовать бухгалтерский и налоговый учет на аутсорсинге так, чтобы руководитель ООО был полностью уверен в том, что с ведением бухгалтерии в его компании — полный порядок.</p>
              <h3>В чем проблемы организации бухгалтерии ООО?</h3>
              <p>Система налогообложения выбрана, план счетов и учетная политика утверждены. Оформляются первичные документы и заведены регистры учета. Остается самое сложное — ежедневное ведение бухгалтерии ООО со всеми нюансами и форс-мажорами.</p>
              <p>Учет усложняется, если у компании:</p>
              <ol>
                <li>несколько направлений деятельности, например, производство и торговля;</li>
                <li>общий режим налогообложения;</li>
                <li>штат работников, для которых нужно рассчитывать заработную плату, НДФЛ, делать отчисления в фонды, выплачивать отпускные, декретные;</li>
                <li>запланирован переход с одного режима налогообложения на другой;</li>
                <li>совершается более 50 операций в месяц;</li>
                <li>среди контрагентов есть зарубежные компании, организации и предприятия.</li>
              </ol>
              <p>В малом и даже среднем бизнесе нередко все операции выполняет один человек. Собственники ведут учет своими руками, как умеют. Бухгалтеры перестают справляться с растущими оборотами и нагрузкой. И те, и другие допускают одинаковые типовые ошибки и каждая оборачивается весьма ощутимым штрафом.</p>
              <p>Так, за не сданную налоговую декларацию организация получит взыскание в размере 5-30% ежемесячных начислений налога. Невыплаченные или выплаченные не полностью налоги облегчат счета на сумму до 20% задолженности. Несвоевременная сдача статистической отчетности влечет за собой штраф размером до 70 000 рублей.</p>
              <p>Сотрудничество с работником по гражданско-правовому соглашению вместо трудового договора будет стоить организации 100 000–200 000 рублей. Найм иностранного гражданина без патента — до 800 000 рублей.</p>
              <p>Когда ресурсов и квалификации сотрудников не хватает для ведения бухгалтерского учета ООО, дешевле и проще передать его на аутсорс, дороже брать еще одну штатную единицу. Осталось понять, по каким критериям выбрать исполнителя.</p>
              <h4>Как выбрать исполнителя на аутсорсинге?</h4>
              <p>Не стоит доверять маленьким компаниям и бухгалтерам-фрилансерам, которые в 90% случаев не отвечают материально за допущенные ошибки, перегружены клиентами и работают без договора.</p>
              <p>Можно ориентироваться на отзывы в открытых источниках и опыт работы. При первом разговоре с представителем компании нужно обратить внимание на вопросы, которые он задает. Ответственный исполнитель оценивает состояние учета, рассказывает, в каком направлении нужно работать, чтобы владелец мог устраниться от решения кадровых и налоговых вопросов и заниматься только бизнесом.</p>
              <p>Сотрудничество с будущим исполнителем должно быть строго регламентировано договором. В нем указывают перечень обязанностей и прозрачно раскрывают стоимость бухгалтерских услуг для ООО.</p>
              <p>Полезно уточнить, на какую сумму компания страхует материальную ответственность, зафиксированы ли эти гарантии в договоре.</p>
              <h4>Почему стоит заказать услуги бухгалтера для ООО в Центре профессиональной бухгалтерии?</h4>
              <ol>
                <li>Центр профессиональной бухгалтерии соответствует всем вышеперечисленным рекомендациям. Мы сотрудничаем с клиентами только по договору и страхуем материальную ответственность на 3 000 000 рублей. Помогаем уложиться в бюджет — предлагаем стандартный или индивидуально подобранный пакет услуг, рассрочку платежей.</li>
                <li>Бухгалтеры компании возьмут на себя все услуги бухгалтерского учета — от первичной документации и кассы, до зарплаты, налогов, управленческой отчетности. Все налоги и обязательные платежи будут выплачены вовремя, отчетность будет сдана и согласована в сроки, предусмотренные законодательством.</li>
                <li>Мы обязательно предложим варианты снижения налогового бремени законными путями. Например, подберем оптимальную систему налогообложения, получим от поставщиков и покупателей закрывающие документы для вычета НДС, сделаем перерасчет НДС и защитим интересы клиента в налоговой инспекции.</li>
                <li>Бухгалтеры, юристы, экономисты, программисты компании не лимитируют консультации и в рабочее время отвечают на вопросы в течение 1-2 часов. С 2009 года они работали с ОСНО и УСН, регулярно проходят обучение, отслеживают изменения законов, нормативных актов, которые прямо или косвенно влияют на бухгалтерский учет.</li>
                <li>Вы больше не будете зависеть от главного бухгалтера и не потеряете базу при расставании с ним. В случае болезни вашего персонального бухгалтера мы подберем замену за 15 минут из кадрового резерва специалистов с опытом от 10 лет. Все расчеты и операции мы ведем на собственном сервере или в облаке, выгружаем базу по первому требованию, регулярно сохраняем данные. По запросу автоматизируем учет, ведем его в CRM клиента или собственной CRM, всегда проверяем результаты вручную.</li>
                <li>Двойной аудит, внутренний и с привлечением сторонних исполнителей, служит гарантией безошибочного ведения бухгалтерского учета.</li>
              </ol>
              <p>Позвоните и мы приведем в порядок или восстановим учет и отчетность, подберем для вас комфортный вариант оказания бухгалтерских услуг, поможем сосредоточиться на развитии бизнеса.</p>
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