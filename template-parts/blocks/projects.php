<div class="block">

    <div class="block__padding">

        <div class="block__wrap">

            <div class="block__header block__header--center">

                <h1 class="block__title">Projecten</h1>

            </div>

            <div class="block__main">

                <?php
                $featured_posts = get_sub_field('projects');

                if ($featured_posts) : ?>
                    <ul class="projects">
                        <?php foreach ($featured_posts as $post) :

                            // Setup this post for WP functions (variable must be named $post).
                            setup_postdata($post); ?>

                            <li class="projects__item">

                                <a href="<?php the_permalink(); ?>" class="project">

                                    <figure class="project__image">
                                        <?php echo get_the_post_thumbnail($post_id, 'medium'); ?>
                                    </figure>

                                    <div class="project__content">

                                        <h3 class="project__title"><?php the_title(); ?></h3>

                                    </div>

                                </a>

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