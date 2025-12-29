<?php
/**
 * Template Name: Главная страница
 */

get_header();
?>

  <div class="page-wrapper">

    <section class="hero-section first">
      <div class="hero-section__container">

        <div class="hero-wrapper">

          <div class="hero-content">
            <h1 class="hero-title">
              Аутсорсинг бухгалтерии для малого и среднего бизнеса
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
                Защита от штрафов
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
              <a href="#" class="btn btn_arr" type="button">Узнать стоимость</a>
              <a href="#" class="btn btn_play" type="button">Смотреть видео</a>
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
              <div class="top-text">
                <span class="top-num">ТОП 7</span>
                <span>Аутсорс компаний Москвы по версии</span>
            </div>
              <img src="<?php echo get_template_directory_uri(); ?>/static/img/social-proof-logos/kp.png" alt="KP.RU"
                    class="proof-logo-kp">
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="advantages-section">
      <div class="advantages-section__container">
        <h2 class="section-title">
          Почему компании выбирают <span class="text-blue">Центр Профессиональной Бухгалтерии?</span>
        </h2>

        <div class="scroll-indicator">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
          </svg>
        </div>

        <div class="advantages-grid">

          <div class="advantage-card">
            <div class="card-dot"></div>
            <div class="advantages-card-header">
              <div class="icon-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\1.svg"
                    alt="Опытные специалисты" class="main-icon">
              </div>
              <h3 class="advantage-card__title">Опытные специалисты</h3>
            </div>
            <p class="card-text">
              Без стажёров и новичков. Средний стаж сотрудников — 15 лет, у руководителя — 30 лет.
            </p>
          </div>

          <div class="advantage-card">
            <div class="card-dot"></div>
            <div class="advantages-card-header">
              <div class="icon-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\2.svg"
                    alt="Юридическая защита" class="main-icon">
              </div>
              <h3 class="advantage-card__title">Юридическая защита</h3>
            </div>

            <p class="card-text">
              Снимаем 90% требований налоговой по закону. Страхование ответственности на 3 млн.₽
            </p>
          </div>

          <div class="advantage-card">
            <div class="card-dot"></div>
            <div class="advantages-card-header">
              <div class="icon-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\3.svg"
                    alt="Двойной контроль качества" class="main-icon">
              </div>
              <h3 class="advantage-card__title">Двойной контроль качества</h3>
            </div>

            <p class="card-text">
              Две внутренних перепроверки + внешний аудитор. Так не делает никто.
            </p>
          </div>

          <div class="advantage-card">
            <div class="card-dot"></div>
            <div class="advantages-card-header">
              <div class="icon-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\4.svg"
                    alt="Гарантия стабильности" class="main-icon">
              </div>
              <h3 class="advantage-card__title">Гарантия стабильности</h3>
            </div>

            <p class="card-text">
              Резерв бухгалтеров на случай аврала — работа не останавливается.
            </p>
          </div>

          <div class="advantage-card">
            <div class="card-dot"></div>
            <div class="advantages-card-header">
              <div class="icon-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\5.svg"
                    alt="Работаем в CRM клиента" class="main-icon">
              </div>
              <h3 class="advantage-card__title">Работаем в CRM клиента</h3>
            </div>

            <p class="card-text">
              Полная прозрачность: вы видите все процессы и отчёты в реальном времени.
            </p>
          </div>

          <div class="advantage-card">
            <div class="card-dot"></div>
            <div class="advantages-card-header">
              <div class="icon-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\6.svg"
                    alt="Партнёрская атмосфера" class="main-icon">
              </div>
              <h3 class="advantage-card__title">Партнёрская атмосфера</h3>
            </div>
            <p class="card-text">
              Мы часть вашего бизнеса. Работаем на результат, с улыбкой и без формализма.
            </p>
          </div>

        </div>
      </div>
    </section>

    <section class="stats-section">
      <div class="stats__container">
        <h2 class="stats-title">
          16 лет ведём бухгалтерию <br>
          <span class="text-blue">и уменьшаем налоги</span>
        </h2>

        <div class="stats-list">

          <div class="stats-row">
            <div class="stat-btn-wrapper">
              <a href="<?php echo home_url('/buhgalteria-ip/'); ?>" class="btn btn_arr">Аутсорсинг бухгалтерии для ИП</a>
            </div>
            <div class="stat-content">
              <div class="stat-col">
                <span class="stat-label">Опыт:</span>
                <span class="stat-value">322 компании</span>
              </div>
              <div class="stat-col">
                <span class="stat-label">Сейчас:</span>
                <span class="stat-value">87 ИП на сопровождении</span>
              </div>
            </div>
          </div>

          <div class="stats-row">
            <div class="stat-btn-wrapper">
              <a href="<?php echo home_url('/buhgalteria-ooo/'); ?>" class="btn btn_arr">Аутсорсинг <br>бухгалтерии для ООО</a>
            </div>
            <div class="stat-content">
              <div class="stat-col">
                <span class="stat-label">Опыт:</span>
                <span class="stat-value">583 компании</span>
              </div>
              <div class="stat-col">
                <span class="stat-label">Сейчас:</span>
                <span class="stat-value">157 компаний на обслуживании</span>
              </div>
            </div>
          </div>

          <div class="stats-row">
            <div class="stat-btn-wrapper">
              <a href="<?php echo home_url('/buhgalteria-oao/'); ?>" class="btn btn_arr">Аутсорсинг бухгалтерии <br>для НКО, ОАО и др.</a>
            </div>
            <div class="stat-content">
              <div class="stat-col">
                <span class="stat-label">Опыт:</span>
                <span class="stat-value">24 компании</span>
              </div>
              <div class="stat-col">
                <span class="stat-label">Сейчас:</span>
                <span class="stat-value">7 компаний на обслуживании</span>
              </div>
            </div>
          </div>

          <div class="stats-row">
            <div class="stat-btn-wrapper">
              <a href="<?php echo home_url('/buh-vosstanovlenie/'); ?>" class="btn btn_arr">Восстановление учёта</a>
            </div>
            <div class="stat-content">
              <div class="stat-result">
                <span class="stat-big-num">90+</span>
                <span class="stat-desc">кейсов успешно закрытых восстановлений</span>
              </div>
            </div>
          </div>

          <div class="stats-row">
            <div class="stat-btn-wrapper">
              <a href="<?php echo home_url('/express-audit-buhgalterii/'); ?>" class="btn btn_arr">Аудит бухгалтерии</a>
            </div>
            <div class="stat-content">
              <div class="stat-result">
                <span class="stat-big-num">300+</span>
                <span class="stat-desc">аудитов проведено</span>
              </div>
            </div>
          </div>

          <div class="stats-row">
            <div class="stat-btn-wrapper">
              <a href="<?php echo home_url('/dlya-otraslei/'); ?>" class="btn btn_arr">Юридические услуги и <br>налоговый консалтинг</a>
            </div>
            <div class="stat-content">
              <div class="stat-result">
                <span class="stat-big-num">154 МЛН ₽</span>
                <span class="stat-desc">экономии на налогах в год</span>
              </div>
            </div>
          </div>
        </div>

        <div class="stats-footer">
          <span class="footer-text">Расскажем, как быстро и безопасно передать бухгалтерию нам</span>
          <?php echo do_shortcode('[fluentform_modal css_class="btn btn_arr" form_id="3" btn_text="Получить консультацию"]'); ?>
        </div>
      </div>
    </section>

    <section class="tiles-block">
      <div class="tiles-block__container">
        <h2 class="tiles-block__header">
          Знаем специфику вашей отрасли и <span class="text-blue"> сразу называем цены </span>
        </h2>

        <div class="tiles-grid">

          <div class="industry-card">
            <div class="card-header">
              <div class="card-icon">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\online_shops.svg"
                     alt="Online shops Icon">
              </div>
              <h3 class="card-title">Интернет-магазины</h3>
            </div>
            <p class="card-desc">Учёт онлайн-продаж и маркетплейсов</p>
            <div class="card-price">от 35 000 ₽/мес</div>
          </div>

          <div class="industry-card">
            <div class="card-header">
              <div class="card-icon">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\cafe.svg" alt="cafe icon">
              </div>
              <h3 class="card-title">Кафе и рестораны</h3>
            </div>
            <p class="card-desc">Контроль поставок, зарплаты и списаний</p>
            <div class="card-price">от 40 000 ₽/мес</div>
          </div>

          <div class="industry-card">
            <div class="card-header">
              <div class="card-icon">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\beauty.svg"
                     alt="beauty icon">
              </div>
              <h3 class="card-title">Салоны красоты</h3>
            </div>
            <p class="card-desc">Прозрачный учёт услуг и зарплат мастеров</p>
            <div class="card-price">от 19 000 ₽/мес</div>
          </div>

          <div class="industry-card">
            <div class="card-header">
              <div class="card-icon">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\hotels.svg"
                     alt="hotels icon">
              </div>
              <h3 class="card-title">Гостиницы и хостелы</h3>
            </div>
            <p class="card-desc">Ведение учёта бронирований и договоров</p>
            <div class="card-price">от 39 000 ₽/мес</div>
          </div>

          <div class="industry-card">
            <div class="card-header">
              <div class="card-icon">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\buildings.svg"
                     alt="buildings icon">
              </div>
              <h3 class="card-title">Строительные компании</h3>
            </div>
            <p class="card-desc">Учёт подрядов, смет, НДС по стройматериалам</p>
            <div class="card-price">от 70 000 ₽/мес</div>
          </div>

          <div class="industry-card">
            <div class="card-header">
              <div class="card-icon">
                <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\med.svg" alt="med icon">
              </div>
              <h3 class="card-title">Медицинские центры и клиники</h3>
            </div>
            <p class="card-desc">Учёт лицензий, зарплат персонала, кассовой дисциплины</p>
            <div class="card-price">от 40 000 ₽/мес</div>
          </div>
        </div>

        <div class="industries-footer">
          <div class="footer-left">
            <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\tiles\spheres1.png"
                 alt="sphere icons" class="sphere-img">
            <span class="spheres-text">Ещё более 30 сфер</span>
          </div>
          <a href="#" class="btn btn_arr">Найдите свою</a>
        </div>
      </div>
    </section>

    <section class="pricing-table-section">
      <div class="pricing-table__container">

        <div class="scroll-indicator">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
          </svg>
        </div>

        <div class="table-wrapper">

          <div class="table-header-cell">Отрасль / Тип бизнеса</div>
          <div class="table-header-cell">Налоговая система</div>
          <div class="table-header-cell">Объём документов / мес.</div>
          <div class="table-header-cell">Цена, ₽ / мес.</div>

          <div class="table-cell">
            Интернет-магазин <br>на Маркетплейсе
          </div>
          <div class="table-cell">УСН 15%</div>
          <div class="table-cell">до 150</div>
          <div class="table-cell">41 000 ₽</div>

          <div class="table-cell">Кафе / ресторан</div>
          <div class="table-cell">УСН 6%</div>
          <div class="table-cell">до 500</div>
          <div class="table-cell">70 000 ₽</div>

          <div class="table-cell">Оптовая торговля (импорт)</div>
          <div class="table-cell">НДС, прибыль</div>
          <div class="table-cell">до 150</div>
          <div class="table-cell">55 000 ₽</div>

          <div class="table-cell">Производственная компания</div>
          <div class="table-cell">НДС, прибыль</div>
          <div class="table-cell">до 700</div>
          <div class="table-cell">150 000 ₽</div>

          <div class="table-cell">Строительная компания</div>
          <div class="table-cell">НДС, прибыль</div>
          <div class="table-cell">до 100</div>
          <div class="table-cell">55 000 ₽</div>

          <div class="table-cell">НКО (с аудитом)</div>
          <div class="table-cell">УСН 6%</div>
          <div class="table-cell">до 200</div>
          <div class="table-cell">50 000 ₽</div>

          <div class="table-cell">Грузоперевозки</div>
          <div class="table-cell">НДС, прибыль</div>
          <div class="table-cell">до 250</div>
          <div class="table-cell">80 000 ₽</div>

          <div class="table-cell">Детский сад</div>
          <div class="table-cell">УСН 6% + патент</div>
          <div class="table-cell">до 150</div>
          <div class="table-cell">28 000 ₽</div>

          <div class="table-cell">Резидент Сколково</div>
          <div class="table-cell">-</div>
          <div class="table-cell">до 100</div>
          <div class="table-cell">30 000 ₽</div>
        </div>
      </div>
    </section>

    <section class="services-accordion-section">
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
              <h3>Ведение бухучёта и налогового учёта</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Полностью берём на себя ведение бухгалтерского и налогового учёта: отражение всех операций, контроль
                  корректности данных, своевременное формирование документов.
                </p>
                <p class="accordion-body__bullets-title">Польза для вас:</p>
                <ul class="accordion-body__bullets">
                  <li>Исключаем ошибки, которые приводят к штрафам</li>
                  <li>Вы всегда видите актуальную картину финансов</li>
                  <li>Не нужно держать бухгалтера в штате</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Сдача отчётности в налоговую и фонды</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Сдаем всю обязательную отчётность вовремя и без ошибок: декларации, расчёты, статистику, фонды. Контролируем приём в ИФНС и оперативно реагируем, если требуется пояснение.
                </p>
                <p class="accordion-body__bullets-title">Польза для вас:</p>
                <ul class="accordion-body__bullets">
                  <li>Никакой просрочки и штрафов</li>
                  <li>Вам не нужно следить за сроками</li>
                  <li>Вся отчётность — в порядке и полностью под нашим контролем</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Оформление отпускных, больничных, командировок</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Правильно рассчитываем и оформляем отпускные, командировочные, больничные листы, компенсации и доплаты.
                </p>
                <p class="accordion-body__bullets-title">Польза для вас:</p>
                <ul class="accordion-body__bullets">
                  <li>Кадровые документы оформлены юридически корректно</li>
                  <li>Сотрудники получают выплаты точно и вовремя</li>
                  <li>Снижаете риск трудовых споров и претензий</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Общение с ИФНС и фондами от вашего имени</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Полностью берём на себя коммуникацию с проверяющими органами: отвечаем на требования, подготавливаем документы, даём пояснения.
                </p>
                <p class="accordion-body__bullets-title">Польза для вас:</p>
                <ul class="accordion-body__bullets">
                  <li>Меньше стресса и «бумажной работы»</li>
                  <li>Снижаем вероятность штрафов при проверках</li>
                  <li>Вам не нужно самостоятельно разбираться в требованиях</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Подготовка баланса, деклараций и платёжек</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Готовим бухгалтерский баланс, декларации по налогам, платежные поручения на оплату налогов, взносов и других обязательных платежей.
                </p>
                <p class="accordion-body__bullets-title">Польза для вас:</p>
                <ul class="accordion-body__bullets">
                  <li>Прозрачная и корректная финансовая отчётность</li>
                  <li>Ничего не переплачиваете и не пропускаете</li>
                  <li>Бухгалтерия готова к проверкам в любой момент</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Расчёт зарплаты и налогов</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Расчёт заработной платы, премий, удержаний, взносов, НДФЛ. Учитываем графики, сменность, особенности работы сотрудников.
                </p>
                <p class="accordion-body__bullets-title">Польза для вас:</p>
                <ul class="accordion-body__bullets">
                  <li>Точные расчёты — без долгов и переплат</li>
                  <li>Сотрудники довольны корректностью выплат</li>
                  <li>Соблюдение всех требований законодательства</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Консультации по бухгалтерии и налогам</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Даём рекомендации по оптимизации налогов, правильному оформлению документов, снижению рисков и повышению эффективности учёта.
                </p>
                <p class="accordion-body__bullets-title">Польза для вас:</p>
                <ul class="accordion-body__bullets">
                  <li>Принимаете решения на основе экспертных данных</li>
                  <li>Снижаете налоговую нагрузку законными методами</li>
                  <li>Всегда знаете, как действовать в любой ситуации</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="services-accordion__item">
            <div class="services accordion__header">
              <img src="<?php echo get_template_directory_uri(); ?>\static\img\icons\main-page\check-white-bg.svg"
                   alt="check" class="accordion__check-icon">
              <h3>Мониторинг изменений законодательства</h3>
            </div>
            <div class="accordion-item__body">
              <div class="accordion-item__content">
                <p class="accordion-body__main-text">
                  Отслеживаем изменения в налоговом и бухгалтерском законодательстве и сразу адаптируем ваш учёт под новые требования.
                </p>
                <p class="accordion-body__bullets-title">Польза для вас:</p>
                <ul class="accordion-body__bullets">
                  <li>Не нужно следить за новыми законами</li>
                  <li>Ваш бизнес всегда работает по актуальным правилам</li>
                  <li>Избежание штрафов из-за устаревших норм</li>
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
            <img src="<?php echo get_template_directory_uri(); ?>/static/img/banner/stack.png" alt="Пачка денег">
          </div>

        </div>
      </div>

    </section>

    <section class="tiles-cases">
      <div class="tiles-cases__container">
        <div class="cases-badge">
          <p>• Кейсы</p>
        </div>

        <h2 class="case-title">
          Экономим деньги, возвращаем налоги <span class="text-blue"> и защищаем бизнес от штрафов </span>
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

          <button class="btn btn_arr">Нужна консультация</button>
        </div>

      </div>
    </section>

    <section class="accordion-faq">
      <div class="faq-accordion__container">

          <h2 class="faq-accordion__title">
            Частые вопросы
          </h2>

          <h3 class="faq-accordion__subtitle">
            Мы собрали ответы на самые важные вопросы. Если не нашли нужное — оставьте заявку, и мы проконсультируем вас лично.
          </h3>

        <div class="faq-accordion">

          <div class="faq-accordion__item">
            <div class="faq accordion__header">
              <h3>Сколько стоит бухгалтерское обслуживание?</h3>
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
              <h3>Что входит в стоимость обслуживания?</h3>
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
              <h3>Как быстро вы начинаете работу?</h3>
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
              <h3>Кто отвечает за ошибки?</h3>
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
              <h3>Можно работать удалённо?</h3>
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
              <h3>Могу ли я поменять бухгалтера в процессе?</h3>
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

  </div>
<?php
get_footer();