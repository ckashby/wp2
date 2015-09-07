<?php
/**
 * @version 0.1
 */
/*
Plugin Name: WP Fast Quotes
Plugin URI: http://github.com/fast-quotes/fast-quotes.php
Description: This is not just a plugin, it will calm you and help smooth out the rough days in life.
Author: C K Ashby
Version: 0.1
Author URI: http://fastquotes.co.uk/
*/

/* WP Fast Quotes is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
WP Fast Quotes is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with WP Fast Quotes. If not, see http://github.com/fast-quotes/fast-quotes.php.
*/

/* If this file is called directly, abort. */
if (! defined('WPINC') ){
	die;
}

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


function fast_quotes_get_quote() {
	/** These are the fast facts */
	$quotes = "The love of learning, the sequestered nooks, And all the sweet serenity of books ― Henry Wadsworth Longfellow 
	The best fighter is never angry. ― Lao Tzu
	There are two ways to get enough. One is to continue to accumulate more and more. The other is to desire less. ― G.K. Chesterton
	Never respond to an angry person with a fiery comeback, even if he deserves it...Don't allow his anger to become your anger. ― Bohdi Sanders
	Death, therefore, the most awful of evils, is nothing to us, seeing that, when we are, death is not come, and, when death is come, we are not. ― Epicurus";

	// Here we split it into lines
	$quotes = explode( "\n", $quotes );

	// And then randomly choose a line
	return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function fast_quotes() {
	$chosen = fast_quotes_get_quote();
	echo "<p id='quotes'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'fast_quotes' );

// We need some CSS to position the paragraph
function quotes_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#quotes {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'quotes_css' );

?>
