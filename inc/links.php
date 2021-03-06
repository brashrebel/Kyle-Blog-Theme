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
								echo '<li><a href="'. get_category_link( $category->term_id ) .'">'. $category->name .'</a></li>';
							} ?>
						</ul>
					</div>
				</dd>
			</dl>
		<?php }
		$links = array(
			'Work for an amazing company' => array(
				'link' => 'http://sandhillsdev.com/',
				'icon' => 'cart'
			),
			'Make WordPress plugins' => array(
				'link' => 'https://profiles.wordpress.org/brashrebel/#content-plugins',
				'icon' => 'wordpress-alt'
			),
			'Co-host an advice show' => array(
				'link' => 'http://getoptionspodcast.com',
				'icon' => 'microphone'
			),
			'Manage a software business' => array(
				'link' => 'https://realbigplugins.com',
				'icon' => 'editor-code'
			),
			'Engage others on Twitter' => array(
				'link' => 'https://twitter.com/MrKyleMaurer',
				'icon' => 'twitter'
			),
			'Connect on LinkedIn' => array(
				'link' => 'https://www.linkedin.com/in/maurerkyle',
				'icon' => 'businessman'
			),
			'Share code on Github' => array(
				'link' => 'https://github.com/brashrebel',
				'icon' => 'media-code'
			),
			'Attend local meetups' => array(
				'link' => 'http://www.meetup.com/members/30073012/',
				'icon' => 'nametag'
			),
			'Give advice on Clarity' => array(
				'link' => 'https://clarity.fm/kylemaurer',
				'icon' => 'lightbulb'
			),
			'Occasionally use Facebook' => array(
				'link' => 'https://www.facebook.com/maurerkylej',
				'icon' => 'facebook'
			),
			'Speak at WordPress events' => array(
				'link' => 'http://wordpress.tv/speakers/kyle-maurer/',
				'icon' => 'megaphone'
			),
			'Podcast weekly' => array(
				'link' => 'http://wproundtable.com/',
				'icon' => 'microphone'
			),
		);
		foreach ( $links as $name => $link ) {
			echo '<li><a href="'. $link['link'] .'" class="button large"><div class="dashicons dashicons-'. $link['icon'] .'"></div> '. $name .'</a></li>';
		}
		?>
</ul>