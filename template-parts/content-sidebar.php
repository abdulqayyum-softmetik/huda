<?php
/**
 * 
 *  Template part for displaying posts sidebar
 *
 */
?>

<?php 
	// Check if Kirki and get_theme_mod() functions exist
    if ( function_exists('get_theme_mod') ) {
        // Function to get container width
        function huda_get_sidebar_layout() {
            return get_theme_mod('blog__sidebar__setting', 'no-sidebar'); // container is default value
        }
    }
    
    // 
    $sidebar_layout = huda_get_sidebar_layout(); 
    
?>

<div class="<?php echo is_home() ? 'col-lg-4 col-md-6 col-12' : 'col-lg-12 col-md-12 col-12'; ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="<?php echo is_home() ? 'thumbnail-wrapper' : 'position-relative'; ?>">
			<?php huda_post_thumbnail('medium'); ?>

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
		</div>

		<div class="<?php echo is_singular() ? 'row' : '' ?>">

			<div class="<?php echo is_singular() ? 'col-lg-8' : '' ?>">
				<div class="article-content">
					<div class="entry-content m-0">
						<?php
							if ( is_home() ) :
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
							get_template_part( 'inc/post', 'navigation' );
						?>
						<?php else : ?>
						<footer class="entry-footer">
							<div class="d-flex align-items-center justify-content-between">
								<div class="">
									<?php echo huda_post_read_time( the_ID() ) ?>
								</div>
								<div>
									<a class="btn btn-read-more-arrow" href="<?php echo esc_url( get_permalink() ); ?>">
										<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
											<path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
										</svg>
									</a>
								</div>
							</div>
						</footer><!-- .entry-footer -->
						<?php endif;?>
				</div>
			</div>
			
			<div class="<?php echo is_singular() ? 'col-lg-4' : '' ?>">
				<?php 
					if( is_singular() ) :
						get_sidebar();	
					endif;
				?>
			</div>					
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>

