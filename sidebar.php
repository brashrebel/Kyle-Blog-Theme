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
	<h2>Hello, my name is Kyle and I like to...</h2>
	<ul class="stack button-group">
		<?php // get the categories
		$categories = get_categories();
		if ( $categories ) {
			?>
			<li><a href="#" class="button split expand"><div class="dashicons dashicons-rss"></div>Blog about these topics <span data-dropdown="drop"></span></a></li>
			<ul id="drop" class="f-dropdown" data-dropdown-content>
				<?php foreach ( $categories as $category ) {
					echo '<li><a href="'. $category->slug .'">'. $category->name .'</a></li>';
				} ?>
			</ul>
		<?php } ?>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-wordpress-alt"></div> Make WordPress plugins
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-lightbulb"></div> Run my business
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-twitter"></div> Engage others on the Twitters
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-businessman"></div> Make connections on LinkedIn
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-googleplus"></div> Waste time on Google+
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-media-code"></div> Share code on Github
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-nametag"></div> Attend local meetups
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-facebook"></div> Occasionally login to Facebook
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-format-audio"></div> Make Grooveshark playlists
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-megaphone"></div> Speak at WordPress events
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-microphone"></div> Podcast weekly
			</a>
		</li>
		<li>
			<a href="#" class="button large">
				<div class="dashicons dashicons-welcome-learn-more"></div> Show off my knowledge
			</a>
		</li>
	</ul>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
