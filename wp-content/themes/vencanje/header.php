<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vencanje
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- dodajem start -->
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo get_template_directory_uri('bloginfo'); ?>/css/style.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri('bloginfo'); ?>/css/inner.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri('bloginfo'); ?>/css/layout.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri('bloginfo'); ?>/css/flexslider.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri('bloginfo'); ?>/css/color.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri('bloginfo'); ?>/css/prettyPhoto.css" media="screen" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<!-- dodajem end -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="bodychild">
		<div id="outercontainer">

			<!-- HEADER -->
	        <div id="outerheader">
	        	<div class="shadow-l"></div>
	            <div class="shadow-r"></div>
	        	<div class="container">
	            
	            <header id="top">
	            	<div class="row">
	                    <div id="logo" class="twelve columns">
	                    	<span class="desc"><?php bloginfo('title'); ?></span>
	                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
	                    </div>
	                </div>
	                <div class="row">
	                    <section id="navigation" class="twelve columns">
	                    	<?php 

	                    		$defaults = array(
									'theme_location'  => 'gornji',
									'menu'            => '',
									'container'       => 'nav',
									'container_id'    => 'nav-wrap',
									'menu_class'      => 'sf-menu',
									'menu_id'         => 'topnav',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
								);

								wp_nav_menu($defaults); ?>
	                        
	                    </section>
	                </div>
	                <div class="clear"></div>
	            </header>
	            
	            </div>
	        </div>
	        <!-- END HEADER -->

<!-- <div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php //bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php //_e( 'Primary Menu', 'vencanje' ); ?></button>
			<a class="skip-link screen-reader-text" href="#content"><?php //_e( 'Skip to content', 'vencanje' ); ?></a>

			<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

	<div id="content" class="site-content"> -->
