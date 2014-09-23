<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Kyle\'s Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site row">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'kyle' ); ?></a>

	<header id="masthead" class="site-header columns large-4" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>
			<img src="<?php echo get_theme_mod('logo'); ?>"/>
		</div>

		<!--<nav id="site-navigation" class="main-navigation large-9 columns" role="navigation">
			<button class="menu-toggle"><?php //_e( 'Primary Menu', 'kyle' ); ?></button>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'inline-list right' ) ); ?>
		</nav>--><!-- #site-navigation -->
		<?php get_sidebar(); ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content columns large-8">
