<?php
/**
 * 
 * Huda Theme Hooks Functions
 *
 */
?>



<?php

    // Check if Kirki and get_theme_mod() functions exist
    if ( function_exists('get_theme_mod') ) {
        // Function to get container width
        function huda_get_container_width() {
            return get_theme_mod('blog__container__setting', 'container'); // container is default value
        }
    }

    
    // Display single.php content inside the function
    function huda_single_post_content(){
        $container_width = huda_get_container_width(); 
    ?>
        <main id="primary" class="site-main <?php echo esc_attr( $container_width ); ?>">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', get_post_type() );

                            the_post_navigation(
                                array(
                                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'huda' ) . '</span> <span class="nav-title">%title</span>',
                                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'huda' ) . '</span> <span class="nav-title">%title</span>',
                                )
                            );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                    ?>
                </div>
            </div>
        </main><!-- #main -->
    <?php
    }
    // Adding the function into a custom hook
    add_action('huda_single_content','huda_single_post_content');
?>
