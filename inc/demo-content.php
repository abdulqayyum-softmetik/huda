<?php

// Sample Config for single site (multiple zip).

    /**
 * Sample Config for single site (multiple zip).
 *
 * @return array
 */
if ( ! function_exists( 'sd_edi_single_site_config' ) ) :
function sd_edi_single_site_config() {
    return [
        'themeName'   => 'Huda',
        'themeSlug'   => 'huda',
        // Allow multiple zip files to true (for single site demo).
        'multipleZip' => true, 
        // Array of demo data.
        'demoData'    => [
            // Treat individual array as a separate demo.
            'demo-site-1' => [
                'name'         => esc_html__( 'Default Demo', 'huda' ),
                'previewImage' => 'https://softmetik.com/demo/blog-screenshot.jpg',
                'previewUrl'   => 'https://wphuda.softmetik.com',
                'demoZip'      => 'https://softmetik.com/demo/demo-import.zip',
                'demo-import'  => 'default',
                // Required plugins for this demo.
                'plugins' => [
                    'woocommerce' => [
                        'name'     => 'WooCommerce',
                        'source'   => 'wordpress',
                        'filePath' => 'woocommerce/woocommerce.php',
                    ],
                    'kirki' => [
                        'name'     => 'Kirki Customizer Framework',
                        'source'   => 'wordpress',
                        'filePath' => 'kirki/kirki.php',
                    ],
                    'ninja-forms' => [
                        'name'     => 'Ninja Forms',
                        'source'   => 'wordpress',
                        'filePath' => 'ninja-forms/ninja-forms.php',
                    ],
                    // Add more required plugins as needed.
                ],
            ],
        ],
    ];
}
endif;
add_filter( 'sd/edi/importer/config', 'sd_edi_single_site_config' );


if ( ! function_exists( 'sd_edi_after_import_actions' ) ) :
/**
 * Executes operations after import.
 *
 * @param object $importer Import object.
 *
 * @return void
 */
function sd_edi_after_import_actions( $importer ) {
    // Schedule the menu assignment to run 10 seconds later.
    wp_schedule_single_event( time() + 10, 'sd_edi_set_menu_location' );
}
add_action( 'sd/edi/after_import', 'sd_edi_after_import_actions' );

// The function that actually sets the menu.
function sd_edi_set_menu_location() {
    $main_menu = wp_get_nav_menu_object( 'Primary' ); // Check slug or name.
    
    if ( $main_menu ) {
        set_theme_mod( 'nav_menu_locations', [
            'main-menu' => $main_menu->term_id,
        ] );
    } else {
        error_log( 'Menu not found: Primary' );
    }
}

update_option( 'show_on_front', 'posts' );

/**
 * Hook into the importer after import hook to execute your codes above.
 */
add_action( 'sd/edi/after_import', 'sd_edi_after_import_actions' );
endif;