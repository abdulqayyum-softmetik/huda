<?php
/**
* Template Name: Home
*
* @package Huda
* @since 1.0
*
*/

get_header();


// Featured Section
get_template_part( 'template-parts/sections/featured', 'section' );

// Featured Category Section
get_template_part( 'template-parts/sections/featured', 'category' );


get_footer();

?>