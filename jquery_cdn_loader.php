<?php
/*
 * Plugin Name: jQuery CDN Loader
 * Plugin URI:  https://github.com/cress-cc/jquery-cdn-loader
 * Description: Load jQuery from CDN.
 * Version:     1.0.0
 * Author:      Cress
 * Author URI:  https://github.com/cress-cc
 * Text Domain: jquery-cdn-loader
 * License:     GPLv3
 */

// Security check:
defined( 'ABSPATH' ) or exit;

if ( ! function_exists( 'jquery_cdn_loader' )  ) {
	function jquery_cdn_loader() {
		if ( ! is_admin() ) {
			wp_deregister_script('jquery');
			wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', FALSE, '3.6.1', FALSE);
			wp_enqueue_script('jquery');
		}
	}
	add_action( 'plugins_loaded', 'jquery_cdn_loader' );
}
?>