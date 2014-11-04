<?php

/*

Plugin Name: Gravity Forms - Tim's Slightly Better Placeholders add-on

Plugin URI: http://github.com/neojp/gravity-forms-placeholders/

Description: Adds HTML5 placeholder support to Gravity Forms' fields with a javascript fallback. Javascript & jQuery are required.

Version: 1.0

Author: Tim Spinks (original by: Joan Piedra)

Author URI: http://monkishtypist.com



Instructions:

Add "gplhfield" class for all fields, or "gplhinput" specifically for complex fields (address, name, etc.)

Original still supported: Just add a "gplaceholder" CSS classname to the required fields or form

*/



if ( isset( $GLOBALS['pagenow'] ) && $GLOBALS['pagenow'] == 'wp-login.php' )

	return;



add_action('wp_print_scripts', 'gf_placeholder_enqueue_scripts');



function gf_placeholder_enqueue_scripts() {

	$plugin_url = plugins_url( basename(dirname(__FILE__)) );

	echo "<script>var jquery_placeholder_url = '" . $plugin_url . "/jquery.placeholder-1.0.1.js';</script>";

	wp_enqueue_script('_gf_placeholders', $plugin_url . '/gf.placeholders.js', array('jquery'), '1.0' );

}