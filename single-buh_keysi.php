<?php get_header(); ?>

<main class="page__case-single case-single">
    <section class="case-single__container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php
            $client_desc = get_field('case_client_desc');

            $initial = get_field('case_initial');
            $problems = get_field('case_problems');
            $solution = get_field('case_solution');
            $result = get_field('case_result');

            $is_new_format = ($initial || $problems || $solution);

            // URL для картинок
            $template_uri = get_template_directory_uri();
            $check_icon = $template_uri . '/static/img/icons/check.svg';
            $card_bg = $template_uri . '/static/img/contacts/bc.jpg';
            ?>

            <div class="case-single__layout">

                <div class="case-single__main">

                    <h1 class="case-single__title">
                        <?php the_title(); ?>
                    </h1>

                    <div class="case-single__excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <?php if ($client_desc) : ?>
                        <div class="client-card client-card--mobile" style="background-image: url('<?php echo esc_url($card_bg); ?>');">
                            <div class="client-card__icon">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="19" cy="19" r="18.5" stroke="#E5E5E5" stroke-dasharray="2 2" />
                                </svg>
                                <img src="<?php echo esc_url($check_icon); ?>" class="client-card__check" alt="Check">
                            </div>
                            <div class="client-card__text">
                                <?php echo nl2br(esc_html($client_desc)); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($is_new_format) : ?>
                        <div class="case-structure">

                            <?php if($initial): ?>
                            <div class="case-structure__section">
                                <h2 class="case-structure__heading">Исходные данные</h2>
                                <div class="case-structure__content text-block">
                                    <?php echo $initial; ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($problems): ?>
                            <div class="case-structure__section">
                                <h2 class="case-structure__heading">Проблемы</h2>
                                <div class="case-structure__content text-block">
                                    <?php echo $problems; ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($solution): ?>
                            <div class="case-structure__section">
                                <h2 class="case-structure__heading">Что сделали мы</h2>
                                <div class="case-structure__content text-block">
                                    <?php echo $solution; ?>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($result): ?>
                            <div class="case-structure__section">
                                <h2 class="case-structure__heading">Результат</h2>
                                <div class="case-structure__content text-block">
                                    <?php echo $result; ?>
                                </div>
                            </div>
                            <?php endif; ?>

                        </div>
                        
                    <?php else : ?>
                        <div class="text-block">
                            <?php 
                            $content = get_the_content();
                            $excerpt = get_the_excerpt();

                            $content = apply_filters('the_content', $content);

                            $clean_excerpt = trim(preg_replace('/\[[^\]]+\]$/', '', $excerpt));
                            $excerpt_start = mb_substr($clean_excerpt, 0, 50);
                            
                            if ( strpos(strip_tags($content), $excerpt_start) !== false ) {
                                $content = preg_replace('/'.preg_quote($clean_excerpt, '/').'/iu', '', $content, 1);
                                
                                $content = str_replace('<p></p>', '', $content);
                                $content = str_replace('<p>&nbsp;</p>', '', $content);
                            }

                            echo $content; 
                            ?>
                        </div>
                    <?php endif; ?>

                </div>

                <aside class="case-single__sidebar">
                    <?php if ($client_desc) : ?>
                        <div class="client-card client-card--desktop" style="background-image: url('<?php echo esc_url($card_bg); ?>');">
                            <div class="client-card__icon">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="19" cy="19" r="18.5" stroke="#E5E5E5" stroke-dasharray="2 2" />
                                </svg>
                                <img src="<?php echo esc_url($check_icon); ?>" class="client-card__check" alt="Check">
                            </div>
                            <div class="client-card__text">
                                <?php echo nl2br(esc_html($client_desc)); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </aside>

            </div>

        <?php endwhile; endif; ?>
    </section>
</main>

<?php get_footer(); ?>