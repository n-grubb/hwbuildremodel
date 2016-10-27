<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="site-container">

            <header id="page-header">

                <div class="container">

                    <div class="row">

                        <div class="col-xxs-5 col-xs-6 col-sm-4 col-md-3">
                            <div class="header-logo">
                                <a href="<?php bloginfo('url'); ?>">
                                    <img class="site-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                                </a>
                            </div>
                        </div>

                        <div class="col-xxs-7 col-xs-6 col-sm-8 col-md-9 text--right phone-box">

                            <a class="button page-header--phone phone-number" href="tel:4846512337">Call Us Today! 484-651-2337</a>
                            <?php
                                // Output the main Menu
                                wp_nav_menu( array(
                                    'theme_location'    => 'main_menu'
                                    ,'container'        => 'nav'
                                    ,'container_class'  => 'nav--primary'
                                    ,'depth'            => 1
                                ));
                            ?>

                        </div>

                    </div><!-- .row end -->

                </div><!-- .container end -->

            </header>