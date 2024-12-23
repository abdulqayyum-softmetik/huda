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
		if (is_404()) {
			render_footer_template('404');
		} elseif (is_front_page()) {
			render_footer_template('front_page');
		} elseif (is_home()) {
			render_footer_template('blog');
		} elseif (is_archive()) {
			render_footer_template('all_archives');
		} elseif (is_singular()) {
			render_footer_template('all_singulars');
		} elseif (is_search()) {
			render_footer_template('search');
		} else {
			render_footer_template('entire');
		}

		?>
	
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
