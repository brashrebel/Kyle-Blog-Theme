<?php
/**
 * Created by PhpStorm.
 * User: kylemaurer
 * Date: 9/23/14
 * Time: 7:20 PM
 */
?>
<h2>Hello, my name is Kyle and I like to...</h2>
	<ul class="stack button-group off-canvas-list">
		<?php // get the categories
		$categories = get_categories();
		if ( $categories ) {
			?>
			<dl class="accordion" data-accordion>
				<dd class="accordion-navigation">
					<a href="#topics" class="button split expand"><div class="dashicons dashicons-rss"></div>Blog about these topics
						<span data-dropdown="drop" class="show-for-large-up"></span>
					</a>
					<div id="topics" class="content">
						<ul>
							<?php foreach ( $categories as $category ) {
								echo '<li><a href="'. $category->slug .'">'. $category->name .'</a></li>';
							} ?>
						</ul>
					</div>
				</dd>
			</dl>
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
				'link' => 'https://github.com/brashrebel',
				'icon' => 'media-code'
			),
			'Attend local meetups' => array(
				'link' => 'http://www.meetup.com/members/30073012/',
				'icon' => 'nametag'
			),
			'Occasionally use Facebook' => array(
				'link' => 'https://www.facebook.com/maurerkylej',
				'icon' => 'facebook'
			),
			'Make Grooveshark playlists' => array(
				'link' => 'http://grooveshark.com/#!/mr.kjm1',
				'icon' => 'format-audio'
			),
			'Speak at WordPress events' => array(
				'link' => 'http://wordpress.tv/speakers/kyle-maurer/',
				'icon' => 'megaphone'
			),
			'Podcast weekly' => array(
				'link' => 'http://wproundtable.com/',
				'icon' => 'microphone'
			),
			'Show off my knowledge' => array(
				'link' => 'http://smarterer.com/brashrebel',
				'icon' => 'welcome-learn-more'
			),
		);
		foreach ( $links as $name => $link ) {
			echo '<li><a href="'. $link['link'] .'" class="button large"><div class="dashicons dashicons-'. $link['icon'] .'"></div> '. $name .'</a></li>';
		}
		?>
</ul>