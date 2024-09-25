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
                'name'         => esc_html__( 'Demo Site 1', 'huda' ),
                'previewImage' => get_template_directory_uri() . '/assets/demo/site/1/blog-screenshot.jpg',
                'previewUrl'   => 'https://wphuda.softmetik.com',
                'demoZip'      => get_template_directory_uri() . '/assets/demo/site/1/demo-import.zip',
                'default-demo'     => 'blog',
                // 'settingsJson' => [
                //     'example-options.json',
                //     'example-options-2.json',
                // ],
                'menus'        => [
                    'main-menu' => 'Primary',
                ],
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
            // 'demo-site-2' => [
            //     'name'         => esc_html__( 'Demo Site 2', 'huda' ),
            //     'previewImage' => 'URL/of/demo/site/2/preview.jpg',
            //     'previewUrl'   => 'URL/of/demo/site/2/preview/',
            //     'demoZip'      => 'URL/of/the/demo/site/2/demo-import.zip',
            //     'blogSlug'     => 'news',
            //     'settingsJson' => [
            //         'example-options-3.json',
            //         'example-options-4.json',
            //     ],
            //     'menus'        => [
            //         'primary' => 'Header Menu',
            //         'footer'  => 'Social Menu',
            //     ],
            //     // Required plugins for this demo.
            //     'plugins' => [
            //        'elementor' => [
            //             'name'     => 'Elementor Page Builder',
            //             'source'   => 'wordpress',
            //             'filePath' => 'elementor/elementor.php',
            //         ],
            //         'woocommerce' => [
            //             'name'     => 'WooCommerce',
            //             'source'   => 'wordpress',
            //             'filePath' => 'woocommerce/woocommerce.php',
            //         ],
            //         'xpro-elementor-addons' => [
            //             'name'     => 'Xpro Elementor Addons',
            //             'source'   => 'wordpress',
            //             'filePath' => 'xpro-elementor-addons/xpro-elementor-addons.php',
            //         ],
            //         'xpro-theme-builder' => [
            //             'name'     => 'Xpro Theme Builder',
            //             'source'   => 'wordpress',
            //             'filePath' => 'xpro-theme-builder/xpro-theme-builder.php',
            //         ],
            //         'kirki' => [
            //             'name'     => 'Kirki Customizer Framework',
            //             'source'   => 'wordpress',
            //             'filePath' => 'kirki/kirki.php',
            //         ],
            //         'ninja-forms' => [
            //             'name'     => 'Ninja Forms',
            //             'source'   => 'wordpress',
            //             'filePath' => 'ninja-forms/ninja-forms.php',
            //         ],
            //         // Add more required plugins as needed.
            //     ],
            // ],
            // Add more demo data as needed.
        ],
    ];
}
endif;
add_filter( 'sd/edi/importer/config', 'sd_edi_single_site_config' );
