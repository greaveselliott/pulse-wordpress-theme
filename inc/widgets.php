<?php
/*
 * Widget Areas Registration / Unregistration.
 */

// Removing twentyten widgets
function remove_some_widgets(){
	// Unregister some of the TwentyTen sidebars
	unregister_sidebar( 'first-footer-widget-area' );
	unregister_sidebar( 'second-footer-widget-area' );
	unregister_sidebar( 'third-footer-widget-area' );
	unregister_sidebar( 'fourth-footer-widget-area' );
	unregister_sidebar( 'primary-widget-area' );
	unregister_sidebar( 'secondary-widget-area' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );

// Footer Sitemap Widget
function footer_sitemap_widget() {

	register_sidebar( array(
		'name'          => 'Footer Site Map',
		'id'            => 'footer-site-map',
		'before_widget' => '<div class="block-grid-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer_sitemap_widget' );