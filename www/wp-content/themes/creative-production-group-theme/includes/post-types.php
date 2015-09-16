<?php
/**
 * Custom Post Type: Video
 */
function cpg_video() {
	$labels = array(
		'name'               => 'video',
		'singular_name'      => 'video',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Featured',
		'edit_item'          => 'Edit video',
		'new_item'           => 'New video',
		'all_items'          => 'All video',
		'view_item'          => 'View video',
		'search_items'       => 'Search video',
		'not_found'          => 'No event found',
		'not_found_in_trash' => 'No event found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Video',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'rewrite'            => array( 'slug' => 'video' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);

register_post_type( 'video', $args );
}
add_action( 'init', 'cpg_video' );