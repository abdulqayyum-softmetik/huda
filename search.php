<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Huda
 */

get_header();
?>
	<?php
		// Huda search
		do_action('huda_search');
	?>

<?php
	get_footer();
?>
