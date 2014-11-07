<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Heidis Art School
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-inner">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'heidis-art-school' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'heidis-art-school' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'heidis-art-school' ), 'Heidis Art School', '<a href="http://trishasalas.com" rel="designer">Trisha Salas</a>' ); ?>
		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
