<?php
/*
 * Theme Custom taxonomies
*/


if ( ! function_exists( 'custom_taxonomy_department' ) ) {

// Register Custom Taxonomy
    function custom_taxonomy_department() {

        $labels = array(
            'name'                       => _x( 'Departments', 'Taxonomy General Name', 'twentyfifteen' ),
            'singular_name'              => _x( 'Department', 'Taxonomy Singular Name', 'twentyfifteen' ),
            'menu_name'                  => __( 'Department', 'twentyfifteen' ),
            'all_items'                  => __( 'All Departments', 'twentyfifteen' ),
            'parent_item'                => __( 'Parent Department', 'twentyfifteen' ),
            'parent_item_colon'          => __( 'Parent Department:', 'twentyfifteen' ),
            'new_item_name'              => __( 'New Department Name', 'twentyfifteen' ),
            'add_new_item'               => __( 'Add New Department', 'twentyfifteen' ),
            'edit_item'                  => __( 'Edit Department', 'twentyfifteen' ),
            'update_item'                => __( 'Update Department', 'twentyfifteen' ),
            'separate_items_with_commas' => __( 'Separate Department with commas', 'twentyfifteen' ),
            'search_items'               => __( 'Search Departments', 'twentyfifteen' ),
            'add_or_remove_items'        => __( 'Add or remove Departments', 'twentyfifteen' ),
            'choose_from_most_used'      => __( 'Choose from the most used Departments', 'twentyfifteen' ),
            'not_found'                  => __( 'Department Not Found', 'twentyfifteen' ),
        );
        $rewrite = array(
            'slug'                       => 'departments',
            'with_front'                 => true,
            'hierarchical'               => false,
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => false,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
            'rewrite'                    => $rewrite,
        );
        register_taxonomy( 'department', array( 'eemjii_team' ), $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'custom_taxonomy_department', 0 );

}