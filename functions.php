<?php
	function getStyle() {
		wp_enqueue_style( 'style', get_stylesheet_uri());
		wp_enqueue_style( 'normalize',get_template_directory_uri() . '/normalize.css');
	}
	add_action( 'wp_enqueue_scripts', 'getStyle');