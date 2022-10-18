<?php

function news_files()
{
    // wp_enqueue_script('main_news_js', get_theme_file_uri('/build/index.js'), NULL, true);
    wp_enqueue_script('main_news_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('news_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('news_extra_styles', get_theme_file_uri('/build/index.css'));
    //ori style.css
    // wp_enqueue_style('news_boots_styles', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'news_files');



// add blog 

function blog_files() {
    wp_enqueue_style('blog_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blog_files');


function news_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'news_features');