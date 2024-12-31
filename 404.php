<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Huda
 */


get_header();


?>

<?php
	// Check if the function exists
	if (function_exists('render_huda_404_template')) {
		// Render the 404 template and check if it succeeded
		if (!render_huda_404_template('404')) {
			do_action('huda_404'); // Trigger fallback if template rendering failed
		}
	} else {
		// Trigger fallback if the function doesn't exist
		do_action('huda_404');
	}
?>


<?php
	get_footer();



