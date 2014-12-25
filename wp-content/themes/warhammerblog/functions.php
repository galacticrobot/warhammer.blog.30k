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

//  ACTIVE SIDEBARS
// ===============================================

// Sidebars & Widgetizes Areas
function undercoat_register_sidebars() {
    register_sidebar(array(
        'id' => 'sidebar_news',
        'name' => __( 'Sidebar News', '30kgaming' ),
        'description' => __( 'The News Sidebar.', '30kgaming' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'sidebar_page',
        'name' => __( 'Sidebar Pages', '30kgaming' ),
        'description' => __( 'The Page Sidebar.', '30kgaming' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    /*
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call
    your new sidebar just use the following code:

    Just change the name to whatever your new
    sidebar's id is, for example:

    register_sidebar(array(
        'id' => 'sidebar2',
        'name' => __( 'Sidebar 2', 'bonestheme' ),
        'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php

    */
} // don't remove this bracket!

add_action( 'widgets_init', 'undercoat_register_sidebars' );

?>