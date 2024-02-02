<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enkelafbouw
 */

?>

<footer class="footer">
	<div class="footer__wrap">

		<ul class="footer__items">

			<li class="footer__item footer__item--contact">

				<div class="footer-list">

					<h3 class="footer-list__header">Contact</h3>

				</div>

			</li>

			<li class="footer__item">

				<div class="footer-list">

					<h3 class="footer-list__header">Diensten</h3>

					<ul class="footer-list__list">

						<?php
						$args = array(
							'post_type' => array('diensten'),
						);

						$query = new WP_Query($args); ?>

						<?php if ($query->have_posts()) : ?>
							<?php while ($query->have_posts()) : ?>
								<?php $query->the_post(); ?>

								<li class="footer-list__item">

									<a href="<?php the_permalink(); ?>" class="list-item">
										<?php the_title(); ?>
									</a>

								</li>

							<?php endwhile; ?>
						<?php endif; ?>

						<?php wp_reset_postdata(); ?>

					</ul>

				</div>

			</li>

			<li class="footer__item">

				<div class="footer-list">

					<h3 class="footer-list__header">Projecten</h3>

					<ul class="footer-list__list">

						<?php
						$args = array(
							'post_type' => array('projecten'),
						);

						$query = new WP_Query($args); ?>

						<?php if ($query->have_posts()) : ?>
							<?php while ($query->have_posts()) : ?>
								<?php $query->the_post(); ?>

								<li class="footer-list__item">

									<a href="<?php the_permalink(); ?>" class="list-item">
										<?php the_title(); ?>
									</a>

								</li>

							<?php endwhile; ?>
						<?php endif; ?>

						<?php wp_reset_postdata(); ?>

					</ul>

				</div>

			</li>

		</ul>
	</div>
</footer><!-- #colophon -->
<div class="bottom">
	<div class="bottom__inner">
		<p class="copyright">enkelafbouw.nl &copy; <?php echo date('Y'); ?></p>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>