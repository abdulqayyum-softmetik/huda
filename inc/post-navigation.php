<div class="single-post-navigation-wrapper">
    <nav class="previous-post d-flex align-items-center gap-2">
        <?php 
        $prev_post = get_previous_post(); 

        if ( ! empty( $prev_post ) ) : ?>
            <div class="prevoius-post-image">
                <?php echo get_the_post_thumbnail( $prev_post->ID, array( 100, 100 ) );?>
            </div>
            <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="link">
                <?php echo $prev_post->post_title; ?>
                <div class="d-flex align-items-center gap-2">
                    <i class="fas fa-arrow-left"></i>
                    <span>Previous Post</span>
                </div>
            </a>
        <?php endif; ?>
    </nav>
    <nav class="next-post d-flex align-items-center gap-2">
        <?php 
        $next_post = get_next_post(); 

        if ( ! empty( $next_post ) ) : ?>
            <div class="next-post-image">
                <?php echo get_the_post_thumbnail( $next_post->ID, array( 100, 100 ) );?>
            </div>

            <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="link">
                <?php echo $next_post->post_title; ?>
                <div class="d-flex align-items-center gap-2">
                    <span>Next Post</span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
        <?php endif; ?>
    </nav>
</div>