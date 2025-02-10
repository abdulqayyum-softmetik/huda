<?php
/*
*======================
* Sections
*======================
*/

/* 
* Huda Global Site Container Section 
*/
new \Kirki\Section(
	'huda_site_container_section',
	[
		'title'       => esc_html__( 'Site Container', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'panel'       => 'huda_global_options',
		'priority'    => 160,
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'huda' ),
			],
			'design'  => [
				'label' => esc_html__( 'Design', 'huda' ),
			],
		],
	]
);

/* 
* Huda Header Layout Section
*/
new \Kirki\Section(
	'huda_header_section',
	[
		'title' => esc_html__( 'Header Options', 'huda' ),
		'panel' => 'huda_header_options',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'huda' ),
			],
			'design'  => [
				'label' => esc_html__( 'Design', 'huda' ),
			],
		],
	]
);


/* 
* Huda Footer Layout Section
*/
new \Kirki\Section(
	'huda_footer_section',
	[
		'title' => esc_html__( 'Footer Options', 'huda' ),
		'panel' => 'huda_footer_options',
		'tabs'  => [
			'general' => [
				'label' => esc_html__( 'General', 'huda' ),
			],
			'design'  => [
				'label' => esc_html__( 'Design', 'huda' ),
			],
		],
	]
);

/* 
* Huda Global Typography Section 
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
				'label' => esc_html__( 'Design', 'huda' ),
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
	]
);

new \Kirki\Section(
	'huda_blog_post_card_section',
	[
		'title' => esc_html__( 'Article Card', 'huda' ),
		'panel' => 'huda_blog_options',
	]
);


/* 
* Huda Page Section
*/
new \Kirki\Section(
	'huda_page_section',
	[
		'title' => esc_html__( 'Page Title', 'huda' ),
		'panel' => 'huda_page_options',
	]
);

/*
* Offcanvas section
*/
new \Kirki\Section(
	'huda_Offcanvas_section',
	[
		'title'       => esc_html__( 'Offcanvas Settings', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
		'panel'       => 'huda_global_options',
		'priority'    => 160,
	]
);

