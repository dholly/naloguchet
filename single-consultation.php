<?php get_header(); ?>

    <section class="cons-post">
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
                        <button class="cons-sidebar__btn btn btn_arr">
                            Задать вопрос
                        </button>
                    </div>
                </div>

                <div class="cons__content">
                    <?php the_field( 'answer' ); ?>
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

                <?php 
                if ($similar_query->max_num_pages > 1) : 
                ?>
                    <div class="documents__pagination">
                        <div class="pagination">
                            <?php
                            $links = paginate_links([
                                'base'      => add_query_arg('cons_page', '%#%'),
                                'format'    => '',
                                'current'   => $current_paged,
                                'total'     => $similar_query->max_num_pages,
                                'type'      => 'array',
                                'prev_text' => '<img src="' . get_template_directory_uri() . '/static/img/icons/blue-left.svg" alt="Left" style="transform: rotate(180deg);">',
                                'next_text' => '<img src="' . get_template_directory_uri() . '/static/img/icons/blue-right.svg" alt="Right">',
                                'mid_size'  => 2,
                            ]);

                            if ($links) {
                                foreach ($links as $link) {
                                    $link = str_replace('page-numbers', 'pagination__num', $link);
                                    $link = str_replace('pagination__num current', 'pagination__num pagination__num_active', $link);
                                    $link = str_replace('pagination__num next', 'pagination__link', $link);
                                    $link = str_replace('pagination__num prev', 'pagination__link pagination__link_prev', $link);
                                    
                                    echo $link;
                                }
                            }
                            ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </section>

    <?php 
    endif;
    wp_reset_postdata(); 
    ?>

<?php get_footer(); ?>