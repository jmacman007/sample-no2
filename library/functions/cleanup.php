<?php

/*
Disable WordPress Admin Bar for all users.
 */
show_admin_bar(false);

/*
Disable WordPress Widgets
 */
add_action('widgets_init', 'my_unregister_widgets');
function my_unregister_widgets() {
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Categories');
	unregister_widget('WP_Widget_Recent_Posts');
	unregister_widget('WP_Widget_Search');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Tag_Cloud');
}

/*
Clean up wp_head()
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

/*
Show less info to users on failed login for security.
(Will not let a valid username be known.)
 */
function show_less_login_info() {
	return "<strong>ERROR</strong>: Stop guessing!";}
add_filter('login_errors', 'show_less_login_info');

/*
Do not generate and display WordPress version
 */
function no_generator() {
	return '';}
add_filter('the_generator', 'no_generator');

/*
Filters to remove IDs and classes from menu items
http://stackoverflow.com/questions/5222140/remove-li-class-id-for-menu-items-and-pages-list
If you wish to use these filters, then simply un-comment them.
 */
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
	return is_array($var) ? array() : '';
}

/*
Filter to remove comment author website link. Use this if you wish to cut down the amount of spammers in your comments (while retaining the "Your website" comment field).
See http://www.wpsquare.com/remove-comment-author-website-link-wordpress/
 */
function author_link() {
	global $comment;
	$comment_ID = $comment->user_id;
	$author = get_comment_author($comment_ID);
	$url = get_comment_author_url($comment_ID);
	if (empty($url) || 'http://' == $url) {
		$return = $author;
	} else {
		$return = "$author";
	}

	return $return;
}
add_filter('get_comment_author_link', 'author_link');

/*
remove the p from around imgs (http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/)
 */
function filter_ptags_on_images($content) {
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

function remove_cssjs_ver($src) {
	if (strpos($src, '?ver=')) {
		$src = remove_query_arg('ver', $src);
	}

	return $src;
}
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);

///Remove WP Emojis
///Remove WP Emojis
function disable_emojis() {
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');
function disable_emojis_tinymce($plugins) {
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

// Remove WP-Embed
function disable_embeds_init() {
	// Remove the REST API endpoint.
	remove_action('rest_api_init', 'wp_oembed_register_route');
	// Turn off oEmbed auto discovery.
	// Don't filter oEmbed results.
	remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
	// Remove oEmbed discovery links.
	remove_action('wp_head', 'wp_oembed_add_discovery_links');
	// Remove oEmbed-specific JavaScript from the front-end and back-end.
	remove_action('wp_head', 'wp_oembed_add_host_js');
}
add_action('init', 'disable_embeds_init', 9999);

function exclude_post_categories($excl = '') {
	$categories = get_the_category($post->ID);
	if (!empty($categories)) {
		$exclude = $excl;
		$exclude = explode(",", $exclude);
		foreach ($categories as $cat) {
			$html = '';
			if (!in_array($cat->cat_ID, $exclude)) {
				$html .= '<a href="' . get_category_link($cat->cat_ID) . '" ';
				$html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
				echo $html;
			}
		}
	}
}