<?php
/**
 * The template for displaying all category posts
 *
 * @package Huda
 */
 
get_header(); ?>

<div class="category-page">
   <div class="container">
    <h1 class="category-title">
        <?php echo esc_html( single_cat_title()); // Display the category title ?>
    </h1>

        <?php 
            get_template_part( 'template-parts/content', 'category' );
        ?>

   </div>
</div>

<?php get_footer(); ?>
