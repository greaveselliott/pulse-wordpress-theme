<?php
/*
 * Theme Custom Post Types
*/

// Removing Services CPT


// Services
if ( ! function_exists('custom_post_type_services') ) {

// Register Custom Post Type
    function custom_post_type_services() {

        $labels = array(
            'name'                => _x( 'Services', 'Post Type General Name', 'twentyfifteen' ),
            'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'twentyfifteen' ),
            'menu_name'           => __( 'Services', 'twentyfifteen' ),
            'parent_item_colon'   => __( 'Parent Services:', 'twentyfifteen' ),
            'all_items'           => __( 'All Services', 'twentyfifteen' ),
            'view_item'           => __( 'View Service', 'twentyfifteen' ),
            'add_new_item'        => __( 'Add New Service', 'twentyfifteen' ),
            'add_new'             => __( 'Add New Service', 'twentyfifteen' ),
            'edit_item'           => __( 'Edit Service', 'twentyfifteen' ),
            'update_item'         => __( 'Update Service', 'twentyfifteen' ),
            'search_items'        => __( 'Search Service', 'twentyfifteen' ),
            'not_found'           => __( 'Not found', 'twentyfifteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentyfifteen' ),
        );
        $rewrite = array(
            'slug'                => 'our-services',
            'with_front'          => true,
            'pages'               => true,
            'feeds'               => true,
        );
        $args = array(
            'label'               => __( 'eemjii_services', 'twentyfifteen' ),
            'description'         => __( 'Services', 'twentyfifteen' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'thumbnail', ),
            //'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => $rewrite,
            'capability_type'     => 'page',
        );
        register_post_type( 'eemjii_services', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_post_type_services', 0 );
}