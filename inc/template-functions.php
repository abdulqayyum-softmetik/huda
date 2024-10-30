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

// Display coomments.php content inside the function
function huda_comments_content(){
    ?>
        <div id="comments" class="comments-area">

            <?php
            // Always display the comment form
            comment_form();

            // Check if there are comments
            if ( have_comments() ) :
                ?>

                <h2 class="comments-title">
                    <?php
                        $huda_comment_count = get_comments_number();
                        if ( '1' === $huda_comment_count ) {
                            printf(
                                esc_html__( '1 Comment', 'huda' )
                            );
                        } else {
                            printf(
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

                <?php the_comments_navigation(); ?>

            <?php endif; // Check for have_comments() ?>

            <?php
                // If comments are closed and there are no comments, display a "comments closed" message
                if ( ! comments_open() && ! have_comments() ) :
                    ?>
                    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'huda' ); ?></p>
                    <?php
                endif;
            ?>
        </div><!-- .comments-area -->
    <?php
}
// Adding the function into a custom hook
add_action('huda_comments','huda_comments_content');

// Display single.php content inside the function
function huda_single_post_content(){
    $container_width = huda_get_container_width(); 
    $sidebar_layout = huda_get_sidebar(); 
?>
    <main id="primary" class="site-main <?php echo esc_attr( $sidebar_layout == "sidebar" ? 'sidebar-layout' : 'no-sidebar' )  ?> <?php echo esc_attr( $container_width ); ?>">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>

                <div class="<?php echo esc_attr( $sidebar_layout == "sidebar" ? 'col-lg-8' : 'col-lg-12 col-md-12 col-12' )  ?>">
                    <?php
                        // Display single post content
                        get_template_part( 'template-parts/content', get_post_type() ); 
                    ?>

                    <?php if ( true == get_theme_mod( 'huda_social_share_setting', 'on' ) ) : ?>
                        <?php huda_social_share(); ?>
                    <?php else : ?>
                        <?php // silence is golden ?>
                    <?php endif; ?>

                    <?php
                        if ( comments_open() ) :
                            comments_template();
                        endif;
                    ?>

                    <?php if ( true == get_theme_mod( 'huda_related_post_setting', 'on' ) ) : ?>
                       <div class="">
                        <?php related_articles(); ?>
                       </div>
                    <?php else : ?>
                        <?php // silence is golden ?>
                    <?php endif; ?>
                </div>

                <div class="<?php echo esc_attr( $sidebar_layout == "sidebar" ? 'col-lg-4' : '' ) ?>">
                    <?php
                        if( $sidebar_layout == "sidebar" ) :
                            ?>
                                <?php get_sidebar(); ?>	
                            <?php
                        endif;
                    ?>
                </div>
            <?php endwhile; // End of the loop. ?>
        </div>
    </main><!-- #main -->
<?php
}
// Adding the function into a custom hook
add_action('huda_single_page_layout','huda_single_post_content');

function huda_page_content(){
    $page_container_width = huda_get_page_container_width();
    ?>
        <main id="primary" class="huda-site-main <?php echo esc_attr( $page_container_width ); ?>">
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
    $page_container_width = huda_get_page_container_width();
    ?>
        <main id="primary" class="huda-site-main">
            <div class="<?php echo esc_attr( $page_container_width ); ?>">
                <?php if ( have_posts() ) : ?>

                <header class="page-header pb-4">
                    <h1 class="page-title">
                        <?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'huda' ), '<span>' . get_search_query() . '</span>' );
                        ?>
                    </h1>
                </header><!-- .page-header -->

                <div class="row gy-4">
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
    $page_container_width = huda_get_page_container_width();
    ?>
        <main class="category-page">
            <section class="page-hero-section">

                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Heading -->
                        <h1 class="category-title">
                        Category: <?php echo esc_html( single_cat_title()); // Display the category title ?>
                    </h1>
                    </div>

                    <div class="col-lg-6 col-md-8 col-12">
                        <!-- Paragraph -->
                        <?php echo wp_kses_post( category_description() ); // Display the category description ?>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Search -->
                        <?php esc_html( get_search_form() ); ?>
                    </div>
                </div>
 
            </section>
            <div class="content">
                <div class="<?php echo esc_attr( $page_container_width ); ?>">
                        <?php if ( have_posts() ) : ?>
                            <div class="row gy-4">
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <div class="col-lg-4 col-md-4 col-12">
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
        </main>
    <?php
}
add_action('huda_category','huda_category_content');

function huda_author_content(){
    $page_container_width = huda_get_page_container_width();
    ?>
            <div id="primary" class="content-area">
            <main id="main" class="site-main <?php echo esc_attr( $page_container_width ); ?>">

            <?php 
                get_template_part( 'template-parts/content', 'author' );
            ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    <?php
}
add_action('huda_author','huda_author_content');


function huda_404_content(){
    $page_container = huda_get_page_container_width();
    ?>
        <main id="primary" class="huda-site-main <?php echo esc_attr( $page_container ); ?>">
            <section class="error-404 not-found">
            
                <div class="nothing-found-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404.svg" alt="Huda Image">
                </div>

                <div class="page-content mb-5">
                    <p><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'huda' ); ?></p>

                    <a href="/" class="d-flex justify-content-center">
                        <button class="btn-outline">Go Back</button>
                    </a>

                </div><!-- .page-content -->
            </section><!-- .error-404 -->
        </main><!-- #main -->
    <?php
}
add_action('huda_404','huda_404_content');


function huda_customize_remove_panels( $wp_customize ) {
    // Remove the default "Colors" panel
    $wp_customize->remove_section( 'colors' );
    // You can also remove individual controls if needed:
    $wp_customize->remove_section( 'background_image' ); 
    $wp_customize->remove_section( 'header_image' );
}
add_action( 'customize_register', 'huda_customize_remove_panels', 20 );
