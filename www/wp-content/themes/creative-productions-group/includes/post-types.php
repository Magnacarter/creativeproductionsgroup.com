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
		'rewrite'            => array( 'slug' => 'contact' ),
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
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' ),
	);

register_post_type( 'Projects', $args );
}
add_action( 'init', 'cpg_projects' );