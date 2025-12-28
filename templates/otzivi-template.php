<?php
/*
Template Name: Отзывы
*/

get_header(); 
?>

    <section class="otzivi-header">
        <div class="otzivi__container"> 

            <h1 class="otzivi__title">Отзывы и благодарственные письма</h1>

            <p class="otzivi__subtitle">
                150+ положительных отзывов на независимых площадках
            </p>

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
        </div>
    </section>

    <section class="otzivi-tiles">
        <div class="otzivi-tiles__container">
            
            <?php

            $letters_query = new WP_Query([
                'post_type' => 'reviews',
                'posts_per_page' => -1,
                'meta_query' => [
                    [
                        'key' => 'review_type',
                        'value' => 'letter',
                        'compare' => '='
                    ]
                ]
            ]);

            $video_query = new WP_Query([
                'post_type' => 'reviews',
                'posts_per_page' => -1,
                'meta_query' => [
                    [
                        'key' => 'review_type',
                        'value' => 'video',
                        'compare' => '='
                    ]
                ]
            ]);
            ?>

            <div class="otzivi-tiles__switch">
                <button class="otzivi-tiles__btn active-switch" data-target="letters">Благодарственные письма</button>

                <?php if ($video_query->have_posts()) : ?>
                    <button class="otzivi-tiles__btn" data-target="videos">Видео-отзывы</button>
                <?php endif; ?>
            </div>

            <div id="letters" class="otzivi-tiles__content active-tiles">
                <div class="otzivi-tiles__grid">
                    <?php if ($letters_query->have_posts()) : while ($letters_query->have_posts()) : $letters_query->the_post(); ?>
                        <div class="otzivi-tiles__single-letter item-card">
                            <div class="otzivi-tiles__img-wrapper">
                                <?php if (has_post_thumbnail()) : 
                                    the_post_thumbnail('large');
                                endif; ?>
                            </div>
                            
                            <div class="otzivi-tiles__letter-text-body">
                                <div class="otzivi-tiles__letter-text-comp"><?php the_title(); ?></div>
                                <div class="otzivi-tiles__letter-text-main"><?php the_field('review_desc'); ?></div>
                            </div>
                        </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
                
                <?php if ($letters_query->found_posts > 9) : ?>
                    <button class="otzivi-tiles__show-more-btn">Показать еще</button>
                <?php endif; ?>
            </div>

            <?php if ($video_query->have_posts()) : ?>
                <div id="videos" class="otzivi-tiles__content">
                    <div class="otzivi-tiles__grid">
                        <?php while ($video_query->have_posts()) : $video_query->the_post(); 
                            $video_link = get_field('review_video_link');
                        ?>
                            <div class="otzivi-tiles__single-video item-card">
                                <a href="<?php echo esc_url($video_link); ?>" class="video-link" data-fslightbox="videos">
                                    <div class="video-overlay">
                                        <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/play-video.svg" alt="Play" class="play-icon">
                                    </div>
                                    <?php 
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('medium_large');
                                    } else {
                                        echo '<div class="no-thumb"></div>';
                                    }
                                    ?>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>

                    <?php if ($video_query->found_posts > 9) : ?>
                        <button class="otzivi-tiles__show-more-btn">Показать еще</button>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
        </div>
    </section>

<?php get_footer(); ?>