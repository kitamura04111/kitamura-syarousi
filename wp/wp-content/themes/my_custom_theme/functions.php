<?php
function enqueue_my_scripts() {
    wp_enqueue_style('my-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');
