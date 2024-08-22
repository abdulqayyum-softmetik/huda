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
	define( '_S_VERSION', '1.0.0' );
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
	add_theme_support('elementor');

	// Add support for Gutenberg
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');
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

/**
 * Include widget area.
 */
require get_template_directory() . '/inc/widgets.php';


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/theme-scripts.php';

/**
 * Bootstrap 5 Nav Walker.
 */
require get_template_directory() . '/inc/bootstrap-navigation.php';

/**
 * Ajax live serach.
 */
require get_template_directory() . '/inc/live-search.php';

/**
 * Excerpt Length.
 */
require get_template_directory() . '/inc/excerpt.php';

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

if( class_exists( 'kirki' ) ){
	locate_template('customizer', true, true);
}
require get_template_directory() . '/inc/customizer.php';


/**
 * Tgmpa Plugin activations.
 */
require get_template_directory() . '/inc/tgm/plugins.php';

?>