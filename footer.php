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
			if ( did_action( 'huda_footer' ) ) {

				// If the 'huda_footer' action has already been triggered, load a placeholder
				echo '<!-- Empty Footer Loaded: Footer hook already executed or no template present -->';
			
			} else {
			
				// Default logic for loading the footer
				do_action( 'huda_content_after' );
			
				// Attempt to load the default footer template
				if ( locate_template( 'template-parts/footers/footer-default.php', false, false ) ) {
					get_template_part( 'template-parts/footers/footer', 'default' );
				} else {
					// Provide fallback content if no footer template exists
					echo '<footer class="default-footer"><p>Default Footer Content</p></footer>';
				}
			
				do_action( 'huda_footer' );
				do_action( 'huda_footer_after' );
			}
		?>
	
	</div><!-- #page -->


</body>
</html>
