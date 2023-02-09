<?php
/*
	Plugin Name: OT Bank Account
	Plugin URI: http://oceanthemes.net/
	Description: Declares a plugin that will create a custom post type displaying portfolio.
	Version: 1.0
	Author: OceanThemes
	Author URI: http://oceanthemes.net/
	Text Domain: ot_bank_account
	Domain Path: /languages
	License: GPLv2 or later
*/

/* UPDATE 
  register_activation_hook is not called when a plugin is updated
  so we need to use the following function 
*/
function ot_bank_account_update() {
	load_plugin_textdomain('ot_bank_account', FALSE, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'ot_bank_account_update');

function ot_bank_account_type() {
	$servicelabels = array (	
		'name' => __('Bank Account','ot_bank_account'),
		'singular_name' => __('Bank Account','ot_bank_account'),
		'add_new' => __('Add Bank Account','ot_bank_account'),
		'add_new_item' => __('Add new Bank Account','ot_bank_account'),
		'edit_item' => __('Edit Bank Account','ot_bank_account'),
		'new_item' => __('Add new Bank Account','ot_bank_account'),
		'all_items' => __('All Bank Account','ot_bank_account'),
		'view_item' => __('View Bank Account','ot_bank_account'),
		'search_item' => __('Search Bank Account','ot_bank_account'),
		'not_found' => __('No Bank Account found..','ot_bank_account'),
		'not_found_in_trash' => __('No Bank Account found in Trash.','ot_bank_account'),
		'menu_name' => 'Bank Account'
	);

	$args = array(
		'labels' => $servicelabels,
		'hierarchical' => false,
		'description' => __('Manages Bank Account','ot_bank_account'),
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-groups',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite'  => array( 'slug' => __( 'bank_account', 'ot_bank_account' ) ),
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
		register_post_type ('bank_account',$args);
	}
add_action ('init','ot_bank_account_type');

function ot_bank_account_taxonomy () {
	$taxonomylabels = array(
		'name' => __('Categories','ot_bank_account'),
		'singular_name' => __('Categories','ot_bank_account'),
		'search_items' => __('Search Categories','ot_bank_account'),
		'all_items' => __('All Categories','ot_bank_account'),
		'edit_item' => __('Edit Categories','ot_bank_account'),
		'add_new_item' => __('Add new categories','ot_bank_account'),
		'menu_name' => __('Categories','ot_bank_account'),
	);

	$args = array(
		'labels' => $taxonomylabels,
		'hierarchical' => true,
	);
	register_taxonomy('bank_account_cat','bank_account',$args);
}
add_action ('init','ot_bank_account_taxonomy',0);

// Add to admin_init function
add_filter('manage_edit-ot_bank_account_columns', 'add_new_ot_bank_account_columns');
function add_new_bank_account_columns($bank_account_columns) { 
	$new_columns['cb'] = '<input type="checkbox" />'; 
    $new_columns['title'] = _x('Title', 'ot_bank_account');
    $new_columns['author'] = _x('Author', 'ot_bank_account');
    $new_columns['bank_account_cat'] = _x('Category', 'ot_bank_account');
    $new_columns['date'] = _x('Date', 'ot_bank_account');

    return $new_columns;
}

// Add to admin_init function
add_action('manage_ot_bank_account_posts_custom_column', 'manage_ot_bank_account_columns', 10, 2);
function manage_bank_account_columns($column, $post_id) {
    global $wpdb;
    switch ($column) {
        case 'ot_bank_account_cat':
            $terms = get_the_terms($post_id, 'ot_bank_account_cat');
            if (!empty($terms)) {
                $out = array();
                foreach ($terms as $term) {
                    $out[] = sprintf('<a href="%s&post_type=ot_bank_account">%s</a>', esc_url(add_query_arg(array(
                        'post_type' => $post->post_type,
                        'bank_account_cat' => $term->slug
                    ), 'edit.php')), esc_html(sanitize_term_field('name', $term->name, $term->term_id, 'ot_bank_account_cat', 'display')));
                }
                echo join(', ', $out);
            } else {
                _e('No categories', 'ot_ot_bank_account');
            }
            break;   
        default:
            break;
    } // end switch
}
?>