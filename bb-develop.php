<?php

/*
Plugin Name: BB Develop
Plugin URI: https://github.com/baardbaard/bb-develop
Description: WordPress plugin for development.
Version: 1.0
Author: Baardbaard
Author URI: http://baardbaard.nl
License: MIT
*/

/**
 * Log error messages
 *
 * @return void
 * @since  1.0
 */
if ( !function_exists( '_log' ) ) {
	function _log ( $log )  {
		if ( true === WP_DEBUG ) {
			if ( is_array( $log ) || is_object( $log ) ) {
				error_log( print_r( $log ) );
			} else {
				error_log( $log );
			}
		}
	}
}

/* Custom admin menu link for all settings
 *
 * @return void;
 * @since 1.0
 */
function bb_all_settings_link() {
	add_options_page( __( 'All Settings' ), __( 'All Settings' ), 'administrator', 'options.php' );
}

add_action( 'admin_menu', 'bb_all_settings_link' );


?>
