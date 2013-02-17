<?php
/* 
Plugin Name: Add featured image to RSS feed
Plugin URI: http://www.tacticaltechnique.com/wordpress/
Description: Adds the featured image attached to your posts to the RSS feed.
Author: Corey Salzano
Version: 1.0
Author URI: http://twitter.com/salzano
*/

	function add_featured_image_to_feed($content) {
		global $post;
		if ( has_post_thumbnail( $post->ID ) ){
			$content = '' . get_the_post_thumbnail( $post->ID, 'large' ) . '' . $content;
		}
		return $content;
	}

	add_filter('the_excerpt_rss', 'add_featured_image_to_feed', 1000, 1);
	add_filter('the_content_feed', 'add_featured_image_to_feed', 1000, 1);

?>