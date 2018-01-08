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
		 * activate branch_name: Get a version of PR. PR must be built and unit-tested before it become availabe
		 * activate list: Get list of available jetpack branches to install 
		 * 
		 * ## EXAMPLES
		 *
		 * wp jetpack-beta branch activate master
		 * wp jetpack-beta branch activate stable
		 * wp jetpack-beta branch activate branch_name
		 * wp jetpack-beta branch list
		 *
		 */
		public function branch( $args ) {

			$this->validation_checks( $args );

			if ( 'list' === $args[0] ) {
				$manifest = Jetpack_Beta::get_beta_manifest();
				$branches = [ 'stable', 'master', 'rc' ];
				foreach(get_object_vars( $manifest->pr ) as $key )
					{
						$branches[] = $key->branch;
					}
				return WP_CLI::line( 'Available branches: ' . join( ', ', $branches ) );
			}
				
			if ( 'master' === $args[1] ) {
				return $this->install_jetpack( 'master', 'master' );
			} elseif ( 'stable' === $args[1] ) {
				return $this->install_jetpack( 'stable', 'stable' );
			} else {
				$branch_name = str_replace( '/', '_', $args[1] ); 
				$url = Jetpack_Beta::get_install_url( $branch_name, 'pr' );
				if ( $url === null ) {
					return WP_CLI::error( __( 'Invalid branch name. Try `wp jetpack-beta branch list` for list of available branches', 'jetpack' ) );
				}
				return $this->install_jetpack( $branch_name, 'pr' );
			}
			return WP_CLI::error( __( 'Unrecognized branch version. ', 'jetpack' ) );
		}

		private function validation_checks( $args ) {
			if ( is_multisite() && ! is_main_site() ) {
				return WP_CLI::error( __( 'Secondary sites in multisite instalations are not supported', 'jetpack' ) );				
			}

			if ( empty( $args ) ) {
				return WP_CLI::error( __( 'Specify subcommand', 'jetpack' ) );
			}

			if ( 'activate' !== $args[0] && 'list' !== $args[0] ) {
				return WP_CLI::error( __( 'Only "activate" and "list" subcommands are supported', 'jetpack' ) );				
			}

			if ( 'activate' === $args[0] && empty( $args[1] ) ) {
				return WP_CLI::error( __( 'Specify branch name. Try `wp jetpack-beta branch list` for list of available branches', 'jetpack' ) );				
			}
		}

		private function install_jetpack($branch, $section) {
			$result = Jetpack_Beta::install_and_activate( $branch, $section  );
			if ( is_wp_error( $result ) ) {
				return WP_CLI::error( __( 'Error', 'jetpack' ) . $result->get_error_message() );
			}
			return WP_CLI::success( __( 'Jetpack is currently on ' . $branch . ' branch', 'jetpack-beta' ) );
		}
	}

	WP_CLI::add_command( 'jetpack-beta', 'JetpackBetaCliCommand' );
}
