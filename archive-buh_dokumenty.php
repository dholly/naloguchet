<?php get_header(); ?>

    <section class="page__documents documents first">
        <div class="documents__container">
            <h1 class="documents__title title title_center">
                Бухгалтерские документы
            </h1>
            <div class="documents__text text">
                Бухгалтерские документы: формы, первичные, нормативные, бланки и образцы – в электронном виде для скачивания
            </div>

            <?php if (have_posts()) : ?>
                <div class="documents__items">
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="documents__item document">
                            <div class="document__row">
                                <div class="document__left">
                                    <div class="document__icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/document.svg" alt="Icon">
                                    </div>
                                    <div class="document__name">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                                <div class="document__right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/arr-red.svg" alt="Arrow">
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>

                <div class="documents__pagination">
                    <?php get_template_part('template-parts/pagination'); ?>
                </div>
            <?php else : ?>
                <p>Документов пока нет.</p>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>