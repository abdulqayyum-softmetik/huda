<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function huda_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'huda' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'huda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Branding Widget', 'huda' ),
			'id'            => 'footer-widget-1',
			'description'   => esc_html__( 'Footer Logo & Description.', 'huda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Navigation Widget 1', 'huda' ),
			'id'            => 'footer-widget-2',
			'description'   => esc_html__( '', 'huda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Navigation Widget 2', 'huda' ),
			'id'            => 'footer-widget-3',
			'description'   => esc_html__( '', 'huda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Navigation Widget 3', 'huda' ),
			'id'            => 'footer-widget-4',
			'description'   => esc_html__( '', 'huda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Navigation Widget 4', 'huda' ),
			'id'            => 'footer-widget-5',
			'description'   => esc_html__( '', 'huda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Copyright Widget', 'huda' ),
			'id'            => 'footer-widget-6',
			'description'   => esc_html__( '', 'huda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Socials Widget', 'huda' ),
			'id'            => 'footer-widget-7',
			'description'   => esc_html__( '', 'huda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Newsletter Widget', 'huda' ),
			'id'            => 'footer-widget-8',
			'description'   => esc_html__( '', 'huda' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'huda_widgets_init' );