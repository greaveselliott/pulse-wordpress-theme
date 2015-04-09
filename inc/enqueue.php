<?php
/*
 * enqueue.php
 * Does what it says on the tin - enqueues all scripts / stylesheets
 */

function enqueue_theme_stylesheet () {
    wp_register_style (
	    'eemjii-theme-stylesheet',
	    get_stylesheet_directory_uri() . '/style.css'
    );

	wp_enqueue_style (
		'eemjii-theme-stylesheet'
	);
}

add_action('wp_enqueue_scripts', 'enqueue_theme_stylesheet');

// Enqueue Slick JS styles
function enqueue_slickjs_scripts () {
    // plugin
    wp_register_script(
        'slick-js',
        get_stylesheet_directory_uri() . '/javascripts/slick/slick/slick.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('slick-js');

    // config
    wp_register_script(
        'full-screen-js-config',
        get_stylesheet_directory_uri() . '/javascripts/slick/slick/slick.config.js',
        array('jquery','slick-js'),
        '',
        true
    );
    wp_enqueue_script ('full-screen-js-config');
}
add_action('wp_enqueue_scripts','enqueue_slickjs_scripts');


// GSAP
function enqueue_gsap_lite_scripts () {
    // CSS Plugin
    wp_register_script(
        'gsap-css-plugin',
        get_stylesheet_directory_uri() . '/javascripts/gsap/plugins/CSSPlugin.min.js',
        array('jquery'),
        '',
        true
    );
    wp_enqueue_script ('gsap-css-plugin');

    // Ease Pack
    wp_register_script(
        'gsap-ease-pack',
        get_stylesheet_directory_uri() . '/javascripts/gsap/easing/EasePack.min.js',
        array('jquery','gsap-css-plugin'),
        '',
        true
    );
    wp_enqueue_script ('gsap-ease-pack');

    // TweenLite
    wp_register_script(
        'gsap-tween-lite',
        get_stylesheet_directory_uri() . '/javascripts/gsap/TweenLite.min.js',
        array('jquery','gsap-css-plugin','gsap-ease-pack'),
        '',
        true
    );
    wp_enqueue_script ('gsap-tween-lite');
}
add_action('wp_enqueue_scripts','enqueue_gsap_lite_scripts');

