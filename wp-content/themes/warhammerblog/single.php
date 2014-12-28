<?php
/**
 * The template for displaying all single posts.
 *
 * @package 30k Gaming
 */

get_header(); ?>

        <section class="content-block">
            <div class="container">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'content', 'single' ); ?>

                            <?php wp_pagenavi()  ?>

                            <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                #if ( comments_open() || get_comments_number() ) :
                                    #comments_template();
                                #endif;
                            ?>

                        <?php endwhile; // end of the loop. ?>

                    </main><!-- #main .site-main -->

                </div><!-- #primary .content-area -->

                <?php get_sidebar(); ?>

            </div>
        </section><!-- content-block -->

<?php get_footer(); ?>

__


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'single' ); ?>

            <?php gaming_blog_post_nav(); ?>

            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>

        <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>