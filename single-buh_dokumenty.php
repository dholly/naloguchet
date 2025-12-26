<?php get_header(); ?>

<main class="page">
    
<?php
    if (have_posts()) : while (have_posts()) : the_post();
        $file_link = '#'; 
        
        $content = get_the_content();
        // Ищем <a>
        if ( preg_match( '/<a\s[^>]*?href=[\'"](.+?)[\'"]/i', $content, $matches ) ) {
            // $matches[1] содержит найденный URL
            $file_link = $matches[1];
        }
    ?>
        <section class="post-document">
            <div class="post-document__container">

                <h1 class="post-document__title title title_center">
                    <?php the_title(); ?>
                </h1>

                <p class="post-document__subtitle">
                    На нашем сайте вы можете скачать <?php the_title(); ?>. Все документы предназначены для ознакомления или заполнения.
                </p>   

                <div class="post-document__body">

                    <div class="post-document__download download">
                        <div class="download__row">
                            <div class="download__left">
                                <div class="download__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/static/img/icons/document-02.svg" alt="Word">
                                </div>
                                <div class="download__info">
                                    <div class="download__name">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="download__right">
                                <a href="<?php echo esc_url($file_link); ?>" class="download__btn btn btn_arr">Скачать</a>
                            </div>
                        </div>
                    </div>

                    <p class="post-document__content text text_base">
                        Вам доступны должностные инструкции, трудовые договоры, контракты на поставку товаров и оказание услуг, шаблоны заявлений, приказов и деловых писем, примеры ответов на запросы ИФНС, распорядительные документы, устав юридического лица и штатное расписание. Здесь же находятся актуальные бланки для учета материальных ценностей и проведения инвентаризации, доверенности и декларации. <br>
                        <br>На сайте представлены образцы форм. Если потребуется документ для конкретной ситуации в бизнесе, наша компания составит его, исходя из специфики фирмы и при необходимости проведет консультацию. Мы разработаем учетную политику и внутренние нормативные акты, подготовим бухгалтерскую и налоговую отчетность, оформим соглашения в рамках гражданского и трудового права.
                    </p>

                </div>
            </div>
        </section>

    <?php endwhile; endif; ?>

    <?php

    $current_paged = isset($_GET['doc_page']) ? max(1, intval($_GET['doc_page'])) : 1;

    $args = [
        'post_type'      => 'buh_dokumenty',
        'posts_per_page' => 7,
        'post__not_in'   => [get_the_ID()],
        'paged'          => $current_paged,
        'orderby'        => 'date',
        'order'          => 'DESC',
    ];

    $similar_query = new WP_Query($args);

    if ($similar_query->have_posts()) : ?>

        <section class="page__documents documents documents_post">
            <div class="documents__container">
                <h2 class="documents__title title title_center">
                    Похожие документы
                </h2>

                <div class="documents__items">
                    <?php while ($similar_query->have_posts()) : $similar_query->the_post(); ?>
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

                <?php 

                if ($similar_query->max_num_pages > 1) : 
                ?>
                    <div class="documents__pagination">
                        <div class="pagination">
                            <?php

                            $links = paginate_links([
                                'base'      => add_query_arg('doc_page', '%#%'),
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

</main>

<?php get_footer(); ?>