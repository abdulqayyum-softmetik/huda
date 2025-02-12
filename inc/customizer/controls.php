<?php
/*
*======================
* Controls
*======================
*/


/*
* Logo Controls
*/
new \Kirki\Field\Dimension(
	[
		'settings'    => 'logo_default_dimension_setting',
		'label'       => esc_html__( 'Logo Default Width', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'title_tagline',
		'responsive' => true,
		'default'    => [
			'desktop' => '122px',
			'tablet'  => '100px',
			'mobile'  => '70px',
		],
		'output'     => [
			[
				'element'     => '.custom-logo',
				'property'    => 'width',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'logo_secondary_setting_url',
		'label'       => esc_html__( 'Logo Secondary', 'huda' ),
		'description' => esc_html__( 'Logo Secondary', 'huda' ),
		'section'     => 'title_tagline',
		'default'     => '',
	]
);

new \Kirki\Field\Dimension(
	[
		'settings'    => 'logo_secondary_dimension_setting',
		'label'       => esc_html__( 'Logo Secondary Width', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'title_tagline',
		'responsive' => true,
		'default'    => [
			'desktop' => '122px',
			'tablet'  => '100px',
			'mobile'  => '70px',
		],
		'output'     => [
			[
				'element'     => '.logo-secondary',
				'property'    => 'width',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
	]
);

/*
* Header Control
*/
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'huda_header_sticky',
		'label'       => esc_html__( 'Header Sticky', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'default'     => 'off',
		'tab' => 'general',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'huda' ),		
			'off' => esc_html__( 'Disable', 'huda' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'header_button_text_setting',
		'label'    => esc_html__( 'Button Text', 'huda' ),
		'section'  => 'huda_header_section',
		'default'  => esc_html__( 'Subscribe', 'huda' ),
		'priority' => 10,
	]
);


new \Kirki\Field\URL(
	[
		'settings' => 'header_button_url_setting',
		'label'    => esc_html__( 'Header button url', 'huda' ),
		'section'  => 'huda_header_section',
		'tab' => 'general',
		'default'  => '/',
		'priority' => 10,
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'header__container__setting',
		'label'       => esc_html__( 'Header Container Layout', 'huda' ),
		'description' => esc_html__( 'Select header container layout default is full width', 'huda' ),
		'section'     => 'huda_header_section',
		'default'     => 'container',
		'priority'    => 10,
		'tab' => 'general',
		'choices'     => [
			'container' => get_template_directory_uri() . '/assets/images/narrow-width.png',
			'container-fluid'   => get_template_directory_uri() . '/assets/images/full-width.png',
		],
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'   => 'huda_header_padding',
		'label'      => esc_html__( 'Header Padding', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'    => 'huda_header_section',
		'tab' => 'design',
		'responsive' => true,
		'default'     => [
            'desktop' => [
                'top'    => '16',
                'right'  => '0',
                'bottom' => '16',
                'left'   => '0',
            ],
            'tablet'  => [
                'top'    => '14',
                'right'  => '0',
                'bottom' => '14',
                'left'   => '0',
            ],
            'mobile'  => [
                'top'    => '12',
                'right'  => '22',
                'bottom' => '12',
                'left'   => '22',
            ],
        ],
		'transport'   => 'postMessage',
		'tooltip'     => esc_html__( 'Header Padding', 'huda' ),
		'choices'     => [
			'unit' => 'px',
		],
		'output' => [
			[
				'element'     => 'header.header-main',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'transport'   => 'auto',
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'huda_buy_button_color_bg',
		'label'       => __( 'Buy Now background color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'tab' => 'design',
		'default'     => '#E93315',
        'choices'     => [
            'alpha' => true,
        ],
		'output'      => [
			[
				'element' => 'header.header-main a.buy-button',
				'property' => 'background'
			],
		],
	]
);


new \Kirki\Field\Color(
	[
		'settings'    => 'header_background_color_setting_hex',
		'label'       => __( 'Header Background color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'default'     => '#1A0A03',
		'tab' => 'design',
		'output'      => [
			[
				'element' => 'header.header-main',
				'property' => 'background',
			],
		],
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'woocommerce_cart_count_bg_color',
		'label'       => __( 'Cart Count Background color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'default'     => '22374B',
		'tab' => 'design',
		'output'      => [
			[
				'element' => 'header.header-main .woo-cart-count',
				'property' => 'background',
			],
		],
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'header_icons_color_setting_hex',
		'label'       => __( 'Header Icons Color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'default'     => '#ffffff',
		'tab' => 'design',
		'output'      => [
			[
				'element' => 'header.header-main nav i',
			],
		],
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'header_dropdown_color_setting_hex',
		'label'       => __( 'Header Dropdown Color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'default'     => '#ffffff',
		'tab' => 'design',
		'output'      => [
			[
				'element' => 'ul.dropdown-menu',
				'property' => 'background',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'header_button_typography_setting',
		'label'       => esc_html__( 'Header button typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'tab' => 'design',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#FFFFFE',
			'font-size'       => '14px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
		],
		'output'      => [
			[
				'element' => 'header.header-main a.buy-button',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'header_site_title_typography_setting',
		'label'       => esc_html__( 'Site Title typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'tab' => 'design',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#ffffff',
			'font-size'       => '28px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'header.header-main nav ul li a.nav-link',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'header_typography_setting',
		'label'       => esc_html__( 'Header menu typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'tab' => 'design',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'header.header-main nav ul li a.nav-link',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'header_menu_typography_setting',
		'label'       => esc_html__( 'Header menu typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'tab' => 'design',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#ffffff',
			'font-size'       => '14px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'header.header-main nav ul li a.nav-link',
			],
		],
	]
);


new \Kirki\Field\Typography(
	[
		'settings'    => 'header_dropdown_typography_setting',
		'label'       => esc_html__( 'Header menu dropdown typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_header_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'tab' => 'design',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#0F0E17',
			'font-size'       => '14px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'header.header-main nav ul li ul.dropdown-menu li a',
			],
		],
	]
);


/*
* Footer Control
*/
new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'footer__container__setting',
		'label'       => esc_html__( 'Footer Container Layout', 'huda' ),
		'description' => esc_html__( 'Select Feader container layout default is full width', 'huda' ),
		'section'     => 'huda_footer_section',
		'default'     => 'container',
		'priority'    => 10,
		'tab' => 'general',
		'choices'     => [
			'container' => get_template_directory_uri() . '/assets/images/narrow-width.png',
			'container-fluid'   => get_template_directory_uri() . '/assets/images/full-width.png',
		],
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'   => 'huda_footer_padding',
		'label'      => esc_html__( 'Footer Padding', 'huda' ),
		'section'    => 'huda_footer_section',
		'tab' => 'design',
		'responsive' => true,
		'default'     => [
            'desktop' => [
                'top'    => '0',
                'right'  => '18',
                'bottom' => '0',
                'left'   => '18',
            ],
            'tablet'  => [
                'top'    => '0',
                'right'  => '18',
                'bottom' => '0',
                'left'   => '18',
            ],
            'mobile'  => [
              'top'    => '20',
                'right'  => '18',
                'bottom' => '10',
                'left'   => '18',
            ],
        ],
		'transport'   => 'postMessage',
		'tooltip'     => esc_html__( 'Footer Padding', 'huda' ),
		'choices'     => [
			'unit' => 'px',
		],
		'output' => [
			[
				'element'     => 'footer.footer-main',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
				'suffix'   => '!important', // Adds !important to the generated CSS.
			],
		],
		'transport'   => 'auto',
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'facebook_url_setting',
		'label'    => esc_html__( 'Facebook Url', 'huda' ),
		'section'  => 'huda_footer_section',
		'default'  => '/',
		'priority' => 10,
		'tab' => 'general',
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'twitter_url_setting',
		'label'    => esc_html__( 'Twitter Url', 'huda' ),
		'section'  => 'huda_footer_section',
		'default'  => '/',
		'priority' => 10,
		'tab' => 'general',
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'youtube_url_setting',
		'label'    => esc_html__( 'Youtube Url', 'huda' ),
		'section'  => 'huda_footer_section',
		'default'  => '/',
		'priority' => 10,
		'tab' => 'general',
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'whatsapp_url_setting',
		'label'    => esc_html__( 'Whatsapp Url', 'huda' ),
		'section'  => 'huda_footer_section',
		'default'  => '/',
		'priority' => 10,
		'tab' => 'general',
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'footer_background_color_setting_hex',
		'label'       => __( 'Footer Background color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_footer_section',
		'default'     => '#1A0A03',
		'tab' => 'design',
		'output'      => [
			[
				'element' => 'footer.footer-main',
				'property' => 'background',
			],
		],
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'footer_social_color_setting_hex',
		'label'       => __( 'Footer Social Media Icons color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_footer_section',
		'default'     => '#4E5666',
		'tab' => 'design',
		'output'      => [
			[
				'element' => 'footer a i, footer i',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'footer_widget_title_typography_setting',
		'label'       => esc_html__( 'Footer widget title typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_footer_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'tab' => 'design',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => '500',
			'font-style'      => 'normal',
			'color'           => '#05011C',
			'font-size'       => '24px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'capitalize',
			'text-decoration' => 'none',
		],
		'output'  => [
			[
				'element' => '.wp-block-heading, h2.widget-title',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'footer_widget_links_typography_setting',
		'label'       => esc_html__( 'Footer widget links typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_footer_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'tab' => 'design',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => '300',
			'font-style'      => 'normal',
			'color'           => '#05011C',
			'font-size'       => '16px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'  => [
			[
				'element' => 'footer.footer-main .footer-content a, footer.footer-main span',
			],
		],
	]
);

/*
* Typography
*/
new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting',
		'label'       => esc_html__( 'Theme Base Font', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_topography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'body',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting_heading_h1',
		'label'       => esc_html__( 'H1 FONT', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_topography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => '500',
			'font-style'      => 'normal',
			'font-size'       => '40px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'h1',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting_heading_h2',
		'label'       => esc_html__( 'H2 FONT', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_topography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => '500',
			'font-style'      => 'normal',
			'font-size'       => '32px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'h2',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting_heading_h3',
		'label'       => esc_html__( 'H3 FONT', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_topography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => '500',
			'font-style'      => 'normal',
			'font-size'       => '28px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'h3',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting_heading_h4',
		'label'       => esc_html__( 'H4 FONT', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_topography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '24px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'h4',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting_heading_h5',
		'label'       => esc_html__( 'H5 FONT', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_topography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => '500',
			'font-style'      => 'normal',
			'font-size'       => '20px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'h5',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting_heading_h6',
		'label'       => esc_html__( 'H6 FONT', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_topography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => '500',
			'font-style'      => 'normal',
			'font-size'       => '16px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'h6',
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting_paragraph',
		'label'       => esc_html__( 'PARAGRAPH FONT', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_topography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Instrument Sans',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '16px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => 'body article p',
			],
		],
	]
);

/*
* RTL Control
*/
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'huda_rtl_switch_setting',
		'label'       => esc_html__( 'RTL VESRION', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_rtl_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'huda' ),		
			'off' => esc_html__( 'Disable', 'huda' ),
		],
	]
);


/*
* Blog Control
*/
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'huda_social_share_setting',
		'label'       => esc_html__( 'Display Social Share', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_blog_layouts_section',
		'default'     => 'on',
		'tab' => 'general',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'huda' ),		
			'off' => esc_html__( 'Disable', 'huda' ),
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'huda_related_post_setting',
		'label'       => esc_html__( 'Display Related Posts', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_blog_layouts_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'huda' ),		
			'off' => esc_html__( 'Disable', 'huda' ),
		],
	]
);

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'blog__container__setting',
		'label'       => esc_html__( 'Container Layout', 'huda' ),
		'description' => esc_html__( 'Select single page container layout default is narrow width', 'huda' ),
		'section'     => 'huda_blog_layouts_section',
		'default'     => 'container',
		'priority'    => 10,
		'choices'     => [
			'container' => get_template_directory_uri() . '/assets/images/narrow-width.png',
			'container-fluid'   => get_template_directory_uri() . '/assets/images/full-width.png',
		],
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'huda_post_thumbnail_setting',
		'label'       => esc_html__( 'Display Post Thumbnail', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_blog_post_card_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'huda' ),		
			'off' => esc_html__( 'Disable', 'huda' ),
		],
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'   => 'huda_blog_article_card_padding',
		'label'      => esc_html__( 'Article Card Padding', 'huda' ),
		'section'    => 'huda_blog_post_card_section',
		'tab' => 'design',
		'responsive' => true,
		'default'     => [
            'desktop' => [
                'top'    => '12',
                'right'  => '12',
                'bottom' => '12',
                'left'   => '12',
            ],
            'tablet'  => [
                'top'    => '12',
                'right'  => '12',
                'bottom' => '12',
                'left'   => '12',
            ],
            'mobile'  => [
                'top'    => '12',
                'right'  => '12',
                'bottom' => '12',
                'left'   => '12',
            ],
        ],
		'transport'   => 'postMessage',
		'tooltip'     => esc_html__( 'Article Card Padding', 'huda' ),
		'choices'     => [
			'unit' => 'px',
		],
		'output' => [
			[
				'element'     => '.blog article, .archive article, .category article, .search article, .related-posts article',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'transport'   => 'auto',
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'blog_card_bg_color',
		'label'       => __( 'Article card background color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_blog_post_card_section',
		'default'     => '#FFFFFE',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.blog article, .archive article, .category article, .search article, .related-posts article',
				'property' => 'background-color',
			)
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'blog__card_read_more_bg_color',
		'label'       => __( 'Read More background color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_blog_post_card_section',
		'default'     => '#0F0E17',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.btn.btn-read-more-arrow',
				'property' => 'background-color',
			)
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'blog__card_read_more_bg_color_hover',
		'label'       => __( 'Read More background color hover', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_blog_post_card_section',
		'default'     => '#5081FF',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.btn.btn-read-more-arrow:hover',
				'property' => 'background-color',
			)
		),
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'article_titile_typography_setting',
		'label'       => esc_html__( 'Article Title Typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_blog_post_card_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => '500',
			'font-style'      => 'normal',
			'color'           => '#0F0E17',
			'font-size'       => '24px',
			'line-height'     => 'normal',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
		],
		'output'      => [
			[
				'element' => '.blog article header.entry-header h3.entry-title',
			],
		],
	]
);


new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'blog__sidebar_layout__setting',
		'label'       => esc_html__( 'Sidebar Layout', 'huda' ),
		'description' => esc_html__( 'Select sidebar layout default is sidebar', 'huda' ),
		'section'     => 'huda_blog_layouts_section',
		'default'     => 'no-sidebar',
		'priority'    => 10,
		'choices'     => [
			'no-sidebar' => get_template_directory_uri() . '/assets/images/no-sidebar.png',
			'sidebar'   => get_template_directory_uri() . '/assets/images/sidebar.png',
		],
	]
);


/*
* Container Control
*/
new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'page__container__setting',
		'label'       => esc_html__( 'Container Layout Page', 'huda' ),
		'description' => esc_html__( 'Select page container layout default is narrow width', 'huda' ),
		'section'     => 'huda_site_container_section',
		'default'     => 'container',
		'priority'    => 10,
		'tab'         => 'general',
		'choices'     => [
			'container' => get_template_directory_uri() . '/assets/images/narrow-width.png',
			'container-fluid'   => get_template_directory_uri() . '/assets/images/full-width.png',
		],
	]
);

new \Kirki\Pro\Field\Padding(
	[
		'settings'   => 'huda_main_padding',
		'label'      => esc_html__( 'Main Container Padding', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'    => 'huda_site_container_section',
		'tab' => 'design',
		'responsive' => true,
		'default'     => [
            'desktop' => [
                'top'    => '1.8',
                'right'  => '0',
                'bottom' => '1.8',
                'left'   => '0',
            ],
            'tablet'  => [
                'top'    => '30',
                'right'  => '0',
                'bottom' => '30',
                'left'   => '0',
            ],
            'mobile'  => [
                'top'    => '3',
                'right'  => '0.4',
                'bottom' => '3',
                'left'   => '0.4',
            ],
        ],
		'transport'   => 'postMessage',
		'tooltip'     => esc_html__( 'Main Container Padding', 'huda' ),
		'choices'     => [
			'unit' => 'em',
		],
		'output' => [
			[
				'element'     => 'body .site main, .hea-theme-builder-wrapper',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
		'transport'   => 'auto',
	]
);


/*
* Pages Control
*/
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'huda_page_title_setting',
		'label'       => esc_html__( 'Page Title', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_page_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Show Title', 'huda' ),
			'off' => esc_html__( 'Hide Title', 'huda' ),
		],
	]
);

/*
* Offcanvas Control
*/
new \Kirki\Field\Color(
	[
		'settings'    => 'huda_Offcanvas_social_icons_color',
		'label'       => __( 'social icons color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_Offcanvas_section',
		'tab' => 'design',
		'default'     => '#0F0E17',
        'choices'     => [
            'alpha' => true,
        ],
		'output'      => [
			[
				'element' => '.offcanvas-footer i',
				'suffix'   => '!important', // Adds !important to the generated CSS.
			],
		],
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'huda_Offcanvas_menu_active_color',
		'label'       => __( 'Offcanvas Active color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_Offcanvas_section',
		'tab' => 'design',
		'default'     => '#22374B',
        'choices'     => [
            'alpha' => true,
        ],
		'output'      => [
			[
				'element' => '.offcanvas ul li a.nav-link.active',
				'suffix'   => '!important', // Adds !important to the generated CSS.
			],
		],
	]
);

new \Kirki\Field\Typography(
	[
		'settings'    => 'Offcanvas_menu_typography_setting',
		'label'       => esc_html__( 'Offcanvas Menu Typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_Offcanvas_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Space Grotesk',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#0F0E17',
			'font-size'       => '14px',
			'line-height'     => 'initial',
			'letter-spacing'  => '0',
			'text-transform'  => 'uppercase',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
		'output'      => [
			[
				'element' => '.offcanvas-body ul li a.nav-link',
				'suffix'   => '!important', // Adds !important to the generated CSS.
			],
		],
	]
);

/*
* Wooocommerce product card border radius
*/

new \Kirki\Field\Dimension(
	[
		'settings'    => 'huda_wooocommerce_product_card_border_radius',
		'label'       => esc_html__( 'Product Card Border Radius', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => '0px',
		'tab' => 'design',
		'output'      => [
			[
				'element'  => '.huda-site-main ul.products li.product',
				'property' => 'border-radius',
			],
		],
	]
);

/*
* Wooocommerce product card background color
*/
new \Kirki\Field\Color(
	[
		'settings'    => 'huda_wooocommerce_product_card_background',
		'label'       => __( 'Product Card Background Color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => '#F7F7F7',
		'output' => array(
			array(
				'element'  => '.huda-site-main ul.products li.product',
				'property' => 'background-color',
			)
		),
		'choices'     => [
			'alpha' => true,
		],
	]
);