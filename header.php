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
	$rtl_mode_switch = get_theme_mod( 'huda_rtl_switch_setting', 'off' ); // Set default to 'off' if no option exists
?>

<!doctype html>
	<html <?php language_attributes(); ?> dir="<?php echo esc_attr( $rtl_mode_switch ? 'rtl' : 'ltr' ); ?>">
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
	if (is_page()) {
		render_header_template('specific'); // Pass 'specific' as context
	}elseif (is_404()) {
		render_header_template('404');
	} elseif (is_front_page()) {
		render_header_template('front_page');
	} elseif (is_home()) {
		render_header_template('blog');
	} elseif (is_archive()) {
		render_header_template('all_archives');
	} elseif (is_singular()) {
		render_header_template('all_singulars');
	} elseif (is_search()) {
		render_header_template('search');
	} else {
		render_header_template('entire');
	}

	?>

