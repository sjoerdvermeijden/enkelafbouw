<?php

/**
 * enkelafbouw functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package enkelafbouw
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function enkelafbouw_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on enkelafbouw, use a find and replace
		* to change 'enkelafbouw' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('enkelafbouw', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'enkelafbouw'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'enkelafbouw_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'enkelafbouw_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function enkelafbouw_content_width()
{
	$GLOBALS['content_width'] = apply_filters('enkelafbouw_content_width', 640);
}
add_action('after_setup_theme', 'enkelafbouw_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function enkelafbouw_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'enkelafbouw'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'enkelafbouw'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'enkelafbouw_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function enkelafbouw_scripts()
{
	wp_enqueue_style('enkelafbouw-styles', get_template_directory_uri() . '/assets/dist/css/style.min.css', false, '1.0.0', 'all');

	wp_enqueue_script('enkelafbouw-scripts', get_template_directory_uri() . '/assets/dist/js/script.min.js', array(), '1.0.1', true);

	wp_style_add_data('enkelafbouw-style', 'rtl', 'replace');

	wp_enqueue_script('enkelafbouw-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'enkelafbouw_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom.php';

/**
 * ACF options page.
 */
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

	// Check function exists.
	if (function_exists('acf_add_options_sub_page')) {

		// Add parent.
		$parent = acf_add_options_page(array(
			'page_title'  => __('Theme General Settings'),
			'menu_title'  => __('Theme Settings'),
			'redirect'    => false,
		));

		// Add sub page.
		$child = acf_add_options_sub_page(array(
			'page_title'  => __('Social Settings'),
			'menu_title'  => __('Social'),
			'parent_slug' => $parent['menu_slug'],
		));

		// Add sub page.
		$child = acf_add_options_sub_page(array(
			'page_title'  => __('Contact Settings'),
			'menu_title'  => __('Contact'),
			'parent_slug' => $parent['menu_slug'],
		));
	}
}
