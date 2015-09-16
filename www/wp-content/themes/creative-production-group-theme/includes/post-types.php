<?php
/**
 * Custom Post Type: Portfolio
 */
function cpg_portfolio() {
	$labels = array(
		'name'               => 'portfolio',
		'singular_name'      => 'portfolio',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Featured',
		'edit_item'          => 'Edit portfolio',
		'new_item'           => 'New portfolio',
		'all_items'          => 'All portfolio',
		'view_item'          => 'View portfolio',
		'search_items'       => 'Search portfolio',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Portfolio',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);

register_post_type( 'portfolio', $args );
}
add_action( 'init', 'cpg_portfolio' );