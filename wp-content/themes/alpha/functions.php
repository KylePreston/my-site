<?php
/**
 * Alpha functions and definitions
 *
 * @package Alpha
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function alpha_theme_setup() {

	/* Custom background. */
	add_theme_support( 
		'custom-background',
		array( 'default-color' => '333333' )
	);

	add_theme_support( 'omega-footer-widgets', 3 );
	
}

add_action( 'after_setup_theme', 'alpha_theme_setup', 11 );

/**
 * Enqueue scripts and styles
 */
function alpha_scripts() {
	wp_enqueue_style('lato-font', 'http://fonts.googleapis.com/css?family=Lato:400,700');
}

add_action( 'wp_enqueue_scripts', 'alpha_scripts' );