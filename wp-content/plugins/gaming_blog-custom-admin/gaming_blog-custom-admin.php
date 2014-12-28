<?php
/*
Plugin Name: gaming Custom Admin
Plugin URI:
Description: This plugin customizes the WordPress dashboard to fit 3okgaming.com
Version: 1.0
Author: Sebastian Scarpa
Author URI: http://thesherps.com
*/

//  Remove Comments for everyone
// ===============================================
function gaming_remove_comments_menu_item() {
    remove_menu_page('edit-comments.php');
}
add_action( 'admin_menu', 'gaming_remove_comments_menu_item' );

//  Add Tutorial Section to Dashboard. in sidebar
// ===============================================
// function gaming_admin_tutorial_page() {
//     add_dashboard_page('Tutorial Page', 'Video Tutorials', 'read', 'video_tutorials', 'my_plugin_function');
// }
// add_action('admin_menu', 'gaming_admin_tutorial_page');

?>
