<?php get_header(); ?>

<section class="team-section first"> 
    <div class="team-section__container"> 

        <h1 class="team-title">
            Команда экспертов
        </h1>
        <div class="team-subtitle">
            Сильные специалисты с опытом работы от 15 до 30 лет
        </div>

        <div class="slider-navigation team-nav">
            <button class="nav-btn team-prev-btn" aria-label="Назад">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M10 19L3 12L10 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M3 12H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <button class="nav-btn team-next-btn" aria-label="Вперед">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M14 5L21 12L14 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12H3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
        </div>

    <?php 

    $args = [
        'post_type'      => 'staff', 
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    ];

    $team_query = new WP_Query($args);

    if ($team_query->have_posts()) : 
        
        $posts_array = $team_query->posts;
        
        $director = null;
        $team = [];

        foreach ($posts_array as $key => $post_item) {
            if (stripos($post_item->post_title, 'Булат') !== false && stripos($post_item->post_title, 'Яппаров') !== false) {
                $director = $post_item;
            } else {
                $team[] = $post_item; 
            }
        }

        if ($director) {
            array_unshift($team, $director);
        } else {
            $team = $posts_array;
        }

        ?>

        <div class="team-grid" id="teamScrollArea">
            <?php 
            foreach ($team as $index => $post) : 
                setup_postdata($post); 
                
                $card_class = 'team-card';
                if ($index === 0) {
                    $card_class .= ' team-card-large';
                }
            ?>
                
                <div class="<?php echo esc_attr($card_class); ?>">
                    
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : 
                            the_post_thumbnail('large', ['class' => 'card__person-img']); 
                        else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/static/img/no-photo.svg" alt="<?php the_title(); ?>" class="card__person-img">
                        <?php endif; ?>
                    </a>
                    
                    <div class="team-card__info">
                        
                        <div class="card__person-name">
                            <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </div>

                        <?php 
                        $position = get_field('employee_positions');
                        if ($position) : ?>
                            <div class="card__person-role">
                                <?php echo esc_html($position); ?>
                            </div>
                        <?php endif; ?>

                        <div class="card__person-desc">
                            <?php 
                            $education = get_field('employee_education');
                            if ($education) : ?>
                                <?php echo esc_html($education); ?>
                            <?php else: ?>
                                <?php echo get_the_excerpt(); ?>
                            <?php endif; ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="card-person__btn btn btn_arr" style="margin-top: 15px; width: 100%; justify-content: center;">
                            Подробнее
                        </a>

                    </div>
                </div>

            <?php 
            endforeach; 
            wp_reset_postdata();
            ?>
        </div>

    <?php else : ?>
        <p style="text-align: center;">Сотрудников пока нет.</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>