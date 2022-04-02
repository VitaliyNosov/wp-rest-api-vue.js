<?php 



function rest_api_scripts() {
// style
wp_enqueue_style( 'vue-spa-style', get_stylesheet_uri(), array());
// wp_enqueue_style( 'app-style', get_template_directory_uri(), '/dist/css/app.css');
// wp_enqueue_style( 'chunk-style', get_template_directory_uri(), '/dist/css/chunk-vendors.css');
// wp_style_add_data( 'style', 'rtl', 'replace' );
// scripts
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    // wp_enqueue_script( 'app-script',get_template_directory_uri() . '/dist/js/app.js', array() );
    // wp_enqueue_script( 'about-script', get_template_directory_uri() . '/dist/js/about.js', array() );
    // wp_enqueue_script( 'chunk-script',get_template_directory_uri() . '/dist/js/chunk-vendors.js', array() );
}

}
add_action( 'wp_enqueue_scripts', 'rest_api_scripts');

