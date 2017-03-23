<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function icef_cpt_team() {

	$labels = array(
		'name'                  => _x( 'Our Team', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Team Type', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Team Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Team Type', 'text_domain' ),
		'archives'              => __( 'Teammate Archives', 'text_domain' ),
		'attributes'            => __( 'Teammate Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Teammate:', 'text_domain' ),
		'all_items'             => __( 'All Teammates', 'text_domain' ),
		'add_new_item'          => __( 'Add New Teammate', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Teammate', 'text_domain' ),
		'edit_item'             => __( 'Edit Teammate', 'text_domain' ),
		'update_item'           => __( 'Update Teammate', 'text_domain' ),
		'view_item'             => __( 'View Teammate', 'text_domain' ),
		'view_items'            => __( 'View Teammates', 'text_domain' ),
		'search_items'          => __( 'Search Teammate', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into teammate', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Teammate', 'text_domain' ),
		'items_list'            => __( 'Teammates list', 'text_domain' ),
		'items_list_navigation' => __( 'Teammates list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Teammates list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'team_type',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Team Type', 'text_domain' ),
		'description'           => __( 'Team Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'custom-fields','title','revisions' ),
		'taxonomies'            => array( 'category', 'team_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'team_type', $args );

}
add_action( 'init', 'icef_cpt_team', 0 );

// Register Custom Post Type
function project_post_type() {

	$labels = array(
		'name'                  => 'Project Types',
		'singular_name'         => 'Project Type',
		'menu_name'             => 'Project Types',
		'name_admin_bar'        => 'Project Type',
		'archives'              => 'Project Archives',
		'attributes'            => 'Project Attributes',
		'parent_item_colon'     => 'Project Item:',
		'all_items'             => 'All Projects',
		'add_new_item'          => 'Add New Project',
		'add_new'               => 'Add New',
		'new_item'              => 'New Project',
		'edit_item'             => 'Edit Project',
		'update_item'           => 'Update Project',
		'view_item'             => 'View Project',
		'view_items'            => 'View Project',
		'search_items'          => 'Search Project',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Project Type',
		'description'           => 'Project Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'project_type', $args );

}
add_action( 'init', 'project_post_type', 0 );