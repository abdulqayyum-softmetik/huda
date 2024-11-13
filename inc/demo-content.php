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
                'previewImage' => 'https://softmetik.com/demos/wphuda-demos/demo-1-default/screenshot.jpg',
                'previewUrl'   => 'https://wphuda.softmetik.com',
                'demoZip'      => 'https://softmetik.com/demos/wphuda-demos/demo-1-default/demo-import.zip',
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

// set frontpage after demo import
// function sd_update_front_page_setting() {

//     $current_show_on_front = get_option( 'show_on_front' );

//     if ( $current_show_on_front !== 'posts' ) {

//         update_option( 'show_on_front', 'posts' );
//         error_log( 'show_on_front updated to posts' );
        
//     } else {
//         error_log( 'show_on_front already set to posts' );
//     }
// }

function sd_update_front_page_setting() {
    // Check if a page is already set as the front page
    $current_show_on_front = get_option( 'show_on_front' );
    $current_front_page_id = get_option( 'page_on_front' );
    
    // Find a page titled 'Home' (or any suitable fallback)
    $home_page = get_page_by_title( 'Home' );

    if ( $home_page && $current_show_on_front !== 'page' ) {
        // Set the home page as the front page if it's not already configured
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_page->ID );

        error_log( "Front page set to 'Home' with ID: {$home_page->ID}" );
    } elseif ( $current_show_on_front === 'page' && $current_front_page_id == $home_page->ID ) {
        error_log( 'Home page is already set as the front page.' );
    } else {
        error_log( 'No action taken. Front page settings unchanged.' );
    }
}
/**
 * Hook into the importer after import hook to execute your codes above.
 */
add_action( 'sd/edi/after_import', 'sd_edi_after_import_actions' );
endif;