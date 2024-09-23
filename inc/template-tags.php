<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Huda
 */


 /**
 * Filter the excerpt length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
add_filter( 'excerpt_length', function( $length ) { return 9; } );
add_filter('excerpt_more', '__return_false');


if ( ! function_exists( 'huda_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function huda_posted_on() {

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( 'Y-m-d' ) . 'T' . get_the_time('H:i:s')),
			esc_html( get_the_date( 'M j, Y' ) . ' ' . get_the_time() ),
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'huda' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on"> <i class="ri-time-line"></i> ' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;

if ( ! function_exists( 'huda_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function huda_posted_by() {
		$author_avatar_url = esc_url( get_avatar_url( get_the_author_meta( 'ID' ), array('size' => 20) ) ); 
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( ' by%s', 'post author', 'huda' ),
			' <img class="author-avatar" src="' . $author_avatar_url . '"></img> <span class="author-title"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>',
			
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'huda_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function huda_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'huda' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'huda' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'huda' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'huda' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'huda' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'huda' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'huda_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function huda_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

if ( ! function_exists( 'huda_comment_count' ) ) :
	/**
	 * Prints post comment counts.
	 */
	function huda_comment_count(){
		
		$arg = get_comments_number(get_the_ID());
		
		echo '<span class="comment-count">' . $arg . '</span>';
	}
endif;

if ( ! function_exists( 'huda_pagination' ) ) :
	/**
	 * Display numeric pagination.
	 */
	function huda_pagination(){
		the_posts_pagination( array(
			'mid_size'  => 2,
			'prev_text' => __( '<i class="ri-arrow-left-up-line"></i> Previous', 'huda' ),
			'next_text' => __( 'Next <i class="ri-arrow-right-up-line"></i>', 'huda' ),
		) );
	}
endif;

if ( ! function_exists( 'huda_previous_post' ) ) :
	/**
	 * Display numeric pagination.
	 */
	function huda_previous_post(){
		?>
			<nav class="previous-post d-flex align-items-center gap-2">
				<?php 
				$prev_post = get_previous_post(); 

				if ( ! empty( $prev_post ) ) : ?>
					<div class="prevoius-post-image">
						<?php echo get_the_post_thumbnail( $prev_post->ID, array( 100, 100 ) );?>
					</div>
					<a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="link">
						<?php echo esc_html($prev_post->post_title); ?>
						<div class="d-flex align-items-center gap-2">
							<i class="ri-arrow-left-up-line"></i>
							<span>Previous Post</span>
						</div>
					</a>
				<?php endif; ?>
			</nav>
		<?php
	}
endif;

if ( ! function_exists( 'huda_next_post' ) ) :
	/**
	 * Display numeric pagination.
	 */
	function huda_next_post(){
		?>
			<nav class="next-post d-flex align-items-center gap-2">
				<?php 
				$next_post = get_next_post(); 

				if ( ! empty( $next_post ) ) : ?>
					<div class="next-post-image">
						<?php echo get_the_post_thumbnail( $next_post->ID, array( 100, 100 ) );?>
					</div>

					<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="link">
						<?php echo esc_html($next_post->post_title); ?>
						<div class="d-flex align-items-center gap-2">
							<span>Next Post</span>
							<i class="ri-arrow-right-up-line"></i>
						</div>
					</a>
				<?php endif; ?>
			</nav>
		<?php
	}
endif;

if ( ! function_exists( 'huda_read_more' ) ) :
	/**
	 * Display numeric pagination.
	 */
	function huda_read_more(){
		?>
			<a class="btn btn-read-more-arrow"data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Read More" href="<?php echo esc_url( get_permalink() ); ?>">
				<i class="ri-arrow-right-up-line"></i>
			</a>
		<?php
	}
endif;

if ( ! function_exists( 'huda_social_share' ) ) :
	/**
	 * Share post on social media
	 */
	function huda_social_share() {
		?>
			<div class="d-flex align-items-center justify-content-between gap-3">
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
		<?php
	}
endif;


if ( ! function_exists( 'huda_post_read_time' ) ) :
	/**
	 * Display post read time.
	 */
	function huda_post_read_time( $post_id ) {
		// Get the post content based on the post ID
		$post_content = get_post_field( 'post_content', $post_id );
	
		// Debug: Check if post content is retrieved properly
		if ( empty( $post_content ) ) {
			return 'No content available';
		}
	
		// Remove shortcodes and HTML tags
		$clean_content = wp_strip_all_tags( strip_shortcodes( $post_content ) );
	
		// Normalize whitespace (replace multiple spaces with a single space)
		$clean_content = preg_replace( '/\s+/', ' ', trim( $clean_content ) );
	
		// Count words
		$word_count = str_word_count( $clean_content );
	
		// Debug: Log the word count for testing
		error_log( 'Word count: ' . $word_count );
	
		// Estimate read time (250 words per minute)
		$read_time = ceil( $word_count / 250 );
	
		// Debug: Log the calculated read time for testing
		error_log( 'Calculated read time: ' . $read_time );
	
		// Determine the correct label based on the read time
		$label = ( $read_time == 1 ) ? " Minute Read" : " Minutes Read";
	
		// Return the formatted string
		echo wp_kses_post( '<i class="ri-book-open-line"></i> ' . $read_time . $label );
	}	
	
