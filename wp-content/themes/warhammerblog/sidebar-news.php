<div class="sidebar-news">

    <?php if ( is_active_sidebar( 'sidebar_news' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar_news' ); ?>

    <?php else : ?>

        <?php
            /*
             * This content shows up if there are no widgets defined in the backend.
            */
        ?>

        <div class="no-widgets">
            <p><?php _e( 'This is a widget area for the news section. Add some and they will appear here.', 'samuelsander' );  ?></p>
        </div>

<?php endif; ?>

</div>