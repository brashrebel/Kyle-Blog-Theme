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
	<?php // get the categories
	$categories = get_categories();
	if ( $categories ) {
	?>
	<a href="#" class="button split expand">Topics <span data-dropdown="drop"></span></a><br>
	<ul id="drop" class="f-dropdown" data-dropdown-content>
		<?php foreach ( $categories as $category ) {
		echo '<li><a href="'. $category->slug .'">'. $category->name .'</a></li>';
		} ?>
	</ul>
	<?php } ?>
	<h2>Hello, my name is Kyle and I like to...</h2>
	<ul class="stack button-group">
		<li><a href="#" class="button large">Button 1</a></li>
		<li><a href="#" class="button large">Button 2</a></li>
	</ul>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
