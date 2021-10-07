<?php

function fifteenten_register_tax_contract_types() {

	/**
	 * Taxonomy: Contract Types.
	 */

	$labels = [
		"name" => __( "Contract Types" ),
		"singular_name" => __( "Contract Type" ),
	];

	
	$args = [
		"label" => __( "Contract Types" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'contract_types', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "contract_types",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "contract_types", [ "jobs" ], $args );
}
