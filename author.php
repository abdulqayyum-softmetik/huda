<?php
/**
 * The template for displaying all author posts
 *
 * @package Huda
 */
 
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container">

    <?php 
        get_template_part( 'template-parts/content', 'author' );
    ?>

    </main><!-- #main -->
</div><!-- #primary -->
