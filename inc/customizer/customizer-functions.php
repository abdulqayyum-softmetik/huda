<?php 
	// Check if Kirki and get_theme_mod() functions exist
    if ( function_exists('get_theme_mod') ) {

        // Function to get container width for blog
        if ( ! function_exists('huda_get_container_width') ) {
            function huda_get_container_width() {
                return get_theme_mod('blog__container__setting', 'container'); 
            }
        }

        // Function to get container width for page
        if ( ! function_exists('huda_get_page_container_width') ) {
            function huda_get_page_container_width() {
                return get_theme_mod('page__container__setting', 'container');
            }
        }

        // Function to get sidebar setting
        if ( ! function_exists('huda_get_sidebar') ) {
            function huda_get_sidebar() {
                return get_theme_mod('blog__sidebar_layout__setting', 'sidebar'); 
            }
        }

        // Function to get footer logo url setting
        if ( ! function_exists('huda_light_logo_url') ) {
            function huda_light_logo_url() {
                return get_theme_mod('logo_secondary_setting_url', ''); 
            }
        }
    }
?>