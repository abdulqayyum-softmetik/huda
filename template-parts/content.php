<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Huda
 */

?>

<div class="<?php echo is_home() ? 'col-lg-4 col-md-6 col-12' : 'article-single'; ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="<?php echo is_home() ? 'thumbnail-wrapper' : 'position-relative'; ?>">
			<?php 
				if( is_singular() ) :
			?>
			<div class="hero-section">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<!-- Heading -->
						<?php 
							the_title( '<h1 class="post-title h1">', '</h1>' );
						?>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<!-- Paragraph -->
						<?php
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
						?>
					</div>
					
					<div class="col-lg-12 col-md-12 col-12">
						<!-- Search -->
						<div class="entry-meta d-flex align-items-center flex-wrap gap-3">
							<?php  
								huda_post_categories();
							?>
							<p class="post-read-time mb-0"><?php echo esc_html( huda_post_read_time( get_the_ID() ) ) ; ?></p>
							<?php 
								if( is_singular() ) :
									huda_posted_by();
								endif;
							?>
							<?php
								huda_posted_on();
							?>
						</div><!-- .entry-meta -->
					</div>
				</div>
			
	
			</div>
					
			<?php endif;?>
			
			<?php if ( true == get_theme_mod( 'huda_post_thumbnail_setting', 'on' ) ) : ?>
				<?php huda_post_thumbnail('medium'); ?>
			<?php else : ?>
				<?php // silence is golden ?>
			<?php endif; ?>
			
			<?php
			if ( 'post' === get_post_type() && !is_single() ) :
					?>
					<div class="entry-meta d-flex align-items-center gap-2">
						<?php  
							huda_post_categories();
						?>
					</div><!-- .entry-meta -->
			<?php endif; ?>
			<header class="entry-header <?php if ( has_post_thumbnail() == '' ) echo 'no-thumbnail'; ?>">
				<?php
				if ( is_singular() ) :
					// silence is golden
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;

				?>
			</header><!-- .entry-header -->
		</div>

		<div class="article-content">
			<div class="entry-content m-0">
				<?php
					if ( is_home() || is_category() || is_author() ) :
					// silence is golden
						
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
				if( is_singular() ) :
					?>
						<?php get_template_part( 'inc/post', 'navigation' ); ?>
					<?php
				?>
			<?php else : ?>
				<footer class="entry-footer">
					<div class="d-flex align-items-center justify-content-between">
						<div class="read-time">
							<?php huda_read_more(); ?>
						</div>
					</div>
				</footer><!-- .entry-footer -->
			<?php endif;?>
		</div>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>