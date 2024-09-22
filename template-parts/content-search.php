<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Huda
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	<div class="thumbnail-wrapper">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php the_post_thumbnail(  ); // Display the post thumbnail ?>
		</a>
	</div>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
					huda_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<footer class="entry-footer">
		<div class="d-flex align-items-center justify-content-between">
			<div class="read-time">
				<?php echo esc_html( huda_post_read_time( get_the_ID() ) ) ; ?>
			</div>
			<div>
				<?php huda_read_more(); ?>
			</div>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
