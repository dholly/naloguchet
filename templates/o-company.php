<?php
/**
 * Template Name: О компании
 */

get_header();
?>

  <div class="page-wrapper">

    <section class="pro-center">
        <div class="pro-center__container">

            <h1 class="pro-center__title">
                Центр Профессиональной Бухгалтерии
            </h1>

            <div class="pro-center__avatars-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/static/img/team/round-1.jpg"
                alt="Команда часть 1"
                class="pro-center__avatar-img">
                <img src="<?php echo get_template_directory_uri(); ?>/static/img/team/round-2.png"
                alt="Команда часть 2"
                class="pro-center__avatar-img">
            </div>

            <div class="pro-center__stats">

                <div class="pro-center__card">
                    <div class="pro-center__card-header">
                        <span class="text-blue">350+</span>
                        реальных отзывов
                    </div>
                    <div class="pro-center__card-body">
                        <p class="pro-center__card-desc">
                            4,9 рейтинг на независимых площадках
                        </p>
                        <a href="/otzivi/" class="pro-center__card-link">Отзывы</a>
                    </div>
                </div>

                <div class="pro-center__card">
                    <div class="pro-center__card-header">
                        <span class="text-blue">40+</span>
                        бухгалтерских кейсов
                    </div>
                    <div class="pro-center__card-body">
                        <p class="pro-center__card-desc">
                            По решению сложных ситуаций и оптимизации налогов
                        </p>
                        <a href="/buhgalterskie-keysi/" class="pro-center__card-link">Кейсы</a>
                    </div>
                </div>

                <div class="pro-center__card">
                    <div class="pro-center__card-header">
                        Команда из <span class="text-blue">26 сотрудников</span>
                    </div>
                    <div class="pro-center__card-body">
                        <p class="pro-center__card-desc">
                            С профессиональным опытом от 15 лет
                        </p>
                        <a href="/staff/" class="pro-center__card-link">Команда</a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="experience-section">
        <div class="experience__container">
            <h1 class="experience__title">
                Опыт, выраженный в цифрах
            </h1>

            <div class="experience__grid">
                <div class="experience__first-card">
                    <div class="experience__first-card-first-part">
                        <p class="top-text">Клиенты и услуги</p>
                        <p class="bottom-text">486+ <br><span>Клиентам оказали услуги</span></p>
                    </div>

                    <div class="experience__first-card-second-part">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/fields-graph.png"
                            alt="Fields graph"
                            class="experience__first-card-img">
                    </div>
                </div>

                <div class="experience__second-card">
                    <div class="experience__second-card-first-part">
                        <p class="top-text">Оценка качества наших услуг</p>
                        <p class="bottom-text">84% <br><span>Клиентов работают с нами более 3-х лет</span></p>
                    </div>

                    <div class="experience__second-card-second-part">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/round-stats.svg"
                            alt="Fields"
                            class="experience__second-card-second-part-img">
                        <div class="experience__second-card-second-part-text">
                            <p class="top-text">9.2</p>
                            <p class="bottom-text">Средння оценка качества наших услуг</p>
                        </div>
                    </div>
                </div>

                <div class="experience__third-card">
                    <p class="experience__third-card-upper-text">Работаем с 2009 года</p>
                    <p class="experience__third-card-bottom-text"> <span>16</span> лет опыта</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/stats-meter.svg"
                        alt="meter"
                        class="experience__third-card-img">
                </div>

                <div class="experience__fourth-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/avg-stat.png"
                        alt="average"
                        class="experience__fourth-card-img">

                    <div class="experience__fourth-card-content">
                        <p class="experience__fourth-card-upper-text"> <span>154</span> млн. руб.</p>
                        <p class="experience__fourth-card-bottom-text">В среднем экономим нашим клиентам в год на оптимизации налогообложения</p>
                    </div>
                </div>

                <div class="experience__fifth-card">
                    <span class="corner corner-tl"></span>
                    <span class="corner corner-tr"></span>
                    <span class="corner corner-bl"></span>
                    <span class="corner corner-br"></span>

                    <p class="experience__fifth-card-upper-text">
                        26 сотрудников в <br>нашей команде
                    </p>
                    <div class="experience__fifth-card-bottom-text">
                        <ul>
                            <li>12 главных бухгалтеров</li>
                            <li>4 налоговых консультанта</li>
                            <li>2 финаносвых директора</li>
                            <li>4 юриста</li>
                            <li>2 аудитора</li>
                            <li>2 бизнес-ассистента</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners-amount-section">
        <div class="partners-amount__container">
            <h1 class="partners-amount__title">Ведем бухгалтерию <span class="text-blue">у 251 компании</span></h1>
            <div class="partners-amount__card-wrapper">
                <div class="partners-amount__card-first">
                    <p class="partners-amount__card-first-title">Количество компаний</p>
                    <div class="partners-amount__card-first-body">

                        <div class="partners-amount__card-first-body-row">
                            <p class="partners-amount__card-first-body-row-name">Торговля</p>
                            <div class="partners-amount__card-first-body-row-stats">

                                <div class="partners-amount__card-first-body-row-stats-bar" style="width: 100%;"></div>
                                <p class="partners-amount__card-first-body-row-stats-amount">95 клиентов</p>
                            </div>
                        </div>

                        <div class="partners-amount__card-first-body-row">
                            <p class="partners-amount__card-first-body-row-name">Услуги</p>
                            <div class="partners-amount__card-first-body-row-stats">
                                <div class="partners-amount__card-first-body-row-stats-bar" style="width: 60%;"></div>
                                <p class="partners-amount__card-first-body-row-stats-amount">86 клиентов</p>
                            </div>
                        </div>

                        <div class="partners-amount__card-first-body-row">
                            <p class="partners-amount__card-first-body-row-name">Производство</p>
                            <div class="partners-amount__card-first-body-row-stats">

                                <div class="partners-amount__card-first-body-row-stats-bar" style="width: 40%;"></div>
                                <p class="partners-amount__card-first-body-row-stats-amount">30 клиентов</p>
                            </div>
                        </div>

                        <div class="partners-amount__card-first-body-row">
                            <p class="partners-amount__card-first-body-row-name">Маркетплейсы</p>
                            <div class="partners-amount__card-first-body-row-stats">
                                <div class="partners-amount__card-first-body-row-stats-bar" style="width: 37%;"></div>
                                <p class="partners-amount__card-first-body-row-stats-amount">29 клиентов</p>
                            </div>
                        </div>

                        <div class="partners-amount__card-first-body-row">
                            <p class="partners-amount__card-first-body-row-name">НКО</p>
                            <div class="partners-amount__card-first-body-row-stats">

                                <div class="partners-amount__card-first-body-row-stats-bar" style="width: 10%;"></div>
                                <p class="partners-amount__card-first-body-row-stats-amount">7 клиентов</p>
                            </div>
                        </div>

                        <div class="partners-amount__card-first-body-row">
                            <p class="partners-amount__card-first-body-row-name">Строительство</p>
                            <div class="partners-amount__card-first-body-row-stats">
                                <div class="partners-amount__card-first-body-row-stats-bar" style="width: 7%;"></div>
                                <p class="partners-amount__card-first-body-row-stats-amount">4 клиента</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="partners-amount__card-second">
                    <p class="partners-amount__card-second-title">
                        Годовой размер выручки наших клиентов в млн. и их количество
                    </p>

                    <div class="partners-amount__card-second-chart">

                        <div class="partners-amount__card-second-chart-col">
                            <div class="partners-amount__card-second-chart-col-label">до 50</div>
                            <div class="partners-amount__card-second-chart-col-bar" style="--h: 20%;">
                                <span class="partners-amount__card-second-chart-col-val">86</span>
                            </div>
                        </div>

                        <div class="partners-amount__card-second-chart-col">
                            <div class="partners-amount__card-second-chart-col-label">50-100</div>
                            <div class="partners-amount__card-second-chart-col-bar" style="--h: 50%;">
                                <span class="partners-amount__card-second-chart-col-val">75</span>
                            </div>
                        </div>

                        <div class="partners-amount__card-second-chart-col">
                            <div class="partners-amount__card-second-chart-col-label">100-500</div>
                            <div class="partners-amount__card-second-chart-col-bar" style="--h: 74%;">
                                <span class="partners-amount__card-second-chart-col-val">87</span>
                            </div>
                        </div>

                        <div class="partners-amount__card-second-chart-col">
                            <div class="partners-amount__card-second-chart-col-label">500-1 млрд.</div>
                            <div class="partners-amount__card-second-chart-col-bar" style="--h: 100%;">
                                <span class="partners-amount__card-second-chart-col-val">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="partners-amount__title">Решили проблемы с <br>бухгалтерией для <span class="text-blue">145 клиентов</span></h1>

            <div class="partners-amount__second-card-wrapper">

                <div class="partners-amount__second-card-first-part">

                    <div class="partners-amount__second-card-first-part-first-half">

                        <div class="partners-amount__second-card-first-part-first-half-rows">
                            <div class="partners-amount__second-card-first-part-first-half-rows-circle circle-blue"></div>
                            <div class="partners-amount__second-card-first-part-first-half-rows-name">Торговля</div>
                        </div>

                        <div class="partners-amount__second-card-first-part-first-half-rows">
                            <div class="partners-amount__second-card-first-part-first-half-rows-circle circle-orange"></div>
                            <div class="partners-amount__second-card-first-part-first-half-rows-name">Услуги, производство</div>
                        </div>

                        <div class="partners-amount__second-card-first-part-first-half-rows">
                            <div class="partners-amount__second-card-first-part-first-half-rows-circle circle-grey"></div>
                            <div class="partners-amount__second-card-first-part-first-half-rows-name">Маркетплейсы</div>
                        </div>

                    </div>

                    <div class="partners-amount__second-card-first-part-second-half">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/diagram-circle.svg"
                            alt="Диаграмма"
                            class="partners-amount__second-card-first-part-second-half-img">
                    </div>
                </div>

                <div class="partners-amount__second-card-second-part">
                    <div class="partners-amount__folder-wrapper">

                        <div class="partners-amount__folder">
                            <div class="partners-amount__folder-tab"></div>
                            <div class="partners-amount__folder-body">
                                <div class="partners-amount__folder-icon">
                                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5L4.5 8.5L13 1" stroke="#DA4F39" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <p class="partners-amount__folder-text">Провели более 300 налоговых консультаций</p>
                            </div>
                        </div>

                        <div class="partners-amount__folder">
                            <div class="partners-amount__folder-tab"></div>
                            <div class="partners-amount__folder-body">
                                <div class="partners-amount__folder-icon">
                                    <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5L4.5 8.5L13 1" stroke="#DA4F39" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <p class="partners-amount__folder-text">Провели более 300 экспресс-аудитов</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="progress-section">
        <div class="progress__container">
            <h1 class="progress__title">За 16 лет помогли <br> <span class="text-blue">более 500 компаниям</span> </h1>
            <p class="progress__subtitle">Среди наших клиентов — популярные бренды, резиденты Сколково и Forbes</p>

            <div class="scroll-indicator">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.19795 1.51494L0.497952 1.51294V3.51294L2.36995 3.51394C-1.21305 8.58794 -0.733048 15.6519 3.80795 20.1939L4.51495 20.8999L5.92895 19.4859L5.22195 18.7789C1.29995 14.8569 0.958952 8.70994 4.19795 4.39994V6.49994H6.19795V1.51494ZM7.97395 6.63794C7.45496 6.93767 7.07628 7.43127 6.92119 8.01018C6.7661 8.58909 6.84731 9.2059 7.14695 9.72494L11.179 16.7079L8.59595 17.5879C7.87695 17.8339 7.37595 18.4879 7.32795 19.2459L7.21795 20.9559L13.736 23.6479C14.528 23.9749 15.426 23.9159 16.167 23.4879L22.304 19.9449C22.8046 19.6552 23.2016 19.2155 23.4388 18.688C23.676 18.1605 23.7415 17.5717 23.626 17.0049L22.494 11.4789C22.3663 10.8594 22.0298 10.3026 21.5406 9.90154C21.0515 9.50051 20.4395 9.27966 19.807 9.27594L15.61 9.25594C15.1214 9.25389 14.641 9.38158 14.218 9.62594L12.786 10.4519L11.061 7.46494C10.7612 6.94595 10.2676 6.56726 9.68871 6.41218C9.1098 6.25709 8.49299 6.3383 7.97395 6.63794Z" fill="#D4D4D4" />
                </svg>
            </div>

            <div class="progress__grid">

                <div class="progress__grid-card">
                    <div class="progress__grid-card-title">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/edu.svg" alt="Icon" class="progress__grid-card-title-icon">
                        <div class="progress__grid-card-title-text">Образование, культура и развитие</div>
                    </div>
                    <div class="progress__grid-card-list">
                        <div class="progress__grid-card-list-item">Мария Батхан</div>
                        <div class="progress__grid-card-list-item">Clockwork</div>
                        <div class="progress__grid-card-list-item">Бэби Клуб</div>
                        <div class="progress__grid-card-list-item">Сегун Клуб</div>
                        <div class="progress__grid-card-list-item">ЦТК «Согласие»</div>
                        <div class="progress__grid-card-list-item">Puzzle House</div>
                    </div>
                </div>

                <div class="progress__grid-card">
                    <div class="progress__grid-card-title">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/prod.svg" alt="Icon" class="progress__grid-card-title-icon">
                        <div class="progress__grid-card-title-text">Производство и промышленность</div>
                    </div>
                    <div class="progress__grid-card-list">
                        <div class="progress__grid-card-list-item">Кабель Прайс</div>
                        <div class="progress__grid-card-list-item">Металлфорс</div>
                        <div class="progress__grid-card-list-item">ОКБ «Беркана»</div>
                        <div class="progress__grid-card-list-item">Пластпродукт</div>
                        <div class="progress__grid-card-list-item">Федаст</div>
                        <div class="progress__grid-card-list-item">Рав Лабз</div>
                    </div>
                </div>

                <div class="progress__grid-card">
                    <div class="progress__grid-card-title">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/trade.svg" alt="Icon" class="progress__grid-card-title-icon">
                        <div class="progress__grid-card-title-text">Торговля и ритейл</div>
                    </div>
                    <div class="progress__grid-card-list">
                        <div class="progress__grid-card-list-item">Сварогъ</div>
                        <div class="progress__grid-card-list-item">Мульти-спорт</div>
                        <div class="progress__grid-card-list-item">Sweet Dreams</div>
                        <div class="progress__grid-card-list-item">Дикмен</div>
                        <div class="progress__grid-card-list-item">СВ Авто</div>
                        <div class="progress__grid-card-list-item">ТДБ 1</div>
                    </div>
                </div>

                <div class="progress__grid-card">
                    <div class="progress__grid-card-title">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/food.svg" alt="Icon" class="progress__grid-card-title-icon">
                        <div class="progress__grid-card-title-text">HoReCa — кафе, рестораны, кофейни</div>
                    </div>
                    <div class="progress__grid-card-list">
                        <div class="progress__grid-card-list-item">Etlon Coffee</div>
                        <div class="progress__grid-card-list-item">Chowder & Pie</div>
                        <div class="progress__grid-card-list-item">ЧебурекМи</div>
                        <div class="progress__grid-card-list-item">Корндог</div>
                    </div>
                </div>

                <div class="progress__grid-card">
                    <div class="progress__grid-card-title">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/beauty.svg" alt="Icon" class="progress__grid-card-title-icon">
                        <div class="progress__grid-card-title-text">Красота, здоровье и клининг</div>
                    </div>
                    <div class="progress__grid-card-list">
                        <div class="progress__grid-card-list-item">Грин Бьюти</div>
                        <div class="progress__grid-card-list-item">Миссис Клинер</div>
                        <div class="progress__grid-card-list-item">Сиберрия Рус</div>
                    </div>
                </div>

                <div class="progress__grid-card">
                    <div class="progress__grid-card-title">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/other-comp.svg" alt="Icon" class="progress__grid-card-title-icon">
                        <div class="progress__grid-card-title-text">Другие компании</div>
                    </div>
                    <div class="progress__grid-card-list">
                        <div class="progress__grid-card-list-item">Комплексное строительство</div>
                        <div class="progress__grid-card-list-item">ПРО-Р</div>
                        <div class="progress__grid-card-list-item">КраунмаксЛогистик</div>
                        <div class="progress__grid-card-list-item">Оверсайз Рус</div>
                        <div class="progress__grid-card-list-item">МТСервис</div>
                        <div class="progress__grid-card-list-item">Геннис Групп</div>
                    </div>
                </div>
            </div>
            <h2 class="progress__bottom-title"><span class="text-blue">84% клиентов остаются с нами более трёх лет</span> — потому что ценят стабильность, точность и честный сервис</h2>
        </div>
    </section>

    <section class="audit-steps-section">
        <div class="audit-steps__container">
            <h1 class="audit-steps__title">Пять уровней контроля</h1>
            <div class="audit-steps">

                <div class="audit-steps__item">
                    <div class="audit-steps__item-header">
                        <span class="audit-steps__item-num">01</span>
                        <h3 class="audit-steps__item-title">Чек-листы по каждому <br>налогу и отчётности</h3>
                    </div>
                    <div class="audit-steps__item-body">
                        <p class="audit-steps__item-text">
                            У каждого специалиста есть собственный регламент действий, обновляемый при изменении законодательства
                        </p>
                    </div>
                </div>

                <div class="audit-steps__item">
                    <div class="audit-steps__item-header">
                        <span class="audit-steps__item-num">02</span>
                        <h3 class="audit-steps__item-title">Внутренняя двойная <br>перепроверка</h3>
                    </div>
                    <div class="audit-steps__item-body">
                        <p class="audit-steps__item-text">
                            Все документы проверяются вторым бухгалтером и руководителем направления
                        </p>
                    </div>
                </div>

                <div class="audit-steps__item">
                    <div class="audit-steps__item-header">
                        <span class="audit-steps__item-num">03</span>
                        <h3 class="audit-steps__item-title">Внешний аудит <br>внутри компании</h3>
                    </div>
                    <div class="audit-steps__item-body">
                        <p class="audit-steps__item-text">
                            Независимый аудитор ежеквартально проверяет выборку отчётности
                        </p>
                    </div>
                </div>

                <div class="audit-steps__item">
                    <div class="audit-steps__item-header">
                        <span class="audit-steps__item-num">04</span>
                        <h3 class="audit-steps__item-title">Сверки с <br>контрагентами и ФНС</h3>
                    </div>
                    <div class="audit-steps__item-body">
                        <p class="audit-steps__item-text">
                            Регулярная сверка по всем ключевым показателям, выявление расхождений заранее
                        </p>
                    </div>
                </div>

                <div class="audit-steps__item">
                    <div class="audit-steps__item-header">
                        <span class="audit-steps__item-num">05</span>
                        <h3 class="audit-steps__item-title">Контроль <br>руководителя</h3>
                    </div>
                    <div class="audit-steps__item-body">
                        <p class="audit-steps__item-text">
                            Финальное одобрение и подпись лично директора или главного бухгалтера перед сдачей отчётности
                        </p>
                    </div>
                </div>
            </div>

            <p class="audit-steps__bottom-title">В ЦПБ качество — это не абстрактное слово</p>
            <p class="audit-steps__bottom-subtitle">Это строгая, регламентированная система. Каждый отчёт, документ и операция проходят несколько уровней проверки, прежде чем попасть в налоговую или к клиенту. Благодаря этой системе за 16 лет  у наших клиентов не было ни одного штрафа или просрочки.</p>
        </div>
    </section>

    <section class="founder-block">
        <div class="founder-block__container">
            <h1 class="founder-block__title">Личный контроль и <br>ответственность <span class="text-blue">за каждый проект</span></h1>

            <div class="founder-block__wrapper">

                <div class="founder-block__col-photo">
                    <div class="founder-block__photo-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/human/bulat-yapparov-founder-block.png"
                            alt="Булат Яппаров"
                            class="founder-block__photo-img">
                    </div>
                </div>

                <div class="founder-block__col-content">

                    <div class="founder-block__quote">
                        <div class="founder-block__quote-icon">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.6992 12.5999L16.7992 8.3999H12.5992C7.95822 8.3999 4.19922 14.2589 4.19922 18.8999V33.5999H18.8992V18.8999H10.4992C10.4992 12.5999 14.6992 12.5999 14.6992 12.5999ZM29.3992 18.8999C29.3992 12.5999 33.5992 12.5999 33.5992 12.5999L35.6992 8.3999H31.4992C26.8582 8.3999 23.0992 14.2589 23.0992 18.8999V33.5999H37.7992V18.8999H29.3992Z" fill="#2D6281" />
                            </svg>
                        </div>
                        <p class="founder-block__quote-text">
                            «Хорошая бухгалтерия — это когда владелец бизнеса спит спокойно, а мы не получаем звонков из ФНС»
                        </p>
                        <div class="founder-block__quote-author">
                            <strong>— Булат Яппаров</strong><br>
                            <span>директор Центра Профессиональной Бухгалтерии</span>
                        </div>
                    </div>

                    <div class="founder-block__list">

                        <div class="founder-block__list-item">
                            <div class="founder-block__list-icon">
                                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5L4.5 8.5L11 1" stroke="#DA4F39" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="founder-block__list-text">В профессии более 30 лет, из них 16 лет руководит командой аутсорсинговых бухгалтеров</p>
                        </div>

                        <div class="founder-block__list-item">
                            <div class="founder-block__list-icon">
                                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5L4.5 8.5L11 1" stroke="#DA4F39" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="founder-block__list-text">Лауреат премии «Бухгалтер года — 2020», член профессионального сообщества аудиторов и финансовых консультантов</p>
                        </div>

                        <div class="founder-block__list-item">
                            <div class="founder-block__list-icon">
                                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5L4.5 8.5L11 1" stroke="#DA4F39" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="founder-block__list-text">Лично курирует ключевые проекты, проверяет качество работы специалистов и остаётся на связи с клиентами — от стартапов до производственных компаний.</p>
                        </div>

                        <div class="founder-block__list-item">
                            <div class="founder-block__list-icon">
                                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5L4.5 8.5L11 1" stroke="#DA4F39" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="founder-block__list-text">Главный принцип, который Булат внедрил в ЦПБ — никаких формальностей</p>
                        </div>

                        <div class="founder-block__list-item">
                            <div class="founder-block__list-icon">
                                <svg width="12" height="10" viewBox="0 0 12 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5L4.5 8.5L11 1" stroke="#DA4F39" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="founder-block__list-text">Каждый сотрудник понимает, что за каждой цифрой стоит живой бизнес и люди, которые доверили нам свою финансовую безопасность</p>
                        </div>

                    </div>
                </div>

                <div class="founder-block__philosophy">
                    <p class="founder-block__philosophy-text">
                        <span>Наша философия проста: надёжность, ответственность и уважение к бизнесу клиента.</span>
                        Эти принципы не меняются с 2009 года — именно они сделали ЦПБ тем, чем она является сегодня.
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();