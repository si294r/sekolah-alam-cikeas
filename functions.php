<?php

if ( ! function_exists( 'sekolahalamcikeas_stylesheets' ) ) :
	function sekolahalamcikeas_stylesheets() {
		$theme = wp_get_theme();
		wp_enqueue_style( 'sekolahalamcikeas-style', get_stylesheet_uri(), array(), $theme->Version);
	}
endif;

add_action( 'init', 'sekolahalamcikeas_stylesheets' );