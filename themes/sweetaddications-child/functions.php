<?php

function twentytwentyonechild_wp_enqueue_scripts() {
    wp_enqueue_style( 'twentytwentyonechild', get_stylesheet_uri(),
        array( 'parenthandle' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyonechild_wp_enqueue_scripts' );