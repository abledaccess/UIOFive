<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package UIOFive
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function uio5_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'uio5_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function uio5_jetpack_setup
add_action( 'after_setup_theme', 'uio5_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function uio5_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function uio5_infinite_scroll_render
