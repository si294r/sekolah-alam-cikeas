<?php

if ( ! function_exists( 'sekolahalamcikeas_scripts' ) ) :
	function sekolahalamcikeas_scripts() {
		$theme = wp_get_theme();
		wp_enqueue_style( 'sekolahalamcikeas-style', get_stylesheet_uri(), array(), $theme->Version);
		wp_enqueue_script( 'sekolahalamcikeas-script', get_template_directory_uri() . '/script.js', array(), $theme->Version);
	}
endif;

add_action( 'wp_enqueue_scripts', 'sekolahalamcikeas_scripts' );


if ( ! function_exists( 'sekolahalamcikeas_register_block_pattern_category' ) ) :
	function sekolahalamcikeas_register_block_pattern_category() {
		register_block_pattern_category( 'custom-pattern',  array( 'label' => 'Custom Pattern' ));
	}
endif;
  
add_action( 'init', 'sekolahalamcikeas_register_block_pattern_category' );


function sekolahalamcikeas_get_reviews() {
    global $wpdb;
    // error_log( var_export($wpdb, true) );
    $results = $wpdb->get_results(
        'select review_id, nama, tanggal, teks, flag_show 
        from reviews 
        where flag_show = 1
        order by tanggal desc'
        ,
        ARRAY_A
    );
    return $results;
}
