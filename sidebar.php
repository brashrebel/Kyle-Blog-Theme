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
		<?php }
		$links = array(
			'Make WordPress plugins' => array(
				'link' => 'https://profiles.wordpress.org/brashrebel/',
				'icon' => 'wordpress-alt'
			),
			'Run my business' => array(
				'link' => 'http://realbigmarketing.com/staff/kyle',
				'icon' => 'lightbulb'
			),
			'Engage others on Twitter' => array(
				'link' => 'https://twitter.com/MrKyleMaurer',
				'icon' => 'twitter'
			),
			'Connect on LinkedIn' => array(
				'link' => 'https://www.linkedin.com/in/maurerkyle',
				'icon' => 'businessman'
			),
			'Waste time on Google+' => array(
				'link' => 'https://plus.google.com/u/1/+KyleMaurerRBM/posts',
				'icon' => 'googleplus'
			),
			'Share code on Github' => array(
				'link' => '#',
				'icon' => 'media-code'
			),
			'Attend local meetups' => array(
				'link' => '#',
				'icon' => 'nametag'
			),
			'Occasionally login to Facebook' => array(
				'link' => '#',
				'icon' => 'facebook'
			),
			'Make Grooveshark playlists' => array(
				'link' => '#',
				'icon' => 'format-audio'
			),
			'Speak at WordPress events' => array(
				'link' => '#',
				'icon' => 'megaphone'
			),
			'Podcast weekly' => array(
				'link' => '#',
				'icon' => 'microphone'
			),
			'Show off my knowledge' => array(
				'link' => '#',
				'icon' => 'welcome-learn-more'
			),
		);
		foreach ( $links as $name => $link ) {
			echo '<li><a href="'. $link['link'] .'" class="button large"><div class="dashicons dashicons-'. $link['icon'] .'"></div> '. $name .'</a></li>';
		}
		?>
	</ul>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
