<?php

/*
    Template Name: Terrain Page
*/

get_header(); ?>

        <section class="content-block terrain-listing">

            <div class="container">

                <div class="intro-text">
                    <h1><?php the_title(); ?></h1>
                </div>

                <!-- ze loop -->
                <div class="terrain-gallery">

                <?php
                    $args = array(
                        'post_type' => 'terrain'
                    );

                    $the_query = new Wp_Query( $args )
                 ?>

                <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="terrain-gallery-item">

                        <?php

                                $image = get_field('terrain_piece');

                                // vars
                                $url = $image['url'];
                                $title = $image['title'];
                                $alt = $image['alt'];
                                $caption = $image['caption'];

                                // medium
                                $size = 'thumbnail'; //thumbnail, medium, large, full
                                $thumb = $image['sizes'][ $size ];
                                $width = $image['sizes'][ $size . '-width' ];
                                $height = $image['sizes'][ $size . '-height' ];


                        ?>
                        <a href="<?php the_permalink(); ?>" title="<?php echo $title; ?>">
                            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                        </a>

                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>

                    <?php endif; // ends loop?>

                    </div><!-- terrain-gallery -->

            </div>
        </section>

<?php get_footer(); ?>