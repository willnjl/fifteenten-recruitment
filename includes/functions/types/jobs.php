<?php 

function fifteenten_register_cpt_jobs() {

	/**
	 * Post Type: Jobs.
	 */

	$labels = [
		"name" => __( "Jobs" ),
		"singular_name" => __( "Job" ),
		"menu_name" => __( "Jobs Board" ),
		"all_items" => __( "All Jobs" ),
		"add_new" => __( "Add new" ),
		"add_new_item" => __( "Add new Job" ),
		"edit_item" => __( "Edit Job" ),
		"new_item" => __( "New Job" ),
		"view_item" => __( "View Job" ),
		"view_items" => __( "View Jobs" ),
		"search_items" => __( "Search Jobs" ),
		"not_found" => __( "No Jobs found" ),
		"not_found_in_trash" => __( "No Jobs found in trash" ),
		"parent" => __( "Parent Job:" ),
		"featured_image" => __( "Featured image for this Job" ),
		"set_featured_image" => __( "Set featured image for this Job" ),
		"remove_featured_image" => __( "Remove featured image for this Job" ),
		"use_featured_image" => __( "Use as featured image for this Job" ),
		"archives" => __( "Job archives" ),
		"insert_into_item" => __( "Insert into Job" ),
		"uploaded_to_this_item" => __( "Upload to this Job" ),
		"filter_items_list" => __( "Filter Jobs list" ),
		"items_list_navigation" => __( "Jobs list navigation" ),
		"items_list" => __( "Jobs list" ),
		"attributes" => __( "Jobs attributes" ),
		"name_admin_bar" => __( "Job" ),
		"item_published" => __( "Job published" ),
		"item_published_privately" => __( "Job published privately." ),
		"item_reverted_to_draft" => __( "Job reverted to draft." ),
		"item_scheduled" => __( "Job scheduled" ),
		"item_updated" => __( "Job updated." ),
		"parent_item_colon" => __( "Parent Job:" ),
	];

	$args = [
		"label" => __( "Jobs" ),
		"labels" => $labels,
		'menu_icon'  => 'dashicons-businessman',
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "jobs", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "jobs", $args );
}


function fifteenten_create_example_job()
{

    $args = [
        'post_title' => 'Example Job Title',
        'post_type' => 'jobs',
		'post_status' => 'publish'
    ];


    wp_insert_post($args);
}