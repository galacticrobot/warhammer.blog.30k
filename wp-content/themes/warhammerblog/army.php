<?php

/*
    Template Name: Army Page
*/

get_header(); ?>

        <section class="content-block gray-background">
            <div class="container box-listing single-comlumn-page">

                <?php
                    $args = array(
                        'posts_per_page' => 10,
                        'post_type' => 'army'
                    );

                    $the_query = new Wp_Query( $args )
                 ?>

                <!-- ze loop -->
                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="box">
                        <div class="box-image">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="box-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <em><strong>Played by:</strong> <?php the_field('played_by'); ?></em>
                        </div>
                    </div>

                    <?php endwhile; ?>
                        <?php wp_pagenavi()  ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>

                        <?php get_template_part( 'content', 'none' ); ?>

                    <?php endif; // ends loop?>

            </div>
        </section>

<?php get_footer(); ?>
