<?php
// Configurações iniciais do tema
function respectcoin_theme_setup() {
    // Suporte para menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'respectcoin'),
    ));
    // Suporte para thumbnails
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'respectcoin_theme_setup');

// Enqueue scripts e styles
function respectcoin_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'respectcoin_enqueue_styles');
?>
