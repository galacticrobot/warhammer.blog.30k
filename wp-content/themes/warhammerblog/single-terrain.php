<?php get_header(); ?>

        <section class="content-block">
            <div class="container single-comlumn-page">

                <!-- ze loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <div class="page-title">
                            <h2><?php the_title(); ?></h2>
                        </div>

                    <div>
                        <?php

                            $image = get_field('terrain_piece');

                            // echo '<pre>';
                            //     var_dump( $image );
                            // echo '</pre>';


                            // vars
                            $url = $image['url'];
                            $title = $image['title'];
                            $alt = $image['alt'];
                            $caption = $image['caption'];

                            // medium
                            $size = 'large'; //thumbnail, medium, large, full
                            $thumb = $image['sizes'][ $size ];
                            $width = $image['sizes'][ $size . '-width' ];
                            $height = $image['sizes'][ $size . '-height' ];


                        ?>
                        <div class="single-terrain-page-image"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /></div>
                        <div class="single-terrain-page-desc"><?php the_field('terrain_description') ?></div>
                        <div class="made-by"><strong>Made by:</strong> <?php the_field('made_by') ?></div>
                    </div>

                <?php endwhile; else: ?>
                    <h4>Sorry. There are no posts to display</h4>
                <?php endif; ?>


            </div><!-- container -->
        </section><!-- content-block -->

<?php get_footer(); ?>
