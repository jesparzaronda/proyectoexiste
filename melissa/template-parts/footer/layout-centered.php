<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Melissa
 */

?>
<div class="footer-container">
	<div <?php echo melissa_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<?php
			melissa_footer_copyright();
			melissa_footer_menu();
			melissa_social_list( 'footer' );

		?>
	</div><!-- .site-info -->
</div><!-- .container -->