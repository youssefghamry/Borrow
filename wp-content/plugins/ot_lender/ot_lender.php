<?php
/*
	Plugin Name: OT Lenders
	Plugin URI: http://oceanthemes.net/
	Description: Declares a plugin that will create a custom post type displaying lenders.
	Version: 1.0
	Author: OceanThemes
	Author URI: http://oceanthemes.net/
	Text Domain: ot_lender
	Domain Path: /lang
	License: GPLv2 or later
*/

/* UPDATE 
  register_activation_hook is not called when a plugin is updated
  so we need to use the following function 
*/
function ot_lender_update() {
	load_plugin_textdomain('ot_lender', FALSE, dirname(plugin_basename(__FILE__)) . '/lang/');
}
add_action('plugins_loaded', 'ot_lender_update');

function ot_lender_type() {
	
	$servicelabels = array (	
		'name' => __('Lenders','ot_lender'),
		'singular_name' => 'Lenders',
		'add_new' => __('Add New','ot_lender'),
		'add_new_item' => __('Add New','ot_lender'),
		'edit_item' => __('Edit Lender','ot_lender'),
		'new_item' => __('Add New','ot_lender'),
		'all_items' => __('All Lenders','ot_lender'),
		'view_item' => __('View Lender','ot_lender'),
		'search_item' => __('Search Lender','ot_lender'),
		'not_found' => __('No lender found..','ot_lender'),
		'not_found_in_trash' => __('No lender found in Trash.','ot_lender'),
		'menu_name' => 'Lenders'
	);

	$args = array(
		'labels' => $servicelabels,
		'hierarchical' => false,
		'description' => __( 'Manages Lenders' , 'ot_lender' ),
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-businessman',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'rewrite' => array( 'slug' => __( 'ot_lenders', 'ot_lender' ) ),        
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
		register_post_type ('ot_lenders',$args);
	}
add_action ('init','ot_lender_type');

function ot_lender_taxonomy () {
	$taxonomylabels = array(
		'name' => __('Categories','ot_lender'),
		'singular_name' => __('Categories','ot_lender'),
		'search_items' => __('Search Category','ot_lender'),
		'all_items' => __('All Category','ot_lender'),
		'edit_item' => __('Edit Category','ot_lender'),
		'add_new_item' => __('Add New Category','ot_lender'),
		'menu_name' => __('Categories','ot_lender'),
	);

	$args = array(
		'labels' => $taxonomylabels,
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => __( 'lender_cat', 'ot_lenders' ) ),
	);
	
	register_taxonomy('lender_cat','ot_lenders',$args);
}
add_action ('init','ot_lender_taxonomy',0);

?>