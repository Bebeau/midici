<?php

// Hide admin bar
add_filter('show_admin_bar', '__return_false');

// Load all styles and scripts for the site
if (!function_exists( 'load_custom_scripts' ) ) {
	function load_custom_scripts() {
		// Styles
		wp_enqueue_style( 'Bootstrap CSS', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', false, '', 'all' );
		wp_enqueue_style( 'Style CSS', get_bloginfo( 'template_url' ) . '/style.css', false, '', 'all' );

		// Load default Wordpress jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '', false);
		wp_enqueue_script('jquery');

		// Load custom scripts
		wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), null, true);
		wp_enqueue_script('custom', get_bloginfo( 'template_url' ) . '/assets/js/custom.js', array('jquery'), null, true);

	}
}
add_action( 'wp_print_styles', 'load_custom_scripts' );

// Thumbnail Support
add_theme_support( 'post-thumbnails' );

// Load widget areas
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => __( 'Home - Our Story' ),
		'id' => 'home-ourstory',
		'before_widget' => '<div class="story-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="red">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Home - Instagram' ),
		'id' => 'home-instagram',
		'before_widget' => '<div class="instagram-feed">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}

// Register Navigation Menu Areas
function register_my_menus() {
	$args = array(
		'left-menu' => __( 'Left Menu' ),
		'right-menu' => __( 'Right Menu' ),
		'mobile-menu' => __( 'Mobile Menu' ),
	);
  	register_nav_menus($args);
}
add_action( 'init', 'register_my_menus' );
