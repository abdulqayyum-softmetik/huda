<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Huda
 */

?>

<?php 
	// Check if Kirki and get_theme_mod() functions exist
    if ( function_exists('get_theme_mod') ) {
		// Sidebar layout variable
		$sidebar_layout = get_theme_mod('blog__sidebar_layout__setting', 'sidebar'); 
    }
?>

<?php
	// Display content layout
	if($sidebar_layout == "sidebar") :
		get_template_part( 'template-parts/content', 'sidebar' );
	else:
		get_template_part( 'template-parts/content', 'wide' );
	endif;
?>
