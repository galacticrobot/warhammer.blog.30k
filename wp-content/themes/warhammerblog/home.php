<?php get_header(); ?>

        <section class="content-block">
            <div class="container">

                <div id="primary" class="content-area">

                    <main id="main" class="site-main" role="main">

                            <!-- ze loop -->
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <article class="news-entry">
                                    <h1><?php the_title(); ?></h1>
                                    <p class="date"><?php the_time( 'F j, Y'); ?></p>
                                    <?php the_excerpt() ?>
                                    <p>
                                        <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                                    </p>
                                </article>
                            <?php endwhile; ?>
                                <?php wp_pagenavi()  ?>
                            <?php else: ?>
                                <h4>Sorry. There are no posts to display</h4>
                            <?php endif; ?>

                    </main><!-- #main .site-main -->

                </div><!-- #primary .content-area -->

                <div id="secondary" class="widget-area" role="complementary">

                    <?php get_sidebar('news'); ?>

                </div><!-- #secondary -->
            </div>
        </section><!-- content-block -->

<?php get_footer(); ?>
