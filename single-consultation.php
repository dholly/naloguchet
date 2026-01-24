<?php get_header(); ?>

    <section class="cons-post first">
        <div class="cons-post__container">
            <h1 class="cons-post__title">
                <?php the_title(); ?>
            </h1>

            <div class="cons-post__meta">
                <span class="cons-post__date">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6667 2.66667H3.33333C2.59695 2.66667 2 3.26362 2 4V13.3333C2 14.0697 2.59695 14.6667 3.33333 14.6667H12.6667C13.403 14.6667 14 14.0697 14 13.3333V4C14 3.26362 13.403 2.66667 12.6667 2.66667Z" stroke="#999999" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.6667 1.33333V4" stroke="#999999" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5.33333 1.33333V4" stroke="#999999" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 6.66667H14" stroke="#999999" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    Дата ответа: <?php echo get_the_date('d F Y'); ?>
                </span>
            </div>

            <div class="cons-post__columns">
                <div class="cons-sidebar">
                    <div class="cons-sidebar__body">
                        <div class="cons-sidebar__person-info">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/faq-post/avatar.png" alt="Avatar">
                            <span>Булат Яппаров</span>
                        </div>

                        <p class="cons-sidebar__text">
                            Отвечает эксперт профессиональной бухгалтерии. Экономическое высшее, опыт бухгалтером 30 лет.
                        </p>
                        <a href="#ask-form" class="cons-sidebar__btn btn btn_arr">
                            Задать вопрос
                        </a>
                    </div>
                </div>

                <div class="cons__content">
                    <?php the_field( 'answer' ); ?>

                    <div class="ask-question" id="ask-form">
                        <h2 class="ask-question__title">
                            Задать свой вопрос
                        </h2>

                        <?php echo do_shortcode('[fluentform id="4"]'); ?>

                    </div>
                </div>

            </div>            
        </div>
    </section>

    <?php
    $current_paged = isset($_GET['cons_page']) ? max(1, intval($_GET['cons_page'])) : 1;

    $args = [
        'post_type'      => 'consultation', 
        'posts_per_page' => 8, 
        'post__not_in'   => [get_the_ID()], 
        'paged'          => $current_paged, 
        'orderby'        => 'date',
        'order'          => 'DESC',
    ];

    $similar_query = new WP_Query($args);

    if ($similar_query->have_posts()) : ?>

        <section class="similar-posts">
            <div class="similar-posts__container">
                <h1 class="similar-posts__title">
                    Похожие вопросы
                </h1>

                <div class="documents__items">
                    <?php while ($similar_query->have_posts()) : $similar_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="documents__item document document_dotted">
                            <div class="document__row">
                                <div class="document__left">
                                    <div class="document__icon"></div>
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

            </div>
        </section>

    <?php 
    endif;
    wp_reset_postdata(); 
    ?>

<?php get_footer(); ?>