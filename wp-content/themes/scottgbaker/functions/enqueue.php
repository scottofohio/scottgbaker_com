<?php
/***********************************************************************
Baker Design Theme 1.0
Enqueue Scripts
*
* @return void
*
* @uses get_stylesheet_directory_uri()
* @uses wp_enqueue_script()
* @uses wp_enqueue_style()
* @uses wp_register_script()
* @uses wp_register_style()
*/
function register_styles_scripts() {
    
    // Main CSS File & Javascript Files
    wp_register_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/app.css', null, null, 'all' );
    wp_register_script( 'fontawesome', 'https://kit.fontawesome.com/523090fb42.js', null, true );

    wp_register_script( 'cash', get_stylesheet_directory_uri() . '/assets/js/cash.min.js', null, null, true );
    wp_register_script( 'highlight', get_stylesheet_directory_uri() . '/assets/js/highlight.pack.js', null, null, true );
    wp_register_script( 'app', get_stylesheet_directory_uri() . '/assets/js/app.js', array( 'cash', 'highlight' ), null, true );
    // Modernizr

    if ( ! is_admin() && ! is_login_page() ) {
        wp_enqueue_style( 'styles' );

        wp_enqueue_script( 'app' );
        wp_enqueue_script( 'lib' );
        wp_enqueue_script( 'cash' );
        wp_enqueue_script( 'fontawesome' );
        wp_deregister_script('jquery'); 
        // wp_enqueue_script( 'translate' );
    }
}

function custom_wp_admin_styles() {
    wp_enqueue_style( 'wp-admin-styles', get_stylesheet_directory_uri() . '/assets/css/admin.css');
}

/** Register/add filters & actions */
add_action('admin_enqueue_scripts', 'custom_wp_admin_styles' );
add_action( 'init', 'register_styles_scripts' );
