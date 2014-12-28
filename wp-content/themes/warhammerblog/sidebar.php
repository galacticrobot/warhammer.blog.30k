<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package 30k Gaming
 */

if ( ! is_active_sidebar( 'sidebar_news' ) ) {
    return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
    <div class="sidebar-news">
        <?php dynamic_sidebar( 'sidebar_news' ); ?>
    </div>
</div><!-- #secondary -->
