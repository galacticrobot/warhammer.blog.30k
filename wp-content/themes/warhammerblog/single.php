<?php get_header(); ?>

        <section class="content-block">
            <div class="container">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                            <!-- ze loop -->
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <article>
                                    <p class="type">Article Type</p>
                                    <h1><?php the_title(); ?></h1>
                                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolores debitis laudantium voluptatibus deserunt fugit aspernatur, odit omnis ipsam, at dicta dolorum perferendis porro quidem incidunt placeat voluptate necessitatibus neque.</h2>
                                    <p class="date"><?php the_time( 'F j, Y'); ?> - in <?php the_category(', '); ?></p>
                                    <?php the_content() ?>
                                </article>
                            <?php endwhile; else: ?>
                                <h4>Sorry. There are no posts to display</h4>
                            <?php endif; ?>

                    </main><!-- #main .site-main -->

                </div><!-- #primary .content-area -->

                <div id="secondary" class="widget-area" role="complementary">
                    <p>Sidebar goes here Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ex aspernatur rem dolore adipisci, animi eligendi expedita. Optio expedita cumque laudantium incidunt, doloribus provident veritatis ipsam quia voluptas fuga accusamus rerum, impedit error iste explicabo pariatur qui quidem harum consequuntur et fugit eveniet, saepe recusandae eos. Vitae delectus molestias, odit hic voluptate harum laboriosam, doloribus consequatur vero optio tempore facere quas adipisci necessitatibus maiores fugiat veniam officia amet quidem officiis laudantium. Mollitia eius commodi repellat perspiciatis ea, ex natus ipsam delectus ratione veniam corporis necessitatibus cum voluptatibus id exercitationem quas iusto quo modi obcaecati, hic ducimus molestias quisquam laudantium suscipit? Eveniet aliquam voluptatem magni eum natus, libero dolorem tenetur laborum atque! Quisquam deleniti accusamus vel adipisci aspernatur debitis doloribus maxime optio temporibus consectetur commodi necessitatibus aut accusantium assumenda quos quam est autem nisi laboriosam quas, ea illum ex praesentium. Nemo reiciendis provident ab, quia quidem cumque voluptas voluptatibus iure explicabo cupiditate possimus quibusdam, in ut. Nam suscipit facere alias impedit rerum quibusdam, non quam laudantium, nihil iste nesciunt dolor itaque similique dicta ullam obcaecati possimus ipsa provident cum, tenetur magnam recusandae nulla? Sit quis delectus quisquam, temporibus. Placeat magni aperiam libero ipsa possimus eum, corporis nesciunt! Placeat dignissimos natus cumque.</p>
                </div><!-- #secondary -->
            </div>
        </section><!-- content-block -->

<?php get_footer(); ?>
