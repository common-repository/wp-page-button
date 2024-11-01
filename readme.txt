=== WP Page Button ===
Contributors: YandexBot
Donate link: http://turismuz.ru
Tags: post, page, pages, TinyMCE, button
Requires at least: 3.5.1
Tested up to: 3.5.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The plugin adds / returns TinyMCE WordPress button a new page. Adds the appropriate button quicktag and HTML editor.

== Description ==

Before using this plugin, check that your theme supports pagination in blog posts. For example, since it is made in TwentyTwelve:
`
<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
`

== Installation ==

1. Unzip files.
2. Upload 'wp-page-button' to the '/wp-content/plugins/' directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.