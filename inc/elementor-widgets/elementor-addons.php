<?php

function register_custom_elementor_widgets( $widgets_manager ) {
    require_once get_template_directory() . '/inc/elementor-widgets/widgets/advanced-heading.php';
    $widgets_manager->register( new \Elementor_Advanced_Heading() );

    require_once get_template_directory( __FILE__ ) . '/inc/elementor-widgets/widgets/creative-heading.php';
    $widgets_manager->register( new \Elementor_Creative_Heading() );
}
add_action( 'elementor/widgets/register', 'register_custom_elementor_widgets' );
