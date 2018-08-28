<?php
/*
Plugin Name: CPT base
Description: Custom Post Type Basic Plugin
Version: 1.0
Author: Steve Honeyman
License: GPLv2
*/

// add custom post type and taxonomy
// custom post type
function create_cpt() {

    // set up labels
   
    $labels = array(
        'name' => 'CPT',
        'singular_name' => 'CPT',
        'add_new' => 'Add New CPT',
        'add_new_item' => 'Add New CPT',
        'edit_item' => 'Edit CPT',
        'new_item' => 'New CPT',
        'all_items' => 'All CPT',
        'view_item' => 'View CPT',
        'menu_name' => 'CPT'
    ); // end labels array


    //register post type
    register_post_type( 'cpt', 
        array(
        'labels' => $labels,
        'hierarchical' => false,
    //  'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'slug', 'thumbnail'),
        'taxonomies' => array( 'post_tag', 'category' ),
        'exclude_from_search' => false,
        'rewrite' => __return_true(),
        'capability_type' => 'post'
        )
    );
}
add_action( 'init', 'create_cpt' );


// custom taxonomy
function create_cpt_taxo() {

    // set up labels
    $labels = array(
        'name'  =>  'CPT Taxonomy',
        'singular_name' => 'CPT Taxonomy',
        'all_items' => 'All CPT Taxonomies',
        'edit_item' => 'Edit CPT Taxonomy',
        'update_item' => 'Update CPT Taxonomy',
        'add_new_item' => 'Add New CPT Taxonomy',
        'new_item_name' => 'New CPT Taxonomy Name',
        'menu_name' => 'CPT Taxonomy',
        'view_item' => 'View CPT Taxonomy'
    ); // end taxo labels array

    // register taxonomy
    register_taxonomy( 'taxo' , 'cpt', 
        array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true
        )
    );
}
add_action( 'init' , 'create_cpt_taxo');

