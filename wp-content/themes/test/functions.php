<?php

function wptest_setup()
{

    load_theme_textdomain('wptest');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array('height' => '', 'widht' => '', 'flex-height' => true));
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size('180', '260');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery'));
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wptest')

    ));

}

add_action('after_setup_theme', 'wptest_setup');

function my_scripts_method()
{

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', false, null, true);
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'my_scripts_method');


function wptest_scripts()
{
    wp_enqueue_style('materialize', get_template_directory_uri() . '/css/materialize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('style-css', get_stylesheet_uri());

    wp_enqueue_script('materialize', get_template_directory_uri() .
        '/js/materialize.js', array('jquery'), ' ');
    wp_enqueue_script('init', get_template_directory_uri() .
        '/js/init.js', array('jquery'), ' ');
}

add_action('wp_enqueue_scripts', 'wptest_scripts');



