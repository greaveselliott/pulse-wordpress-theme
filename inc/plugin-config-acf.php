<?php
/**
 * Config file for ACF Pro
 * This plugin has been purchased and included within this theme,
 * It is essential to its functionality
 * DO NOT DELETE
 */

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/inc/advanced-custom-fields-pro/';

    // return
    return $path;

}


// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {

    // update path
    $dir = get_stylesheet_directory_uri() . '/inc/advanced-custom-fields-pro/';

    // return
    return $dir;

}


// 3. Hide ACF field group menu item

//add_filter('advanced-custom-fields-pro/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/inc/advanced-custom-fields-pro/acf.php' );

// 5. Include ACF Configuration Options
include_once( get_stylesheet_directory() . '/inc/advanced-custom-fields-pro/acf-import.php' );