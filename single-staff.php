<?php get_header(); ?>

<main class="employee">
    <section class="employee__container">
        
        <?php while (have_posts()) : the_post(); 

            $content_data = get_content_images_and_text();
            
            $photo = get_field('employee_single_photo');
            $photo_url = $photo ? $photo['url'] : get_template_directory_uri() . '/static/img/no-photo.svg';
            
            $positions_str = get_field('employee_positions');
            $positions = $positions_str ? explode(',', $positions_str) : [];
        ?>

        <h1 class="employee__name"><?php the_title(); ?></h1>

        <?php if (!empty($positions)) : ?>
            <ul class="employee__position-list">
                <?php foreach ($positions as $pos) : ?>
                    <li class="employee__position-item">
                        <?php echo trim($pos); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <div class="employee__body">
            <div class="employee__photo">
                <img src="<?php echo esc_url($photo_url); ?>" alt="<?php the_title(); ?>">
            </div>

            <div class="employee__bio">
                <p><?php the_field('employee_education'); ?></p>
                <p><?php the_field('employee_experience'); ?></p>
            </div>
        </div>

        <?php if (!empty($content_data['images'])) : ?>
            <div class="employee__docs docs-section">
                <h2 class="docs-section__title">Документы об образовании и повышении квалификации</h2>

                <div class="docs-grid" id="docsScrollArea">
                    <?php foreach ($content_data['images'] as $img_tag) : 
                        preg_match('/src="([^"]+)"/', $img_tag, $src_match);
                        $full_src = isset($src_match[1]) ? $src_match[1] : '';
                    ?>
                        <div class="docs-item">
                            <a href="<?php echo esc_url($full_src); ?>" data-fslightbox="docs" class="docs-link">
                                <?php echo $img_tag; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php endwhile; ?>
    </section>
</main>

<?php get_footer(); ?>