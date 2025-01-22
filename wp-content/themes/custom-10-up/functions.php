<?php
function custom10up_setup() {
    add_theme_support( 'menus' );
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'custom10up_setup');

function custom10up_enqueue_styles() {
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'custom10up_enqueue_styles');

function custom10up_enqueue_scripts() {
    wp_enqueue_script(
        'theme-script', 
        get_template_directory_uri() . '/assets/js/script.js', 
        array(), 
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'custom10up_enqueue_scripts');
