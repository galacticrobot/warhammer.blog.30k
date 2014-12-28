
<?php get_header(); ?>

        <section class="content-block">
            <div class="container single-comlumn-page">


                <!-- ze loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article>
                        <p class="type">Battlereport</p>
                    </article>
                    <h2><?php the_title(); ?></h2>
                    <article>
                        <p class="date"><?php the_time( 'F j, Y'); ?></p>

                        <div class="battlerep-meta">
                            <span><strong>Armies:</strong> <?php the_field('participant_one'); ?> vs. <?php the_field('participant_two'); ?></span>
                            <span><strong>Scenario:</strong> <?php the_field('battle_scenario'); ?></span>
                            <span><strong>Points:</strong> <?php the_field('points_limit'); ?></span>
                        </div>

                        <div class="battlerep-info">
                            <span><strong>Battle Background:</strong></span>
                            <div>
                                <em><?php the_field('background_info'); ?></em>
                            </div>
                        </div>

                        <div class="battlerep-full">
                            <?php the_field('battlereport_full'); ?>
                        </div>
                    </article>

                <?php endwhile; else: ?>
                    <h4>Sorry. There are no posts to display</h4>
                <?php endif; ?>

            </div><!-- container -->
        </section><!-- content-block -->

<?php get_footer(); ?>
