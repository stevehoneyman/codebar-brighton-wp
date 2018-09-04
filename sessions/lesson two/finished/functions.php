<?php

// functions.php is where we set up basic functionality for a theme and, if needed, is where we can add more advanced or bespoke functionality: widgets, shortcodes, custom post types and custom functions  

// basic tasks include adding stylesheets and javascript, enabling menus, featured images and page excerpts.

/* --------------------------------------------------------------------------------------------------------------------- */

// add stylesheet(s) 
function set_theme_styles() {
	wp_enqueue_style( 'main_stylesheet' , get_template_directory_uri() . '/css/main.css?v=' .time() );
}
add_action('wp_enqueue_scripts', 'set_theme_styles');


// add scripts
function set_theme_scripts() {
	wp_enqueue_script( 'main_script', get_template_directory_uri() . '/js/scripts.js', array('jquery') , '' , true);
}
add_action('wp_enqueue_scripts' , 'set_theme_scripts');


// set-up menus
add_theme_support('menus');

// enable thumbnails (featured images)
add_theme_support('post-thumbnails');

// enable page excerpts
add_post_type_support( 'page', 'excerpt' );

