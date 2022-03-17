<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Agentboost
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function agentboost_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'agentboost_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function agentboost_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'agentboost_pingback_header' );

// ACF Options

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site General Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'site-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Site Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'site-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'ACF All Blocks',
		'menu_title'	=> 'ACF All Blocks',
		'parent_slug'	=> 'site-general-settings',
	));
	
}