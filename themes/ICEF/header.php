<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="home-link">
					<img class="black-logo" src="<?php echo get_template_directory_uri();?>/images/svg/logo-black-medium.svg" rel="logo">
					</a>
					<h2 class="nav-title"><?php wp_title('') ?></h2>
					<i class="fa fa-bars" aria-hidden="true"></i>
				</nav><!-- #site-navigation -->
				<img class="desktop-banner" src="<?php echo get_template_directory_uri();?>/images/svg/banner.svg" alt="banner">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				<div class="yellow-dot-filler"></div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
