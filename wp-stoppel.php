<?php

/*
Plugin Name: WP-Stoppel
Plugin URI: https://github.com/baardbaard/wp-stoppel
Description: WordPress plugin for development.
Version: 1.0
Author: Stef Thoen
Author URI: http://baardbaard.nl
License: MIT
*/

/**
 * Log error messages
 *
 * @return void
 * @author Stef Thoen
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

?>
