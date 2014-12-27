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
function gaming_register_sidebars() {
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

add_action( 'widgets_init', 'gaming_register_sidebars' );

//============================================================================
//   ACF OPTIONS
//============================================================================


//  Add ACF options page
// ===============================================

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => true //setting this to true jumps to footer directly
    ));

    // acf_add_options_sub_page(array(
    //     'page_title'    => 'Theme Header Settings',
    //     'menu_title'    => 'Header',
    //     'parent_slug'   => 'theme-general-settings',
    // ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}

//============================================================================
//   DASHBOARD WIDGETS
//============================================================================

//  Custom Welcome Dashboard Widget 1
// ===============================================

function gaming_valkommen_dashboard_widgets() {
    global $wp_meta_boxes;
        wp_add_dashboard_widget('custom_help_widget', 'Välkommen till er nya site gentlemen!', 'custom_dashboard_help');
    }
    function custom_dashboard_help() {
    echo '<div>
        <h4>Greetings</h4>

        <p>Här är er nya 30k site. Inget mästerverk kanske, men den funkar. Hoppas ni diggar den.<br>
        Har ni frågor är det bara att droppa Pontus ett mail: <a href="mailto:info@30kgaming.com">info@30kgaming.com</a></p>

        <p>Mvh<br>
        Sebastian
        </p>
        </div>';
}
add_action('wp_dashboard_setup', 'gaming_valkommen_dashboard_widgets');

//  Custom Welcome Dashboard Widget 2
// ===============================================

//add widget
// function gaming_add_dashboard_widgets() {

//     wp_add_dashboard_widget(
//                  'example_dashboard_widget',         // Widget slug.
//                  'Example Dashboard Widget',         // Title.
//                  'gaming_dashboard_widget_function' // Display function.
//         );
// }
// add_action( 'wp_dashboard_setup', 'gaming_add_dashboard_widgets' );

// //output content of function
// function gaming_dashboard_widget_function() {

//     // Display whatever it is you want to show.
//     echo "Hello World, I'm a great Dashboard Widget";
// }

//  Remove Dashboard Widgets that aren't used
// ===============================================

// Create the function to use in the action hook
function gaming_remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        //remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'gaming_remove_dashboard_meta' );

//  Remove Welcome Panel
// ===============================================
remove_action( 'welcome_panel', 'wp_welcome_panel' );


//============================================================================
//   Hide Plugins we dont want to show
//============================================================================

//acf
function gaming_hide_plugin_acf() {

    // provide a list of usernames who can edit custom field definitions here
    $admins = array(
        //'admin',
        'thesherps'
    );

    // get the current user
    $current_user = wp_get_current_user();

    // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {

          global $wp_list_table;
          $hidearr = array('advanced-custom-fields-pro/acf.php');
          $myplugins = $wp_list_table->items;
          foreach ($myplugins as $key => $val) {
            if (in_array($key,$hidearr)) {
              unset($wp_list_table->items[$key]);
            }
          }

    }
}
add_action('pre_current_active_plugins', 'gaming_hide_plugin_acf');

//custom post types UI

function gaming_hide_plugin_cptui() {

    // provide a list of usernames who can edit custom field definitions here
    $admins = array(
        //'admin',
        'thesherps'
    );

    // get the current user
    $current_user = wp_get_current_user();

    // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {
          global $wp_list_table;
          $hidearr = array('custom-post-type-ui/custom-post-type-ui.php');
          $myplugins = $wp_list_table->items;
          foreach ($myplugins as $key => $val) {
            if (in_array($key,$hidearr)) {
              unset($wp_list_table->items[$key]);
            }
          }
    }
}

add_action('pre_current_active_plugins', 'gaming_hide_plugin_cptui');

//============================================================================
//   CUSTOMIZE ADMIN
//============================================================================

//  Hide ACF menu item from the admin menu
// ===============================================

function gaming_remove_acf_menu() {

    // provide a list of usernames who can edit custom field definitions here
    $admins = array(
        'Pontus',
        'thesherps'
    );

    // get the current user
    $current_user = wp_get_current_user();

    // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {
        remove_menu_page('edit.php?post_type=acf-field-group');
    }

}

add_action( 'admin_menu', 'gaming_remove_acf_menu', 999 );

//  Hide other unused stuff from Admin menu, unless logged in as admin
// ===============================================

function gaming_remove_admin_menu_items() {

    // provide a list of usernames who can edit custom field definitions here
    $admins = array(
        'Pontus',
        'thesherps'
    );

        // get the current user
    $current_user = wp_get_current_user();

        // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {
        remove_menu_page('cpt_main_menu'); //Custom Post Types UI
        remove_menu_page('tools.php'); //Tools
        remove_submenu_page( 'themes.php', 'theme-editor.php' ); //the css editor
        remove_submenu_page( 'plugins.php', 'plugin-editor.php' ); //the plugins editor
        remove_submenu_page( 'themes.php', 'customize.php' ); //the customize section
    }
}
add_action( 'admin_menu', 'gaming_remove_admin_menu_items', 9999 );

// --------------------------------------------------------------------------
//  Remove Wordpress Logo from admin bar
// --------------------------------------------------------------------------
//removes it from this theme ONLY.

function gaming_remove_wp_logo( $wp_admin_bar ) {
$wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'gaming_remove_wp_logo', 999);

// --------------------------------------------------------------------------
//  Add custom footer text in admin
// --------------------------------------------------------------------------

function gaming_custom_footer_text () {
echo "Gooby pls";
}
add_filter('admin_footer_text', 'gaming_custom_footer_text');

// --------------------------------------------------------------------------
//  Change name of "posts" to "News"
// --------------------------------------------------------------------------

// in Menu
function gaming_change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add News';
}
add_action( 'admin_menu', 'gaming_change_post_menu_label' );

// In submenus
function gaming_change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News';
    $labels->add_new = 'Add News';
    $labels->add_new_item = 'Add News Post';
    $labels->edit_item = 'Edit News';
    $labels->new_item = 'New Newsitem';
    $labels->view_item = 'Show News';
    $labels->search_items = 'Search News';
    $labels->not_found = 'No News could be found';
    $labels->not_found_in_trash = 'No News found in trash';
}
add_action( 'admin_menu', 'gaming_change_post_object_label' );

?>