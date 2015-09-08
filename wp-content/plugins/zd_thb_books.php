<?php
/*
Plugin Name: ZD THB Books
Plugin URI: http://www.zdthb.com/zd_thb_books.php
Description: WP Plugin for managing books
Version: 0.1
Author: C K Ashby
License: GPLv2
*/

/* The plugin generated 2 characters of unexpected output during activation. 
*  If you notice “headers already sent” messages, problems with syndication feeds 
*  or other issues, try deactivating or removing this plugin. */


add_action('init', 'create_book');
function create_book() {
	register_post_type( 'books',
		array(
			'labels' => array(
				'name' => 'My Books',
				'singular_name' => 'Book',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Book',
				'edit'=> 'Edit',
				'edit_item' => 'Edit Book',
				'new_item' => 'New Book',
				'view' => 'View',
				'view_item' => 'View Book',
				'search_item' => 'Search Books',
				'not_found' => 'No Books found',
				'not_found_in_trash' => 'No Books found in Trash',
				'parent' => 'Parent Book'
			),
			
			'public' => true,
			'menu_position' => 15,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies' => array(''),
			// 'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
			'has_archive' => true
		)
    );
}
?>

