<?php get_header(); ?>

    <section class="page__cases cases first">
        <div class="cases__container">
            <h1 class="cases__title title title_center">Бухгалтерские кейсы</h1>
            <div class="cases__text text">
                Решенные ситуации наших клиентов – реальные истории. Рассказываем, как мы помогли клиентам в непростых ситуациях с
                завалом в бухгалтерии, проблемами с главбухом, налоговиками, восстановлением учета. И сэкономили на налогах.
            </div>

            <?php if (have_posts()) : ?>
                <div class="cases__items">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="cases__item">
                            <div class="cases__top">
                                <div class="cases__icon">
                                    <?php
                                    // TODO: ACF поле для иконки
                                    $icon = get_field('case_icon');
                                    if ($icon) : ?>
                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="Icon">
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/cases/icon-01.svg" alt="Icon">
                                    <?php endif; ?>
                                </div>
                                <div class="cases__subtitle">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                            <div class="cases__subtext text text_base">
                                <?php echo get_the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="cases__btn btn btn_arr">
                                Подробнее
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="cases__pagination">
                    <?php get_template_part('template-parts/pagination'); ?>
                </div>
            <?php else : ?>
                <p>Кейсов пока нет.</p>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>