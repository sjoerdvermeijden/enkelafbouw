<div class="block">

    <div class="block__padding">

        <div class="block__wrap">

            <div class="block__main">

                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php
                        // WP_Query arguments
                        $args = array(
                            'post_type' => array('projecten'),
                        );

                        // The Query
                        $query = new WP_Query($args);
                        ?>

                        <?php if ($query->have_posts()) : ?>
                            <?php while ($query->have_posts()) : ?>
                                <?php $query->the_post(); ?>

                                <div class="swiper-slide">
                                    <div class="slide">
                                        <figure class="slide-image"><?php echo get_the_post_thumbnail($post_id, 'medium'); ?></figure>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>

                </div>

            </div>

        </div>

    </div>

</div>