<?php

/**

 * The header for our theme.

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Melissa

 */



?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">



    <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>
    <div class="fullscreen-bg">
        <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
            <source src="https://proyectoexiste.es/wp-content/uploads/2018/02/Lighthouse-1917.mp4" type="video/mp4">
        </video>
    </div>

<?php melissa_get_page_preloader(); ?>

<div id="page" class="site">

    <a class="skip-link screen-reader-text"

       href="#content"><?php esc_html_e('Skip to content', 'melissa'); ?></a>

    <header id="masthead" <?php melissa_header_class(); ?> role="banner">

        <?php melissa_ads_header() ?>

        <?php get_template_part('template-parts/header/top-panel'); ?>

        <div class="header-container">

            <div <?php echo melissa_get_container_classes(array('header-container_wrap'), 'header'); ?>>

                <?php get_template_part('template-parts/header/layout', get_theme_mod('header_layout_type')); ?>

            </div>

        </div><!-- .header-container -->

    </header><!-- #masthead -->



    <div id="content" <?php melissa_content_class(); ?>>

