<?php
/*
	Plugin Name: OT Loan
	Plugin URI: http://oceanthemes.net/
	Description: Declares a plugin that will create a custom post type displaying portfolio.
	Version: 1.0
	Author: OceanThemes
	Author URI: http://oceanthemes.net/
	Text Domain: ot_loan
	Domain Path: /languages
	License: GPLv2 or later
*/

/* UPDATE 
  register_activation_hook is not called when a plugin is updated
  so we need to use the following function 
*/
function ot_loan_update() {
	load_plugin_textdomain('ot_loan', FALSE, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'ot_loan_update');

function ot_loan_type() {
	$servicelabels = array (	
		'name' => __('Loan','ot_loan'),
		'singular_name' => __('Loan','ot_loan'),
		'add_new' => __('Add Loan','ot_loan'),
		'add_new_item' => __('Add new loan','ot_loan'),
		'edit_item' => __('Edit loan','ot_loan'),
		'new_item' => __('Add new loan','ot_loan'),
		'all_items' => __('All Loan','ot_loan'),
		'view_item' => __('View Loan','ot_loan'),
		'search_item' => __('Search loan','ot_loan'),
		'not_found' => __('No loan found..','ot_loan'),
		'not_found_in_trash' => __('No loan found in Trash.','ot_loan'),
		'menu_name' => 'Loan'
	);

	$args = array(
		'labels' => $servicelabels,
		'hierarchical' => false,
		'description' => __('Manages loan','ot_loan'),
		'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
		'menu_icon' => 'dashicons-analytics',		
		'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite'  => array( 'slug' => __( 'loan', 'ot_loan' ) ),
        'capability_type' => 'post',
		'supports' => array( 'title','editor','thumbnail','excerpt','comments','custom-fields'),
	);
		register_post_type ('loan',$args);
	}
add_action ('init','ot_loan_type');

function ot_loan_taxonomy () {
	$taxonomylabels = array(
		'name' => __('Categories','ot_loan'),
		'singular_name' => __('Categories','ot_loan'),
		'search_items' => __('Search Categories','ot_loan'),
		'all_items' => __('All Categories','ot_loan'),
		'edit_item' => __('Edit Categories','ot_loan'),
		'add_new_item' => __('Add new categories','ot_loan'),
		'menu_name' => __('Categories','ot_loan'),
	);

	$args = array(
		'labels' => $taxonomylabels,
		'hierarchical' => true,
	);
	register_taxonomy('loan_cat','loan',$args);
}
add_action ('init','ot_loan_taxonomy',0);

// Add to admin_init function
add_filter('manage_edit-loan_columns', 'add_new_loan_columns');
function add_new_loan_columns($loan_columns) { 
	$new_columns['cb'] = '<input type="checkbox" />'; 
    $new_columns['title'] = _x('Title', 'ot_loan');
    $new_columns['author'] = _x('Author', 'ot_loan');
    $new_columns['loan_cat'] = _x('Category', 'ot_loan');
    $new_columns['date'] = _x('Date', 'ot_loan');

    return $new_columns;
}

// Add to admin_init function
add_action('manage_loan_posts_custom_column', 'manage_loan_columns', 10, 2);
function manage_loan_columns($column, $post_id) {
    global $wpdb;
    switch ($column) {
        case 'loan_cat':
            $terms = get_the_terms($post_id, 'loan_cat');
            if (!empty($terms)) {
                $out = array();
                foreach ($terms as $term) {
                    $out[] = sprintf('<a href="%s&post_type=loan">%s</a>', esc_url(add_query_arg(array(
                        'post_type' => $post->post_type,
                        'loan_cat' => $term->slug
                    ), 'edit.php')), esc_html(sanitize_term_field('name', $term->name, $term->term_id, 'loan_cat', 'display')));
                }
                echo join(', ', $out);
            } else {
                _e('No categories', 'ot_loan');
            }
            break;   
        default:
            break;
    } // end switch
}
?>