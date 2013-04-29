<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Dartius
 * @subpackage Kidz Village
 * @since Kidz Village 0.0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Port+Lligat+Slab' rel='stylesheet' type='text/css'>
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.1.3.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
	$('.navigation>a').toggle(function() {
	    $(this).next('ul').show().addClass('dd_main_menu');
	}, function() {
	    $(this).next('ul').hide();
	});
	$('.drop_down_menu').hover(function() {
	    $('.drop_down_menu>ul').show();
	}, function() {
	    $('.drop_down_menu>ul').hide();
	});
    });
</script>
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body <?php //body_class(); ?>>
<div class="bg_shadow">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="main_wrapper">
            <header class="header">
                <div class="top_header_section">
                    <ul class="social_icon">
                        <li><a href="http://www.facebook.com/pages/Kidz-Village/133879133325400"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook" /></a></li>
                        <li><a href="https://twitter.com/kidzvillageNJ"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter" /></a></li>
                        <li><a href="http://www.youtube.com/user/KidzVillageNJ?feature=watch"><img src="<?php echo get_template_directory_uri(); ?>/img/yoetube.png" alt="you tube" /></a></li>
                    </ul>
                    <ul class="contact">
                        <li><span class="font_size_12px">Kenilworth</span> 908 445-7220</li><!-- добавился <span class="font_size_12px">-->
                        <li><span class="font_size_12px">Woodbridge</span> 732 836-8577</li><!-- добавился <span class="font_size_12px">-->
                        <?php //<li><span class="font_size_12px">Jersey City</span> 123 456-7890</li><!-- добавился <span class="font_size_12px">--> ?>
                    </ul>
                </div>
                <div class="bottom_header_section">
                    <a href="<?= get_option("home"); ?>" class="logo">
                    </a>
                </div>
                <img class="menu_child" src="<?php echo get_template_directory_uri(); ?>/img/menu_child.png" alt="children"/>
            </header>
            <nav class="nav">
		<?php get_kidz_nav_menu(); ?>
            </nav>
