<?php
/**
 * 
 * Template part for displaying posts full width
 *
 */
print_r(is_home())
?>

<div class="<?php echo is_home() ? 'col-lg-4 col-md-6 col-12' : 'col-lg-12 col-md-12 col-12'; ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="<?php echo is_home() ? 'thumbnail-wrapper' : 'position-relative'; ?>">
			<?php huda_post_thumbnail('medium'); ?>
			<header class="entry-header <?php if ( has_post_thumbnail() == '' ) echo 'no-thumbnail'; ?>">
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
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
		</div>

		<div class="col-lg-12">
			<div class="article-content">
				<?php 
					if( is_singular() ) :
				?>
				<div class="d-flex align-items-center justify-content-start gap-3 mb-2">
					<p class="post-read-time mb-0"><?php echo esc_html( huda_post_read_time( get_the_ID() ) ) ; ?></p>
					<?php 
						if( is_singular() ):
							huda_posted_by();
						endif;
					?>
				</div>
				<?php endif;?>
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
				<?php if( is_singular() ) : ?>
					<div class="social-share-box">
						<h3 class="h3">Like what you see? <br> Share with your friends & family</h3>
						<?php 
							esc_html( huda_social_share() );
						?>
					</div> 
				<?php endif; ?>
					<?php 
						if( is_singular() ) :
						get_template_part( 'inc/post', 'navigation' );
					?>
					<?php else : ?>
					<footer class="entry-footer">
						<div class="post-read-time d-flex align-items-center justify-content-between">
							<div class="read-time">
								<?php echo esc_html( huda_post_read_time( get_the_ID() ) ) ; ?>
							</div>
							<div>
								<?php huda_read_more(); ?>
							</div>
						</div>
					</footer><!-- .entry-footer -->
				<?php endif;?>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>

