<?php
/**
 * Template part for displaying author posts in author.php
 *
 * @package Huda
 */

?>


<header class="page-header pb-5">
    <h1 class="page-title">
        <?php
            // Display the author's name
            printf( __( 'Posts by %s', 'huda' ), get_the_author() );
        ?>
    </h1>
</header><!-- .page-header -->


<?php if ( have_posts() ) : ?>
    <div class="row gy-4">
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-md-3">
                <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
            </div>
        <?php endwhile; ?>
            <div class="">
                <?php
                    // Pagination function
                    huda_pagination();
                ?>
            </div>
        <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>
    </div>
<?php endif; ?>





