<?php
// loop over the ACF flexible fields for this page / post
while (the_flexible_field('flexible_content')) : ?>

    <?php get_template_part('template-parts/blocks/' . get_row_layout()); ?>

<?php endwhile; ?>