<?php
/*
	Plugin Name: OT Credit Card
	Plugin URI: http://oceanthemes.net/
	Description: Declares a plugin that will create a custom post type displaying Credit Card.
	Version: 1.0
	Author: OceanThemes
	Author URI: http://oceanthemes.net/
	Text Domain: ot_creditcard
	Domain Path: /lang
	License: GPLv2 or later
*/

/* UPDATE 
  register_activation_hook is not called when a plugin is updated
  so we need to use the following function 
*/
function ot_creditcard_update() {
	load_plugin_textdomain('ot_creditcard', FALSE, dirname(plugin_basename(__FILE__)) . '/lang/');
}
add_action('plugins_loaded', 'ot_creditcard_update');

function ot_creditcard_type() {
	
	$servicelabels = array (	
		'name' => __('Credit Card','ot_creditcard'),
		'singular_name' => 'Credit Card',
		'add_new' => __('Add New','ot_creditcard'),
		'add_new_item' => __('Add New','ot_creditcard'),
		'edit_item' => __('Edit Credit Card','ot_creditcard'),
		'new_item' => __('Add New','ot_creditcard'),
		'all_items' => __('All Credit Card','ot_creditcard'),
		'view_item' => __('View Credit Card','ot_creditcard'),
		'search_item' => __('Search Credit Card','ot_creditcard'),
		'not_found' => __('No Credit Card found..','ot_creditcard'),
		'not_found_in_trash' => __('No Credit Card found in Trash.','ot_creditcard'),
		'menu_name' => 'Credit Card'
	);

	$args = array(
		'labels' => $servicelabels,
		'hierarchical' => false,
		'description' => __( 'Manages Credit Card' , 'ot_creditcard' ),
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-index-card',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'rewrite' => array( 'slug' => __( 'credit_card', 'ot_creditcard' ) ),        
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
		register_post_type ('credit_card',$args);
	}
add_action ('init','ot_creditcard_type');

function ot_creditcard_taxonomy () {
	$taxonomylabels = array(
		'name' => __('Categories','ot_creditcard'),
		'singular_name' => __('Categories','ot_creditcard'),
		'search_items' => __('Search Category','ot_creditcard'),
		'all_items' => __('All Category','ot_creditcard'),
		'edit_item' => __('Edit Category','ot_creditcard'),
		'add_new_item' => __('Add New Category','ot_creditcard'),
		'menu_name' => __('Categories','ot_creditcard'),
	);

	$args = array(
		'labels' => $taxonomylabels,
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => __( 'creditcard_cat', 'ot_creditcard' ) ),
	);
	
	register_taxonomy('creditcard_cat','credit_card',$args);
}
add_action ('init','ot_creditcard_taxonomy',0);

?>