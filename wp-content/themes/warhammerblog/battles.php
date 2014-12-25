<?php

/*
    Template Name: Battle Page
*/

get_header(); ?>

        <section class="content-block terrain-listing">
            <div class="container single-comlumn-page">


                <div class="intro-text">
                    <h1><?php the_title(); ?></h1>
                </div>

                <?php
                    $args = array(
                        'post_type' => 'battles'
                    );

                    $the_query = new Wp_Query( $args )
                 ?>

                <!-- ze loop -->
                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="battlereport-item">
                        <p class="battlereport-item-date"><?php the_time( 'F j, Y'); ?></p>
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                        <div><span><?php the_field('participant_one'); ?></span> vs. <span><?php the_field('participant_two'); ?></span></div>
                    </div>

                    <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    <?php endif; // ends loop?>

            </div>
        </section>

<?php get_footer(); ?>