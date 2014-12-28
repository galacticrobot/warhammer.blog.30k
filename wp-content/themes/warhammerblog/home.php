<?php
/**
 * The HOME template file.
 * It displays all newsposts
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
                                    get_template_part( 'content', 'news' );
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

            </div>
        </section><!-- content-block -->

<?php get_footer(); ?>
