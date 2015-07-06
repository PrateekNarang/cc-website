<?php 
/**
 * Colored Cow functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @package WordPress
 * @subpackage Colored Cow
 * @since Colored Cow 1.0
 */
if ( ! function_exists( 'cc_root_path' ) ) :

function cc_root_path() {
	global $wp_query;

	return "path";
}
endif;
