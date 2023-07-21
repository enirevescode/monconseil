<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'style_theme_enfant', 20);
function style_theme_enfant() {
wp_dequeue_style('astra-style', get_stylesheet_uri() );
wp_enqueue_style('enfant-style', get_stylesheet_uri() );
}
?>