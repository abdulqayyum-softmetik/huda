<?php
/**
 * Theme Hook Alliance hook stub list.
 *
 * @package  huda
 * @version  1.0
 * @since    1.0
 * @see  http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

/**
 * Define the version of THA support, in case that becomes useful down the road.
 */
define( 'HUDA_HOOKS_VERSION', '1.0' );

/**
 * Themes and Plugins can check for huda_hooks using current_theme_supports( 'huda_hooks', $hook )
 * to determine whether a theme declares itself to support this specific hook type.
 *
 * Example:
 * <code>
 * 		// Declare support for all hook types
 * 		add_theme_support( 'huda_hooks', array( 'all' ) );
 *
 * 		// Declare support for certain hook types only
 * 		add_theme_support( 'huda_hooks', array( 'header', 'content', 'footer' ) );
 * </code>
 */
add_theme_support( 'huda_hooks', array(

	/**
	 * As a Theme developer, use the 'all' parameter, to declare support for all
	 * hook types.
	 * Please make sure you then actually reference all the hooks in this file,
	 * Plugin developers depend on it!
	 */
	'all',

	/**
	 * Themes can also choose to only support certain hook types.
	 * Please make sure you then actually reference all the hooks in this type
	 * family.
	 *
	 * When the 'all' parameter was set, specific hook types do not need to be
	 * added explicitly.
	 */
	'html',
	'body',
	'head',
	'header',
	'content',
	'entry',
	'comments',
	'sidebars',
	'sidebar',
	'footer',

	/**
	 * If/when WordPress Core implements similar methodology, Themes and Plugins
	 * will be able to check whether the version of THA supplied by the theme
	 * supports Core hooks.
	 */
	//'core',
) );

/**
 * Determines, whether the specific hook type is actually supported.
 *
 * Plugin developers should always check for the support of a <strong>specific</strong>
 * hook type before hooking a callback function to a hook of this type.
 *
 * Example:
 * <code>
 * 		if ( current_theme_supports( 'huda_hooks', 'header' ) )
 * 	  		add_action( 'huda_head_top', 'prefix_header_top' );
 * </code>
 *
 * @param bool $bool true
 * @param array $args The hook type being checked
 * @param array $registered All registered hook types
 *
 * @return bool
 */
function huda_current_theme_supports( $bool, $args, $registered ) {
	return in_array( $args[0], $registered[0] ) || in_array( 'all', $registered[0] );
}
add_filter( 'current_theme_supports-huda_hooks', 'huda_current_theme_supports', 10, 3 );

/**
 * HTML <html> hook
 * Special case, useful for <DOCTYPE>, etc.
 * $huda_supports[] = 'html;
 */
function huda_html_before() {
	do_action( 'huda_html_before' );
}
/**
 * HTML <body> hooks
 * $huda_supports[] = 'body';
 */
function huda_body_top() {
	do_action( 'huda_body_top' );
}

function huda_body_bottom() {
	do_action( 'huda_body_bottom' );
}

/**
 * HTML <head> hooks
 *
 * $huda_supports[] = 'head';
 */
function huda_head_top() {
	do_action( 'huda_head_top' );
}

function huda_head_bottom() {
	do_action( 'huda_head_bottom' );
}

/**
 * Semantic <header> hooks
 *
 * $huda_supports[] = 'header';
 */
function huda_header_before() {
	do_action( 'huda_header_before' );
}

function huda_header_after() {
	do_action( 'huda_header_after' );
}

function huda_header_top() {
	do_action( 'huda_header_top' );
}

function huda_header_bottom() {
	do_action( 'huda_header_bottom' );
}

/**
 * Semantic <content> hooks
 *
 * $huda_supports[] = 'content';
 */
function huda_content_before() {
	do_action( 'huda_content_before' );
}

function huda_content_after() {
	do_action( 'huda_content_after' );
}

function huda_content_top() {
	do_action( 'huda_content_top' );
}

function huda_content_bottom() {
	do_action( 'huda_content_bottom' );
}

function huda_content_while_before() {
	do_action( 'huda_content_while_before' );
}

function huda_content_while_after() {
	do_action( 'huda_content_while_after' );
}

/**
 * Semantic <entry> hooks
 *
 * $huda_supports[] = 'entry';
 */
function huda_entry_before() {
	do_action( 'huda_entry_before' );
}

function huda_entry_after() {
	do_action( 'huda_entry_after' );
}

function huda_entry_content_before() {
	do_action( 'huda_entry_content_before' );
}

function huda_entry_content_after() {
	do_action( 'huda_entry_content_after' );
}

function huda_entry_top() {
	do_action( 'huda_entry_top' );
}

function huda_entry_bottom() {
	do_action( 'huda_entry_bottom' );
}

/**
 * Comments block hooks
 *
 * $huda_supports[] = 'comments';
 */
function huda_comments_before() {
	do_action( 'huda_comments_before' );
}

function huda_comments_after() {
	do_action( 'huda_comments_after' );
}

/**
 * Semantic <sidebar> hooks
 *
 * $huda_supports[] = 'sidebar';
 */
function huda_sidebars_before() {
	do_action( 'huda_sidebars_before' );
}

function huda_sidebars_after() {
	do_action( 'huda_sidebars_after' );
}

function huda_sidebar_top() {
	do_action( 'huda_sidebar_top' );
}

function huda_sidebar_bottom() {
	do_action( 'huda_sidebar_bottom' );
}

/**
 * Semantic <footer> hooks
 *
 * $huda_supports[] = 'footer';
 */
function huda_footer_before() {
	do_action( 'huda_footer_before' );
}

function huda_footer_after() {
	do_action( 'huda_footer_after' );
}

function huda_footer_top() {
	do_action( 'huda_footer_top' );
}

function huda_footer_bottom() {
	do_action( 'huda_footer_bottom' );
}