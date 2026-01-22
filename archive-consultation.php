<?php get_header(); ?>

    <section class="page__documents documents documents_faq first">
        <div class="documents__container">
            <h1 class="documents__title title title_center">
                Вопросы к Центру Профессиональной Бухгалтерии
            </h1>

            <div class="section-search-wrapper">
                <form role="search" method="get" class="section-search-form" action="<?php echo home_url( '/' ); ?>">
                    
                    <input type="text" 
                           class="section-search-input" 
                           placeholder="Найти ответ на вопрос..." 
                           value="<?php echo get_search_query(); ?>" 
                           name="s">
                    
                    <button type="submit" class="section-search-btn">
                        Найти
                    </button>

                    <input type="hidden" name="post_type" value="<?php echo get_post_type() ? get_post_type() : 'post'; ?>" />
                
                </form>
            </div>
            
            <?php if (have_posts()) : ?>
                <div class="documents__items">
                    <?php while (have_posts()) : the_post(); ?>
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

                <div class="documents__pagination">
                    <?php get_template_part('template-parts/pagination'); ?>
                </div>
            <?php else : ?>
                <p>Вопросов пока нет.</p>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>