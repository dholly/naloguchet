<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="archive-header default__container">
                <?php
                // Заголовок архива
                if (is_home()) {
                    echo '<h1>Блог</h1>';
                } else {
                    the_archive_title('<h1>', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                }
                ?>
            </section>

            <?php if (have_posts()) : ?>

                <section class="posts-grid default__container">
                    <?php while (have_posts()) : the_post(); ?>

                        <article <?php post_class('post-card'); ?>>

                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="post-card__thumbnail">
                                    <?php the_post_thumbnail('medium_large'); ?>
                                </a>
                            <?php endif; ?>

                            <div class="post-card__content">
                                <?php the_title('<h2 class="post-card__title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>

                                <div class="post-card__meta">
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                </div>

                                <div class="post-card__excerpt">
                                    <?php the_excerpt(); ?>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="post-card__link">Читать далее</a>
                            </div>

                        </article>

                    <?php endwhile; ?>
                </section>

                <nav class="pagination default__container">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '←',
                        'next_text' => '→',
                    ));
                    ?>
                </nav>

            <?php else : ?>

                <section class="no-posts default__container">
                    <p>Записей пока нет.</p>
                </section>

            <?php endif; ?>

        </main>
    </div>

<?php
get_footer();