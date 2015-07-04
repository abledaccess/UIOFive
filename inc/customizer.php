<?php
/**
 * UIO5 Theme Customizer
 *
 * @package UIO5
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function UIO5_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'UIO5_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function UIO5_customize_preview_js() {
	wp_enqueue_script( 'UIO5_customizer', get_template_directory_uri() . '/js/libs/customizer.js', array( 'customize-preview' ), '2015702', true );
}
add_action( 'customize_preview_init', 'UIO5_customize_preview_js' );
