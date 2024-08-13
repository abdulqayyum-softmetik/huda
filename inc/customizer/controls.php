<?php
/*
*======================
* Controls
*======================
*/


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
			'color'           => 'currentColor',
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
			'color'           => 'currentColor',
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
			'color'           => 'currentColor',
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
			'color'           => 'currentColor',
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
			'color'           => 'currentColor',
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
			'color'           => 'currentColor',
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
			'color'           => 'currentColor',
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
			'color'           => 'currentColor',
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
		'label'       => __( 'Sticky Post Background Color', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'section'     => 'huda_colors_section',
		'default'     => 'rgba(144, 149, 252, 0.14)',
		'output' => array(
			array(
				'element'  => '.home article.sticky',
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
		'description' => esc_html__( 'Right To initial version', 'huda' ),
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
new \Kirki\Pro\Field\Padding(
	[
		'settings'    => 'huda_buttons_padding',
		'label'       => esc_html__( 'Buttons Padding', 'huda' ),
		'description' => 'Example description.',
		'section'     => 'huda_buttons_section',
		'tab'        => 'general',
		'default'     => [
			'top'    => 2,
			'bottom' => 2,
		],
		'transport'   => 'postMessage',
		'tooltip'     => esc_html__( 'Buttons Padding', 'Huda' ),
		'choices'     => [
			'unit' => 'px',
		],
		'output'      => [
			[
				'element' => '.btn, .button, button',
			],
		],
	]
);

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
			'color'           => 'inherit',
			'font-size'       => '14px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'initial',
		],
		'output'      => [
			[
				'element' => '.btn, .button, button',
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

