<?php

/**
 * The template for displaying projects archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package enkelafbouw
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <div class="block">

        <div class="block__padding">

            <div class="block__wrap">

                <div class="block__header">

                    <h1 class="block__title">Projecten</h1>

                </div>

                <div class="block__main">

                    <div class="columns">

                        <div class="columns__item columns__item--small">

                        </div>

                        <div class="columns__item columns__item--large">

                            <?php
                            // WP_Query arguments
                            $args = array(
                                'post_type'              => array('projecten'),
                            );

                            // The Query
                            $query = new WP_Query($args); ?>

                            <ul class="projects">


                                <?php if ($query->have_posts()) : ?>
                                    <?php while ($query->have_posts()) : ?>
                                        <?php $query->the_post(); ?>

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
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <?php wp_reset_postdata(); ?>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php get_template_part('template-parts/flexible-content'); ?>

</main><!-- #main -->

<?php
get_footer();
