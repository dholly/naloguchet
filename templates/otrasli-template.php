<?php
/**
 * Template Name: Для отраслей
 */

get_header();
?>

  <div class="page-wrapper">

    <section class="hero-section first">
      <div class="hero-section__container">

        <div class="hero-wrapper">

          <div class="hero-content">
            <h1 class="hero-title">
              Бухгалтерский учёт <br> <span class="text-blue">для кафе и ресторанов</span>
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
                Учитываем особенности сферы
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
              <a href="/kalkulyator/" class="btn btn_arr" type="button">Узнать стоимость</a>
              <a href="<?php echo esc_url(convert_to_embed('https://rutube.ru/video/c040db92724a5a77fd74480167107e8f/')); ?>"
                 class="btn btn_play glightbox">
                Смотреть видео
              </a>
            </div>
          </div>

          <div class="hero-image-block">
            <img
              src="<?php echo get_template_directory_uri(); ?>/static/img/human/main_bulat.png"
              alt="Булат Яппаров"
              class="hero-person-img"
            >

            <div class="person-card">
              <div class="person-name">Булат Яппаров — Директор ЦПБ</div>
              <ul class="person-info">
                <li class="info-point">30 лет опыта</li>
                <li class="info-point">Бухгалтер года 2020</li>
                <br>
                <li class="info-point">2 высших экономических образования</li>
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

    <section class="services-accordion-section otrasly">
      <div class="services-accordion__container">

          <h2 class="services-accordion__title">
            Все услуги для <span class="text-blue">кафе и ресторанов</span> включены в фиксированную цену
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

    <section class="tiles-cases otrasly">
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
          <a href="#" class="btn btn_arr">Все кейсы</a>
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

    <section class="accordion-faq otrasly">
      <div class="faq-accordion__container">

          <h2 class="faq-accordion__title">
            Частые вопросы для кафе ресторанов и баров
          </h2>

          <h3 class="faq-accordion__subtitle">
            Мы собрали ответы на самые важные вопросы. Если не нашли <br>нужное — оставьте заявку, и мы проконсультируем вас лично.
          </h3>

        <div class="faq-accordion">

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Вы работаете со всеми POS-системами и онлайн-кассами?</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Да. Работаем с iiko, r_keeper, Poster, Tillypad, Evotor и другими системами. Сверяем данные POS с бухгалтерией, Z-отчётами, эквайрингом и фактической выручкой — без расхождений.
                </p>
              </div>
            </div>
          </div>

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Как вы учитываете списания продуктов и техкарты?</h3>
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
              <h3>Как вы учитываете эквайринг и онлайн-оплаты?</h3>
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
              <h3>Сможете вести зарплату и учёт смен персонала?</h3>
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
              <h3>Вы работаете с ЕГАИС, алкоголем и поставками?</h3>
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
              <h3>Что делать, если в POS-системе и 1С разные цифры по выручке?</h3>
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
              <h3>Вы готовы помочь при проверках Роспотребнадзора и ИФНС?</h3>
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
              <h3>Как вы ведёте учёт сезонных заведений и фуд-кортов?</h3>
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
              <h3>Можете ли вы работать с несколькими точками в одной сети?</h3>
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
              <h3>Что нужно, чтобы начать обслуживание?</h3>
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
            Бухгалтерский учет в ресторане и кафе
        </h1>

        <div class="buh-servises-short__text-wrapper" id="seo-text-wrapper">
            <p class="buh-servises-short__text">
                Ведение бухучета для кафе и ресторанов имеет специфические особенности. Наша компания удаленно поможет наладить учет для такого бизнеса в Москве, включая получение лицензии на торговлю алкоголем для ООО, переход на УСН или «вмененку». Мы берем на себя все рутинные процессы, чтобы вы могли сосредоточиться на развитии бизнеса. Наши специалисты обладают многолетним опытом работы с крупными предприятиями и знают все тонкости законодательства для ОАО.
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