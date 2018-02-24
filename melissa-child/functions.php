<?php

//AÑADIMOS BOOTSTRAP
function theme_styles() {

  wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' ); 
  wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

  global $wp_scripts;

  wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js' ); 

}

add_action( 'wp_enqueue_scripts', 'theme_js');

