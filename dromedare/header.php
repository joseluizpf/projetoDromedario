<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dromedare
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'dromedare' ); ?></a>
	
	<!-- header -->
	<header id="masthead" class="site-header" role="banner">
		<!-- <div class="site-branding">
			<h1 class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );*/ ?></a></h1>
		</div> -->
		
		<!-- logo -->
		<div class="logo">
			<a href="<?php get_home_url(); ?>">
				<img src="<?php echo get_bloginfo('template_directory');?>/images/logo.gif"/>
			</a>
		</div>
		
															<!-- ADICIONAR LINKS AOS BOTOES! -->	
		<!-- botão notificacao -->
		<div class="botao" id="notifButton">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/buttons/notifButton.gif"/>
		</div>
		
		<!-- botao profile -->
		<div class="botao" id="profileButton">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/buttons/profileButton.gif"/>
		</div>
		
		<!-- botao para validar envios de provas desafio -->
		<div class="botao" id="validateButton">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/buttons/validateButton.gif"/>
		</div>
		
		<!-- botao Hall of Fame -->
		<div class="botao" id="HoFButton">
			<img src="<?php echo get_bloginfo('template_directory');?>/images/buttons/HoFButton.gif"/>
		</div>
		
		
		<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
			<!-- <button class="menu-toggle"><?php #_e( 'Primary Menu', 'dromedare' ); ?></button> -->
			<?php #wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		<!-- </nav> --><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
