<?php

/**
 * The template for displaying all single projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

                <div class="block__header block__header--center">

                    <h1 class="block__title"><?php the_title(); ?></h1>

                </div>

                <div class="block__main">

                    <div class="columns">
                        <div class="columns__item columns__item--small"></div>
                        <div class="columns__item columns__item--large"></div>
                    </div>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php get_template_part('template-parts/flexible-content'); ?>

</main><!-- #main -->

<?php
get_footer();
