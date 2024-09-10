<?php
/**
 * The template for displaying all category posts
 *
 * @package Huda
 */
 
get_header(); 
?>



<div class="category-page">
   <div class="content">
    <div class="container">
            <div class="breadcrumb">
                <h1 class="category-title">
                    Category: <?php echo esc_html( single_cat_title()); // Display the category title ?>
                </h1>
                <?php echo wp_kses_post( category_description() ); // Display the category description ?>
            </div>
            
            <?php if ( have_posts() ) : ?>
                <div class="row gy-4">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-3">
                            <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                        </div>
                    <?php endwhile; ?>
                        <div class="pagination">
                            <?php
                                // Pagination function
                                huda_pagination();
                            ?>
                        </div>
                    <?php else : ?>

                    <?php get_template_part( 'template-parts/content', 'none' ); ?>
                </div>
            <?php endif; ?>
    </div>
   </div>
</div>

<?php get_footer(); ?>
