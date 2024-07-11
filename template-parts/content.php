<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Huda
 */

?>

<div class="<?php echo is_home() ? 'col-md-3' : 'col-md-12'; ?>  <?php echo is_sticky() ? 'col-md-12' : 'col-md-3' ?> ">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="<?php echo is_home() ? 'thumbnail-wrapper' : ''; ?>">
			<?php huda_post_thumbnail('medium'); ?>
		</div>
		<div>
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						huda_posted_on();
						huda_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php

				if ( is_home() ) :
					the_excerpt(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'huda' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
				else :
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'huda' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);
				endif;

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'huda' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->

			<?php 
				if ( is_sticky() && is_home() ) :
					?>
						<a href="<?php the_permalink() ?>" class="btn btn-read-more">Read Article</a>
					<?php
				else :
					
				endif;
			?>

			<footer class="entry-footer">
				
			</footer><!-- .entry-footer -->
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>

