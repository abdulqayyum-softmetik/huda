<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Huda
 */
?>
<!doctype html>
	<?php if ( true == get_theme_mod( 'huda_rtl_switch_setting', 'on' ) ) : ?>
		<html <?php language_attributes(); ?> dir="rtl">
	<?php else : ?>
		<html <?php language_attributes(); ?> dir="ltr">
	<?php endif; ?>
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
		get_template_part( 'template-parts/headers/default', 'header' );  
	?>

	<?php 
		// After the header
		do_action('huda_header_after'); 
  	?>
