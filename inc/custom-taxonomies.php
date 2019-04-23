<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Areas.
	 */

	$labels = array(
		"name" => __( "Areas", "understrap" ),
		"singular_name" => __( "Area", "understrap" ),
	);

	$args = array(
		"label" => __( "Areas", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'area', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "area",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "area", array( "us_portfolio" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
