<?php get_header(); ?>

<main class="first">
    <?php if (have_posts()) : while (have_posts()) : the_post(); 
        $current_id = get_the_ID();
    ?>
        
        <div class="single-post__container">
            
            <div class="single-post__top">
                <h1 class="single-post__title"><?php the_title(); ?></h1>
                
                <div class="single-post__meta">
                    <div class="meta-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/calendar.svg" alt="Date">
                        <span><?php echo get_the_date('d.m.Y'); ?></span>
                    </div>
                </div>
            </div>

            <div class="single-post__layout">
                
                <div class="single-post__left">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="single-post__thumb">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="content-body">
                        <?php the_content(); ?>
                    </div>
                </div>

                <aside class="single-post__sidebar">
                    <div class="expert-widget">
                        
                        <div class="expert-widget__close">x</div>

                        <div class="expert-widget__photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/form-section/Olga-sidebar.png" alt="Expert">
                        </div>

                        <div class="expert-widget__overlay-content">
                            
                            <h3 class="expert-widget__title">Я помогу вам разобраться!</h3>
                            <p class="expert-widget__name">Ольга Серебрякова</p>
                            <p class="expert-widget__prof">Главный бухгалтер ЦПБ</p>
                            
                            <button class="btn btn_arr">Получить консультацию</button>
                        </div>
                    </div>
                </aside>

            </div>
        </div>

    <?php endwhile; endif; ?>


    <?php 
        $related = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 6,
            'post__not_in' => [$current_id], 
            'orderby' => 'rand' 
        ]);

        if ($related->have_posts()) : ?>
        <section class="related-posts">
            <div class="related-posts__container">
                <h2 class="related-posts__title">Похожие темы</h2>
                
                <div class="related-slider swiper">
                    <div class="swiper-wrapper">
                        <?php while ($related->have_posts()) : $related->the_post(); ?>
                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>" class="related-card">
                                    <div class="related-card__img">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('medium_large'); 
                                        } else {
                                            echo '<img src="'. get_template_directory_uri() .'/static/img/no-photo.svg" alt="No photo">';
                                        } ?>
                                    </div>
                                    
                                    <div class="related-card__body">
                                        <div class="related-card__date"><?php echo get_the_date('d.m.Y'); ?></div>
                                        <h3 class="related-card__title"><?php the_title(); ?></h3>
                                        <div class="related-card__excerpt">
                                            <?php echo wp_trim_words(get_the_excerpt(), 12); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <div class="related-nav-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/arr-wh.svg" alt="Prev">
                </div>
                <div class="related-nav-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/arr-wh.svg" alt="Next">
                </div>
            </div>
        </section>
    <?php endif; wp_reset_postdata(); ?>

</main>

<?php get_footer(); ?>