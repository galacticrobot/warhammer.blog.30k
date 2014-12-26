<?php get_header(); ?>

        <section class="hero army-single-banner" style="background-image:url(<?php the_field('banner_image'); ?>); background-position: center center;" >
            <div class="hero-inner">
                <div class="hero-header-single">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </section>

        <section class="content-block army-listing-page">
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
                                        <article class="troop-entry-main">
                                            <div class="image-container">
                                                <a href="<?php
                                                //link to the full portfolio image
                                                $image = the_sub_field('hq_image');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size );
                                                }
                                                ?>"><img src="<?php the_sub_field('hq_image'); ?>"></a>
                                            </div>
                                            <div class="stats-container">
                                               <div class="tech-stats"><?php the_sub_field('hq_tech_description'); ?></div>
                                               <div class="background-stats"><?php the_sub_field('hq_background_info'); ?></div>
                                            </div>
                                        </article>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <div class="no-content-yet">
                                        <p>This section has no content yet. Check back later.</p>
                                    </div>
                                <?php endif ?>

                                <div class="misc-entry-gallery">
                                <!-- display hq misc Gallery -->
                                <?php if( have_rows('hq_misc_gallery') ): ?>
                                    <?php while ( have_rows('hq_misc_gallery') ) : the_row(); ?>
                                        <div class="misc-gallery-item">
                                            <a href="<?php
                                                //link to the full portfolio image
                                                $image = the_sub_field('hq_misc_gallery_image');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size );
                                                }
                                                ?>"><img src="<?php the_sub_field('hq_misc_gallery_image'); ?>"></a>
                                        </div>
                                <?php endwhile; ?>
                                <?php endif ?>
                                </div>

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
                                        <article class="troop-entry-main">
                                            <div class="image-container">
                                                <a href="<?php
                                                //link to the full portfolio image
                                                $image = the_sub_field('troop_image');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size );
                                                }
                                                ?>"><img src="<?php the_sub_field('troop_image'); ?>"></a>
                                            </div>
                                            <div class="stats-container">
                                                <div class="tech-stats"><?php the_sub_field('troop_tech_description'); ?></div>
                                                <div class="background-stats"><?php the_sub_field('troop_background_info'); ?></div>
                                            </div>
                                        </article>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                        <div class="no-content-yet">
                                            <p>This section has no content yet. Check back later.</p>
                                        </div>
                                <?php endif ?>

                                <!-- display troop misc Gallery -->
                                <div class="misc-entry-gallery">
                                    <?php if( have_rows('troop_misc_gallery') ): ?>
                                        <?php while ( have_rows('troop_misc_gallery') ) : the_row(); ?>
                                        <div class="misc-gallery-item">
                                            <a href="<?php
                                                //link to the full portfolio image
                                                $image = the_sub_field('troop_misc_gallery_image');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size );
                                                }
                                                ?>"><img src="<?php the_sub_field('troop_misc_gallery_image'); ?>"></a>
                                        </div>
                                        <?php endwhile; ?>
                                    <?php endif ?>
                                </div>

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

                                <!-- display elite images-->
                                <?php if( have_rows('elite_images') ): ?>
                                    <?php while ( have_rows('elite_images') ) : the_row(); ?>
                                       <article class="troop-entry-main">
                                            <div class="image-container">
                                                <a href="<?php
                                                //link to the full portfolio image
                                                $image = the_sub_field('elite_image');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size );
                                                }
                                                ?>"><img src="<?php the_sub_field('elite_image'); ?>"></a>
                                            </div>
                                            <div class="stats-container">
                                               <div class="tech-stats"><?php the_sub_field('elite_tech_description'); ?></div>
                                               <div class="background-stats"><?php the_sub_field('elite_background_info'); ?></div>
                                            </div>
                                        </article>
                                    <?php endwhile; ?>

                                    <?php else: ?>
                                        <div class="no-content-yet">
                                           <p>This section has no content yet. Check back later.</p>
                                        </div>
                                <?php endif ?>

                                <!-- display elite misc Gallery -->
                                <?php if( have_rows('elite_misc_gallery') ): ?>
                                    <?php while ( have_rows('elite_misc_gallery') ) : the_row(); ?>
                                        <div class="misc-gallery-item">
                                            <a href="<?php
                                                //link to the full portfolio image
                                                $image = the_sub_field('elite_misc_gallery_image');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size );
                                                }
                                                ?>"><img src="<?php the_sub_field('elite_misc_gallery_image'); ?>"></a>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif ?>

                            </div><!-- tab-content -->
                        </li><!-- tab-header-and-content -->

                        <li class="tab-header-and-content fast-attack">
                            <a href="javascript:void(0)" class="tab-link">
                                <img src="<?php bloginfo('template_directory'); ?>/img/symbols/fa_chart_symbol.png" alt="Troop choice" class="army-chart-symbol">
                            </a>
                            <div class="tab-content">

                                <div class="troop-entry-title">
                                    <h2>Fast Attack</h2>
                                </div>

                                <!-- display fast-attack images-->
                                <?php if( have_rows('fast_attack_images') ): ?>
                                    <?php while ( have_rows('fast_attack_images') ) : the_row(); ?>
                                        <article class="troop-entry-main">
                                            <div class="image-container">
                                                <a href="<?php
                                                //link to the full portfolio image
                                                $image = the_sub_field('fast_attack_image');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size );
                                                }
                                                ?>"><img src="<?php the_sub_field('fast_attack_image'); ?>"></a>
                                            </div>
                                            <div class="stats-container">
                                               <div class="tech-stats"><?php the_sub_field('fast_attack_tech_description'); ?></div>
                                               <div class="background-stats"><?php the_sub_field('fast_attack_background_info'); ?></div>
                                            </div>
                                        </article>
                                    <?php endwhile; ?>

                                    <?php else: ?>
                                        <div class="no-content-yet">
                                            <p>This section has no content yet. Check back later.</p>
                                        </div>
                                <?php endif ?>

                                <!-- display fast-attack misc Gallery -->
                                <?php if( have_rows('fast_attack_misc_gallery') ): ?>
                                    <?php while ( have_rows('fast_attack_misc_gallery') ) : the_row(); ?>
                                        <div class="misc-gallery-item">
                                            <a href="<?php
                                                //link to the full portfolio image
                                                $image = the_sub_field('fast_attack_misc_gallery_image');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size );
                                                }
                                                ?>"><img src="<?php the_sub_field('fast_attack_misc_gallery_image'); ?>"></a>
                                            </div>
                                    <?php endwhile; ?>
                                <?php endif ?>

                            </div><!-- tab-content -->
                        </li><!-- tab-header-and-content -->

                        <li class="tab-header-and-content heavy-attack">
                            <a href="javascript:void(0)" class="tab-link">
                                <img src="<?php bloginfo('template_directory'); ?>/img/symbols/ha_chart_symbol.png" alt="Troop choice" class="army-chart-symbol">
                            </a>
                            <div class="tab-content">

                                <div class="troop-entry-title">
                                    <h2>Elites</h2>
                                </div>

                                <!-- display Heavy images-->
                                <?php if( have_rows('elite_images') ): ?>
                                    <?php while ( have_rows('elite_images') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('elite_image'); ?>">
                                        <?php the_sub_field('elite_tech_description'); ?>
                                        <?php the_sub_field('elite_background_info'); ?>
                                    <?php endwhile; ?>

                                    <?php else: ?>
                                        <div class="no-content-yet">
                                            <p>This section has no content yet. Check back later.</p>
                                        </div>
                                <?php endif ?>

                                <!-- display Heavy misc Gallery -->
                                <?php if( have_rows('elite_misc_gallery') ): ?>
                                    <?php while ( have_rows('elite_misc_gallery') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('elite_misc_gallery_image'); ?>">
                                        <?php the_sub_field('elite_misc_gallery_image_description'); ?>
                                    <?php endwhile; ?>
                                <?php endif ?>

                            </div><!-- tab-content -->
                        </li><!-- tab-header-and-content -->

                        <li class="tab-header-and-content fortification">
                            <a href="javascript:void(0)" class="tab-link">
                                <img src="<?php bloginfo('template_directory'); ?>/img/symbols/fort_chart_symbol.png" alt="Troop choice" class="army-chart-symbol">
                            </a>
                            <div class="tab-content">

                                <div class="troop-entry-title">
                                    <h2>Elites</h2>
                                </div>

                                <!-- display fortification images-->
                                <?php if( have_rows('elite_images') ): ?>
                                    <?php while ( have_rows('elite_images') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('elite_image'); ?>">
                                        <?php the_sub_field('elite_tech_description'); ?>
                                        <?php the_sub_field('elite_background_info'); ?>
                                    <?php endwhile; ?>

                                    <?php else: ?>
                                        <div class="no-content-yet">
                                            <p>This section has no content yet. Check back later.</p>
                                        </div>
                                <?php endif ?>

                                <!-- display fortification misc Gallery -->
                                <?php if( have_rows('elite_misc_gallery') ): ?>
                                    <?php while ( have_rows('elite_misc_gallery') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('elite_misc_gallery_image'); ?>">
                                        <?php the_sub_field('elite_misc_gallery_image_description'); ?>
                                    <?php endwhile; ?>
                                <?php endif ?>

                            </div><!-- tab-content -->
                        </li><!-- tab-header-and-content -->

                        <li class="tab-header-and-content lordsofwar">
                            <a href="javascript:void(0)" class="tab-link">
                                <img src="<?php bloginfo('template_directory'); ?>/img/symbols/lords_chart_symbol.png" alt="Troop choice" class="army-chart-symbol">
                            </a>
                            <div class="tab-content">

                                <div class="troop-entry-title">
                                    <h2>Elites</h2>
                                </div>

                                <!-- display lords images-->
                                <?php if( have_rows('elite_images') ): ?>
                                    <?php while ( have_rows('elite_images') ) : the_row(); ?>
                                        <img src="<?php the_sub_field('elite_image'); ?>">
                                        <?php the_sub_field('elite_tech_description'); ?>
                                        <?php the_sub_field('elite_background_info'); ?>
                                    <?php endwhile; ?>

                                    <?php else: ?>
                                        <div class="no-content-yet">
                                            <p>This section has no content yet. Check back later.</p>
                                        </div>
                                <?php endif ?>

                                <!-- display lords misc Gallery -->
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
