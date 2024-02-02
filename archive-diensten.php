<?php

/**
 * The template for displaying services archive
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

                    <h1 class="block__title">Diensten</h1>

                </div>

                <div class="block__main">

                    <div class="columns">

                        <div class="columns__item columns__item--small"></div>

                        <div class="columns__item columns__item--large">

                            <?php
                            // WP_Query arguments
                            $args = array(
                                'post_type'              => array('diensten'),
                            );

                            // The Query
                            $query = new WP_Query($args); ?>

                            <ul class="services">


                                <?php if ($query->have_posts()) : ?>
                                    <?php while ($query->have_posts()) : ?>
                                        <?php $query->the_post(); ?>

                                        <li class="services__item">

                                            <div class="service">

                                                <h3 class="service__title"><?php the_title(); ?></h3>

                                            </div>

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

</main><!-- #main -->

<?php
get_footer();
