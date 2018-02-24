<?php
/**
 * Thumbnails configuration.
 *
 * @package Melissa
 */

add_action( 'after_setup_theme', 'melissa_register_image_sizes', 5 );
function melissa_register_image_sizes() {
	set_post_thumbnail_size( 370, 285, true );

	// Registers a new image sizes.
	add_image_size( 'melissa-thumb-s', 150, 150, true );
	add_image_size( 'melissa-thumb-m', 370, 286, true );
	add_image_size( 'melissa-thumb-l', 384, 450, true );
	add_image_size( 'melissa-thumb-1170-600', 1170, 600, true );
	add_image_size( 'melissa-thumb-x', 1170, 780, true );
	add_image_size( 'melissa-thumb-xl', 1920, 1080, true );

}
