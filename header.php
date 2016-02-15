<?php
/**
 * The Header for APS  
 *
 * Displays all of the <head> section and everything up until <div id="main-content">
 *
 * @package WordPress
 * @subpackage APS
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?> >
<!--<![endif]-->

<head>
	<!-- CHARSET IN WP DASHBOARD  -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- MOBILE META -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- GOOGLE CHROME FRAME FOR IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!-- Site Title | Page Title -->
	<title><?php wp_title(': ', true, right); bloginfo('name'); ?></title>

	<!-- FAVICON -->
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon"> 
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon"> 

	<!-- PINGBACK URL -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section id="content">


	<header>
		<!-- LEFT NAV (JOIN US BUTTON) -->
		<?php if(!is_user_logged_in()): ?>
			<section class="sign-up">
				<a href="<?php the_field('join_us', 'option'); ?>">Join APS</a>
			</section>
		<?php endif; ?>

		<!-- RIGHT NAV (SOCIAL AND LOGIN) -->
			<nav class="right-nav">
				<?php get_template_part('template_parts/nav/nav', 'social'); ?>
				<?php 
					if(is_user_logged_in()) {
						get_template_part('template_parts/nav/nav', 'logged-in');
					} else {
						get_template_part('template_parts/nav/nav', 'logged-out');
					}
				?>
			</nav>

		<!-- LOGO -->
		<h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" id="logo-link">
				<img src="<?php the_field('logo', 'option'); ?>" id="main-logo" alt="APS Logo">
			</a>
		</h1>
		<?php wp_nav_menu(); ?>
		
	</header>


	<?php if(is_front_page()): ?>
		<section id ="call-out">
			<div id="banner">
				<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'homepage', 'slug' ); } ?>
			</div>
		</section>
	<?php endif; ?>

		
	<section id="main-content">