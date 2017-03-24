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
		'name'                  => 'Our Team',
		'singular_name'         => 'Team Type',
		'menu_name'             => 'Team Types',
		'name_admin_bar'        => 'Team Type',
		'archives'              => 'Teammate Archives',
		'attributes'            => 'Teammate Attributes',
		'parent_item_colon'     => 'Parent Teammate:',
		'all_items'             => 'All Teammates',
		'add_new_item'          => 'Add New Teammate',
		'add_new'               => 'Add New',
		'new_item'              => 'New Teammate',
		'edit_item'             => 'Edit Teammate',
		'update_item'           => 'Update Teammate',
		'view_item'             => 'View Teammate',
		'view_items'            => 'View Teammates',
		'search_items'          => 'Search Teammate',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into teammate',
		'uploaded_to_this_item' => 'Uploaded to this Teammate',
		'items_list'            => 'Teammates list',
		'items_list_navigation' => 'Teammates list navigation',
		'filter_items_list'     => 'Filter Teammates list',
	);
	$rewrite = array(
		'slug'                  => 'team_type',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Team Type',
		'description'           => 'Team Type Description',
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