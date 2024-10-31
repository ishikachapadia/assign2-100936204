<?php

function my_theme_enqueue_styles() {
    $parent_style = 'twentytwentyfour-style'; // Parent theme's style handle.

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Add support for menus
function my_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'twentytwentyfour-child'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');
