<?php

function bst_widgets_init() {

	/*
		  Sidebar (one widget area)
	*/
	register_sidebar(array(
		'name' => __('Home Sidebar', 'bst'),
		'id' => 'homepage-widget-area',
		'description' => __('The homepage widget area', 'bst'),
		'before_widget' => '<section class="%1$s %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<header><h4>',
		'after_title' => '</h4></header>',
	));

	/*
		  Sidebar (one widget area)
	*/
	register_sidebar(array(
		'name' => __('Sidebar', 'bst'),
		'id' => 'sidebar-widget-area',
		'description' => __('The sidebar widget area', 'bst'),
		'before_widget' => '<section class="%1$s %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<header><h4>',
		'after_title' => '</h4></header>',
	));

	/*
		  Footer (three widget areas)
	*/
	register_sidebar(array(
		'name' => __('Footer-1', 'bst'),
		'id' => 'footer-widget-area-1',
		'description' => __('The footer widget area 1', 'bst'),
		'before_widget' => '<div class="%1$s %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<header><h4>',
		'after_title' => '</h4></header>',
	));

	register_sidebar(array(
		'name' => __('Footer-2', 'bst'),
		'id' => 'footer-widget-area-2',
		'description' => __('The footer widget area 2', 'bst'),
		'before_widget' => '<div class="%1$s %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<header><h4>',
		'after_title' => '</h4></header>',
	));

	register_sidebar(array(
		'name' => __('Footer-3', 'bst'),
		'id' => 'footer-widget-area-3',
		'description' => __('The footer widget area3', 'bst'),
		'before_widget' => '<div class="%1$s %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<header><h4>',
		'after_title' => '</h4></header>',
	));

}
add_action('widgets_init', 'bst_widgets_init');

/* menus */
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'interior-menu' => __('Interior Menu'),
			'extra-menu' => __('Footer Menu'),
		)
	);
}
add_action('init', 'register_my_menus');
