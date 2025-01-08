<?php
/**
 * The template for displaying all category posts
 *
 * @package Huda
 */
 
get_header(); 
?>


<?php 
	// Render the single template
	$current_category = get_queried_object();

	if ($current_category && isset($current_category->slug)) {
		// Pass the category slug to render_category_template
		if (!render_category_template($current_category->slug)) {
			// Fallback if no custom template is found
			do_action('huda_category');
		}
	} else {
		// Fallback if no category context is available
		do_action('huda_category');
	}

    get_footer(); 
?>
