<?php
/*
*======================
* Sections
*======================
*/

/* 
* Huda Global Options Section 
*/
new \Kirki\Section(
	'huda_topography_section',
	[
		'title'       => esc_html__( 'Typography', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'panel'       => 'huda_global_options',
		'priority'    => 160,
	]
);

/* 
* Huda Global Colors Section 
*/
new \Kirki\Section(
	'huda_colors_section',
	[
		'title'       => esc_html__( 'Colors', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'panel'       => 'huda_global_options',
		'priority'    => 160,
	]
);

/* 
* Huda RTL Layout Section 
*/
new \Kirki\Section(
	'huda_rtl_section',
	[
		'title'       => esc_html__( 'Rtl Version', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'panel'       => 'huda_global_options',
		'priority'    => 160,
	]
);

/* 
* Huda Buttons Section
*/
new \Kirki\Section(
	'huda_buttons_section',
	[
		'title' => esc_html__( 'Buttons', 'huda' ),
		'panel' => 'huda_global_options',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'huda' ),
			],
			'design'  => [
				'label' => esc_html__( 'Colors', 'huda' ),
			],
		],
	]
);

/* 
* Huda Blog Layout Section
*/
new \Kirki\Section(
	'huda_blog_layouts_section',
	[
		'title' => esc_html__( 'Single Post', 'huda' ),
		'panel' => 'huda_blog_options',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'GENERAL', 'huda' ),
			],
			'design'  => [
				'label' => esc_html__( 'DESIGN', 'huda' ),
			],
		],
	]
);