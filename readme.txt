=== Add Featured Image to RSS Feed ===
Contributors: salzano
Tags: featured image, feed, post thumbnail, add featured image to rss, add featured image
Requires at least: 2.0.2
Tested up to: 6.6.1
Stable tag: 1.1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds the featured image attached to posts to the beginning of the post content and excerpt in RSS feeds.

== Description ==

This plugin does one thing, and that thing is to add your posts' featured image to the RSS feed. It specifies the 'large' image size.

### Open Graph Meta Tags are also Necessary

Many modern feed readers do not show the images added by this plugin. Feedly, for example, will not show images added by this plugin. Feed readers crawl article pages to find the image attached to posts in the open graph meta tag. Many SEO plugins add open graph tags for featured images. I like the (https://wordpress.org/plugins/opengraph/)[Open Graph] plugin, too.



== Installation ==

1. Upload the plugin to your wp-content/plugins folder, or use the Plugins > Add New section of your dashboard to search for "Add featured image to RSS feed"
1. Activate the plugin through the Plugins menu in WordPress


== Frequently Asked Questions ==

= What does this plugin do? =

This plugin adds the featured image of each post to the RSS feed content.

= Where can I see the change? =

In your site's RSS feed.

= What if images still do not appear in RSS feed readers? =

Make sure your articles have open graph image meta tags. Many modern feed readers do not show the images added by this plugin. Feedly, for example, will not show images added by this plugin. Feed readers crawl article pages to find the image attached to posts in the open graph meta tag. Many SEO plugins add open graph tags for featured images. I like the (https://wordpress.org/plugins/opengraph/)[Open Graph] plugin, too.


== Changelog ==

= 1.1.4 =
* [Fixed] Updates documentation to suggest this plugin is not as useful as it once was, and open graph image meta tags are often required for modern feed readers to show post thumbnails. Version 1.1.3 put this content in the wrong place so it was not visible on .org.

= 1.1.3 =
* [Fixed] Updates documentation to suggest this plugin is not as useful as it once was, and open graph image meta tags are often required for modern feed readers to show post thumbnails.
* [Changed] Changes tested up to version 6.6.1

= 1.1.2 =
* [Changed] Changes tested up to version 6.2.0

= 1.1.1 =
* [Changed] Tested up to version 5.8.3

= 1.1.0 =
* [Added] Wraps the thumbnail size of the image in a filter `rss_featured_image_thumbnail_size` so that other developers may change it
* [Changed] Tested up to version 5.1.1

= 1.0 =
* First build


== Upgrade Notice ==

= 1.1.4 =
Updates documentation to suggest this plugin is not as useful as it once was, and open graph image meta tags are often required for modern feed readers to show post thumbnails. Changes tested up to version 6.6.1

= 1.1.3 =
Updates documentation to suggest this plugin is not as useful as it once was, and open graph image meta tags are often required for modern feed readers to show post thumbnails. Changes tested up to version 6.6.1

= 1.1.2 =
Changes tested up to version 6.2.0.

= 1.1.0 =
I tested this version of the plugin on WordPress 5.1.1, and it still works great. I also made it possible for other developers to manipulate the thumbnail size of the photo using a filter.

= 1.0 =
There is only one version available at this time