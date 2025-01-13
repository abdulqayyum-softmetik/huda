<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 * @package Huda
 */	
	// Right to left function
	$rtl_enabled = huda_is_rtl_enabled();
?>

<!doctype html>
	<html <?php language_attributes(); ?> dir="<?php echo esc_attr( $rtl_enabled ? 'rtl' : 'ltr' ); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); 'huda-theme' ?> data-bs-theme="light">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'huda' ); ?></a>

	<?php
	
	    do_action('huda_header_before');

        get_template_part('template-parts/headers/header', 'default');
		
        do_action('huda_header_after');

	?>

