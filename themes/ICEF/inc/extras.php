<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function post_list( $query ){
	if ( is_post_type_archive( 'team' ) ){
        $query->set( 'posts_per_page', 16);
        $query->set('order', 'ASC');
        return;
    }
}
add_action( 'pre_get_posts', 'post_list', 1);
add_action( '', 'post_list', 1);
