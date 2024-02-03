<?php /* Template Name: Contact page */ ?>

<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php get_template_part('template-parts/breadcrumbs'); ?>

    <div class="block">

        <div class="block__padding">

            <div class="block__wrap">

                <div class="block__header">

                    <h1 class="block__title">Contact</h1>

                </div>

                <div class="block__main">

                    <div class="columns">

                        <div class="columns__item columns__item--small">
                            <aside class="sidebar">
                                <p>Lorem, ipsum dolor.</p>
                            </aside>
                        </div>

                        <div class="columns__item columns__item--large">

                            <?php echo do_shortcode('[contact-form-7 id="44d9806" title="Contactformulier 1"]'); ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main><!-- #main -->

<?php
get_footer();
