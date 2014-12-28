<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package 30k Gaming
 */

get_header(); ?>

        <section class="content-block">
            <div class="container">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <?php if ( have_posts() ) : ?>

                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <?php
                                    /* Include the Post-Format-specific template for the content.
                                     */
                                    get_template_part( 'content', 'index' );
                                    #get_template_part( 'content', get_post_format() );
                                ?>

                            <?php endwhile; ?>

                            <?php wp_pagenavi()  ?>
                            <?php #gaming_blog_paging_nav(); ?>

                        <?php else : ?>

                            <?php get_template_part( 'content', 'none' ); ?>

                        <?php endif; ?>

                    </main><!-- #main .site-main -->
                </div><!-- #primary .content-area -->

                <?php get_sidebar(); ?>

            </div><!-- container -->
        </section><!-- content-block -->

<?php get_footer(); ?>
