<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Huda
 */

get_header();
?>
	<?php 
		// Before the content
		do_action('huda_content_before');

		// Page content
		do_action('huda_page');

		// After the content
		do_action('huda_content_after'); 
	?>
<?php
	get_footer();
?>
