<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: USPs.
	 */

	$labels = array(
		"name" => __( "USPs", "understrap" ),
		"singular_name" => __( "USP", "understrap" ),
	);

	$args = array(
		"label" => __( "USPs", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => false,
		"show_in_nav_menus" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "usps", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor" ),
	);

	register_post_type( "understrap_usps", $args );

	/**
	 * Post Type: USPs.
	 */

	$labels = array(
		"name" => __( "USPs", "understrap" ),
		"singular_name" => __( "USP", "understrap" ),
	);

	$args = array(
		"label" => __( "USPs", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "usps", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "custom-fields" ),
	);

	register_post_type( "us_usp", $args );

	/**
	 * Post Type: Portfolios.
	 */

	$labels = array(
		"name" => __( "Portfolios", "understrap" ),
		"singular_name" => __( "Portfolio", "understrap" ),
	);

	$args = array(
		"label" => __( "Portfolios", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolios", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields" ),
	);

	register_post_type( "us_portfolio", $args );

	/**
	 * Post Type: Languages.
	 */

	$labels = array(
		"name" => __( "Languages", "understrap" ),
		"singular_name" => __( "Language", "understrap" ),
	);

	$args = array(
		"label" => __( "Languages", "understrap" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "languages", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "custom-fields" ),
	);

	register_post_type( "us_lang", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
