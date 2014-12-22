<?php
/*============================================================================

    ## Functions

============================================================================*/

// Load the Theme Css.
function theme_styles() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'minified', get_template_directory_uri() . '/css/main.css' );
}

// Load the Theme JS.
function theme_js() {
    wp_register_script( 'production', get_template_directory_uri() . '/js/build/main.min.js', array('jquery'), '', true );
    // wp_register_script( 'fitvids', get_template_directory_uri() . '/js/libs/jquery.fitvids.js', array('jquery'), '', true );
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.6.2.min.js', array('jquery'), '', false ); //false = loading modernizr in header
    wp_enqueue_script( 'modernizr' );
    // wp_enqueue_script( 'fitvids' );
    wp_enqueue_script( 'production' );
}

//action away
add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );

//  Enable Custom Menus
// ----------------------------------------------
add_theme_support( 'menus' );

//  Enable Featured Image
// ----------------------------------------------
add_theme_support( 'post-thumbnails' );


?>