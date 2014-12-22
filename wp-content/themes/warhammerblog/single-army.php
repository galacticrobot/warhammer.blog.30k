<?php get_header(); ?>

        <section class="gray-section">
                <div class="page-title">
                    <h2><?php the_title(); ?></h2>
                </div>
        </section>

        <section class="content-block">
            <div class="container">

                <ul class="accordion-tabs">

                    <!-- start loop -->
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <li class="tab-header-and-content hq">
                            <a href="javascript:void(0)" class="is-active tab-link">
                                <img src="<?php bloginfo('template_directory'); ?>/img/symbols/hq_chart_symbol.png" alt="Hq choice" class="army-chart-symbol">
                            </a>
                            <div class="tab-content">

                                <div class="troop-entry-title">
                                    <h2>HQ</h2>
                                </div>

                                <!-- display hq images-->
                                <?php if( have_rows('hq_images') ): ?>
                                    <?php while ( have_rows('hq_images') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('hq_image'); ?>">
                                        <?php the_sub_field('hq_tech_description'); ?>
                                        <?php the_sub_field('hq_background_info'); ?>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <div class="no-content-yet">
                                        <h4>No HQ Entries yet</h4>
                                    </div>
                                <?php endif ?>

                                <!-- display hq misc Gallery -->
                                <?php if( have_rows('hq_misc_gallery') ): ?>
                                    <?php while ( have_rows('hq_misc_gallery') ) : the_row(); ?>
                                    <img src="<?php the_sub_field('hq_misc_gallery_image'); ?>">
                                    <?php the_sub_field('hq_misc_gallery_image_description'); ?>
                                <?php endwhile; ?>
                                <?php endif ?>

                            </div><!-- tab-content -->
                        </li><!-- tab-header-and-content -->

                        <li class="tab-header-and-content troops">
                            <a href="javascript:void(0)" class="tab-link">
                                <img src="<?php bloginfo('template_directory'); ?>/img/symbols/troops_chart_symbol.png" alt="Troop choice" class="army-chart-symbol">
                            </a>
                            <div class="tab-content">

                                <div class="troop-entry-title">
                                    <h2>Troops</h2>
                                </div>

                                <!-- display troop images-->
                                <?php if( have_rows('troop_images') ): ?>
                                    <?php while ( have_rows('troop_images') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('troop_image'); ?>">
                                        <?php the_sub_field('troop_tech_description'); ?>
                                        <?php the_sub_field('troop_background_info'); ?>
                                    <?php endwhile; ?>

                                    <?php else: ?>
                                        <div class="no-content-yet">
                                            <h4>No Troop Entries yet</h4>
                                        </div>
                                <?php endif ?>

                                <!-- display troop misc Gallery -->
                                <?php if( have_rows('troop_misc_gallery') ): ?>
                                    <?php while ( have_rows('troop_misc_gallery') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('troop_misc_gallery_image'); ?>">
                                        <?php the_sub_field('troop_misc_gallery_image_description'); ?>
                                    <?php endwhile; ?>
                                <?php endif ?>

                            </div><!-- tab-content -->
                        </li><!-- tab-header-and-content -->

                        <li class="tab-header-and-content elites">
                            <a href="javascript:void(0)" class="tab-link">
                                <img src="<?php bloginfo('template_directory'); ?>/img/symbols/elites_chart_symbol.png" alt="Troop choice" class="army-chart-symbol">
                            </a>
                            <div class="tab-content">

                                <div class="troop-entry-title">
                                    <h2>Elites</h2>
                                </div>

                                <!-- display troop images-->
                                <?php if( have_rows('elite_images') ): ?>
                                    <?php while ( have_rows('elite_images') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('elite_image'); ?>">
                                        <?php the_sub_field('elite_tech_description'); ?>
                                        <?php the_sub_field('elite_background_info'); ?>
                                    <?php endwhile; ?>

                                    <?php else: ?>
                                        <div class="no-content-yet">
                                            <h4>No Troop Entries yet</h4>
                                        </div>
                                <?php endif ?>

                                <!-- display troop misc Gallery -->
                                <?php if( have_rows('elite_misc_gallery') ): ?>
                                    <?php while ( have_rows('elite_misc_gallery') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('elite_misc_gallery_image'); ?>">
                                        <?php the_sub_field('elite_misc_gallery_image_description'); ?>
                                    <?php endwhile; ?>
                                <?php endif ?>

                            </div><!-- tab-content -->
                        </li><!-- tab-header-and-content -->

                    <!-- close main loop -->
                    <?php endwhile; else: ?>
                        <h4>Sorry. Can't find anything to display</h4>
                    <?php endif; ?>

                </ul><!-- accordion tabs -->

            </div>
        </section>




            </div><!-- container -->
        </section><!-- content-block -->

<?php get_footer(); ?>
