<?php

/**
 * enkelafbouw custom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package enkelafbouw
 */

// Our custom post type function
function create_posttype()
{

	register_post_type(
		'diensten',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Diensten'),
				'singular_name' => __('Dienst')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'diensten'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'menu_icon'           => 'dashicons-book',

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

// Our custom post type function
function create_projectposttype()
{

	register_post_type(
		'projecten',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Projecten'),
				'singular_name' => __('Project')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'projecten'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'menu_icon'           => 'dashicons-admin-home',

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_projectposttype');

// Options

if (function_exists('acf_add_options_page')) {

	acf_add_options_sub_page(array(
		'page_title'     => 'Projecten Page Content',
		'menu_title'    => 'projecten-page-content',
		'parent_slug'    => 'edit.php?post_type=projecten',
	));
}

// Custom image size
add_image_size('slider-image', 600, 200);

// Turn off p tags contact form 7
define('WPCF7_AUTOP', false);
