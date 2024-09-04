<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Huda
 */

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
			esc_attr( get_the_date( DATE_W3C ) . 'T' . get_the_time('H:i:s')),
			esc_html( get_the_date() . ' ' . get_the_time() ),
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'huda' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on"> <i class="far fa-clock"></i> ' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;

if ( ! function_exists( 'huda_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function huda_posted_by() {
		$author_avatar_url = esc_url( get_avatar_url( get_the_author_meta( 'ID' ), array('size' => 26) ) ); 
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( ' - by %s', 'post author', 'huda' ),
			'<img class="author-avatar" src="' . $author_avatar_url . '"></img> <span class="author-title"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>',
			
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
			'prev_text' => __( '<i class="fas fa-arrow-left"></i> Previous', 'huda' ),
			'next_text' => __( 'Next <i class="fas fa-arrow-right"></i>', 'huda' ),
		) );
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
		echo wp_kses_post( '<i class="fas fa-book-reader"></i> ' . $read_time . $label );
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
		$url_field = $fields['url'];
		$cookies_field = $fields['cookies'];
		unset( $fields['comment'] );
		unset( $fields['author'] );
		unset( $fields['email'] );
		unset( $fields['url'] );
		unset( $fields['cookies'] );
		// the order of fields is the order below, change it as needed:
		$fields['author'] = $author_field;
		$fields['email'] = $email_field;
		$fields['url'] = $url_field;
		$fields['comment'] = $comment_field;
		$fields['cookies'] = $cookies_field;
		// done ordering, now return the fields:
		return $fields;
	}
	add_filter( 'comment_form_fields', 'huda_comment_form_fields' );
endif;

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