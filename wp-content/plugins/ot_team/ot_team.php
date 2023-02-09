<?php
/*
Plugin Name: OT Team
Plugin URI: http://oceanthemes.net/
Description: Declares a plugin that will create a custom post type displaying portfolio.
Version: 1.0.1
Author: OceanThemes
Author URI: http://oceanthemes.net/
Text Domain: ot_team
Domain Path: /languages
License: GPLv2
*/

/* UPDATE 
  register_activation_hook is not called when a plugin is updated
  so we need to use the following function 
*/
function ot_team_update() {
	load_plugin_textdomain('ot_team', FALSE, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'ot_team_update');

add_action( 'init', 'register_ocean_Team' );
function register_ocean_Team() {

    $labels = array( 

        'name' => __( 'Team', 'ot_team' ),

        'singular_name' => __( 'Team', 'ot_team' ),

        'add_new' => __( 'Add New Team', 'ot_team' ),

        'add_new_item' => __( 'Add New Team', 'ot_team' ),

        'edit_item' => __( 'Edit Team', 'ot_team' ),

        'new_item' => __( 'New Team', 'ot_team' ),

        'view_item' => __( 'View Team', 'ot_team' ),

        'search_items' => __( 'Search Team', 'ot_team' ),

        'not_found' => __( 'No Team found', 'ot_team' ),

        'not_found_in_trash' => __( 'No Team found in Trash', 'ot_team' ),

        'parent_item_colon' => __( 'Parent AdTeamvisor:', 'ot_team' ),

        'menu_name' => __( 'Our Team', 'ot_team' ),

    );



    $args = array( 

        'labels' => $labels,

        'hierarchical' => true,

        'description' => __('List Team', 'ot_team' ),

        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'post-formats', 'excerpt' ),

        'taxonomies' => array( 'team_category' ),

        'public' => true,

        'show_ui' => true,

        'show_in_menu' => true,       

        'menu_icon' => 'dashicons-groups',	

        'show_in_nav_menus' => true,

        'publicly_queryable' => true,

        'exclude_from_search' => false,

        'has_archive' => true,

        'query_var' => true,

        'can_export' => true,

        'rewrite' => array( 'slug' => __('team', 'ot_team') ),

        'capability_type' => 'post'

    );
    register_post_type( 'team', $args );
}

add_action( 'init', 'Team_Categories_hierarchical_taxonomy', 0 );



//create a custom taxonomy name it Skillss for your posts



function Team_Categories_hierarchical_taxonomy() {



// Add new taxonomy, make it hierarchical like categories

//first do the translations part for GUI



  $labels = array(

    'name' => __( 'Team Categories', 'ot_team' ),

    'singular_name' => __( 'Team Categories', 'ot_team' ),

    'search_items' =>  __( 'Search Categories','ot_team' ),

    'all_items' => __( 'All Categories','ot_team' ),

    'parent_item' => __( 'Parent Categories','ot_team' ),

    'parent_item_colon' => __( 'Parent Categories:','ot_team' ),

    'edit_item' => __( 'Edit Categories','ot_team' ), 

    'update_item' => __( 'Update Categories','ot_team' ),

    'add_new_item' => __( 'Add New Categories','ot_team' ),

    'new_item_name' => __( 'New Categories Name','ot_team' ),

    'menu_name' => __( 'Categories','ot_team' ),

  );     



// Now register the taxonomy
  register_taxonomy('team_category',array('Team'), array(

    'hierarchical' => true,

    'labels' => $labels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'team_category' ),

  ));



}

?>