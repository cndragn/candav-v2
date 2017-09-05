<?php
/**
 * Check and setup theme's default settings
 *
 * @package davidson01
 *
 */

if ( ! function_exists( 'setup_theme_default_settings' ) ) :
	function setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$davidson01_posts_index_style = get_theme_mod( 'davidson01_posts_index_style' );
		if ( '' == $davidson01_posts_index_style ) {
			set_theme_mod( 'davidson01_posts_index_style', 'default' );
		}

		// Sidebar position.
		$davidson01_sidebar_position = get_theme_mod( 'davidson01_sidebar_position' );
		if ( '' == $davidson01_sidebar_position ) {
			set_theme_mod( 'davidson01_sidebar_position', 'right' );
		}

		// Container width.
		$davidson01_container_type = get_theme_mod( 'davidson01_container_type' );
		if ( '' == $davidson01_container_type ) {
			set_theme_mod( 'davidson01_container_type', 'container' );
		}
	}
endif;
