<?php
/**
 * The template for search form
 *
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package Huda
 */
?>

<div class="search-form-wrapper">
	<form class="huda-search-form" id="hudaSearchForm" action="<?php echo esc_url( home_url('/') ) ?>" method="get" autocomplete="off">
		<label for="search" class="visually-hidden"><?php esc_html_e( 'Search', 'huda' ); ?></label>
		<input type="text" name="s" id="searchInput" onkeyup="fetchResults()" placeholder="<?php esc_attr_e('Search...', 'huda') ?>" value="<?php the_search_query(); ?>" />
		<input type="submit" alt="Search" class="button visually-hidden"/>
	</form>

	<div class="search-result-wrapper">
		<div id="datafetch"></div>
	</div>
</div>

