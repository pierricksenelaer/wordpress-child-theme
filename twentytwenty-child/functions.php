<?php

// Enqueuing Child Stylesheet
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' );

function my_child_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentytwenty-style' for the Twenty Twenty theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

// Enqueuing Child Script
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_scripts' );

function my_child_theme_enqueue_scripts() {
	wp_enqueue_script( 'twentytwenty-child-js', get_stylesheet_directory_uri().'/assets/js/child-custom-script.js', '', '1.0.0' );
}

// Example of a Child custom function
function my_favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}

add_action( 'wp_head', 'my_favicon_link' );


