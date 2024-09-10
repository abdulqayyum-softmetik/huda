<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Huda
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php	
	// Sidebar content before
	do_action( 'huda_sidebars_before' );

	// Sidebar content
	do_action('huda_sidebar');

	// Sidebar content after
	do_action( 'huda_sidebars_after' );
?>

