<?php

function theme_support()
{
    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('menus');

    add_theme_support('post-thumbnails');

    add_theme_support('widgets');
}

add_action('after_setup_theme', 'theme_support');

function add_theme_scripts()
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array(), '5.1.3', true);
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/6da01f0ed9.js', array(), '6.1.1', true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');
