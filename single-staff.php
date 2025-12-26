<?php get_header(); ?>

    <section class="page__human human first">
        <div class="human__container">
            <h1 class="human__name title">
                <?php the_title(); ?>
            </h1>

            <?php
            // TODO: ACF repeater для должностей
            $jobs = get_field('jobs');
            if ($jobs) : ?>
                <div class="human__jobs">
                    <?php foreach ($jobs as $job) : ?>
                        <div class="human__job">
                            <?php echo esc_html($job['job_name']); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="human__description">
                <div class="human__photo">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                </div>
                <div class="human__text text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php
// TODO: ACF gallery для дипломов
$diplomas = get_field('diplomas');
if ($diplomas) : ?>
    <section class="page__education education">
        <div class="education__container">
            <h2 class="education__title title">
                Документы об образовании и повышении квалификации
            </h2>
            <div class="education__slider-wrap">
                <div class="education__arr arr arr_prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arr-wh.svg" alt="Arrow">
                </div>
                <div class="education__arr arr arr_next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arr-wh.svg" alt="Arrow">
                </div>
                <div class="education__slider swiper">
                    <div data-gallery class="education__wrapper swiper-wrapper">
                        <?php foreach ($diplomas as $diploma) : ?>
                            <a href="<?php echo esc_url($diploma['url']); ?>" class="education__slide swiper-slide">
                                <img src="<?php echo esc_url($diploma['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($diploma['alt']); ?>">
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>