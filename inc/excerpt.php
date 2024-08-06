<?php
/**
 * Filter the excerpt length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
add_filter( 'excerpt_length', function( $length ) { return 9; } );
add_filter('excerpt_more', '__return_false');