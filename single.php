<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Huda
 */

get_header();
?>

<?php 
	// Before the content
	do_action('huda_content_before');

	if (function_exists('render_single_template')) {
		$post_type = get_post_type();
		render_single_template($post_type); // No need for additional checks
	} else {
		do_action('huda_single_page_layout'); 
	}

	do_action('huda_content_after'); 
	
?>

<?php
	get_footer();
?>
