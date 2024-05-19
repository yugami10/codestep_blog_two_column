<?php

function my_enqueue_styles() {
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', [], false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), ['ress'], false, 'all');
}

add_action('wp_enqueue_scripts', 'my_enqueue_styles');