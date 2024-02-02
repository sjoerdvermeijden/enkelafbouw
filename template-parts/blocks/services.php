<div class="block">

    <div class="block__padding">

        <div class="block__wrap">

            <div class="block__header block__header--center">

                <h2 class="block__title">Diensten</h2>

            </div>

            <div class="block__main">

                <?php
                $featured_posts = get_sub_field('services');

                if ($featured_posts) : ?>
                    <ul class="services">
                        <?php foreach ($featured_posts as $post) :

                            // Setup this post for WP functions (variable must be named $post).
                            setup_postdata($post); ?>

                            <li class="services__item">

                                <div class="service">

                                    <div class="service__icon icon">

                                        <svg>
                                            <use xlink:href="<?php echo esc_url(home_url('/wp-content/themes/enkelafbouw/assets/dist/svg/svg-sprite.svg#new-checked')); ?>"></use>
                                        </svg>

                                    </div>

                                    <h3 class="service__title"><?php the_title(); ?></h3>

                                </div>

                            </li>

                            <?php wp_reset_postdata(); ?>
                        <?php endforeach; ?>
                    </ul>

                    <?php
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>

        </div>

    </div>

</div>