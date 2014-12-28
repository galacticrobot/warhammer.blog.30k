<?php
/**
* Template Name: Page No Sidebar
* The template for displaying all pages without sidebar.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package 30k Gaming
*/

get_header(); ?>

    <section class="content-block">
        <div class="container single-comlumn-page">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'pagenosidebar' ); ?>

                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    #if ( comments_open() || get_comments_number() ) :
                       # comments_template();
                    #endif;
                ?>

            <?php endwhile; // end of the loop. ?>

        </div>
    </section><!-- content-block -->

<?php get_footer(); ?>