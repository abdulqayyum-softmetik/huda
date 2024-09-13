<?php

function huda_scripts() {
	wp_enqueue_style( 'bootstrap', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.3' );
	wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap.rtl.min.css', array(), '5.2.3' );
	wp_enqueue_style( 'huda-stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css', array(), _S_VERSION ); 
	wp_enqueue_style( 'remixicon', get_template_directory_uri() . '/assets/css/remixicon.css', array(), '4.3.0' ); 
	wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '11.0.5' ); 

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.2.3', true );
	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), '11.0.5', true );
	wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'huda_scripts' );

function huda_customizer_scripts() {
	wp_enqueue_style( 'huda-customizer-style', get_template_directory_uri() . '/assets/css/customizer.css', array(), _S_VERSION );
}
add_action('customize_controls_enqueue_scripts', 'huda_customizer_scripts');
