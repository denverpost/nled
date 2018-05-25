<?php
/**
 * nled functions and definitions
 *
 * Pretty much just removes things for super-minimal functionality
 *
 * @package WordPress
 * @subpackage nled
 * @since nled 0.1
 */

// Hide admin bar and disable visual editor across the site
add_filter('show_admin_bar', '__return_false');
add_filter( 'user_can_richedit' , '__return_false', 50 );

// register the location post type
function register_post_type_roundup() {
	$labels = array(
        'name'               => _x( 'Mile High Roundup', 'post type general name' ),
        'singular_name'      => _x( 'Roundup', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Roundup' ),
        'add_new_item'       => __( 'Add New Roundup' ),
        'edit_item'          => __( 'Edit Roundup' ),
        'new_item'           => __( 'New Roundup' ),
        'all_items'          => __( 'All Roundups' ),
        'view_item'          => __( 'View Roundup' ),
        'search_items'       => __( 'Search Roundups' ),
        'not_found'          => __( 'No Roundups found' ),
        'not_found_in_trash' => __( 'No Roundups found in the Trash' ), 
        'parent_item_colon'  => '',
        'menu_name'          => 'Roundup'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Mile High Roundup newsletter',
        'public'        => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui'       => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'query_var'     => true,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions', 'author', 'custom-fields', ),
        'rewrite' => array(
            'slug' => 'roundup',
            'with_front' => true
            ),
        'has_archive'   => false
    );
    register_post_type( 'roundup', $args );
}
add_action( 'init', 'register_post_type_roundup' );