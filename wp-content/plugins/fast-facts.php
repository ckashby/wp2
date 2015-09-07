<?php
/**
 * @version 0.1
 */
/*
Plugin Name: WP Fast Facts
Plugin URI: http://wordpress.org/plugins/fastfacts/
Description: This is not just a plugin, it can educate you.
Author: C K Ashby
Version: 0.1
Author URI: http://fastfacts.co.uk/
*/

/* If this file is called directly, abort */
if (! defined('WPINC') ){
	die;
}

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function fast_facts_get_fact() {
	/** These are the fast facts */
	$facts = "Most Muppets are left-handed. (Because most Muppeteers are right-handed.)
	The person who invented the Frisbee was cremated and made into frisbees after he died!
	In the UK, it is illegal to eat mince pies on Christmas Day!
	Pteronophobia is the fear of being tickled by feathers!
	Cherophobia is the fear of fun.
	Human saliva has a boiling point three times that of regular water.
	If you lift a kangaroo’s tail off the ground it can’t hop.
	You cannot snore and dream at the same time.
	A baby octopus is about the size of a flea when it is born.
	A sheep, a duck and a rooster were the first passengers in a hot air balloon.
	Recycling one glass jar saves enough energy to watch TV for 3 hours.
	About 8,000 Americans are injured by musical instruments each year.
	A crocodile can’t poke its tongue out :p
	Sea otters hold hands when they sleep so they don’t drift away from each other.
	A small child could swim through the veins of a blue whale.
";

	// Here we split it into lines
	$facts = explode( "\n", $facts );

	// And then randomly choose a line
	return wptexturize( $facts[ mt_rand( 0, count( $facts ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function fast_facts() {
	$chosen = fast_facts_get_fact();
	echo "<p id='facts'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'fast_facts' );

// We need some CSS to position the paragraph
function facts_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#facts {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'facts_css' );

?>
