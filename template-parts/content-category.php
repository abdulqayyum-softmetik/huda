<?php
/**
 * Template part for displaying category page content in category.php
 *
 * @package Huda
 */

?>

<?php if ( category_description() ) : ?>
    <div class="category-description">
        <?php echo wp_kses_post( category_description() ); // Display the category description ?>
    </div>
<?php endif; ?>

<?php if ( have_posts() ) : ?>
    <div class="category-posts row">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-md-3">
                <div class="post">
                    <div class="thumbnail-wrapper">
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php the_post_thumbnail( 'thumbnail' ); // Display the post thumbnail ?>
                        </a>
                    </div>
                    
                    <h2>
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php echo esc_html( get_the_title() ); ?>
                        </a>
                    </h2>

                    <div class="entry">
                        <div>
                            <?php
                                huda_posted_on();
                                huda_posted_by();
                            ?>
                        </div>
                        <?php echo wp_kses_post( get_the_excerpt() ); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <div class="pagination">
            <?php
            // Pagination function
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( '« Previous', 'huda' ),
                'next_text' => __( 'Next »', 'huda' ),
            ) );
            ?>
        </div>
    </div>
<?php else : ?>
    <p class="text-center pb-5"><?php esc_html_e( 'No posts found in this category.', 'huda' ); ?></p>
<?php endif; ?>