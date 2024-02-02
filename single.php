<?php

/**
 * The template for displaying all single posts
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

				<div class="block__header">

					<h1 class="block__title"><?php the_title(); ?></h1>

				</div>

				<div class="block__main">

					<div class="content">
						<?php the_content(); ?>
					</div>

				</div>

			</div>

		</div>

	</div>

</main><!-- #main -->

<?php
get_footer();
