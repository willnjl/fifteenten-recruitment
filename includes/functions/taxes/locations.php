<?php


function fifteenten_register_tax_job_locations() {

	/**
	 * Taxonomy: Job Locations.
	 */

	$labels = [
		"name" => __( "Job Locations" ),
		"singular_name" => __( "Job Location" ),
	];

	
	$args = [
		"label" => __( "Job Locations" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'job_locations', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "job_locations",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "job_locations", [ "jobs" ], $args );
}