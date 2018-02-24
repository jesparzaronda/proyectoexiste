<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Melissa
 */
?>

<div class="footer-area-wrap ">
	<div class="container">
		<?php do_action( 'melissa_render_widget_area', 'footer-area' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo melissa_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info__flex">
			<?php melissa_footer_logo(); ?>
			<div class="site-info__mid-box"><?php
				melissa_footer_menu();
				melissa_footer_copyright();
			?></div>
			<?php melissa_social_list( 'footer' ); ?>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->