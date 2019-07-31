<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'invest_theme_scripts' );
add_action( 'wp_footer', 'invest_theme_styles_scripts' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );

function invest_theme_scripts() {
    wp_enqueue_style( 'main', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
}
function invest_theme_styles_scripts() {
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css' );
    wp_enqueue_style( 'powerange', get_template_directory_uri() . '/assets/css/powerange.min.css' );
}
function jquery_lib(){
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script( 'powerange', get_template_directory_uri() . '/assets/js/powerange.min.js' );
}
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Только для post
add_image_size( 'object-preview', 371, 141, true );