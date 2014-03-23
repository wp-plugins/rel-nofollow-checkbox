<?php
/**
 * Plugin Name: Rel Nofollow Checkbox
 * Plugin URI:  http://www.fabiosantos.pt/rel-nofollow-checkbox/
 * Description: Adds a checkbox in the insert/edit link popup for including (or not) nofollow attribute in links.
 * Version:     1.0
 * Author:      Fabio Santos
 * Author URI:  http://www.fabiosantos.pt
 */
function overwrite_wplink() {
	// Disable wplink
	wp_deregister_script( 'wplink' );
	
	// Register a new script file to be linked
	wp_register_script( 'wplink', plugins_url( 'wplink.min.js', __FILE__), array( 'jquery', 'wpdialogs' ), false, 1 );
}
add_action( 'admin_enqueue_scripts', 'overwrite_wplink', 9999 );
?>