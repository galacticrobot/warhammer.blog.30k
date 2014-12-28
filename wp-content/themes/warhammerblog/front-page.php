<?php get_header(); ?>

        <!--Custom Page Title, Grabs Image from Custom Field-->

        <section class="hero home-page">
            <div class="hero-inner">
                <div class="hero-header">
                    <h1>30k Gaming</h1>
                    <!-- <p style="max-width: 500px;">A site about battles minis paintings and other tom foolery.
Please check back to this page once in a while. We’re still building out all the features.</p> -->
                </div>
            </div>
        </section>

        <section class="content-block page-intro">
            <div class="container single-comlumn-page">

                <!-- ze loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div>
                    <?php the_content() ?>
                </div>

                <?php endwhile; else: ?>
                    <h4>Sorry. Can't find anything to display</h4>
                <?php endif; ?>

            </div>
        </section>

        <section class="content-block gray-background">
            <div class="container">

                <div class="landing-primary-container">

                    <div class="centered-content">
                        <?php
                            //display news
                            $the_query = new WP_Query( 'showposts=1' );
                        ?>

                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                            <div>
                                <h3 class="category-tag">Latest News</h3>
                                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                <p><?php echo substr(strip_tags($post->post_content), 0, 200);?></p>
                                <p><a href="<?php the_permalink() ?>" class="button <small></small>"> Read more <span>&#187;</span></a></p>
                            </div>

                        <?php endwhile;?>
                    </div>

                </div>

                <div class="landing-secondary-container">

                    <div class="centered-content">

                        <?php
                            //display battlereport
                            $args = array(
                                'post_type' => 'battlereport',
                                'showposts' => '1'
                            );

                            $the_query = new Wp_Query( $args )
                         ?>

                        <!-- ze loop -->
                        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <h3 class="category-tag battlereport">Latest Battlereport</h3>

                            <div>
                                <p class="battlereport-item-date"><?php the_time( 'F j, Y'); ?></p>
                                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                <div><strong><?php the_field('participant_one'); ?></strong> vs. <strong><?php the_field('participant_two'); ?></strong></div>
                                <?php the_field('background_info'); ?>
                            </div>

                        <?php endwhile; wp_reset_postdata(); ?>

                            <?php //wp_reset_postdata(); ?>

                        <?php endif; // ends loop?>

                    </div>

                </div><!-- landing-secondary-container -->

            </div>
        </section>



<?php get_footer(); ?>
