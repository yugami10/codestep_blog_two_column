<?php

if (function_exists('register_sidebar')) {
    /**
     * あびゃっ
     */
    register_sidebar([
        'name' => 'サイドバー',
        'id' => 'sidebar',
        'description' => 'サイドバーウィジェット',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="side-title">',
        'after_title' => '</h3>',
    ]);
}
