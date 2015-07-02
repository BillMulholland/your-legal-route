<?php 
// registration code for topic taxonomy
		function register_topic_tax() {
			$labels = array(
				'name' 					=> _x( 'Topics', 'taxonomy general name' ),
				'singular_name' 		=> _x( 'Topic', 'taxonomy singular name' ),
				'add_new' 				=> _x( 'Add New Topic', 'Topic'),
				'add_new_item' 			=> __( 'Add New Topic' ),
				'edit_item' 			=> __( 'Edit Topic' ),
				'new_item' 				=> __( 'New Topic' ),
				'view_item' 			=> __( 'View Topic' ),
				'search_items' 			=> __( 'Search Topics' ),
				'not_found' 			=> __( 'No Topic found' ),
				'not_found_in_trash' 	=> __( 'No Topic found in Trash' ),
			);
			
			$pages = array('post','document');
			
			$args = array(
				'labels' 			=> $labels,
				'singular_label' 	=> __('Topic'),
				'public' 			=> true,
				'show_ui' 			=> true,
				'hierarchical' 		=> true,
				'show_tagcloud' 	=> true,
				'show_in_nav_menus' => true,
				'rewrite' 			=> array('slug' => 'topic', 'with_front' => false ),
			 );
			register_taxonomy('topic', $pages, $args);
		}
		add_action('init', 'register_topic_tax');

		// registration code for industry taxonomy
		function register_industry_tax() {
			$labels = array(
				'name' 					=> _x( 'Industries', 'taxonomy general name' ),
				'singular_name' 		=> _x( 'Industry', 'taxonomy singular name' ),
				'add_new' 				=> _x( 'Add New Industry', 'Industry'),
				'add_new_item' 			=> __( 'Add New Industry' ),
				'edit_item' 			=> __( 'Edit Industry' ),
				'new_item' 				=> __( 'New Industry' ),
				'view_item' 			=> __( 'View Industry' ),
				'search_items' 			=> __( 'Search Industries' ),
				'not_found' 			=> __( 'No Industry found' ),
				'not_found_in_trash' 	=> __( 'No Industry found in Trash' ),
			);
			
			$pages = array('post','document');
			
			$args = array(
				'labels' 			=> $labels,
				'singular_label' 	=> __('Industry'),
				'public' 			=> true,
				'show_ui' 			=> true,
				'hierarchical' 		=> true,
				'show_tagcloud' 	=> true,
				'show_in_nav_menus' => true,
				'rewrite' 			=> array('slug' => 'industry', 'with_front' => false ),
			 );
			register_taxonomy('industry', $pages, $args);
		}
		add_action('init', 'register_industry_tax');

		// registration code for resource taxonomy
		function register_resource_tax() {
			$labels = array(
				'name' 					=> _x( 'Resources', 'taxonomy general name' ),
				'singular_name' 		=> _x( 'Resource', 'taxonomy singular name' ),
				'add_new' 				=> _x( 'Add New Resource', 'Resource'),
				'add_new_item' 			=> __( 'Add New Resource' ),
				'edit_item' 			=> __( 'Edit Resource' ),
				'new_item' 				=> __( 'New Resource' ),
				'view_item' 			=> __( 'View Resource' ),
				'search_items' 			=> __( 'Search Resources' ),
				'not_found' 			=> __( 'No Resource found' ),
				'not_found_in_trash' 	=> __( 'No Resource found in Trash' ),
			);
			
			$pages = array('post','document');
			
			$args = array(
				'labels' 			=> $labels,
				'singular_label' 	=> __('Resource'),
				'public' 			=> true,
				'show_ui' 			=> true,
				'hierarchical' 		=> false,
				'show_tagcloud' 	=> true,
				'show_in_nav_menus' => true,
				'rewrite' 			=> array('slug' => 'resource', 'with_front' => false ),
			 );
			register_taxonomy('resource', $pages, $args);
		}
		add_action('init', 'register_resource_tax');
?>