<?php

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// Set path to WooFramework and theme specific functions
$functions_path = TEMPLATEPATH . '/functions/';
$includes_path = TEMPLATEPATH . '/includes/';

// WooFramework
require_once ($functions_path . 'admin-init.php');			// Framework Init

// Theme specific functionality
require_once ($includes_path . 'theme-options.php'); 		// Options panel settings and custom settings
require_once ($includes_path . 'theme-functions.php'); 		// Custom theme functions
//require_once ($includes_path . 'theme-plugins.php');		// Theme specific plugins integrated in a theme
//require_once ($includes_path . 'theme-actions.php');		// Theme actions & user defined hooks
require_once ($includes_path . 'theme-comments.php'); 		// Custom comments/pingback loop
require_once ($includes_path . 'theme-js.php');				// Load javascript in wp_head
require_once ($includes_path . 'sidebar-init.php');			// Initialize widgetized areas
require_once ($includes_path . 'theme-widgets.php');		// Theme widgets

/*-----------------------------------------------------------------------------------*/
/* End WooThemes Functions - You can add custom functions below */
/*-----------------------------------------------------------------------------------*/

add_action('init', 'load_posttype');
add_theme_support( 'post-thumbnails' );
function load_posttype() {
	register_post_type('gallery', array(	'label' => 'Gallery Images','description' => '','public' => true,'show_ui' => true,'show_in_menu' => true,'capability_type' => 'post','hierarchical' => false,'rewrite' => array('slug' => ''),'query_var' => true,'exclude_from_search' => false,'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes',),'labels' => array (
	  'name' => 'Gallery Images',
	  'singular_name' => 'Gallery Image',
	  'menu_name' => 'Gallery Images',
	  'add_new' => 'Add Gallery Image',
	  'add_new_item' => 'Add New Gallery Image',
	  'edit' => 'Edit',
	  'edit_item' => 'Edit Gallery Image',
	  'new_item' => 'New Gallery Image',
	  'view' => 'View Gallery Image',
	  'view_item' => 'View Gallery Image',
	  'search_items' => 'Search Gallery Images',
	  'not_found' => 'No Gallery Images Found',
	  'not_found_in_trash' => 'No Gallery Images Found in Trash',
	  'parent' => 'Parent Gallery Image',
	  'has_archive' => true
	 ),) ); }

?>