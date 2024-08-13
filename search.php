<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Huda
 */

get_header();
?>

	<main id="primary" class="huda-site-main">
		<div class="container">
			<?php if ( have_posts() ) : ?>

			<header class="page-header pb-4">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'huda' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
				?>
				<?php endwhile; ?>
					<?php the_posts_navigation(); ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
