<?php get_header(); ?>

    <section class="blog default__container">
        <h1 class="blog__title">Блог</h1>

        <?php if (have_posts()) : ?>

            <div class="blog__grid">
                <?php while (have_posts()) : the_post(); ?>

                    <article class="post-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="post-card__thumbnail">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </a>
                        <?php endif; ?>

                        <div class="post-card__content">
                            <time class="post-card__date" datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>

                            <?php the_title('<h2 class="post-card__title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>

                            <div class="post-card__excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>

            <?php the_posts_pagination([
                'prev_text' => '←',
                'next_text' => '→',
            ]); ?>

        <?php else : ?>

            <p>Записей пока нет.</p>

        <?php endif; ?>
    </section>

<?php get_footer(); ?>