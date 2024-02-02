<?php /* Template Name: Contact page */ ?>

<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <div class="block">

        <div class="block__padding">

            <div class="block__wrap">

                <div class="block__header">


                </div>

                <div class="block__main">

                    <?php echo do_shortcode('[contact-form-7 id="44d9806" title="Contactformulier 1"]'); ?>

                </div>

            </div>

        </div>

    </div>

    <?php get_template_part('template-parts/flexible-content'); ?>

</main><!-- #main -->

<?php
get_footer();
