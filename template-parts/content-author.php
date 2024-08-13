<?php
/**
 * Template part for displaying author posts in author.php
 *
 * @package Huda
 */

?>

<?php if ( have_posts() ) : ?>

<header class="page-header pb-5">
    <h1 class="page-title">
        <?php
            // Display the author's name
            printf( __( 'Posts by %s', 'huda' ), get_the_author() );
        ?>
    </h1>
</header><!-- .page-header -->

<div class="row">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-md-3">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="thumbnail-wrapper">
                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                        <?php the_post_thumbnail(  ); // Display the post thumbnail ?>
                    </a>
                </div>

                <header class="entry-header">
                    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                </header><!-- .entry-header -->

                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->

            </article><!-- #post-## -->
        </div>
    <?php endwhile; ?>

    <?php
        // Pagination
        the_posts_pagination( array(
            'prev_text'          => __( 'Previous page', 'textdomain' ),
            'next_text'          => __( 'Next page', 'textdomain' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'textdomain' ) . ' </span>',
        ) );
    ?>

    <?php else : ?>
        <p class="text-center pb-5"><?php _e( 'Sorry, no posts found.', 'huda' ); ?></p>
    <?php endif; ?>
</div>




