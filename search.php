<?php get_header(); ?>

    <section class="page__blog blog first">
        <div class="blog__container">
            
            <h1 class="blog__title title title_center">
                Результаты поиска: "<?php echo get_search_query(); ?>"
            </h1>

            <div class="section-search-wrapper">
                <form role="search" method="get" class="section-search-form" action="<?php echo home_url( '/' ); ?>">
                    <input type="text" class="section-search-input" placeholder="Поиск по статьям..." value="<?php echo get_search_query(); ?>" name="s">
                    <button type="submit" class="section-search-btn">Найти</button>
                    <input type="hidden" name="post_type" value="post" />
                </form>
            </div>

            <?php if (have_posts()) : ?>
                <div class="blog__items">
                    <?php while (have_posts()) : the_post(); ?>
                        
                        <div class="blog__item item-blog">
                            <div class="item-blog__body">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="item-blog__image">
                                        <?php the_post_thumbnail('medium_large', ['class' => 'ibg']); ?>
                                    </a>
                                <?php endif; ?>
                                <div class="item-blog__date"><?php echo get_the_date('d.m.Y'); ?></div>
                                <h4 class="item-blog__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="item-blog__text text text_base">
                                    <?php echo get_the_excerpt(); ?>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>

                <div class="blog__pagination">
                    <?php get_template_part('template-parts/pagination'); ?>
                </div>
            <?php else : ?>
                <div style="text-align: center; margin-top: 40px;">
                    <p class="title title_small">По вашему запросу ничего не найдено.</p>
                    <p>Попробуйте изменить формулировку или используйте другие ключевые слова.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>