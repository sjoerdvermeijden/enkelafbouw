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

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_projectposttype');