endif;

if ( ! function_exists( 'huda_comment_form_fields' ) ) :
	/**
	 * Comment Field Order
	 */
	function huda_comment_form_fields( $fields ) {
		$comment_field = $fields['comment'];
		$author_field = $fields['author'];
		$email_field = $fields['email'];
		$url_field = isset($fields['url']) ? $fields['url'] : '';
		$cookies_field = isset($fields['cookies']) ? $fields['cookies'] : '';
		unset( $fields['comment'] );
		unset( $fields['author'] );
		unset( $fields['email'] );
		unset( $fields['url'] );
		unset( $fields['cookies'] );
		// the order of fields is the order below, change it as needed:
		$fields['author'] = $author_field;
		$fields['email'] = $email_field;
		$fields['comment'] = $comment_field;

		if( !empty($cookies_field) ) {
			$fields['cookies'] = $cookies_field;
		}


		if( !empty($url_field) ) {
			$fields['url'] = $url_field;
		}

		// done ordering, now return the fields:
		return $fields;
	}
	add_filter( 'comment_form_fields', 'huda_comment_form_fields' );
endif;

if( ! function_exists( 'related_articles' ) ) {
	function related_articles(){
        /**
         * Display related articles
         *
         */
            // Fetch the current post ID
            $current_post_id = get_the_ID();
                
            // Get categories of the current post
            $categories = wp_get_post_categories( $current_post_id );

            if ( $categories ) {
                // Define arguments for WP_Query
                $args = array(
                    'category__in'   => $categories, // Fetch posts in the same categories
                    'post__not_in'   => array( $current_post_id ), // Exclude the current post
                    'posts_per_page' => 4, // Number of related posts to display
                    'ignore_sticky_posts' => 1 // Ignore sticky posts
                );

                // Create a new query
                $related_posts_query = new WP_Query( $args );

                // Check if there are any related posts
                if ( $related_posts_query->have_posts() ) {
                    echo '<div class="related-posts">';
                        echo '<h3>Related Posts</h3>';
                            echo '<div class="row">';
                                // Loop through related posts
                                while ( $related_posts_query->have_posts() ) {
                                    $related_posts_query->the_post();
                                    ?>
										<div class="col-lg-4 col-md-4 col-12">
											<article>
												<a class="post-thumbnail" href="<?php echo esc_url( get_permalink() ); ?>">
													<?php huda_post_thumbnail('medium'); ?>
												</a>
												<?php
													huda_posted_on();
												?>
												<div class="d-flex flex-column">
													<a href="<?php echo esc_url( get_permalink() ); ?>"> 
														<?php the_title(); ?> 
													</a>
												</div>
											</article>
										</div>
                                    <?php
                                }
                            echo '</div>';
                    echo '</div>';
                }
                // Restore original post data
                wp_reset_postdata();
            }
    }
}

if ( ! function_exists( 'huda_tagcloud_postcount_filter' ) ) :
	/**
	 * Filter parentheses from tags cloud
	 */
	function huda_tagcloud_postcount_filter ($tags_count) {
		$tags_count = str_replace('<span class="tag-link-count"> (', ' <span class="tags_count"> ', $tags_count);
		$tags_count = str_replace(')</span>', '</span>', $tags_count);
		return $tags_count;
	}
	add_filter('wp_tag_cloud','huda_tagcloud_postcount_filter');
endif;

if ( ! function_exists( 'huda_categories_postcount_filter' ) ) :
	/**
	 * Filter parentheses from cpost count
	 */
	function huda_categories_postcount_filter ($categories_post_count) {
		$categories_post_count = str_replace('(', '<span class="post_count"> ', $categories_post_count);
		$categories_post_count = str_replace(')', ' </span>', $categories_post_count);
		return $categories_post_count;
	}
	add_filter('wp_list_categories','huda_categories_postcount_filter');
endif;

if ( ! function_exists( 'huda_post_categories' ) ) :
	function huda_post_categories() {
		// Get categories for the current post
		$categories = get_the_category();
		
		// Check if there are any categories
		if ( ! empty( $categories ) ) {
			echo '<div class="post-categories">';
			foreach ( $categories as $category ) {
				echo '<span class="category"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a></span>';
			}
			echo '</div>';
		}
	}
endif;

if ( ! function_exists( 'huda_scroll_top' ) ) :
	function huda_scroll_top(){
		$scrollTop = 'event.preventDefault(); window.scrollTo({top: 0, behavior: "smooth"});';
		?>
			<div id="scrollTop">
				<a href="#" class="backto-top" onclick='<?php echo esc_js( $scrollTop ) ?>'>
					<i class="ri-arrow-up-line"></i>
				</a>
			</div>
		<?php
	}	
endif;