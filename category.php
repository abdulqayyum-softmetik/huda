<?php
/**
 * The template for displaying all category posts
 *
 * @package Huda
 */
 
get_header(); 
?>


<?php 
	// Category content
	do_action('huda_category'); 
?>

<?php 
    get_footer(); 
?>
