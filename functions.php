<?php

include_once __DIR__ . '/functions/pagination.php';
include_once __DIR__ . '/functions/register_sidebar.php';

function my_enqueue_styles()
{
    wp_enqueue_style('destyle', get_stylesheet_directory_uri().'/destyle.css');
    wp_enqueue_style('style', get_stylesheet_uri(), ['destyle'], false, 'all');
}

add_action('wp_enqueue_scripts', 'my_enqueue_styles');

add_theme_support('post-thumbnails');

function search_filter(WP_Query $query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts', 'search_filter');
