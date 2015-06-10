<?php
/**
 * Custom Post Type: Testimonial
 */
function cpg_testimonial() {
	$labels = array(
		'name'               => 'Testimonial',
		'singular_name'      => 'Testimonial',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Testimonial',
		'edit_item'          => 'Edit Testimonial',
		'new_item'           => 'New Testimonial',
		'all_items'          => 'All Testimonial',
		'view_item'          => 'View Testimonial',
		'search_items'       => 'Search Testimonial',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonial',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' ),
	);

register_post_type( 'Testimonial', $args );
}
add_action( 'init', 'cpg_testimonial' );

/**
 * Custom Post Type: Contacts
 */
function cpg_contacts() {
	$labels = array(
		'name'               => 'Contacts',
		'singular_name'      => 'Contacts',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Contacts',
		'edit_item'          => 'Edit Contacts',
		'new_item'           => 'New Contacts',
		'all_items'          => 'All Contacts',
		'view_item'          => 'View Contacts',
		'search_items'       => 'Search Contacts',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Contacts',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' ),
	);

register_post_type( 'Contacts', $args );
}
add_action( 'init', 'cpg_contacts' );

/**
 * Custom Post Type: Projects
 */
function cpg_projects() {
	$labels = array(
		'name'               => 'Projects',
		'singular_name'      => 'Projects',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Projects',
		'edit_item'          => 'Edit Projects',
		'new_item'           => 'New Projects',
		'all_items'          => 'All Projects',
		'view_item'          => 'View Projects',
		'search_items'       => 'Search Projects',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Projects',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projects' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);

register_post_type( 'Projects', $args );
}
add_action( 'init', 'cpg_projects' );

/**
 * Custom Post Type: Workers
 */
function cpg_workers() {
	$labels = array(
		'name'               => 'Workers',
		'singular_name'      => 'Workers',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Workers',
		'edit_item'          => 'Edit Workers',
		'new_item'           => 'New Workers',
		'all_items'          => 'All Workers',
		'view_item'          => 'View Workers',
		'search_items'       => 'Search Workers',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Workers',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'workers' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' ),
	);

register_post_type( 'Workers', $args );
}
add_action( 'init', 'cpg_workers' );

/**
 * Custom Post Type: Clients
 */
function cpg_clients() {
	$labels = array(
		'name'               => 'Clients',
		'singular_name'      => 'Clients',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Clients',
		'edit_item'          => 'Edit Clients',
		'new_item'           => 'New Clients',
		'all_items'          => 'All Clients',
		'view_item'          => 'View Clients',
		'search_items'       => 'Search Clients',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Clients',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'clients' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' ),
	);

register_post_type( 'Clients', $args );
}
add_action( 'init', 'cpg_clients' );