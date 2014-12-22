<?php get_header(); ?>

        <section class="gray-section">
                <div class="page-title">
                    <h2><?php the_title(); ?></h2>
                </div>
        </section>

        <section class="content-block">
            <div class="container">

        <ul class="accordion-tabs">
          <li class="tab-header-and-content">
            <a href="javascript:void(0)" class="is-active tab-link">Tab Item</a>
            <div class="tab-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt pellentesque lorem, id suscipit dolor rutrum id. Morbi facilisis porta volutpat. Fusce adipiscing, mauris quis congue tincidunt, sapien purus suscipit odio, quis dictum odio tortor in sem. Ut sit amet libero nec orci mattis fringilla. Praesent eu ipsum in sapien tincidunt molestie sed ut magna. Nam accumsan dui at orci rhoncus pharetra tincidunt elit ullamcorper. Sed ac mauris ipsum. Nullam imperdiet sapien id purus pretium id aliquam mi ullamcorper.</p>
            </div>
          </li>
          <li class="tab-header-and-content">
            <a href="javascript:void(0)" class="tab-link">Another Tab</a>
            <div class="tab-content">
              <p>Ut laoreet augue et neque pretium non sagittis nibh pulvinar. Etiam ornare tincidunt orci quis ultrices. Pellentesque ac sapien ac purus gravida ullamcorper. Duis rhoncus sodales lacus, vitae adipiscing tellus pharetra sed. Praesent bibendum lacus quis metus condimentum ac accumsan orci vulputate. Aenean fringilla massa vitae metus facilisis congue. Morbi placerat eros ac sapien semper pulvinar. Vestibulum facilisis, ligula a molestie venenatis, metus justo ullamcorper ipsum, congue aliquet dolor tortor eu neque. Sed imperdiet, nibh ut vestibulum tempor, nibh dui volutpat lacus, vel gravida magna justo sit amet quam. Quisque tincidunt ligula at nisl imperdiet sagittis. Morbi rutrum tempor arcu, non ultrices sem semper a. Aliquam quis sem mi.</p>
            </div>
          </li>
          <li class="tab-header-and-content">
            <a href="javascript:void(0)" class="tab-link">Third</a>
            <div class="tab-content">
              <p>Donec mattis mauris gravida metus laoreet non rutrum sem viverra. Aenean nibh libero, viverra vel vestibulum in, porttitor ut sapien. Phasellus tempor lorem id justo ornare tincidunt. Nulla faucibus, purus eu placerat fermentum, velit mi iaculis nunc, bibendum tincidunt ipsum justo eu mauris. Nulla facilisi. Vestibulum vel lectus ac purus tempus suscipit nec sit amet eros. Nullam fringilla, enim eu lobortis dapibus, quam magna tincidunt nibh, sit amet imperdiet dolor justo congue turpis.</p>
            </div>
          </li>
          <li class="tab-header-and-content">
            <a href="javascript:void(0)" class="tab-link">Last Item</a>
            <div class="tab-content">
              <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus dui urna, mollis vel suscipit in, pharetra at ligula. Pellentesque a est vel est fermentum pellentesque sed sit amet dolor. Nunc in dapibus nibh. Aliquam erat volutpat. Phasellus vel dui sed nibh iaculis convallis id sit amet urna. Proin nec tellus quis justo consequat accumsan. Vivamus turpis enim, auctor eget placerat eget, aliquam ut sapien.</p>
            </div>
          </li>
        </ul>

        </div>
        </section>


        <section class="content-block">
            <div class="container">

                <div id="secondary" class="widget-area" role="complementary">
                    <div class="army-chart-symbols">
                        <h3><a href="#0"><img src="<?php bloginfo('template_directory'); ?>/img/symbols/hq_chart_symbol.png" alt="Hq choice"></a></h3>
                        <h3><a href="#0"><img src="<?php bloginfo('template_directory'); ?>/img/symbols/hq_chart_symbol.png" alt="Hq choice"></a></h3>
                        <h3><a href="#0"><img src="<?php bloginfo('template_directory'); ?>/img/symbols/hq_chart_symbol.png" alt="Hq choice"></a></h3>
                        <h3><a href="#0"><img src="<?php bloginfo('template_directory'); ?>/img/symbols/hq_chart_symbol.png" alt="Hq choice"></a></h3>
                        <h3><a href="#0"><img src="<?php bloginfo('template_directory'); ?>/img/symbols/hq_chart_symbol.png" alt="Hq choice"></a></h3>
                        <h3><a href="#0"><img src="<?php bloginfo('template_directory'); ?>/img/symbols/hq_chart_symbol.png" alt="Hq choice"></a></h3>
                        <h3><a href="#0"><img src="<?php bloginfo('template_directory'); ?>/img/symbols/hq_chart_symbol.png" alt="Hq choice"></a></h3>
                    </div>
                </div><!-- #secondary -->

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <!-- ze loop -->
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="troop-entry">

                                <div class="troop-entry-title">
                                    <h2>HQ</h2>
                                </div>
                                <!-- display hq images-->
                                <?php if( have_rows('hq_images') ): ?>
                                    <div>
                                        <?php while ( have_rows('hq_images') ) : the_row(); ?>
                                            <img src="<?php the_sub_field('hq_image'); ?>">
                                            <?php the_sub_field('hq_tech_description'); ?>
                                            <?php the_sub_field('hq_background_info'); ?>
                                        <?php endwhile; ?>
                                        <?php else: ?>
                                            <h4>No HQ Entries yet</h4>
                                    </div>
                                <?php endif ?>

                                <!-- display hq misc Gallery -->
                                <?php if( have_rows('hq_misc_gallery') ): ?>
                                    <div>
                                        <?php while ( have_rows('hq_misc_gallery') ) : the_row(); ?>
                                            <img src="<?php the_sub_field('hq_misc_gallery_image'); ?>">
                                            <?php the_sub_field('hq_misc_gallery_image_description'); ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif ?>

                            </div><!-- troop-entry -->

                            <div class="troop-entry">

                                <div class="troop-entry-title">
                                    <h2>Troops</h2>
                                </div>

                                <!-- display hq images-->
                                <?php if( have_rows('troop_images') ): ?>
                                    <div>
                                        <?php while ( have_rows('troop_images') ) : the_row(); ?>
                                            <img src="<?php the_sub_field('troop_image'); ?>">
                                            <?php the_sub_field('troop_tech_description'); ?>
                                            <?php the_sub_field('troop_background_info'); ?>
                                        <?php endwhile; ?>
                                        <?php else: ?>
                                            <h4>No Troop entries yet</h4>
                                    </div>
                                <?php endif ?>

                            </div><!-- troop-entry -->

                            <?php endwhile; else: ?>
                                <h4>Sorry. Can't find anything to display</h4>
                            <?php endif; ?>

                    </main><!-- #main .site-main -->
                </div><!-- #primary .content-area -->

            </div><!-- container -->
        </section><!-- content-block -->

<?php get_footer(); ?>
