<?php

function my_enqueue_styles()
{
    wp_enqueue_style('destyle', get_stylesheet_directory_uri().'/destyle.css');
    wp_enqueue_style('style', get_stylesheet_uri(), ['destyle'], false, 'all');
}

add_action('wp_enqueue_scripts', 'my_enqueue_styles');
