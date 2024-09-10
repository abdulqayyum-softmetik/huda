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


    function huda_page_content(){
        ?>
            <main id="primary" class="huda-site-main container">
                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        <?php
    }
    add_action('huda_page','huda_page_content');

    function huda_sidebar_content(){
        ?>
            <aside id="secondary" class="widget-area">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </aside><!-- #secondary -->
        <?php
    }
    add_action('huda_sidebar','huda_sidebar_content');


    function huda_search_content(){
        ?>
            <main id="primary" class="huda-site-main">
                <div class="container">
                    <?php if ( have_posts() ) : ?>

                    <header class="page-header pb-4">
                        <h1 class="page-title">
                            <?php
                            /* translators: %s: search query. */
                            printf( esc_html__( 'Search Results for: %s', 'huda' ), '<span>' . get_search_query() . '</span>' );
                            ?>
                        </h1>
                    </header><!-- .page-header -->

                    <div class="row">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-lg-3 col-md-3 col-12">
                                <?php
                                    /**
                                     * Run the loop for the search to output the results.
                                     * If you want to overload this in a child theme then include a file
                                     * called content-search.php and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', 'search' );
                                ?>
                            </div>
                        <?php endwhile; ?>
                            <?php the_posts_navigation(); ?>
                        <?php else : ?>
                            <?php get_template_part( 'template-parts/content', 'none' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </main><!-- #main -->
        <?php
    }
    add_action('huda_search','huda_search_content');

    function huda_category_content(){
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
        <?php
    }
    add_action('huda_category','huda_category_content');

    function huda_author_content(){
        ?>
             <div id="primary" class="content-area">
                <main id="main" class="site-main container">

                <?php 
                    get_template_part( 'template-parts/content', 'author' );
                ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        <?php
    }
    add_action('huda_author','huda_author_content');


    function huda_404_content(){
        ?>
             <main id="primary" class="huda-site-main">
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'huda' ); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'huda' ); ?></p>

                            <?php
                            get_search_form();

                            the_widget( 'WP_Widget_Recent_Posts' );
                            ?>

                            <div class="widget widget_categories">
                                <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'huda' ); ?></h2>
                                <ul>
                                    <?php
                                    wp_list_categories(
                                        array(
                                            'orderby'    => 'count',
                                            'order'      => 'DESC',
                                            'show_count' => 1,
                                            'title_li'   => '',
                                            'number'     => 10,
                                        )
                                    );
                                    ?>
                                </ul>
                            </div><!-- .widget -->

                            <?php
                            /* translators: %1$s: smiley */
                            $huda_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'huda' ), convert_smilies( ':)' ) ) . '</p>';
                            the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$huda_archive_content" );

                            the_widget( 'WP_Widget_Tag_Cloud' );
                            ?>

                    </div><!-- .page-content -->
                </section><!-- .error-404 -->

                </main><!-- #main -->
        <?php
    }
    add_action('huda_404','huda_404_content');



   


   
   