<?php
/**
 * 
 * Template part for displaying Featured Posts
 * 
 */
?>
<section class="featured-posts-section">
    <div class="container-fluid">
        <?php
        // $category = get_theme_mod('home_block_1_category', 0);
        // print_r($category);
        // The Query.
        $featured = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1, 'cat' => '33' ) ); ?>
        <div class="row">
            <?php if ( $featured->have_posts() ) : ?>
                <!-- the loop -->
                <?php
                    while ( $featured->have_posts() ) :
                    $featured->the_post();
                    $author_id = $featured->post_author;
                    $post_id = get_the_ID();
                    
                ?>  
                <div class="col-lg-8 col-md-12 col-12">
                    <article class="featured-post-wrapper">
                        <div class="post-thumbnail">
                            <a class="text-white" href="<?php echo esc_url( get_permalink() ); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="featured-post-content-top">
                            <div class="w-100 d-flex justify-content-between">
                                <div class="post-author d-flex align-items-center gap-2">
                                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>">
                                        <div class="author-image">
                                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 52 ); ?>
                                        </div>
                                        <div>
                                            <div class="author-title">
                                                <?php echo get_the_author_meta( 'display_name', $author_id) ?>
                                            </div>
                                            <div class="text-white">
                                                <?php huda_posted_on(); ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="post-meta d-flex align-items-center gap-2">
                                    <div class="comment-count-box">
                                        <div>
                                            <i class="fa fa-comment-dots text-white"></i>
                                        </div>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                                            <?php huda_comment_count(); ?>
                                        </a>
                                    </div>
                                    <div class="post-views-box">
                                        <div>
                                            <i class="fa fa-eye text-white"></i>
                                        </div>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="post-views-count">
                                            113.2k
                                        </a>
                                    </div>
                                    <div class="post-share-box">
                                        <div class="dropdown dropdown-center top-4">
                                            <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-share text-white"></i>
                                            </div>
                                                <div class="dropdown-menu">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <a class="dropdown-item" href="https://www.facebook.com/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a class="dropdown-item" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" target="_blank">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?url=<?php echo get_permalink(); ?>&title=<?php echo esc_html( get_the_title() ); ?>" target="_blank">
                                                            <i class="fab fa-linkedin-in"></i>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a class="dropdown-item" href="https://api.whatsapp.com/send?text=<?php echo esc_html( get_the_title() ); ?> <?php echo esc_url( get_permalink() ); ?>" target="_blank">
                                                                <i class="fab fa-whatsapp"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="featured-post-content-bottom">
                            <div>
                                <span class="post-read-time">
                                <?php echo esc_html( huda_post_read_time( get_the_ID() ) ) ; ?>
                                </span>
                            </div>
                            <h1 class="display-3">
                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="text-white">
                                    <?php echo esc_html( get_the_title() ); ?>
                                </a>
                            </h1>
                            <div class="featured-post-meta">
                                <p class="text-white"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>

                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div> 
                    </article>
                </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="row">
                    <div class="col-12">
                       <article class="d-flex flex-wrap flex-direction-column gap-md-4">
                        <?php
                            // the query.
                            $adds = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 2, 'cat' => '34' ) ); ?>

                                <?php if ( $adds->have_posts() ) : ?>
                                    <!-- pagination here -->

                                    <!-- the loop -->
                                    <?php
                                        while ( $adds->have_posts() ) :
                                            $adds->the_post();
                                    ?>
                                <div class="featured-post-small-wrapper">
                                    <div class="post-thumbnail">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                                            <?php the_post_thumbnail(); // Display the post thumbnail ?>
                                        </a>
                                    </div>
                                    <div class="featured-post-content-top">
                                        <div class="w-100 d-flex justify-content-between">
                                            <div class="post-author">
                                                <a class="d-flex align-items-center gap-2" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>">
                                                    <div class="author-image">
                                                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 28 ); ?>
                                                    </div>
                                                    <div>
                                                        <div class="author-title text-white">
                                                            <?php echo get_the_author_meta( 'display_name', $author_id) ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="post-meta d-flex align-items-center gap-2">                                    
                                                <div class="post-share-box">
                                                    <div class="dropdown dropdown-start top-4">
                                                        <div class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa fa-share text-white"></i>
                                                            <div class="dropdown-menu">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <a class="dropdown-item" href="https://www.facebook.com/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank">
                                                                            <i class="fab fa-facebook-f"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <a class="dropdown-item" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>" target="_blank">
                                                                            <i class="fab fa-twitter"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <a class="dropdown-item" href="https://www.linkedin.com/shareArticle?url=<?php echo get_permalink(); ?>&title=<?php echo esc_html( get_the_title() ); ?>" target="_blank">
                                                                        <i class="fab fa-linkedin-in"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <a class="dropdown-item" href="https://api.whatsapp.com/send?text=<?php echo esc_html( get_the_title() ); ?> <?php echo esc_url( get_permalink() ); ?>" target="_blank">
                                                                            <i class="fab fa-whatsapp"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-post-content-bottom">
                                        <div>
                                            <span class="post-read-time text-white">
                                                <?php echo esc_html( huda_post_read_time( get_the_ID() ) ) ; ?>
                                            </span>
                                        </div>
                                        <h3 class="h3">
                                            <a class="text-white" href="<?php echo esc_url( get_permalink() ); ?>">
                                                <?php echo esc_html( get_the_title() ); ?>
                                            </a>
                                        </h3>  
                                        <div class="text-white">
                                            <?php huda_posted_on(); ?>
                                        </div>                          
                                    </div> 
                                </div>
                                <?php endwhile; ?>
                                <!-- end of the loop -->

                                <!-- pagination here -->
                                <?php wp_reset_postdata(); ?>

                                <?php else : ?>
                                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php endif; ?>
                                <!-- end of the loop -->
                                <?php wp_reset_postdata(); ?>
                       </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

