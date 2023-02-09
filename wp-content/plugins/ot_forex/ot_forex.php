<?php
/*
	Plugin Name: OT Forex
	Plugin URI: http://oceanthemes.net/
	Description: Declares a plugin that will create a custom post type displaying Forex.
	Version: 1.0
	Author: OceanThemes
	Author URI: http://oceanthemes.net/
	Text Domain: ot_forex
	Domain Path: /lang
	License: GPLv2 or later
*/

/* UPDATE 
  register_activation_hook is not called when a plugin is updated
  so we need to use the following function 
*/
function ot_forex_update() {
	load_plugin_textdomain('ot_forex', FALSE, dirname(plugin_basename(__FILE__)) . '/lang/');
}
add_action('plugins_loaded', 'ot_forex_update');

function ot_forex_type() {
	
	$servicelabels = array (	
		'name' => __('Forex','ot_forex'),
		'singular_name' => 'Forex',
		'add_new' => __('Add New','ot_forex'),
		'add_new_item' => __('Add New','ot_forex'),
		'edit_item' => __('Edit Forex','ot_forex'),
		'new_item' => __('Add New','ot_forex'),
		'all_items' => __('All Forex','ot_forex'),
		'view_item' => __('View Forex','ot_forex'),
		'search_item' => __('Search Forex','ot_forex'),
		'not_found' => __('No Forex found..','ot_forex'),
		'not_found_in_trash' => __('No Forex found in Trash.','ot_forex'),
		'menu_name' => 'Forex'
	);

	$args = array(
		'labels' => $servicelabels,
		'hierarchical' => false,
		'description' => __( 'Manages Forex' , 'ot_forex' ),
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-chart-pie',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'rewrite' => array( 'slug' => __( 'forex', 'ot_forex' ) ),        
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
		register_post_type ('forex',$args);
	}
add_action ('init','ot_forex_type');

function ot_forex_taxonomy () {
	$taxonomylabels = array(
		'name' => __('Categories','ot_forex'),
		'singular_name' => __('Categories','ot_forex'),
		'search_items' => __('Search Category','ot_forex'),
		'all_items' => __('All Category','ot_forex'),
		'edit_item' => __('Edit Category','ot_forex'),
		'add_new_item' => __('Add New Category','ot_forex'),
		'menu_name' => __('Categories','ot_forex'),
	);

	$args = array(
		'labels' => $taxonomylabels,
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => __( 'forex_cat', 'ot_forex' ) ),
	);
	
	register_taxonomy('forex_cat','forex',$args);
}
add_action ('init','ot_forex_taxonomy',0);

?>