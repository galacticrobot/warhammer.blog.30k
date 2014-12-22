        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="container">
                <div class="site-info">
                    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'warhammer30k' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'warhammer30k' ), 'WordPress' ); ?></a>
                    <span class="sep"> | </span>
                    <?php printf( __( 'Theme: %1$s by %2$s.', 'warhammer30k' ), 'warhammer30k', '<a href="http://thesherps.com" rel="designer">Sebastian Scarpa</a>' ); ?>
                </div><!-- .site-info -->
            </div>
        </footer><!-- #colophon -->

        <?php wp_footer(); ?>
    </body>
</html>