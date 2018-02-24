<?php
/**
 * Template part for minimal Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Melissa
 */
?>

<div class="header-container__flex">
<!--	--><?php //melissa_social_list( 'header' ); ?>
	<div class="site-branding">
		<?php melissa_header_logo() ?>
		<?php melissa_site_description(); ?>
	</div>
	<?php melissa_main_menu(); ?>
</div>
