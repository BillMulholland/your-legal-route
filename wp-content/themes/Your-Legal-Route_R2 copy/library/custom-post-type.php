<?php
// registration code for document post type
	function register_document_posttype() {
		$labels = array(
			'name' 				=> _x( 'Documents', 'post type general name' ),
			'singular_name'		=> _x( 'Document', 'post type singular name' ),
			'add_new' 			=> __( 'Add New' ),
			'add_new_item' 		=> __( 'document' ),
			'edit_item' 		=> __( 'document' ),
			'new_item' 			=> __( 'document' ),
			'view_item' 		=> __( 'document' ),
			'search_items' 		=> __( 'document' ),
			'not_found' 		=> __( 'document' ),
			'not_found_in_trash'=> __( 'document' ),
			'parent_item_colon' => __( 'document' ),
			'menu_name'			=> __( 'Documents' )
		);
		
		$taxonomies = array();

		$supports = array('title','editor','author','thumbnail','excerpt','custom-fields','comments','revisions');
		
		$post_type_args = array(
			'labels' 			=> $labels,
			'singular_label' 	=> __('Document'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'exclude_from_search'=> false,
			'show_in_nav_menus'	=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'documents', 'with_front' => false ),
			'supports' 			=> $supports,
			'menu_position' 	=> 5,
			'menu_icon' 		=> 'dashicons-media-text',
			'taxonomies'		=> $taxonomies
		 );
		 register_post_type('document',$post_type_args);
	}
	add_action('init', 'register_document_posttype')

?>