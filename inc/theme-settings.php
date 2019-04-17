<?php
/**
 * Check and setup theme's default settings
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_setup_theme_default_settings' ) ) {
	function understrap_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$understrap_posts_index_style = get_theme_mod( 'understrap_posts_index_style' );
		if ( '' == $understrap_posts_index_style ) {
			set_theme_mod( 'understrap_posts_index_style', 'default' );
		}

		// Sidebar position.
		$understrap_sidebar_position = get_theme_mod( 'understrap_sidebar_position' );
		if ( '' == $understrap_sidebar_position ) {
			set_theme_mod( 'understrap_sidebar_position', 'right' );
		}

		// Container width.
		$understrap_container_type = get_theme_mod( 'understrap_container_type' );
		if ( '' == $understrap_container_type ) {
			set_theme_mod( 'understrap_container_type', 'container' );
		}
	}
}

function ustrap_theme_setup() {
	/**
	  * Theme Setup Custom Logo
	  */
	  add_theme_support( 'custom-logo', [
		'height'      => 60,
		'width'       => 200,
		'flex-height' => false,
		'flex-width'  => true,
		'header-text' => [ 'site-title', 'site-description' ],
	 ]);

	
	 /**
	  * Theme Setup Custom Header
	  */
	  add_theme_support( 'custom-header', [
		'default-image'      => get_stylesheet_directory_uri() . '/assets/img/default-image.jpg',
		'default-text-color' => '000',
		'width'              => 2560,
		'height'             => 350,
		'flex-width'         => true,
		'flex-height'        => true,
	]);
}
add_action('after_setup_theme', 'ustrap_theme_setup');

function us_the_custom_logo() {
	$custom_logo_id = get_theme_mod('custom_logo');

	$logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');

	if(has_custom_logo()) {
		echo '<img src="'. $logo_url[0] . '" class="img-fluid" alt="Site-Logo" title="' . get_bloginfo('name') . '">';
		
	} else {
		bloginfo('name');
	}
}
