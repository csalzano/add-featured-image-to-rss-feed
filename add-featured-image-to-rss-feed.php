<?php
defined( 'ABSPATH' ) or exit;
/**
 * Plugin Name: Add Featured Image to RSS Feed
 * Plugin URI: https://github.com/csalzano/add-featured-image-to-rss-feed
 * Description: Adds the featured image attached to your posts to the RSS feed.
 * Version: 1.1.4
 * Author: Corey Salzano
 * Author URI: https://coreysalzano.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

function salzano_add_featured_image_to_feed( $content ) {
	global $post;
	if ( isset( $post->ID ) && has_post_thumbnail( $post->ID ) ) {
		return get_the_post_thumbnail( $post->ID, apply_filters( 'rss_featured_image_thumbnail_size', 'large' ) ) . $content;
	}
	return $content;
}

add_filter( 'the_excerpt_rss', 'salzano_add_featured_image_to_feed', 1000, 1 );
add_filter( 'the_content_feed', 'salzano_add_featured_image_to_feed', 1000, 1 );
