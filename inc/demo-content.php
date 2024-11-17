<?php
/**
 * Retrieves the configuration for the Huda demo import.
 *
 * Please note: The function name should be prefixed according to your theme's
 * naming convention.
 *
 * You can check the full developer documentation here including exports and PHP config:
 * https://docs.sigmadevs.com/easy-demo-importer/developer-docs/
 *
 * Example settings:
 * - 'multipleZip => true': Indicates if single demo import is supported.
 * - 'demoData': Contains demo content, including pages, menus, and plugins.
 * - 'blog': Defines the page slug for setting it as the homepage.
 * - 'frontPageBlog': Set to true to designate the Posts page as the front page.
 * - 'menus': Lists the locations for different menus, e.g., 'main-menu'
 *
 * @return array Configuration array for the Huda theme demo import.
 */
function huda_import_config() {
	return [
		'themeName'   => 'Huda',
		'themeSlug'   => 'huda',
		/**
		 * The 'multipleZip' setting indicates that the demo import functionality
		 * supports two options:
		 *
		 * 1. Full Demo Import ('multipleZip' => false): Imports all home pages
		 *    and their associated inner pages.
		 * 2. Single Demo Import ('multipleZip' => true): Allows importing only a
		 *    specific home page along with its related inner pages.
		 */
		'multipleZip' => true,
		'demoData'    => [
			/**
			 * The 'blog' key in the 'demoData' array represents the slug of the page.
			 *
			 * To set a page as the homepage after demo import, you need to pass
			 * the page slug as the key. No other settings are required.
			 *
			 * For example, in this configuration:
			 *
			 * 'home-page-1' => [
			 *     'name'         => esc_html__( 'Home Page 1', 'huda' ),
			 *     'previewImage' => 'home1/screenshot.jpg',
			 *     ...
			 * ],
			 *
			 * Here, 'home-page-1' is the slug of the page that can be used for
			 * setting the homepage.
			 * Make sure each key corresponds to the correct page slug so that it can
			 * be used to set the homepage.
			 */
			'blog' => [
				'name'          => esc_html__( 'Default Demo', 'huda' ),
				'previewImage'  => 'https://softmetik.com/demos/wphuda-demos/demo-1-default/screenshot.jpg',
				'previewUrl'    => 'https://wphuda.softmetik.com',
				'demoZip'       => 'https://softmetik.com/demos/wphuda-demos/demo-1-default/demo-import.zip',

				/**
				 * The 'frontPageBlog' key is a special setting used to designate
				 * the Posts page as the front page.
				 *
				 * If you want the Posts page (blog page) to appear as the front page after the demo import, set 'frontPageBlog' => true.
				 *
				 * If you do not require the Posts page to be the front page, simply
				 * omit or discard this setting.
				 *
				 * Example:
				 * 'frontPageBlog' => true, // Sets the Posts page as the front page.
				 *
				 * If this setting is not needed, you can leave it out entirely.
				 */
				'frontPageBlog' => true,

				/**
				 * Associative array of menu locations and their corresponding names. No other configuration is required.
				 * Format: menu_location => Menu Name.
				 *
				 * Example:
				 * 'menus' => [
				 *     // Sets 'Main Menu' to the 'main-menu' location.
				 *     'main-menu' => 'Main Menu',
				 *
				 *      // Sets 'Footer Menu' to the 'footer-menu' location.
				 *     'footer-menu' => 'Footer Menu',
				 *
				 *      // Sets 'Social Links Menu' to the 'social-menu' location.
				 *     'social-menu' => 'Social Links Menu',
				 * ],
				 */
				'menus'         => [
					'main-menu' => 'Main Menu',
				],

				/**
				 * Slug for the blog page.
				 *
				 * This slug should correspond to a page that is designated to display
				 * the blog posts. This ensures that the page with this slug is set as
				 * the blog page.
				 */
				'blogSlug'      => 'blog',
				/**
				 * Array of plugins to install.
				 * Some example plugins are included here.
				 * The array key needs to be the same as plugin slug.
				 * You can also include a bundled plugin here.
				 */
				'plugins'       => [
					'woocommerce' => [
						'name'     => 'WooCommerce',
						'source'   => 'wordpress',
						'filePath' => 'woocommerce/woocommerce.php',
					],
					'kirki'       => [
						'name'     => 'Kirki Customizer Framework',
						'source'   => 'wordpress',
						'filePath' => 'kirki/kirki.php',
					],
				],
			],
		],
	];
}

add_filter( 'sd/edi/importer/config', 'huda_import_config' );