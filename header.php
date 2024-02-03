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
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/dist/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#F44336">

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