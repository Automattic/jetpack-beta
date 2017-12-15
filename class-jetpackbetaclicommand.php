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
		 * activate master: Get a version of the master branch built every 15 minutes
		 * activate stable: Get the latest stable version of Jetpack
		 * activate pr branch_name: Get a version of PR. PR must be built and unit-tested before it become availabe
		 * 
		 * ## EXAMPLES
		 *
		 * wp jetpack-beta branch activate master
		 * wp jetpack-beta branch activate stable
		 * wp jetpack-beta branch activate pr branch_name
		 *
		 */
		public function branch( $args ) {

			$this->validation_checks($args);
				
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

			if ( 'pr' === $args[1] && ! empty( $args[2] ) ) {
				$branch_name = $args[2];
				$branch_name = str_replace('/', '_', $branch_name);  
				$retvalue = Jetpack_Beta::install_and_activate( $branch_name, 'pr' );
				if ( is_wp_error( $retvalue ) ) {
					return WP_CLI::error( __( 'Error', 'jetpack' ) . $retvalue->get_error_message() );
				}
				return WP_CLI::success( __( 'Jetpack is currently on ' . $branch_name, 'jetpack-beta' ) );
			}
			return WP_CLI::error( __( 'Unrecognized section or PR', 'jetpack' ) );
		}

		private function validation_checks($args) {
			if ( is_multisite() && ! is_main_site() ) {
				return WP_CLI::error( __( 'Secondary sites in multisite instalations are not supported', 'jetpack' ) );				
			}

			if ( empty( $args ) ) {
				return WP_CLI::error( __( 'Specify subcommand', 'jetpack' ) );
			}

			if ( 'activate' !== $args[0] || empty( $args[1] ) ) {
				WP_CLI::error( __( 'Passed arguments are not valid. Check usage examples', 'jetpack' ) );				
			}
		}
	}

	WP_CLI::add_command( 'jetpack-beta', 'JetpackBetaCliCommand' );

}
