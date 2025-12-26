<?php get_header(); ?>

    <section class="page__team team first">
        <div class="team__container">
            <h1 class="team__title title title_center">
                Команда экспертов
            </h1>
            <div class="team__text text">
                Сильные специалисты с опытом работы от 15 до 30 лет
            </div>

            <?php if (have_posts()) : ?>
                <div class="team__items">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="team__item">
                            <div class="team__photo">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); /* Лучше large для качества */ ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/team/placeholder.png" alt="Photo">
                                <?php endif; ?>
                            </div>
                            
                            <div class="team__description">
                                <div class="team__name">
                                    <?php 
                                    // 1. Получаем заголовок
                                    $full_name = get_the_title();
                                    // 2. Разбиваем на массив слов
                                    $name_parts = explode(' ', trim($full_name));
                                    // 3. Берем только первые 2 слова и склеиваем обратно
                                    echo esc_html(implode(' ', array_slice($name_parts, 0, 2))); 
                                    ?>
                                </div>

                                <?php
                                // ACF поле для должности
                                $job = get_field('job_title');
                                if ($job) : ?>
                                    <div class="team__job">
                                        <?php echo esc_html($job); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="team__resume">
                                    <!-- Выводим цитату, очищенную от лишних тегов -->
                                    <?php echo get_the_excerpt(); ?>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="team__btn btn btn_arr">
                                    Подробнее
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p>Сотрудников пока нет.</p>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>