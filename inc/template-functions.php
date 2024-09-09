<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Huda
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function huda_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'huda_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function huda_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'huda_pingback_header' );


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
    add_action('huda_single_page_layout','huda_single_post_content');

    // Display coomments.php content inside the function
    function huda_comments_content(){
        $container_width = huda_get_container_width(); 
    ?>
        <div id="comments" class="comments-area">

<?php
// You can start editing here -- including this comment!
if ( have_comments() ) :
    ?>

    <?php comment_form(); ?>
    
    <h2 class="comments-title">
        <?php
            $huda_comment_count = get_comments_number();
            if ( '1' === $huda_comment_count ) {
                printf(
                    /* translators: %s: comment count number */
                    esc_html__( '1 Comment', 'huda' )
                );
            } else {
                printf(
                    /* translators: %s: comment count number */
                    esc_html(
                        _nx(
                            '%1$s Comment',
                            '%1$s Comments',
                            $huda_comment_count,
                            'comments title',
                            'huda'
                        )
                    ),
                    number_format_i18n( $huda_comment_count ) // format the number
                );
            }
        ?>
    </h2><!-- .comments-title -->

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                )
            );
            ?>
        </ol><!-- .comment-list -->

        <?php
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() ) :
            ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'huda' ); ?></p>
            <?php
        endif;

    endif; // Check for have_comments().
    ?>

    </div><!-- #comments -->
    <?php
    }
    // Adding the function into a custom hook
    add_action('huda_comments','huda_comments_content');