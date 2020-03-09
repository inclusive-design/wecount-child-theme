<?php
/**
 * We Count Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wecount
 */

add_action( 'wp_enqueue_scripts', 'chaplin_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function chaplin_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'chaplin-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'wecount-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'chaplin-style' )
	);

}

/**
 * Add post format support.
 */
add_theme_support( 'post-formats', array( 'link', 'quote', 'video', 'audio' ) );
