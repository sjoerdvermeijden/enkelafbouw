<?php
$image = get_field('image');
?>


<div class="panorama">

    <figure class="panorama__image">
        <?php if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </figure>

    <div class="panorama__inner">

        <div class="panorama__label">

            <h2 class="panorama__contact">T: 061234567</h2>

        </div>

    </div>

</div>