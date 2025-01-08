<?php
/**
 * The template for displaying all author posts
 *
 * @package Huda
 */
 
get_header(); ?>


<?php

    // Render the single template
    if (function_exists('render_author_template')) {
        render_author_template('author');
    } 

?>


<?php
    get_footer();
?>