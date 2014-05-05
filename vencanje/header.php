<!DOCTYPE html>
<html <?php language_attributes(); ?>>



<head>
	
	<meta charset="utf-8" />
	<title><?php wp_title("|"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


		<!-- CSS
  ================================================== -->
  	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/inner.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/layout.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/flexslider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/color.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/prettyPhoto.css" media="screen" />


	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />

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
                    	<span class="desc"><?php bloginfo('description'); ?></span>
                        <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title="<?php bloginfo('name') ?>"/></a>
                    </div>
                </div>
                
                <div class="row">
                    <section id="navigation" class="twelve columns">

							<?php 

							$parametri = array(
									'theme_location'  => 'glavni',
									'container'       => 'nav',
									'container_id'    => 'nav-wrap',
									'menu_class'      => 'sf-menu',
									'menu_id'         => 'topnav',
								);

							wp_nav_menu( $parametri );
							 ?>
						
                    </section>
                </div>
                <div class="clear"></div>
            </header>
            
            </div>
        </div>
        <!-- END HEADER -->