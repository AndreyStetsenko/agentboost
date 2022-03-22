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

add_theme_support( 'post-thumbnails' );

// Reading Time

function estimated_reading_time() {
	$post = get_post();
	$postcnt = strip_tags( $post->post_content );
	$words = count(preg_split('/\s+/', $postcnt));
	$minutes = floor( $words / 120 );
	$seconds = floor( $words % 120 / ( 120 / 60 ) );
	if (1 <= $minutes){$estimated_time = $minutes . ' Min Read' . ($minutes == 1 ? '' : 's');}
	else{$estimated_time = $seconds . ' Sec Read' . ($seconds == 1 ? '' : 's');}
	echo $estimated_time;
}

// Send Form

function wpsa_handle_custom_form() {
	if (empty($_POST['nonce_custom_form'])) { return; }
	
	// $st1_contract_type = $_POST['st1-contract-type'];
	// $st1_label_type = $_POST['st1-label-type'];

	// $st2_first_name = $_POST['st2-first-name'];
	// $st2_last_name = $_POST['st2-last-name'];
	// $st2_social_security_no = $_POST['st2-social-security-no'];
	// $st2_male = $_POST['st2-male'];
	// $st2_female = $_POST['st2-female'];
	// $st2_birth_date = $_POST['st2-birth-date'];
	// $st2_email = $_POST['st2-email'];
	// $st2_resident_license = $_POST['st2-resident-license'];
	// // $st2_ = $_POST['st2-npn-num'];
	// // $st2_ = $_POST['st2-phone'];
	// // $st2_ = $_POST['st2-fax'];
	// // $st2_ = $_POST['st2-drivers-license'];
	// // $st2_ = $_POST['st2-drivers-license-state'];
	// // $st2_ = $_POST['st2-street-address'];
	// // $st2_ = $_POST['st2-zip-code'];
	// // $st2_ = $_POST['st2-city'];
	// // $st2_ = $_POST['st2-state'];
	// // $st2_ = $_POST['st2-mailing-street-address'];
	// // $st2_ = $_POST['st2-mailing-zip-code'];
	// // $st2_ = $_POST['st2-mailing-city'];
	// // $st2_ = $_POST['st2-mailing-state'];
	// // $st2_ = $_POST['example-radio-01'];
	// // $st2_ = $_POST['st2-benecifiar-name'];
	// // $st2_ = $_POST['st2-benecifiar-phone'];

	// $message = `
	// First Name: $st2_first_name
	// Last Name: $st2_last_name
	// Social Security NO: $st2_social_security_no
	// Male: $st2_male
	// Female: $st2_female
	// Birth Date: $st2_birth_date
	// Email: $st2_email
	// `;


	wp_mail( 'gremov04@gmail.com', 'Test Form!', 'Test' );
}

add_action('init', 'wpsa_handle_custom_form');