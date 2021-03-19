<?php
// Register Custom Post Type
function ginther_event_post_type() {
	$labels = array(
		'name'                => _x( 'Events', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Events', 'text_domain' ),
		'name_admin_bar'      => __( 'Event', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Events', 'text_domain' ),
		'add_new_item'        => __( 'Add New Event', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Event', 'text_domain' ),
		'edit_item'           => __( 'Edit Event', 'text_domain' ),
		'update_item'         => __( 'Update Event', 'text_domain' ),
		'view_item'           => __( 'View Event', 'text_domain' ),
		'search_items'        => __( 'Search Event', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);

$args = array(
		'label'               => __( 'Events', 'text_domain' ),
		'description'         => __( 'Events Custom Post Type', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( ''),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-calendar-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'rewrite'             => array( 'slug' => 'news/events', 'with_front' => true ),
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
    'map_meta_cap'        => true,
    'query_var' 		  => true
    
	);

	register_post_type( 'events', $args );
}
add_action( 'init', 'ginther_event_post_type', 0 );



//Include Taxonomies Related to this post type
// require_once dirname(__FILE__) . '/taxonomies/video-categories.php';