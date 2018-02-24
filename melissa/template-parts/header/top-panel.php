<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Melissa
 */

// Don't show top panel if all elements are disabled.
if ( ! melissa_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel">
	<div <?php echo melissa_get_container_classes( array( 'top-panel__wrap' ), 'header' ); ?>><?php
		melissa_top_message( '<div class="top-panel__message">%s</div>' );
		melissa_top_menu();
		echo '<div class="top-panel__inner">';
		melissa_top_search( '<div class="top-panel__search">%s<span class="search__toggle fa fa-search"></span></div>' );
		melissa_social_menu();
		echo '</div>';
	?></div>
</div><!-- .top-panel -->