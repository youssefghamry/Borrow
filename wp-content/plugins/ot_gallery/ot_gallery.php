<?php
/*
	Plugin Name: OT Gallery
	Plugin URI: http://oceanthemes.net/
	Description: Declares a plugin that will create a custom post type displaying gallery.
	Version: 1.0
	Author: OceanThemes
	Author URI: http://oceanthemes.net/
	Text Domain: ot-gallery
	Domain Path: /lang
	License: GPLv2 or later
*/

/* UPDATE 
  register_activation_hook is not called when a plugin is updated
  so we need to use the following function 
*/
function ot_gallery_update() {
	load_plugin_textdomain('ot-gallery', FALSE, dirname(plugin_basename(__FILE__)) . '/lang/');
}
add_action('plugins_loaded', 'ot_gallery_update');

add_action( 'init', 'register_ot_gallery' );
function register_ot_gallery() {
    
    $labels = array( 
        'name' => __( 'Gallery', 'ot-gallery' ),
        'singular_name' => __( 'Gallery', 'ot-gallery' ),
        'add_new' => __( 'Add New', 'ot-gallery' ),
        'add_new_item' => __( 'Add New', 'ot-gallery' ),
        'edit_item' => __( 'Edit Gallery', 'ot-gallery' ),
        'new_item' => __( 'New Gallery', 'ot-gallery' ),
        'view_item' => __( 'View Gallery', 'ot-gallery' ),
        'search_items' => __( 'Search Gallery', 'ot-gallery' ),
        'not_found' => __( 'No Gallery found', 'ot-gallery' ),
        'not_found_in_trash' => __( 'No Gallery found in Trash', 'ot-gallery' ),
        'parent_item_colon' => __( 'Parent Gallery:', 'ot-gallery' ),
        'menu_name' => __( 'Gallery', 'ot-gallery' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => __( 'List Gallery', 'ot-gallery' ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'post-formats' ),
        'taxonomies' => array('category_gallery' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-gallery',
        'show_in_nav_menus' => true,
		'show_in_admin_bar'   => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'rewrite' => array( 'slug' => __('gallery', 'ot-gallery') ),
        'capability_type' => 'post'
    );

    register_post_type( 'ot_gallery', $args );
}

add_action( 'init', 'ot_category_gallery_hierarchical_taxonomy', 0 );
//create a custom taxonomy name it Skillss for your posts
function ot_category_gallery_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

$labels = array(
    'name' => __( 'Categories', 'ot-gallery' ),
    'singular_name' => __( 'Categories', 'ot-gallery' ),
    'search_items' =>  __( 'Search Categories','ot-gallery' ),
    'all_items' => __( 'All Categories','ot-gallery' ),
    'parent_item' => __( 'Parent Categories','ot-gallery' ),
    'parent_item_colon' => __( 'Parent Categories:','ot-gallery' ),
    'edit_item' => __( 'Edit Categories','ot-gallery' ), 
    'update_item' => __( 'Update Categories','ot-gallery' ),
    'add_new_item' => __( 'Add New Categories','ot-gallery' ),
    'new_item_name' => __( 'New Categories Name','ot-gallery' ),
    'menu_name' => __( 'Categories','ot-gallery' ),
);     

// Now register the taxonomy
register_taxonomy('category_gallery',array('ot_gallery'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
	'rewrite' => array( 'slug' => __('category_gallery', 'ot-gallery') ),
));

}

// Add to admin_init function
add_filter('manage_edit-ot_gallery_columns', 'add_new_ot_gallery_columns');
function add_new_ot_gallery_columns($ot_gallery_columns) { 
	$new_columns['cb'] = '<input type="checkbox" />'; 	
	$new_columns['featured_image'] = 'Featured Image';
    $new_columns['title'] = _x('Title', 'ot-gallery');
    $new_columns['author'] = _x('Author', 'ot-gallery');
    $new_columns['taxonomy-category_gallery'] = _x('Categories', 'ot-gallery');	
	$new_columns['comments'] = '<span class="vers"><div title="Comments" class="comment-grey-bubble"></div></span>';
    $new_columns['date'] = _x('Date', 'ot-gallery');

    return $new_columns;
}

// Add to admin_init function
add_action('manage_ot_gallery_posts_custom_column', 'manage_ot_gallery_columns', 10, 2);
function manage_ot_gallery_columns($column, $post_id) {
    global $wpdb;
    switch ($column) {
        case 'taxonomy-category_gallery':
            $terms = get_the_terms($post_id, 'taxonomy-category_gallery');
            if (!empty($terms)) {
                $out = array();
                foreach ($terms as $term) {
                    $out[] = sprintf('<a href="%s&post_type=gallery">%s</a>', esc_url(add_query_arg(array(
                        'post_type' => $post->post_type,
                        'taxonomy-category_gallery' => $term->slug
                    ), 'edit.php')), esc_html(sanitize_term_field('name', $term->name, $term->term_id, 'taxonomy-category_gallery', 'display')));
                }
                echo join(', ', $out);
            } else {
                _e('No Category', 'ot-gallery');
            }
            break;   
        default:
            break;
    } // end switch
}

/**
 * get featured image function
 */
function ot_gallery_featured_image($post_ID) {
	$post_thumbnail_id = get_post_thumbnail_id($post_ID);
	if ($post_thumbnail_id) {
		$post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
		return $post_thumbnail_img[0];
	}
}
/**
 * show featured image in column
 */
function ot_gallery_columns_content($column_name, $post_ID) {
	if ($column_name == 'featured_image') {
		$post_featured_image = ot_gallery_featured_image($post_ID);
		if ($post_featured_image) {
			echo '<img src="' . $post_featured_image . '" />';
		}
	}
}
add_action('manage_ot_gallery_posts_custom_column', 'ot_gallery_columns_content', 10, 2);

?>