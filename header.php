<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package enkelafbouw
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="site">

		<div class="site__offcanvas">

			<div class="offcanvas">

				<div class="offcanvas__header">

					<button class="offcanvas__close js-close">
						<span></span>
						<span></span>
						<span></span>
					</button>

				</div>

				<div class="offcanvas__menu">

					<nav class="mobile-navigation">

						<?php
						wp_nav_menu(array(
							'theme_location' 	=> 'menu-1',
							'container'			=> false,
							'items_wrap'		=> '<ul class="mobile-navigation__items">%3$s</ul>',
							'walker'  			=> new Walker_Quickstart_Menu() //use our custom walker
						));
						?>

					</nav><!-- #site-navigation -->

					<?php
					class Walker_Quickstart_Menu extends Walker_Nav_Menu
					{
						public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
						{
							$classes = array();

							if (!empty($item->classes)) {
								$classes = (array) $item->classes;
							}

							$class_names = array();

							if (in_array('current-menu-item', $classes) || in_array('current-menu-parent', $classes) || in_array('current-page-ancestor', $classes)) {
								$class_names[] = 'mobile-navigation__item--current';
							}

							if (in_array('menu-item-has-children', $classes)) {
								$class_names[] = 'has-submenu';
							}

							$class_names = join(' ', $class_names);

							$class_names = $class_names ? ' ' . esc_attr($class_names) . '' : '';

							$url = '';
							if (!empty($item->url)) {
								$url = $item->url;
							}

							$output .= '<li class="mobile-navigation__item' . $class_names . '"><a href="' . $url . '" class="mobile-navigation__link">' . $item->title . '</a>';
						}
					}
					?>

				</div>

			</div>

		</div>

		<header id="masthead" class="header">
			<div class="header__inner">
				<a href="<?php echo get_home_url(); ?>" class="logo">Enkelafbouw</a>
				<nav class="navigation">
					<?php
					wp_nav_menu(array(
						'theme_location' 	=> 'menu-1',
						'container'			=> false,
						'items_wrap'		=> '<ul class="navigation__items">%3$s</ul>',
						'walker'  			=> new Primary_Walker_Nav_Menu()
					));
					?>
				</nav><!-- #site-navigation -->

				<?php
				class Primary_Walker_Nav_Menu extends Walker_Nav_Menu
				{
					public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
					{
						$classes = array();

						if (!empty($item->classes)) {
							$classes = (array) $item->classes;
						}

						$class_names = array();

						if (in_array('current-menu-item', $classes) || in_array('current-menu-parent', $classes) || in_array('current-page-ancestor', $classes)) {
							$class_names[] = 'navigation__item--current';
						}

						if (in_array('menu-item-has-children', $classes)) {
							$class_names[] = 'has-submenu';
						}

						$class_names = join(' ', $class_names);

						$class_names = $class_names ? ' ' . esc_attr($class_names) . '' : '';

						$url = '';
						if (!empty($item->url)) {
							$url = $item->url;
						}

						$output .= '<li class="navigation__item' . $class_names . '"><a href="' . $url . '" class="navigation__link">' . $item->title . '</a>';
					}
				}

				?>

				<a href="" class="navigation-button js-mobile-button">
					<span></span>
					<span></span>
					<span></span>
				</a>

			</div>
		</header><!-- #masthead -->