<div class="featured-posts-section container-fluid">
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
                <div class="featured-post-wrapper">
                    <div class="post-thumbnail">
                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                            <?php the_post_thumbnail(); // Display the post thumbnail ?>
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
                                        <div>
                                            <?php huda_posted_on(); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="post-meta d-flex align-items-center gap-2">
                                <div class="comment-count-box">
                                    <div>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.91016 7.21106L14.0879 7.21106" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5.91016 11.2999H12.0435" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16.1341 2.09998C16.9474 2.09998 17.7275 2.42307 18.3026 2.99818C18.8777 3.57329 19.2008 4.35331 19.2008 5.16664V13.3444C19.2008 14.1577 18.8777 14.9378 18.3026 15.5129C17.7275 16.088 16.9474 16.4111 16.1341 16.4111H11.023L5.91189 19.4778V16.4111H3.86745C3.05412 16.4111 2.2741 16.088 1.69899 15.5129C1.12388 14.9378 0.800781 14.1577 0.800781 13.3444L0.800781 5.16664C0.800781 4.35331 1.12388 3.57329 1.69899 2.99818C2.2741 2.42307 3.05412 2.09998 3.86745 2.09998L16.1341 2.09998Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                                        <?php huda_comment_count(); ?>
                                    </a>
                                </div>
                                <div class="post-views-box">
                                    <div>
                                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.95703 6.63343C7.95703 7.17565 8.17243 7.69567 8.55584 8.07907C8.93924 8.46248 9.45926 8.67788 10.0015 8.67788C10.5437 8.67788 11.0637 8.46248 11.4471 8.07907C11.8305 7.69567 12.0459 7.17565 12.0459 6.63343C12.0459 6.09121 11.8305 5.5712 11.4471 5.18779C11.0637 4.80439 10.5437 4.58899 10.0015 4.58899C9.45926 4.58899 8.93924 4.80439 8.55584 5.18779C8.17243 5.5712 7.95703 6.09121 7.95703 6.63343Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.2008 6.63333C16.7474 10.7222 13.6808 12.7667 10.0008 12.7667C6.32078 12.7667 3.25411 10.7222 0.800781 6.63333C3.25411 2.54444 6.32078 0.5 10.0008 0.5C13.6808 0.5 16.7474 2.54444 19.2008 6.63333Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="post-views-count">
                                        113.2k
                                    </a>
                                </div>
                                <div class="post-share-box">
                                    <div>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_13_273)">
                                                <path d="M0.799805 10C0.799805 10.8133 1.1229 11.5934 1.69801 12.1685C2.27312 12.7436 3.05314 13.0667 3.86647 13.0667C4.6798 13.0667 5.45982 12.7436 6.03493 12.1685C6.61004 11.5934 6.93314 10.8133 6.93314 10C6.93314 9.18669 6.61004 8.40667 6.03493 7.83156C5.45982 7.25644 4.6798 6.93335 3.86647 6.93335C3.05314 6.93335 2.27312 7.25644 1.69801 7.83156C1.1229 8.40667 0.799805 9.18669 0.799805 10Z" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.0664 3.86665C13.0664 4.67998 13.3895 5.46 13.9646 6.03512C14.5397 6.61023 15.3197 6.93332 16.1331 6.93332C16.9464 6.93332 17.7264 6.61023 18.3015 6.03512C18.8766 5.46 19.1997 4.67998 19.1997 3.86665C19.1997 3.05332 18.8766 2.27331 18.3015 1.69819C17.7264 1.12308 16.9464 0.799988 16.1331 0.799988C15.3197 0.799988 14.5397 1.12308 13.9646 1.69819C13.3895 2.27331 13.0664 3.05332 13.0664 3.86665Z" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.0664 16.1333C13.0664 16.9466 13.3895 17.7267 13.9646 18.3018C14.5397 18.8769 15.3197 19.2 16.1331 19.2C16.9464 19.2 17.7264 18.8769 18.3015 18.3018C18.8766 17.7267 19.1997 16.9466 19.1997 16.1333C19.1997 15.32 18.8766 14.54 18.3015 13.9649C17.7264 13.3897 16.9464 13.0667 16.1331 13.0667C15.3197 13.0667 14.5397 13.3897 13.9646 13.9649C13.3895 14.54 13.0664 15.32 13.0664 16.1333Z" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.62598 8.67074L13.3726 5.19519" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.62598 11.3286L13.3726 14.8041" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_13_273">
                                                <rect width="20" height="20" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-post-content-bottom">
                        <h1>
                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                                <?php echo esc_html( get_the_title() ); ?>
                            </a>
                        </h1>
                        <div class="featured-post-meta">
                            <p><?php echo wp_kses_post( get_the_excerpt() ); ?></p>

                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="read-more">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div> 
                </div>
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
                    <?php
                        // the query.
                        $adds = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1, 'cat' => '35' ) ); ?>

                        <?php if ( $adds->have_posts() ) : ?>
                            <!-- pagination here -->

                            <!-- the loop -->
                            <?php
                                while ( $adds->have_posts() ) :
                                    $adds->the_post();
                                ?>
                                <div class="featured-section-advertisement">
                                    <div class="adds-wrapper">

                                        <?php 
                                            if( the_post_thumbnail() ) {

                                            }
                
                                        ?>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                                            <?php the_post_thumbnail(); // Display the post thumbnail ?>
                                        </a>

                                        <?php the_content(
                                            sprintf(
                                                wp_kses(
                                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'huda' ),
                                                    array(
                                                        'span' => array(
                                                            'class' => array(),
                                                        ),
                                                    )
                                                ),
                                                wp_kses_post( get_the_title() )
                                            )
                                        ); ?>
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
                </div>
                <div class="col-12">
                    <?php
                        // the query.
                        $adds = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1, 'cat' => '34' ) ); ?>

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
                                                    <div class="author-title">
                                                        <?php echo get_the_author_meta( 'display_name', $author_id) ?>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="post-meta d-flex align-items-center gap-2">                                    
                                            <div class="post-share-box">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_6185_3040)">
                                                            <path d="M0.800781 10C0.800781 10.8133 1.12388 11.5934 1.69899 12.1685C2.2741 12.7436 3.05412 13.0667 3.86745 13.0667C4.68078 13.0667 5.4608 12.7436 6.03591 12.1685C6.61102 11.5934 6.93411 10.8133 6.93411 10C6.93411 9.18669 6.61102 8.40667 6.03591 7.83156C5.4608 7.25644 4.68078 6.93335 3.86745 6.93335C3.05412 6.93335 2.2741 7.25644 1.69899 7.83156C1.12388 8.40667 0.800781 9.18669 0.800781 10Z" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13.0664 3.86672C13.0664 4.68005 13.3895 5.46006 13.9646 6.03518C14.5397 6.61029 15.3197 6.93338 16.1331 6.93338C16.9464 6.93338 17.7264 6.61029 18.3015 6.03518C18.8766 5.46006 19.1997 4.68005 19.1997 3.86672C19.1997 3.05338 18.8766 2.27337 18.3015 1.69825C17.7264 1.12314 16.9464 0.800049 16.1331 0.800049C15.3197 0.800049 14.5397 1.12314 13.9646 1.69825C13.3895 2.27337 13.0664 3.05338 13.0664 3.86672Z" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M13.0664 16.1334C13.0664 16.9468 13.3895 17.7268 13.9646 18.3019C14.5397 18.877 15.3197 19.2001 16.1331 19.2001C16.9464 19.2001 17.7264 18.877 18.3015 18.3019C18.8766 17.7268 19.1997 16.9468 19.1997 16.1334C19.1997 15.3201 18.8766 14.5401 18.3015 13.965C17.7264 13.3899 16.9464 13.0668 16.1331 13.0668C15.3197 13.0668 14.5397 13.3899 13.9646 13.965C13.3895 14.5401 13.0664 15.3201 13.0664 16.1334Z" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M6.62891 8.67087L13.3756 5.19531" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M6.62891 11.3286L13.3756 14.8042" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_6185_3040">
                                                                <rect width="20" height="20" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-post-content-bottom">
                                    <div>
                                        <?php huda_posted_on(); ?>
                                    </div>
                                    <h3>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                                            <?php echo esc_html( get_the_title() ); ?>
                                        </a>
                                    </h3>                            
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
                </div>
            </div>
        </div>
    </div>
</div>

