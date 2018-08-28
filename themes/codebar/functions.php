<?php
// enqueue stylesheets
function theme_styles() {
	wp_enqueue_style('main_css', get_template_directory_uri(). '/css/main.css?v=' .time() );
//  wp_enqueue_style('slick_css', get_template_directory_uri(). '/css/slick.css');
	}
	
add_action('wp_enqueue_scripts', 'theme_styles');

// enqueue scripts
function theme_js() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', true, null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('theme_boot_js', get_template_directory_uri().'/js/boot.js', '', '', true);
//  wp_enqueue_script('slick_min_js', get_template_directory_uri().'/js/slick.min.js', '', '', true);   
}

add_action('wp_enqueue_scripts', 'theme_js');

// add menus & register multiple custom menus
function register_theme_menus() {
	register_nav_menus( 
		array(
			'header-menu' => __('Header Menu'), 
			'footer-menu' => __('Footer Menu') 
			)
		);
}
add_action('init', 'register_theme_menus');

// enable featured images
add_theme_support('post-thumbnails');

// enable excerpts
add_post_type_support( 'page', 'excerpt' );

// set ACF Options
$args = array(
	'page_title' => 'Options'
	);

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page($args);
}

// show admin bar
add_filter('show_admin_bar', '__return_true');

// add custom post type (currently incorporated via plugin)

//enable widget area
function codebar_widgets_init() {
    
    register_sidebar( array (
        'name'          => __( 'Right Sidebar', 'codebar' ),
        'id'            => 'right-sidebar',
        'description'   => 'Widgets to display in right hand sidebar',
        'before_widget' => '<aside>',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
        ));
	}

 add_action( 'widgets_init', 'codebar_widgets_init' );  

// shortcodes [basic button]

// change post order

/* ------------------------------------------------

function change_post_order($query) {
  if ($query->is_home()) {
    $query->set('order', 'ASC');
  }
}

add_action('pre_get_posts', 'change_post_order');

------------------------------------------------ */


















