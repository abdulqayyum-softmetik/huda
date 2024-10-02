<?php

function huda_scripts() {

	wp_enqueue_style( 'huda', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.3' );
	wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/assets/css/bootstrap.rtl.min.css', array(), '5.2.3' );
	wp_enqueue_style( 'huda-stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css', array(), _S_VERSION ); 
	wp_enqueue_style( 'remixicon', get_template_directory_uri() . '/assets/css/remixicon.css', array(), '4.3.0' ); 
	
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.2.3', true );
	wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'huda_scripts' );

function reorder_elementor_css() {

    if ( did_action( 'elementor/loaded' ) ) {

        wp_dequeue_style( 'elementor-frontend' );

        wp_enqueue_style( 'elementor-frontend', plugins_url( 'elementor/assets/css/frontend.min.css' ), array(), ELEMENTOR_VERSION, 'all' );
    }

}
// Use a higher priority to make sure it runs after Elementor has enqueued its styles
add_action('wp_enqueue_scripts', 'reorder_elementor_css', 20);


function huda_customizer_scripts() {

	wp_enqueue_style( 'huda-customizer-style', get_template_directory_uri() . '/assets/css/customizer.css', array(), _S_VERSION );

}
add_action( 'customize_controls_enqueue_scripts', 'huda_customizer_scripts' );

function huda_admin_enqueue() {

	$screen = get_current_screen();

    if ( $screen->id === 'toplevel_page_wp-huda' ) {

        // Enqueue Bootstrap CSS for admin
		wp_enqueue_style( 'huda-admin-styles', get_template_directory_uri() . '/assets/css/admin-style.css', array(), '1.0.0' ); 
		wp_enqueue_script( 'huda-js', get_template_directory_uri() . '/assets/js/huda-admin.js', array(), _S_VERSION, true );

    }
}
add_action( 'admin_enqueue_scripts', 'huda_admin_enqueue' );

