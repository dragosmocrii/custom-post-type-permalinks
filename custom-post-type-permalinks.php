<?php
/*
Plugin Name: Custom Post Type Permalinks
Plugin URI: http://www.torounit.com
Description:  Add post archives of custom post type and customizable permalinks.
Author: Toro_Unit
Author URI: http://www.torounit.com/plugins/custom-post-type-permalinks/
Version: 0.9.7
Text Domain: cptp
License: GPL2 or later
Domain Path: /language/
*/


/**
 *
 * Custom Post Type Permalinks
 *
 * @package Custom_Post_Type_Permalinks
 * @version 0.9.7
 *
 */

define( 'CPTP_PLUGIN_FILE', __FILE__ );
define( 'CPTP_VERSION', '0.9.7' );
define( 'CPTP_DEFAULT_PERMALINK', '/%postname%/' );



/**
 *
 * Autoloader for CPTP.
 * @since 0.9.7
 *
 */
function cptp_class_loader( $class_name ) {
	$dir = dirname( __FILE__ );
	$file_name = $dir . '/'. str_replace( '_', '/', $class_name ).'.php';
	if ( is_readable( $file_name ) ) {
		include $file_name;
	}
}
spl_autoload_register( 'cptp_class_loader' );


/**
 *
 * Entry Point
 * @since 0.9.4
 *
 */
add_action( 'plugins_loaded', 'cptp_init_instance' );
function cptp_init_instance() {
	CPTP::get_instance();
}


