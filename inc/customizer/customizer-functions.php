<?php 
	// Check if Kirki and get_theme_mod() functions exist
    if ( function_exists('get_theme_mod') ) {

        // Function to get container width for blog
        if ( ! function_exists('huda_get_container_width') ) {
            function huda_get_container_width() {
                return get_theme_mod('blog__container__setting', 'container'); 
            }
        }

         // Function to get container width for Header
         if ( ! function_exists('huda_get_header_container_width') ) {
            function huda_get_header_container_width() {
                return get_theme_mod('header__container__setting', 'container-fluid'); 
            }
        }

         // Function to get container width for Footer
         if ( ! function_exists('huda_get_footer_container_width') ) {
            function huda_get_footer_container_width() {
                return get_theme_mod('footer__container__setting', 'container'); 
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
                return get_theme_mod('blog__sidebar_layout__setting', 'no-sidebar'); 
            }
        }

        // Function to get footer logo url setting
        if ( ! function_exists('huda_light_logo_url') ) {
            function huda_light_logo_url() {
                return get_theme_mod('logo_secondary_setting_url', ''); 
            }
        }

         // Function to get sidebar setting
         if ( ! function_exists('huda_post_thumbnail') ) {
            function huda_post_thumbnail() {
                return get_theme_mod( 'huda_post_thumbnail_setting', 'on' );
            }
        }

         // Function to get sidebar setting
         if ( ! function_exists('huda_header_sticky_setting') ) {
            function huda_header_sticky_setting() {
                return get_theme_mod( 'huda_header_sticky', 'relative' );
            }
        }

        // Function to get footer logo url setting
        if ( ! function_exists('huda_header_button_url') ) {
            function huda_header_button_url() {
                return get_theme_mod('header_button_url_setting', ''); 
            }
        }

         // Function to get footer logo url setting
         if ( ! function_exists('huda_facebook_url') ) {
            function huda_facebook_url() {
                return get_theme_mod('facebook_url_setting', ''); 
            }
        }
        
         // Function to get footer logo url setting
         if ( ! function_exists('huda_twitter_url') ) {
            function huda_twitter_url() {
                return get_theme_mod('twitter_url_setting', ''); 
            }
        }

        // Function to get footer logo url setting
        if ( ! function_exists('huda_youtube_url') ) {
            function huda_youtube_url() {
                return get_theme_mod('youtube_url_setting', ''); 
            }
        }

         // Function to get footer logo url setting
         if ( ! function_exists('huda_whatsapp_url') ) {
            function huda_whatsapp_url() {
                return get_theme_mod('whatsapp_url_setting', ''); 
            }
        }
    }
?>