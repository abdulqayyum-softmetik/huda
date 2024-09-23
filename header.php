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
$rtl_switch = get_theme_mod( 'huda_rtl_switch_setting', 'off' ); // Set default to 'off' if no option exists
?>
<!doctype html>
	<html <?php language_attributes(); ?> dir="<?php echo $rtl_switch === 'on' ? 'rtl' : 'ltr'; ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-bs-theme="light">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'huda' ); ?></a>

	<?php 
		// Before the header
		do_action('huda_header_before');
  	?>

	<?php 
		// Header Default Content
		get_template_part( 'template-parts/headers/header', 'default' );  
	?>

	<?php 
		// After the header
		do_action('huda_header_after'); 
  	?>
