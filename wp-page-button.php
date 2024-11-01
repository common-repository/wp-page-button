<?php
/*
Plugin Name: WP Page Button
Plugin URI: http://druweb.ru/wp-page-button.html
Description: The plugin adds / returns TinyMCE WordPress button a new page.
Version: 1.0
Author: YandexBot
Author URI: http://druweb.ru
License: GPLv2 or later
*/

add_filter("mce_buttons", "wpb_mce_page");

function wpb_mce_page($buttons) {
  $buttons[] = 'wp_page';
  return $buttons;
}

add_action('admin_print_footer_scripts', 'wpb_quicktags_page');

function wpb_quicktags_page() { ?>
  <script type="text/javascript">
    QTags.addButton('wp_page', 'nextpage', '<!--nextpage-->', '', 'p', '', 201);
  </script><?php
}
?>