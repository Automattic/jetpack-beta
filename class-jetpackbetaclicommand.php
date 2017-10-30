<?php

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	/**
	 * Control your local Jetpack Beta Tester plugin.
	 */
	class JetpackBetaCliCommand extends WP_CLI_Command {
		/**
		 * Activate a branch version
		 *
		 * ## OPTIONS
		 *
		 *
		 * activate master: Get a version of the master branch built every 15 minutes
		 *
		 * activate stable: Get the latest stable version of Jetpack
		 *
		 * ## EXAMPLES
		 *
		 * wp jetpack-beta branch activate master
		 * wp jetpack-beta branch activate stable
		 *
		 */
		public function branch( $args ) {
			if ( ! empty( $args ) ) {
				if ( 'activate' === $args[0] && ! empty( $args[1] ) ) {
					if ( 'master' === $args[1] ) {
						$retvalue = Jetpack_Beta::install_and_activate( 'master', 'master' );
						if ( is_wp_error( $retvalue ) ) {
							return WP_CLI::error( __( 'Error', 'jetpack' ) . $retvalue->get_error_message() );
						}
						return WP_CLI::success( __( 'Jetpack is currently on Bleeding Edge', 'jetpack-beta' ) );
					}
					if ( 'stable' === $args[1] ) {
						$retvalue = Jetpack_Beta::install_and_activate( 'stable', 'stable' );
						if ( is_wp_error( $retvalue ) ) {
							return WP_CLI::error( __( 'Error', 'jetpack' ) . $retvalue->get_error_message() );
						}
						return WP_CLI::success( __( 'Jetpack is currently on Latest Stable', 'jetpack-beta' ) );
					}
					return WP_CLI::error( __( 'Unrecognized version', 'jetpack' ) );
				} else {
					WP_CLI::error( __( 'Specify master or stable', 'jetpack' ) );
				}
			}
			return WP_CLI::error( __( 'Specify subcommand', 'jetpack' ) );
		}
	}

	WP_CLI::add_command( 'jetpack-beta', 'JetpackBetaCliCommand' );

}
