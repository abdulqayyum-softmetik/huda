<?php
class Custom_Header_Footer_Builder {
    public function __construct() {
        // Initialize hooks
        add_action('init', [$this, 'register_custom_post_types']);
        add_action('customize_register', [$this, 'customizer_settings']);
        add_action('wp_head', [$this, 'replace_default_header']);
        add_action('wp_footer', [$this, 'replace_default_footer']);
        add_action('elementor/theme/register_locations', [$this, 'register_elementor_locations']);
    }

    /**
     * Register custom post types for Header and Footer
     */
    public function register_custom_post_types() {
        $types = [
            'custom_header' => 'Header',
            'custom_footer' => 'Footer',
        ];

        foreach ($types as $key => $label) {
            register_post_type($key, [
                'label' => $label . 's',
                'public' => true,
                'supports' => ['title', 'editor', 'elementor'],
                'menu_icon' => $key === 'custom_header' ? 'dashicons-welcome-widgets-menus' : 'dashicons-admin-generic',
            ]);
        }
    }

    /**
     * Add settings to the Customizer
     */
    public function customizer_settings($wp_customize) {
        $wp_customize->add_section('header_footer_builder', [
            'title' => 'Header & Footer Builder',
            'priority' => 30,
        ]);

        $settings = [
            'selected_header' => 'Select Header',
            'selected_footer' => 'Select Footer',
        ];

        foreach ($settings as $key => $label) {
            $wp_customize->add_setting($key, [
                'default' => '',
                'sanitize_callback' => 'absint',
            ]);

            $wp_customize->add_control($key, [
                'label' => $label,
                'section' => 'header_footer_builder',
                'type' => 'dropdown-pages',
            ]);
        }
    }

    /**
     * Replace default header with custom header
     */
    public function replace_default_header() {
        if (is_admin()) return;

        $header_id = get_theme_mod('selected_header');
        if ($header_id) {
            echo apply_filters('the_content', get_post_field('post_content', $header_id));
        }
    }

    /**
     * Replace default footer with custom footer
     */
    public function replace_default_footer() {
        if (is_admin()) return;

        $footer_id = get_theme_mod('selected_footer');
        if ($footer_id) {
            echo apply_filters('the_content', get_post_field('post_content', $footer_id));
        }
    }

    /**
     * Register locations with Elementor
     */
    public function register_elementor_locations($elementor_theme_manager) {
        $elementor_theme_manager->register_location('header', [
            'label' => 'Header',
            'multiple' => true,
        ]);

        $elementor_theme_manager->register_location('footer', [
            'label' => 'Footer',
            'multiple' => true,
        ]);

        // Add other types: Singular, Archive, 404
        $locations = ['singular', 'archive', '404'];
        foreach ($locations as $location) {
            $elementor_theme_manager->register_location($location, [
                'label' => ucfirst($location),
                'multiple' => true,
            ]);
        }
    }
}

// Initialize the class
new Custom_Header_Footer_Builder();
