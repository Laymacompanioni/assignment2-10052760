<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

function twentytwentyonechild_wp_enqueue_scripts() {
    wp_enqueue_style( 'twentytwentyonechild', get_stylesheet_uri(),
        array( 'parenthandle' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyonechild_wp_enqueue_scripts' );