<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Kyle\'s Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer columns large-12" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'kyle' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'kyle' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s', 'kyle' ), 'Designed', '<a href="http://realbigmarketing.com/staff/kyle" rel="designer">me</a>' ); ?>
			 using <a href="http://foundation.zurb.com">Foundation</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
