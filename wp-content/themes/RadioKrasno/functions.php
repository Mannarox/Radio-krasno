<?php

function enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	// wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
	// wp_enqueue_style( 'font-style');
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap');
	wp_register_style('style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	// wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	// wp_enqueue_script('html5-shim');
	wp_register_script('jquery', 'wp-content/themes/my_theme/jquery-2.1.3.min.js');
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

//Navigation Menus
register_nav_menus( array(
	'primary' => __( 'Primary Menu' ),
	
	));
?>
