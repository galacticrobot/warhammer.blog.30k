<?php get_header(); ?>

        <section class="content-block">
            <div class="container">
                <!-- ze loop -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                        <p class="type">Article Type</p>
                        <h1><?php the_title(); ?></h1>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolores debitis laudantium voluptatibus deserunt fugit aspernatur, odit omnis ipsam, at dicta dolorum perferendis porro quidem incidunt placeat voluptate necessitatibus neque.</h2>
                        <?php the_content() ?>
                    </article>
                <?php endwhile; else: ?>
                    <h4>Sorry. Can't find anything to display</h4>
                <?php endif; ?>
            </div>
        </section>

<?php get_footer(); ?>
