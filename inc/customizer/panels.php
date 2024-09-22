<?php
/*
*======================
* Register Panels
*======================
*/

/* Header Options Panel */
new \Kirki\Panel(
	'huda_header_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Header', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
	]
);

/* Header Options Panel */
new \Kirki\Panel(
	'huda_footer_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Footer', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
	]
);

/* Global Options Panel */
new \Kirki\Panel(
	'huda_global_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Global Options', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
	]
);

/* Blog Options Panel */
new \Kirki\Panel(
	'huda_blog_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Blog', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
	]
);

/* Page Options Panel */
new \Kirki\Panel(
	'huda_page_options',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Page', 'huda' ),
		'description' => esc_html__( '', 'huda' ),
	]
);