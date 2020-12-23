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

// FILTER HOOK - ADD CUSTOM COLUMNS FOR CUSTOM POST LIST TABLE
function vc_cpt_dashboard_columns($columns) {
	// new columns to be added
	$new_columns = array(
		'cb'		=> 'Bulk Acions',
		'title'  	=> 'Title',
		'slides' 	=> 'Slides',
		'shortcode' => 'Shortcode',
		'css_id' 	=> 'CSS ID',
		'date' 		=> 'Date'
	);
	return $new_columns;
}

// ACTION HOOK - POPULATE CUSTOM POST LIST TABLE VALUES
function vc_cpt_render_dashboard_columns($column, $post_id) {
    switch ( $column ) {
 		case 'title'   :
			echo get_post_meta( $post_id , $column , true );
			break;
        case 'slides'  :
            echo 0;
			break;
		case 'shortcode'    :
			echo "[vanilla-carousel id='$post_id']";
			break;
		case 'css_id':
			echo 'css';
			break;
 
    }
}

add_action('init', 'vc_cpt_register');
add_filter('manage_vanilla_carousel_posts_columns', 'vc_cpt_dashboard_columns');
add_action('manage_vanilla_carousel_posts_custom_column', 'vc_cpt_render_dashboard_columns', 10, 2);

?>