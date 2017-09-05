<?php
/**
 * Davidson enqueue scripts
 *
 * @package davidson01
 */

if ( ! function_exists( 'davidson01_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function davidson01_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Quicksand|Raleway', false );

		wp_enqueue_style( 'davidson01-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
		wp_enqueue_script( 'davidson01-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'davidson01_scripts' ).

add_action( 'wp_enqueue_scripts', 'davidson01_scripts' );
