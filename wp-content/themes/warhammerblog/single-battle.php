<?php get_header(); ?>

        <section class="content-block">
            <div class="container single-comlumn-page">

                <!-- ze loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="page-title">
                        <h2><?php the_title(); ?></h2>
                    </div>

                    <article>
                        <p class="type">Battlereport</p>
                        <h1><?php the_title(); ?></h1>
                        <p class="date"><?php the_time( 'F j, Y'); ?></p>

                        <div>Scenario: <?php the_field('battle_scenario'); ?></div>
                        <div><?php the_field('points_limit'); ?></div>
                        <div><?php the_field('background_info'); ?></div>
                        <div><?php the_field('battlereport_full'); ?></div>

                        <?php the_content() ?>
                    </article>

                <?php endwhile; else: ?>
                    <h4>Sorry. There are no posts to display</h4>
                <?php endif; ?>

            </div><!-- container -->
        </section><!-- content-block -->

<?php get_footer(); ?>
