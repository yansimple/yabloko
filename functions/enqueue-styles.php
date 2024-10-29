<?php

/* Theme Styles
---------------------------------------------------------------------------------------------------- */

function theme_styles() {

	wp_enqueue_style(
		'bootstrap.min',
		get_template_directory_uri() . '/css/bootstrap.min.css',
		array(),
		'6843'
	);

	wp_enqueue_style(
		'style',
		get_template_directory_uri() . '/style.css',
		array(),
		'6843'
	);

}
add_action('wp_enqueue_scripts', 'theme_styles');
