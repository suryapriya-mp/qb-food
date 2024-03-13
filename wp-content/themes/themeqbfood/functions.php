<?php

function addQbScript() {
    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css');


    wp_enqueue_script( 'jquery-slim-min', get_stylesheet_directory_uri() . '/assets/js/jquery.slim.min.js', array(), false, true );
    wp_enqueue_script( 'slick-min', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array(), false, true );
    wp_enqueue_script( 'bootstrap-bundle-min', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), false, true );
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), false, true );

}
add_action('wp_enqueue_scripts', 'addQbScript');

add_theme_support( 'menus' );

function register_my_menus() {
    register_nav_menus(
        array(
            'top-menu' => 'Top Menu'
            )
        );
}
add_action( 'init', 'register_my_menus' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );