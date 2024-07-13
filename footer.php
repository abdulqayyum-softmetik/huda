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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
			<?php echo do_shortcode('[huda_copyright]'); ?>

			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s by %2$s.', 'huda' ), 'Huda Wordpress Theme', '<a href="https://softmetik.com/wphuda">softmetik</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
