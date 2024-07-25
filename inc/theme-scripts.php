<?php

function huda_scripts() {
	wp_enqueue_style( 'huda-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.3' );
	wp_enqueue_style( 'huda-stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css', array(), _S_VERSION );
	wp_style_add_data( 'huda-style', 'rtl', 'replace' );

	wp_enqueue_script( 'huda-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.2.3', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'huda_scripts' );