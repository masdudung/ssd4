<?php
/**
 * Theme Functions
 */

function theme_name_scripts() {
    # include default style css
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    # Include Bootstrap CSS
    wp_enqueue_style(
        'bootstrap.min',
        get_template_directory_uri() . '/css/bootstrap.min.css',
    );

    # include Bootstrap JS
    wp_enqueue_script ( 
        'jquery-js', 
        get_template_directory_uri() . '/js/jquery.min.js' 
    );
    wp_enqueue_script ( 
        'bootstrap-js', 
        get_template_directory_uri() . '/js/bootstrap.min.js' 
    );
    wp_enqueue_script ( 
        'custom-js', 
        get_template_directory_uri() . '/js/custom.js' 
    );

}

# register user script to wordpress theme 
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );