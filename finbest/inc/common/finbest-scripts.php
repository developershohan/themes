<?php

/**
 * finbest_scripts description
 * @return [type] [description]
 */
function finbest_scripts() {

    /**
     * all css files
    */ 

    wp_enqueue_style( 'finbest-fonts', finbest_fonts_url(), array(), '1.0.0' );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', FINBEST_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', FINBEST_THEME_CSS_DIR.'bootstrap.css', array() );
    }
    wp_enqueue_style( 'animate', FINBEST_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'swiper-bundle', FINBEST_THEME_CSS_DIR . 'swiper-bundle.css', [] );
    wp_enqueue_style( 'magnific-popup', FINBEST_THEME_CSS_DIR . 'magnific-popup.css', [] );
    wp_enqueue_style( 'font-awesome-pro', FINBEST_THEME_CSS_DIR . 'font-awesome-pro.css', [] );
    wp_enqueue_style( 'flaticon', FINBEST_THEME_CSS_DIR . 'flaticon.css', [] );
    wp_enqueue_style( 'spacing', FINBEST_THEME_CSS_DIR . 'spacing.css', [] );
    wp_enqueue_style( 'finbest-core', FINBEST_THEME_CSS_DIR . 'finbest-core.css', [], time() );
    wp_enqueue_style( 'finbest-unit', FINBEST_THEME_CSS_DIR . 'finbest-unit.css', [], time() );
    wp_enqueue_style( 'finbest-custom', FINBEST_THEME_CSS_DIR . 'finbest-custom.css', [] );
    wp_enqueue_style( 'finbest-style', get_stylesheet_uri() );


    // all js
    wp_enqueue_script( 'waypoints', FINBEST_THEME_JS_DIR . 'waypoints.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'bootstrap-bundle', FINBEST_THEME_JS_DIR . 'bootstrap-bundle.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper-bundle', FINBEST_THEME_JS_DIR . 'swiper-bundle.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'jquery-appear', FINBEST_THEME_JS_DIR . 'jquery-appear.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-knob', FINBEST_THEME_JS_DIR . 'jquery-knob.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'magnific-popup', FINBEST_THEME_JS_DIR . 'magnific-popup.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jquery-nice-select', FINBEST_THEME_JS_DIR . 'nice-select.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'purecounter', FINBEST_THEME_JS_DIR . 'purecounter.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'countdown', FINBEST_THEME_JS_DIR . 'countdown.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'wow', FINBEST_THEME_JS_DIR . 'wow.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'isotope-pkgd', FINBEST_THEME_JS_DIR . 'isotope-pkgd.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'finbest-main', FINBEST_THEME_JS_DIR . 'main.js', [ 'jquery' ], false, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'finbest_scripts' );


/*
Register Fonts
 */
function finbest_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'finbest' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Jost:wght@400;500;600;700;800;900&family=Kumbh+Sans:wght@400;500;600;700;800&display=swap');
    }
    return $font_url;
}