<?php
/**
 * Custom Post Type: Project
 */
function cpg_project() {
	$labels = array(
		'name'               => 'project',
		'singular_name'      => 'project',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Featured',
		'edit_item'          => 'Edit project',
		'new_item'           => 'New project',
		'all_items'          => 'All project',
		'view_item'          => 'View project',
		'search_items'       => 'Search project',
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
		'capability_type'    => 'post',
		'rewrite'            => array( 'slug' => 'project' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);

register_post_type( 'project', $args );
}
add_action( 'init', 'cpg_project' );

/**
 * Custom Post Type: Worker
 */
function cpg_worker() {
	$labels = array(
		'name'               => 'worker',
		'singular_name'      => 'worker',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Featured',
		'edit_item'          => 'Edit worker',
		'new_item'           => 'New worker',
		'all_items'          => 'All worker',
		'view_item'          => 'View worker',
		'search_items'       => 'Search worker',
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
		'capability_type'    => 'post',
		'rewrite'            => array( 'slug' => 'worker' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);

register_post_type( 'worker', $args );
}
add_action( 'init', 'cpg_worker' );