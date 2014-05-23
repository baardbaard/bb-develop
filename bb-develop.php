<?php

/*
Plugin Name: BB Develop
Plugin URI: https://github.com/baardbaard/bb-develop
Description: Helper functions for theme and plugin development.
Version: 1.0
Author: Baardbaard
Author URI: http://baardbaard.nl
License: MIT
*/

class BB_Dev {

	function __construct() {
		add_action( 'admin_menu', array( $this, 'add_all_settings_link' ) );
	}

	/* Custom admin menu link for all settings
	 *
	 * @return void;
	 * @since 1.0
	 */
	public function add_all_settings_link() {
		add_options_page( __( 'All Settings' ), __( 'All Settings' ), 
			'administrator', 'options.php' );
	}

	/**
	 * Log error messages
	 *
	 * @return void
	 * @since  1.0
	 */
	function log ( $log )  {
		if ( true === WP_DEBUG ) {
			if ( is_array( $log ) || is_object( $log ) ) {
				error_log( print_r( $log ) );
			} else {
				error_log( $log );
			}
		}
	}
}

$bbdev = new BB_Dev();

?>
