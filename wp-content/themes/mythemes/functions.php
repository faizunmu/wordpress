<?php

function add_theme_scripts()
{
    wp_enqueue_style('style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array('bootstrap'), 5.1, 'all');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), 1.0, true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');