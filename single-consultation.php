<?php get_header(); ?>

    <section class="cons-post first">
        <div class="cons-post__container">
            <h1 class="cons-post__title">
                <?php the_title(); ?>
            </h1>
            <div class="cons-post__columns">
                <div class="cons-sidebar">
                    <div class="cons-sidebar__body">
                        <div class="cons-sidebar__person-info">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/faq-post/avatar.jpg" alt="Avatar">
                            <span>Булат Япаров</span>
                        </div>

                        <p class="cons-sidebar__text">
                            Отвечает эксперт профессиональной бухгалтерии. Экономическое высшее, опыт бухгалтером 25 лет.
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