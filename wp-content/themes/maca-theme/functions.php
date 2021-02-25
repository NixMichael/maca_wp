<?php

function load_css() {
    wp_register_style('main', get_template_directory_uri() . '/css/app.css', array(), rand(11,9999), 'all');
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js() {
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(
    array(
        'main-menu' => 'Main Menu',
        'mobile-menu' => 'Mobile Menu'
    )
);