<?php

// ACTION HOOK - REGISTER VANILLA CAROUSEL CUSTOM POST TYPE
function vc_cpt_register() {
	$labels = array(
		'add_new' 			 => __('Add New Carousel'), 
		'add_new_item' 		 => __('Add New Carousel'), 
		'all_items' 		 => __( 'All Carousels' ),
		'attributes'		 => __( 'Carousel Attributes' ),
		'edit_item' 		 => __('Edit Carousel'), 
		'item_published'     => __( 'Carousel published.' ),
        'item_updated'       => __( 'Item updated.' ),
		'menu_name' 		 => __('Vanilla Carousels'), 
		'name' 				 => _x('Vanilla Carousels', 'post type general name'),
		'new_item' 			 => __('New Carousel'), 
		'not_found'   		 => __('No Carousels found'), 
		'not_found_in_trash' => __('No Carousels found in Trash'),
		'search_items' 		 => __( 'Search Carousels' ),
		'singular_name' 	 => _x('Carousel', 'post type singular name'),
		'view_item' 		 => __('View Carousel'), 
	);
	$args = array(
		'can_export' 		 => true,
		'capability_type' 	 => 'post',
		'description' 		 => __('Vanilla Carousel Content Slider'),
		'exclude_from_search'=> true,
		'has_archive' 		 => false,
		'hierarchical' 		 => false,
		'labels' 			 => $labels,
		'menu_icon' 		 => 'dashicons-smiley',
		'menu_position' 	 => 10,
		'public' 			 => false,
		'publicly_queryable' => false,
		'query_var' 		 => false,
		'rewrite' 			 => true,
		'show_ui' 			 => true,
		'show_in_menu' 		 => true,
		'show_in_nav_menus'  => false,
		'supports' 			 => array('title'),
	);
	register_post_type('vanilla_carousel', $args);
}

add_action('init', 'vc_cpt_register');

?>