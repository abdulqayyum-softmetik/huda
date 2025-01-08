<?php
/**
 * The template for displaying all tags posts
 *
 * @package Huda
 */
 
get_header(); 
?>

<?php
     if (function_exists('render_tag_template')) {
        render_tag_template('tag');
    } else {
		do_action('huda_tag'); 
    }
?>

<?php 
    get_footer(); 
?>
