<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Heidis Art School
 */

get_header(); ?>

<section class="home-middle">
	<div class="middle-content">
		<?php dynamic_sidebar( 'classes' );?>
		<?php dynamic_sidebar( 'gallery' );?>
		<?php dynamic_sidebar( 'blog' );?>
	</div>
</section>

<section class="home-bottom">
	<div class="bottom-content">
		<?php dynamic_sidebar( 'youtube' );?>
		<?php dynamic_sidebar( 'location' );?>
	</div>
</section>

<?php get_footer(); ?>
