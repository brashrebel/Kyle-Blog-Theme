<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Kyle\'s Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<!-- bigger screens -->
	<div class="show-for-large-up">
		<?php include( 'inc/links.php' ); ?>
	</div>
	<!-- smaller screens -->
	<div class="hide-for-large-up off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">

			<a class="left-off-canvas-toggle" href="#" ><div class="dashicons dashicons-menu"></div> Menu</a>

			<!-- Off Canvas Menu -->
			<aside class="left-off-canvas-menu">
				<!-- whatever you want goes here -->
				<?php include( 'inc/links.php' ); ?>
			</aside>

		</div>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
