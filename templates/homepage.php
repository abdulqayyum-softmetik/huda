<?php
/**
 * Template Name: Homepage
 *
 * @package Huda
 */

    get_header();
?>


<?php 
    // Header Default Content
    get_template_part( 'template-parts/components/home', 'featured' );  
?>


<?php 
    // Theme Footer
    get_footer();
?>