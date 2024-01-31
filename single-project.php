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

    <div class="block">

        <div class="block__padding">

            <div class="block__wrap">

                <div class="block__header block__header--center">

                    <h1 class="block__title"></h1>

                </div>

                <div class="block__main"></div>

            </div>

        </div>

    </div>

    <?php get_template_part('template-parts/flexible-content'); ?>

</main><!-- #main -->

<?php
get_footer();
