<?php

if ( ! function_exists( 'sekolahalamcikeas_scripts' ) ) :
	function sekolahalamcikeas_scripts() {
		$theme = wp_get_theme();
		wp_enqueue_style( 'sekolahalamcikeas-style', get_stylesheet_uri(), array(), $theme->Version);
		wp_enqueue_script( 'sekolahalamcikeas-script', get_template_directory_uri() . '/script.js', array(), $theme->Version);
	}
endif;

add_action( 'wp_enqueue_scripts', 'sekolahalamcikeas_scripts' );