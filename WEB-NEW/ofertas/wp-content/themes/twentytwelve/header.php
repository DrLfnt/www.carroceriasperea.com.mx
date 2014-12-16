<?php
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta name="author" content="Argenis Oldair Palacios @DrLfnt" href="https://plus.google.com/+ArgenisOldairPalaciosDrLfnt"/>
<meta name="theme-color" content="#0074D9"/>
<meta name="robots" content="INDEX, FOLLOW, ALL"/>
<meta name="googlebot" content="INDEX, FOLLOW, ALL"/>
<meta name="MobileOptimized" content="320" />
<meta name="HandheldFriendly" content="True" />
<meta name="rating" content="general"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta http-equiv="cleartype" content="on"/>
<meta name="mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui, user-scalable=no"/>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="alternate" hreflang="es-MX" href="http://carroceriasperea.com.mx/ofertas/" />
  <!-- Android Icon -->
  <link rel="icon" sizes="196x196" href="http://carroceriasperea.com.mx/img/icons/icon-196.png"/>
  <link rel="icon" sizes="128x128" href="http://carroceriasperea.com.mx/img/icons/icon-128.png"/>
  <!-- Android Icon -->
  <!-- Apple Icon -->
  <link rel="apple-touch-icon" href="http://carroceriasperea.com.mx/img/icons/icon.png"/>
  <link rel="apple-touch-icon" sizes="128x128" href="http://carroceriasperea.com.mx/img/icons/icon-128.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="128x128" href="http://carroceriasperea.com.mx/img/icons/icon-128.png"/>
  <!-- Apple Icon -->
  <!-- Apple Retina Icon -->
  <link rel="apple-touch-icon" sizes="76x76" href="http://carroceriasperea.com.mx/img/icons/icon-76.png"/>
  <link rel="apple-touch-icon" sizes="120x120" href="http://carroceriasperea.com.mx/img/icons/icon-120.png"/>
  <link rel="apple-touch-icon" sizes="152x152" href="http://carroceriasperea.com.mx/img/icons/icon-152.png"/>
  <!-- Apple Retina Icon -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="shortcut icon" type="image/x-icon" href="http://carroceriasperea.com.mx/img/icons/favicon.ico">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><i class="fa fa-truck"></i> <?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">