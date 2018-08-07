<?php

function bst_enqueues() {
	//Compiled Styles
	wp_register_style('wp-styles', get_template_directory_uri() . '/style.css', false, null);
	wp_enqueue_style('wp-styles');

	//GoogleFonts

	//Compiled Styles
	wp_register_style('styles', get_template_directory_uri() . '/dist/css/purestyles.min.css', false, null);
	wp_enqueue_style('styles');

	wp_deregister_script('jquery');
	wp_register_script('jquery', get_bloginfo('template_url') . '/dist/js/jquery-3.2.1.min.js', false);
	wp_enqueue_script('jquery');

	//Compiled Javascript in Footer After jquery
	wp_register_script('scripts', get_template_directory_uri() . '/dist/js/production.min.js', array('jquery'), null, TRUE);
	wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);