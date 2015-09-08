<?php
/*
Plugin Name: ZD THB Even
Plugin URI: http://www.zdthb.com/
Description: WP Plugin for managing events
Version: 0.1
Author: C K Ashby
License: GPLv2
*/

add_action('init', 'create_event');
function create_event() {
	register_post_type( 'events',
		array(
			'labels' => array(
				'name' => 'Events',
				'singular_name' => 'Event',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Event',
				'edit'=> 'Edit',
				'edit_item' => 'Edit Event',
				'new_item' => 'New Event',
				'view' => 'View',
				'view_item' => 'View Event',
				'search_item' => 'Search Events',
				'not_found' => 'No Events found',
				'not_found_in_trash' => 'No Events found in Trash',
				'parent' => 'Parent Event'
			),
			
			'public' => true,
			'menu_position' => 15,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies' => array(''),
			// 'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
			'has_archive' => true
		)
    );
}
?>

