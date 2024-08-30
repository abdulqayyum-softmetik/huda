<?php
/*
*======================
* Register Panels
*======================
*/

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