<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
     <meta charset="<?php bloginfo('charset'); ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Nevaeh Jolie" />
	<meta property="og:description" content="Singer, songwriter, model, influencer. Contact management for bookings." />
	<meta property="og:url" content="http://nevaehjolie.com/" />
	<meta property="og:site_name" content="Nevaeh Jolie" />
	<meta property="og:image" content="http://nevaehjolie.com/wp-content/uploads/2018/01/nevaeh-og-image.png" />
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
     <link href="https://fonts.googleapis.com/css?family=Metal+Mania" rel="stylesheet">
     <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>

    <div id="kopa-page-header">

        <div id="kopa-header-top">

            <div class="outer clearfix">

                <?php get_template_part('modules/logo'); ?>


                <div id="kopa-header-top-inner" class="pull-left">

                      <div class="clearfix">

                        <div class="left-col pull-left line-divider clearfix">
                            <?php get_template_part('modules/headlines'); ?>
                            <!-- kp-headline-wrapper -->

                            <?php get_template_part('modules/socials', 'top'); ?>
                            <!-- social-links -->
                        </div>
                        <!-- left-col -->

                        <?php get_template_part('modules/signup'); ?>
                        <!-- right-col -->

                    </div>
                    <!-- clearfix -->

                    <div class="clearfix">

                        <?php get_template_part('modules/search', 'top'); ?>

                        <div class="right-col pull-left">

                        </div>
                        <!-- right-col -->

                    </div>
                    <!-- clearfix -->

                </div>
                <!-- kopa-header-top-inner -->

            </div>
            <!-- outer -->

        </div>
        <!-- kopa-header-top -->

        <?php get_template_part('modules/menu', 'primary'); ?>

    </div>
    <!-- kopa-page-header -->

    <div id="main-content">

        <?php get_template_part('modules/page-title'); ?>

        <div class="wrapper clearfix">
