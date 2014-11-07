<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Heidis Art School
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
<div id="page" class="hfeed site">
	<div class="latest-news">
		<div class="inner">
			<div class="announce-the-stuff">
				<?php announcements();?>
			</div>
		</div>
	</div>
	<?php ubermenu( 'vanilla' , array( 'theme_location' => 'primary' ) ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-inner">
			<div class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</div>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div>
	</header><!-- #masthead -->
	

	<?php
	   if( is_front_page() ) {?>
	       <div class="kid-pics">
		      <?php home_page_slides();?>
	       </div>
	<?php } ?>

	<?php if ( !is_front_page() ) { ?>
	           <hr class="glyph">
	<?php } ?>

	<div id="content" class="site-content">