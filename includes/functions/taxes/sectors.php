<?php 

function fifteenten_register_tax_sector() {

	/**
	 * Taxonomy: Sectors.
	 */

	$labels = [
		"name" => __( "Sectors" ),
		"singular_name" => __( "sector" ),
	];

	
	$args = [
		"label" => __( "Sectors" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'sector', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "sector",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];

    
	register_taxonomy( "sector", [ "jobs" ], $args );
}
