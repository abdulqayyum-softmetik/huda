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
			// Check if the custom hook 'render_huda_footer_with_action_hook' has callbacks attached
			if ( has_action( 'huda_footer', 'render_huda_footer_with_action_hook' ) ) {

				// Load an empty footer template
				echo '<!-- Empty Footer Loaded -->';
				
			} else {

				// Default logic for loading the footer
				do_action('huda_content_after');

				get_template_part( 'template-parts/footers/footer', 'default' );
				
				do_action('huda_footer_after');
			}
		?>
	
	</div><!-- #page -->


</body>
</html>
