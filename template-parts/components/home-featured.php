<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-12">
            
                
            </div>

            <div class="col-lg-6 col-md-8 col-12">
            <?php

                $category = get_theme_mod( 'home_block_1_category', 0 );
                // print_r($category);
                // The Query.
                $featured = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 5, 'cat' => $category ) );
                $fi = 1;
                // The Loop.
                if ( $featured->have_posts() ) {
                while ( $featured->have_posts() ) {
                    $featured->the_post(); ?>
                    <?php if($fi== 1) {  ?>
                    <div class="large-grid">
                            <div class="featured-post">
                                <a href="<?php the_permalink() ?>">
                                    <div class="featured-post__image position-relative">
                                    <?php the_post_thumbnail( 'home-grid' ) ?>
                                </a>
                                <div class="featured-post__category bg-color-tertiary py-2 px-3 position-absolute top-0 start-0">
                                    <div class="category-text fw-medium text-decoration-none"><?php the_category( ',', ) ?></div>
                                </div>
                            </div>
                            <div class="featured-post__content pt-2">
                                <div class="featured-post__title py-2">
                                    <a href="<?php the_permalink() ?>" class="h5 fw-medium text-decoration-none">
                                        <h3><?php the_title() ?></h3>
                                    </a>
                                </div>
                                <div class="post__excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="featured-post__meta d-flex gap-2">
                                    <div class="d-flex gap-4">
                                        <div class="featured-post__author">
                                            <a href="#" class="text-decoration-none"><span class="fw-medium text-black"><?php huda_posted_on() ?></span></a>
                                        </div>
                                        <div class="featured-post__date">
                                            <a href="#" class="text-gray text-decoration-none"><?php huda_posted_by() ?></a>
                                    </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                        <div class="small-grid">
                            <div class="featured-post">
                                <div class="featured-post__image position-relative">
                                <a href="<?php the_permalink() ?>">
                                    <?php if(has_post_thumbnail()){
                                    the_post_thumbnail( 'home-grid' );
                                    } else {
                                    echo '<img src="'.get_template_directory_uri().'/assets/img/placeholder-1200-630.png" alt="'.get_the_title(). '">';
                                    } ?>
                                </a>
                                <div class="featured-post__category bg-color-tertiary py-1 px-2 position-absolute bottom-0 start-0">
                                    <div class="category-text  fw-medium text-decoration-none"><?php the_category( ',', ) ?></div>
                                </div>
                                </div>
                                <div class="featured-post__content">
                                <div class="featured-post__title py-2">
                                    <a href="<?php the_permalink() ?>" class="h5 fw-medium text-decoration-none"><?php the_title() ?></a>
                                </div>
                                <div class="featured-post__meta d-flex gap-2">
                                    <div class="featured-post__author">
                                    <a href="<?php the_permalink() ?>" class="text-decoration-none"><span
                                        class="fw-medium text-black"><?php huda_posted_on() ?></span></a>
                                    </div>
                                    <div class="featured-post__date">
                                    <a href="<?php the_permalink() ?>" class="text-gray text-decoration-none"><?php huda_posted_on() ?></a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    $fi++;
                }
                } else {
                esc_html_e( 'Sorry, no posts matched your criteria.' );
                }
                // Restore original Post Data.
                wp_reset_postdata();
            ?> 
              
            </div>
            
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Search -->
                
            </div>
        </div>
    </div>
</section>