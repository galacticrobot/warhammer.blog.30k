<?php get_header(); ?>

        <section class="content-block">
            <div class="container single-comlumn-page">
                <!-- ze loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                        <!-- <p class="type">Article Type</p> -->
                        <h1><?php the_title(); ?></h1>
                        <?php the_content() ?>
                    </article>
                <?php endwhile; else: ?>
                    <h4>Sorry. Can't find anything to display</h4>
                <?php endif; ?>
            </div>
        </section>

<?php get_footer(); ?>
