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
		'description' => esc_html__( 'Logo Secondary - Light Logo', 'huda' ),
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
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
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
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
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
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
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
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
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
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
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
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
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
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
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
		'settings'    => 'typography_setting_heading_h6',
		'label'       => esc_html__( 'PARAGRAPH FONT', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_topography_section',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
		],
		'output'      => [
			[
				'element' => 'p',
			],
		],
	]
);

/*
* Colors
*/
new \Kirki\Field\Color(
	[
		'settings'    => 'huda_link_color',
		'label'       => __( 'Links Color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_colors_section',
		'default'     => '#6168FC',
		'output' => array(
			array(
				'element'  => 'a',
				'property' => 'color',
			)
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'huda_headings_color',
		'label'       => __( 'Heading Colors (H1-H6)', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_colors_section',
		'default'     => '#0f0e17',
		'output' => array(
			array(
				'element'  => 'h1,h2,h3,h4,h5,h6',
				'property' => 'color',
			)
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'huda_body_text_color',
		'label'       => __( 'Body Text Color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_colors_section',
		'default'     => '#0f0e17',
		'output' => array(
			array(
				'element'  => 'p',
				'property' => 'color',
			)
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'huda_sticky_post_color_setting_rgba',
		'label'       => __( 'Body background color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_colors_section',
		'default'     => '#F4F4F4',
		'output' => array(
			array(
				'element'  => 'body',
				'property' => 'background-color',
			)
		),
		'choices'     => [
			'alpha' => true,
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
* Buttons Control
*/
new \Kirki\Field\Typography(
	[
		'settings'    => 'huda_buttons_typography_setting',
		'label'       => esc_html__( 'Buttons Typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_buttons_section',
		'tab'        => 'general',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Poppins',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
		],
		'output'      => [
			[
				'element' => 'button, .button, .button, .submit, .wp-block-search__button',
			],
		],
	]
);

new \Kirki\Field\Dimension(
	[
		'settings'   => 'huda_buttons_padding_setting_top',
		'label'      => __( 'Padding Top', 'huda' ),
		'section'    => 'huda_buttons_section',
		'responsive' => true,
		'tab'        => 'design',
		'default'    => [
			'desktop' => '20px',
			'tablet'  => '15px',
			'mobile'  => '10px',
		],
		'output'     => [
			[
				'element'     => 'button, .button, .button, .submit, .wp-block-search__button',
				'property'    => 'padding-top',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
	]
);

new \Kirki\Field\Dimension(
	[
		'settings'   => 'huda_buttons_padding_setting_right',
		'label'      => __( 'Padding Right', 'huda' ),
		'section'    => 'huda_buttons_section',
		'responsive' => true,
		'tab'        => 'design',
		'default'    => [
			'desktop' => '20px',
			'tablet'  => '15px',
			'mobile'  => '10px',
		],
		'output'     => [
			[
				'element'     => 'button, .button, .button, .submit, .wp-block-search__button',
				'property'    => 'padding-right',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
	]
);

new \Kirki\Field\Dimension(
	[
		'settings'   => 'huda_buttons_padding_setting_bottom',
		'label'      => __( 'Padding Bottom', 'huda' ),
		'section'    => 'huda_buttons_section',
		'responsive' => true,
		'tab'        => 'design',
		'default'    => [
			'desktop' => '20px',
			'tablet'  => '15px',
			'mobile'  => '10px',
		],
		'output'     => [
			[
				'element'     => 'button, .button, .submit, .wp-block-search__button',
				'property'    => 'padding-bottom',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
	]
);

new \Kirki\Field\Dimension(
	[
		'settings'   => 'huda_buttons_padding_setting_left',
		'label'      => __( 'Padding Left', 'huda' ),
		'section'    => 'huda_buttons_section',
		'responsive' => true,
		'tab'        => 'design',
		'default'    => [
			'desktop' => '20px',
			'tablet'  => '15px',
			'mobile'  => '10px',
		],
		'output'     => [
			[
				'element'     => 'button, .button, .submit, .wp-block-search__button',
				'property'    => 'padding-left',
				'media_query' => [
					'desktop' => '@media (min-width: 1024px)',
					'tablet'  => '@media (min-width: 768px) and (max-width: 1023px)',
					'mobile'  => '@media (max-width: 767px)',
				],
			],
		],
	]
);


new \Kirki\Field\Color(
	[
		'settings'    => 'huda_buttons_text_color',
		'label'       => __( 'Button Text Color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_buttons_section',
		'tab'         => 'design',
		'default'     => 'inherit',
		'output' => array(
			array(
				'element'  => '.btn, .button, button',
				'property' => 'color',
			)
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'huda_buttons_background_color_setting_rgba',
		'label'       => __( 'Buttons Background Color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_buttons_section',
		'tab'         => 'design',
		'default'     => '#6168FC',
		'output' => array(
			array(
				'element'  => '.btn, .button, button',
				'property' => 'background-color',
			)
		),
		'choices'     => [
			'alpha' => true,
		],
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'huda_buttons_border_color',
		'label'       => __( 'Buttons Border Color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_buttons_section',
		'tab'         => 'design',
		'default'     => '#6168FC',
		'output' => array(
			array(
				'element'  => '.btn, .button, button',
				'property' => 'border-color',
			)
		),
	]
);

/*
* Blog Control
*/
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

new \Kirki\Field\Radio_Image(
	[
		'settings'    => 'blog__sidebar_layout__setting',
		'label'       => esc_html__( 'Sidebar Layout', 'huda' ),
		'description' => esc_html__( 'Select sidebar layout default is sidebar', 'huda' ),
		'section'     => 'huda_blog_layouts_section',
		'default'     => 'sidebar',
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
		'choices'     => [
			'container' => get_template_directory_uri() . '/assets/images/narrow-width.png',
			'container-fluid'   => get_template_directory_uri() . '/assets/images/full-width.png',
		],
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