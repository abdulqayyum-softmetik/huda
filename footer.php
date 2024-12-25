<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Huda
 */

?>


		<?php
		

		do_action('huda_content_after'); 
		get_template_part( 'template-parts/footers/footer', 'default' ); 
		do_action('huda_footer_after'); 

		?>
	
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
