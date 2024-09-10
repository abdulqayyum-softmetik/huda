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

	// Single page layout
	do_action('huda_single_page_layout');

	// After the content
	do_action('huda_content_after'); 
?>

<?php
get_footer();
