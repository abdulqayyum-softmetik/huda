<?php
/**
 * Huda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Huda
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.2' );
}			

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function huda_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Huda, use a find and replace
		* to change 'huda' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'huda', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Primary', 'huda' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'huda_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Add support for Elementor
	add_theme_support( 'elementor' );
	
	// Add support for Gutenberg
    add_theme_support( 'align-wide' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-line-height' );
	add_theme_support( 'custom-units', array() );
	add_theme_support( 'appearance-tools' );
	add_theme_support( 'border' );
	add_theme_support( 'link-color' );
	add_theme_support( 'block-template-parts' );

}
add_action( 'after_setup_theme', 'huda_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function huda_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'huda_content_width', 640 );
}
add_action( 'after_setup_theme', 'huda_content_width', 0 );




function get_template_by_meta($meta_values) {
    // Check if the custom post type exists
    if (!post_type_exists('huda_theme_builder')) {
        return false; // Or handle it as per your requirement
    }



    $meta_query = ['relation' => 'AND'];

    foreach ($meta_values as $key => $value) {
        $meta_query[] = [
            'key' => $key,
            'value' => $value,
            'compare' => '=',
        ];
    }


    $args = [
        'post_type' => 'huda_theme_builder',
        'meta_query' => $meta_query,
        'posts_per_page' => 1,
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        return $query->posts[0]->ID;
    }

    return false;
}



function current_user_matches_role($roles) {
    // If roles is 'all', allow all users
    if ($roles === 'all' || (is_array($roles) && in_array('all', $roles, true))) {
        return true;
    }

    // Get current user information
    $current_user = wp_get_current_user();

    // Check if the user has any of the specified roles
    return array_intersect((array) $roles, (array) $current_user->roles) ? true : false;
}

function get_template_for_context($criteria) {
    $args = [
        'post_type' => 'huda_theme_builder',
        'meta_query' => [],
        'posts_per_page' => -1, // Get all matching templates to check roles
    ];

    foreach ($criteria as $key => $value) {
        $args['meta_query'][] = [
            'key' => $key,
            'value' => $value,
            'compare' => '='
        ];
    }

    $query = new WP_Query($args);

	if ($criteria['_template_type'] == 'archive') {

		if ($query->have_posts()) {
			foreach ($query->posts as $template) {
				$display_on = get_post_meta($template->ID, '_display_on', true);
	
				if ($display_on === 'all_archives') {
					return $template->ID;
				}
			}
		}
	}else{
		if ($query->have_posts()) {
			foreach ($query->posts as $template) {
				$roles = get_post_meta($template->ID, '_user_roles', true);
				if (current_user_matches_role($roles)) {
					$display_on = get_post_meta($template->ID, '_display_on', true);
				
					// Check for "specific" context
					if ($display_on === 'specific') {
						$specific_pages = get_post_meta($template->ID, '_specific_page', true);
						
						if (is_array($specific_pages) && !empty($specific_pages)) {

							if (in_array(get_queried_object_id(), $specific_pages)) {
								return $template->ID;
							}
							
						}
					} else {
						// Return template if not "specific" (e.g., "entire", "home", etc.)
						return $template->ID;
					}
				}
			}
		}
	}


	if ($criteria['_display_on'] !== 'entire') {
        $criteria['_display_on'] = 'entire';
        return get_template_for_context($criteria);
    }

    return false;
}

function render_header_template($context, $default_template = 'default') {
    $template_id = get_template_for_context([
        '_template_type' => 'header',
        '_display_on' => $context
    ]);

    // Render the template if found, otherwise use the default header
    if ($template_id) {
		if ( did_action('elementor/loaded') ) {
			echo \Elementor\Plugin::$instance->frontend->get_builder_content_for_display( $template_id );
		} else {
			echo '<p>Elementor is required to display this template.</p>';
		}
    } else {
        do_action('huda_header_before');
        get_template_part('template-parts/headers/header', $default_template);
        do_action('huda_header_after');
    }
}
function render_footer_template($context, $default_template = 'default') {
    $template_id = get_template_for_context([
        '_template_type' => 'footer',
        '_display_on' => $context
    ]);

    // Render the template if found, otherwise use the default header
    if ($template_id) {
        if ( did_action('elementor/loaded') ) {
			echo \Elementor\Plugin::$instance->frontend->get_builder_content_for_display( $template_id );
		} else {
			echo '<p>Elementor is required to display this template.</p>';
		}
    } else {
		do_action('huda_content_after'); 
		get_template_part( 'template-parts/footers/footer', $default_template ); 
		do_action('huda_footer_after'); 
    }
}

function render_archive_template() {
    $template_id = get_template_for_context([
        '_template_type' => 'archive',
        '_display_on'    => 'all_archives'
    ]);

    // Render the custom template if it exists
    if ($template_id) {
        if ( did_action('elementor/loaded') ) {
			echo \Elementor\Plugin::$instance->frontend->get_builder_content_for_display( $template_id );
		} else {
			echo '<p>Elementor is required to display this template.</p>';
		}
    }
}

/**
 * Theme updates.
 */
require get_template_directory() . '/inc/theme-updates/updates.php';

/**
 * Include widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Include block styles.
 */
require get_template_directory() . '/inc/block-styles.php';

/**
 * Include block patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/theme-scripts.php';

/**
 * Admin page for huda
 */
require get_template_directory() . '/inc/admin/admin.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/live-search.php';

/**
 * Bootstrap 5 Nav Walker.
 */
require get_template_directory() . '/inc/bootstrap-navigation.php';

/**
 * Template Functions
 */
function huda_include_custom_functions() {

    require get_template_directory() . '/inc/customizer/customizer-functions.php';

}
add_action( 'after_setup_theme', 'huda_include_custom_functions' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Implement the Custom Hooks.
 */
require get_template_directory() . '/inc/core/theme-hooks.php';

/**
 * Kirki Customizer Adavnced Options.
 */

if ( class_exists( 'kirki' ) ){
	require get_template_directory() . '/inc/customizer.php';
}


/**
 * Tgmpa Plugin activations.
 */
require get_template_directory() . '/inc/tgm/plugins.php';

/**
 * Demo Content.
 */
require get_template_directory() . '/inc/demo-content.php';

/**
 * Theme updates.
 */
require get_template_directory() . '/inc/theme-updates/updates.php';







?>