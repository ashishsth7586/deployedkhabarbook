<?php

	function advertisement_post_types() {
		register_post_type( 'advertisement', array(
			'show_ui' => true,
			'taxonomies' => array('adcategory'),
			'supports' => array('title', 'excerpt', 'thumbnail'),
			'rewrite' => array('slug' => 'advertisements'),
			'public' => true,
			'labels' => array(
							'name' => 'Advertisements',
							'add_new_item' => 'Add New Ad',
							'edit_item' => 'Edit Ad',
							'all_items' => 'All Ads',
							'singular_name' => 'Advertisement'
						),
			'menu_icon' => 'dashicons-admin-links',
 		));
	}
	add_action('init', 'advertisement_post_types');

	function taxonomies_ad() {
		$labels = array (
			'name' =>  'Ad Categories',
			'add_new_item' => 'Add Ad Category',
			'edit_item' => 'Edit Ad Category',
			'all_items' => 'All Ad Categories',
			'singular_name' => 'Ad Categories',
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => true,
		);

		register_taxonomy('adcategory', 'advertisement', $args);
	}
	add_action('init', 'taxonomies_ad', 0);
?>