<?php


// myblogger theme support
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

    register_nav_menus(
    array(
      'new-menu' => __( 'New Menu' ),
      'another-menu' => __( 'Another Menu' ),
      'an-extra-menu' => __( 'An Extra Menu' )
    )
  );


}

add_action('after_setup_theme', 'myblogger_theme_support');

function myblogger_header() {
    get_template_part( 'template-parts/header/header-1' );
}

function myblogger_logo()  {
    $myblogger_logo = get_theme_mod( 'myblogger_logo', get_template_directory_uri() .  '/assets/img/logo/logo-black.svg' );
?>


    <a href="<?php echo esc_url(home_url('/'));  ?> ">
        <img src="<?php echo esc_url( $myblogger_logo ); ?>" alt=" <?php  echo bloginfo( ) ?> ">
    </a>

    <?php

}



include_once('inc/common/scripts.php');
include_once('inc/myblogger-kirki.php');
include_once('inc/theme-functions.php');
include_once('inc/nav-walker.php');