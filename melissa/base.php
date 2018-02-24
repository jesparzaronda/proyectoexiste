<?php get_header( melissa_template_base() ); ?>


	<?php melissa_site_breadcrumbs(); ?>

	<div <?php echo melissa_get_container_classes( array( 'site-content_wrap' ), 'content' ); ?>>


		<div class="row">

			<div id="primary" <?php melissa_primary_content_class(); ?>>

				<?php do_action( 'melissa_render_widget_area', 'before-loop-area' ); ?>

				<main id="main" class="site-main" role="main">

					<?php include melissa_template_path(); ?>

				</main><!-- #main -->

				<?php do_action( 'melissa_render_widget_area', 'after-loop-area' ); ?>

			</div><!-- #primary -->


			<?php get_sidebar(); ?>

		</div><!-- .row -->

		<?php do_action( 'melissa_render_widget_area', 'after-content-area' ); ?>

	</div><!-- .container -->


<?php get_footer( melissa_template_base() ); ?>
