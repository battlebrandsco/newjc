<?php

require_once("vendor/autoload.php");

define( "CHAMELEON_DIR", get_stylesheet_directory_uri() . '/vendor/themarcusbattle/chameleon/' );

/**
 * Include the custom styles.
 */
function newjc_include_styles() {
    wp_enqueue_style( 'chameleon', CHAMELEON_DIR . 'css/chameleon.css' );
    wp_enqueue_style( 'newjc', get_stylesheet_directory_uri() . '/assets/css/newjc.css' );
}

add_action( 'wp_enqueue_scripts', 'newjc_include_styles' );

/**
 * Register the navigation menus.
 */
function newjc_register_menus() {

    register_nav_menus(
        [
            'header-menu'   => __( 'Header Menu', 'newjc' ),
            'social-menu'   => __( 'Social Menu', 'newjc' ),
            'williams-menu' => __( 'Pastor Williams Menu', 'newjc' ),
        ]
    );
}

add_action( 'init', 'newjc_register_menus' );

function newjc_add_body_classes( $classes ) {

    global $post;

    if ( isset( $post->post_name ) ) {
        $classes[] = $post->post_name;
    }

    return $classes;
}

add_filter( 'body_class', 'newjc_add_body_classes' );