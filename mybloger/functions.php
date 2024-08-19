<?php


// mybloger theme support
function myblogger_theme_support()
{

    add_theme_support('title-tag');

    add_theme_support(
        'post-thumbnails'
    );
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');


    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);


    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');


}

add_action('after_setup_theme', 'myblogger_theme_support');












