<?php
function prefix_demo_import_lists(){
	$demo_lists = array(
		'demo1' =>array(
			'title' => __( 'Main Demo', 'huda' ),/*Title*/
			'is_pro' => false,/*Is Premium*/
			'type' => 'gutentor',/*Optional eg gutentor, elementor or other page builders or type*/
			'author' => __( 'wphuda', 'huda' ),/*Author Name*/
			'keywords' => array( 'car', 'multipurpose' ),/*Search keyword*/
			'categories' => array( 'car','multipurpose' ),/*Categories*/
            'template_url' => array(
                'content' => get_template_directory_uri() . '/assets/demo/main/content.json',/*Full URL Path to content.json*/
                'options' => get_template_directory_uri() . '/assets/demo/main/options.json',/*Full URL Path to options.json*/
                'widgets' => get_template_directory_uri() . '/assets/demo/main/widgets.json'/*Full URL Path to widgets.json*/
            ),
			'screenshot_url' => get_template_directory_uri() . '/assets/demo/main/demo-thumbnail.png',/*Full URL Path to demo screenshot image*/
			'demo_url' => 'https://www.softmetik.com/',/*Full URL Path to Live Demo*/
			/* Recommended plugin for this demo */
			'plugins' => array(
				array(
					'name'      => __( 'Gutentor', 'huda' ),
					'slug'      => 'gutentor',
				),
			)
		),
        /*and so on ............................*/
	);
	return $demo_lists;
}
add_filter('advanced_import_demo_lists','prefix_demo_import_lists');