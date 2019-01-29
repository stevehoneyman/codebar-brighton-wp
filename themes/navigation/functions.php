<?php


// add stylesheet(s) 
function set_theme_styles() {
	wp_enqueue_style( 'main_stylesheet' , get_template_directory_uri() . '/css/main.css?v=' .time() );
	// wp_enqueue_style( 'jq_multi_nav' , get_template_directory_uri() . '/css/nav-1.css' );
}
add_action('wp_enqueue_scripts', 'set_theme_styles');


// add scripts
function set_theme_scripts() {
	wp_enqueue_script( 'main_script', get_template_directory_uri() . '/js/boot.js', array('jquery') , '' , true);
}
add_action('wp_enqueue_scripts' , 'set_theme_scripts');

// add menus
function register_theme_menus() {
	register_nav_menus( 
		array(
			'header-menu' => __('Header Menu'),
			'secondary-menu' => __('Secondary Menu') 
			)
		);
}
add_action('init', 'register_theme_menus');


// show toolbar
show_admin_bar( true );






