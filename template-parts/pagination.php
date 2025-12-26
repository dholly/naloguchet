<?php
/**
 * Пагинация
 */


$pagination = paginate_links([
    'type'      => 'array',
    'prev_text' => '<img src="' . get_template_directory_uri() . '/static/img/icons/blue-left.svg" alt="Left Arrow" style="transform: rotate(180deg);">',
    'next_text' => '<img src="' . get_template_directory_uri() . '/static/img/icons/blue-right.svg" alt="Right Arrow">',
    'mid_size'  => 2,
]);

if ($pagination) : ?>
    <div class="pagination">
        <?php foreach ($pagination as $link) :
            $link = str_replace('page-numbers', 'pagination__num', $link);
            $link = str_replace('pagination__num current', 'pagination__num pagination__num_active', $link);
            $link = str_replace('pagination__num next', 'pagination__link', $link);
            $link = str_replace('pagination__num prev', 'pagination__link pagination__link_prev', $link);
            echo $link;
        endforeach; ?>
    </div>
<?php endif; ?>