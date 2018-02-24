<?php
/**
 * Menus configuration.
 *
 * @package Melissa
 */

add_action( 'after_setup_theme', 'melissa_register_menus', 5 );
function melissa_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'melissa' ),
		'main'   => esc_html__( 'Main', 'melissa' ),
		'footer' => esc_html__( 'Footer', 'melissa' ),
		'social' => esc_html__( 'Social', 'melissa' ),
	) );
}
