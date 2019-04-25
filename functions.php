<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
// require_once(get_template_directory().'/functions/sidebar.php');

// Makes WordPress comments suck less
// require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
// require_once(get_template_directory().'/functions/translation/translation.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');

add_filter('show_admin_bar', '__return_false');

// ADD ACF OPTIONS PAGE

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Site Wide Elements');
}


/* Add Support for Custom Post Type
====================================*/


function custom_post_type() {
    // Load FAQ Custom Post Types
    $labels = array(
        'name'               => _x( 'FAQs', 'general name' ),
        'singular_name'      => _x( 'FAQ', 'singular name' ),
        'rewrite'            => array( 'slug' => 'faq', 'with_front' => false ),
        'add_new'            => _x( 'Add New', 'faq' ),
        'add_new_item'       => __( 'Add New FAQ' ),
        'edit_item'          => __( 'Edit FAQ' ),
        'new_item'           => __( 'New FAQ' ),
        'all_items'          => __( 'All FAQs' ),
        'view_item'          => __( 'View FAQs' ),
        'search_items'       => __( 'Search FAQs' ),
        'not_found'          => __( 'No FAQs found' ),
        'not_found_in_trash' => __( 'No FAQs found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'FAQs'
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_position' => null,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'page-attributes' ),
        'has_archive'   => true,
    );

    register_post_type(__( 'faq' ), $args);
}
add_action( 'init', 'custom_post_type' );


/* Create taxonomy for the post type "faq-articles"
==========================================================*/
function create_faq_article_taxonomies() {
    // Add new taxonomy for help articles
    $labels = array(
        'name'                       => _x( 'FAQ Categories', 'taxonomy general name' ),
        'singular_name'              => _x( 'FAQ Category', 'taxonomy singular name' ),
        'search_items'               => __( 'Search FAQs' ),
        'all_items'                  => __( 'All FAQs' ),
        'parent_item'                => __( 'Parent FAQ Category' ),
        'parent_item_colon'          => __( 'Parent FAQ Categories' ),
        'edit_item'                  => __( 'Edit FAQ Category' ),
        'update_item'                => __( 'Update FAQ Category' ),
        'add_new_item'               => __( 'Add New FAQ Category' ),
        'new_item_name'              => __( 'New FAQ Category' ),
        'menu_name'                  => __( 'FAQ Categories' ),
    );

    $args = array(
        'labels'                => $labels,
        'hierarchical'          => true,
    );

    register_taxonomy( 'faq_category', 'faq', $args );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_faq_article_taxonomies', 0 );
