<?php

function register_navwalker() {
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Includes
include_once( 'inc/enqueue.php' );
include_once( 'inc/theme-options.php' );
include_once( 'inc/shortcode.php' );

function eyepax_resources() {
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_register_style('font-css', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
	wp_register_style('owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_register_style('owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_register_style('fontAwesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_register_style('stylesheet', get_stylesheet_uri());

	wp_enqueue_style('bootstrap-css');
	wp_enqueue_style('font-css');
	wp_enqueue_style('fany-box-css');
	wp_enqueue_style('owl-css');
	wp_enqueue_style('owl-theme-css');
	wp_enqueue_style('fontAwesome');
	wp_enqueue_style('stylesheet');

	wp_register_script('popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.1', true);
	wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.1', true);
	wp_register_script('owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.1', true);
	wp_register_script('site-js', get_template_directory_uri() . '/assets/js/site.js', array('jquery'), '1.1', true);

	wp_enqueue_script('jquery');
	wp_enqueue_script('popper-js');
	wp_enqueue_script('bootstrap-js');
	wp_enqueue_script('owl-js');
	wp_enqueue_script('site-js');
}
add_action( 'wp_enqueue_scripts', 'eyepax_resources' );

if ( ! function_exists('eyepax_setup' ) ) {
	
	function eyepax_setup() {
		
		// title tag
		add_theme_support( 'title-tag' );
		
		// post thumbnails
		add_theme_support( 'post-thumbnails' );

		// register nav menus
		register_nav_menus(array(
			'primary' => __( 'Main Menu', 'eyepax' ),
			'footer' => __( 'Footer Menu', 'eyepax' )
		));
	}
	
}
add_action( 'after_setup_theme', 'eyepax_setup' );

?>