<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php
                //display name of page in tabs
                wp_title( '-', true, 'right' );
                bloginfo( 'name' ); //comment this out for yeost
            ?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href='http://fonts.googleapis.com/css?family=Radley:400,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <section class="main-nav-container">
            <div class="container">
                <nav>
                    <div class="nav-trigger-container">
                        <a href="#0" class="nav-trigger">&#9776;</a>
                    </div>
                    <?php

                        //dynamic menu
                        $args = array(
                            'theme_location'  => '',
                            'menu'            => 'main-navigation',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'main-top-nav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                        );
                        wp_nav_menu( $args );

                    ?>
                </nav>
            </div>
        </section>