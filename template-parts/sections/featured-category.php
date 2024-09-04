<?php
/**
 * 
 * Template part for displaying Featured Category Posts
 * 
 */
?>

<section class="featured-category">
    <div class="container-fluid">
        <?php
        // the query.
        $latest_articles = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 2, 'cat' => '2' ) ); ?>

            <?php if ( $latest_articles->have_posts() ) : ?>
            <!-- pagination here -->
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-12 col-12">
                    <h1>
                        Checkout Recent <br> Articles
                    </h1>

                    <div class="d-flex flex-wrap align-items-center gap-4 mt-4">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn rounded-pill">Read More <i class="fa fa-arrow-right"></i></a>
                        <a href="" class="text-black">30+ Articles</a>
                    </div>

                </div> 
                
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="row">
                        <!-- the loop -->
                        <?php
                            while ( $latest_articles->have_posts() ) :
                            $latest_articles->the_post();
                            $cats = get_the_category();
                            $cat_name = $cats[0]->name;
                            $post_id = get_the_ID();
                            $author_id = $latest_articles->post_author;
                        ?>        
                            <div class="col-lg-6 col-md-12 col-12">
                                <article class="rounded border p-2">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5 col-md-5 col-12">
                                            <div class="post-thumbnail">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                                    <?php the_post_thumbnail(); ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-12">
                                            <div class="d-flex align-items-center justify-content-between gap-2">
                                                <div class="text-black"> <b>Category:</b> <?php echo $cat_name ?></div>
                                                <div class="text-black"> <?php echo esc_html( huda_post_read_time( get_the_ID() ) ) ; ?> </div>
                                            </div>
                                            <h3 class="h3 fw-semi-bold text-black pt-2 mb-0">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                                    <?php echo esc_html( get_the_title() ); ?>
                                                </a>
                                            </h3>
                                            <?php the_excerpt(); ?>
                                            <div class="post-author d-flex align-items-center gap-2">
                                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>">
                                                    <div class="author-image rounded-pill">
                                                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 52 ); ?>
                                                    </div>
                                                    <div>
                                                        <div class="author-title">
                                                            <?php echo get_the_author_meta( 'display_name', $author_id) ?>
                                                        </div>
                                                        <div class="text-black">
                                                            <?php huda_posted_on(); ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                
            </div>
            <!-- end of the loop -->

            <!-- pagination here -->
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
</section>