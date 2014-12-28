<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package 30k Gaming
 */
?>

<div class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title">Nothing Found</h1>
    </header><!-- .page-header -->

    <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'gaming_blog' ); ?></p>
    <?php get_search_form(); ?>

</div><!-- .no-results -->