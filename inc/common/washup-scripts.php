<?php

/**
 * washup_scripts description
 * @return [type] [description]
 */
function washup_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'washup-fonts', washup_fonts_url(), array(), time() );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', WASHUP_THEME_ASSETS.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', WASHUP_THEME_ASSETS.'vendors/bootstrap/css/bootstrap.min.css', array() );
    }
    wp_enqueue_style( 'animate', WASHUP_THEME_ASSETS . 'vendors/animate/animate.min.css', [] );
    wp_enqueue_style( 'custom-animate', WASHUP_THEME_ASSETS . 'vendors/animate/custom-animate.css', [] );
    wp_enqueue_style( 'font-awesome-5', WASHUP_THEME_ASSETS . 'vendors/fontawesome/css/all.min.css', [] );
    wp_enqueue_style( 'magnific-popup', WASHUP_THEME_ASSETS . 'vendors/jquery-magnific-popup/jquery.magnific-popup.css', [] );
    wp_enqueue_style( 'jarallax', WASHUP_THEME_ASSETS . 'vendors/jarallax/jarallax.css', [] );
    wp_enqueue_style( 'odometer', WASHUP_THEME_ASSETS . 'vendors/odometer/odometer.min.css', [] );
    wp_enqueue_style( 'conult-icons', WASHUP_THEME_ASSETS . 'vendors/conult-icons/style.css', [] );
    wp_enqueue_style( 'reey-font', WASHUP_THEME_ASSETS . 'vendors/reey-font/stylesheet.css', [] );
    wp_enqueue_style( 'owl-carousel', WASHUP_THEME_ASSETS . 'vendors/owl-carousel/owl.carousel.min.css', [] );
    wp_enqueue_style( 'owl-carousel-default', WASHUP_THEME_ASSETS . 'vendors/owl-carousel/owl.theme.default.min.css', [] );
    wp_enqueue_style( 'bootstrap-select', WASHUP_THEME_ASSETS . 'vendors/bootstrap-select/css/bootstrap-select.min.css', [] );
    wp_enqueue_style( 'nice-select', WASHUP_THEME_ASSETS . 'vendors/nice-select/nice-select.css', [] );
    wp_enqueue_style( 'washup-core', WASHUP_THEME_ASSETS . 'css/washup-core.css', [], time() );
    wp_enqueue_style( 'washup-unit', WASHUP_THEME_ASSETS . 'css/washup-unit.css', [], time() );
    wp_enqueue_style( 'washup-responsive', WASHUP_THEME_ASSETS . 'css/washup-responsive.css', [], time() );
    wp_enqueue_style( 'washup-custom', WASHUP_THEME_ASSETS . 'css/washup-custom.css', [] );
    wp_enqueue_style( 'washup-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'bootstrap-bundle', WASHUP_THEME_ASSETS . 'vendors/bootstrap/js/bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'appear', WASHUP_THEME_ASSETS . 'vendors/jquery-appear/jquery.appear.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'magnific-popup', WASHUP_THEME_ASSETS . 'vendors/jquery-magnific-popup/jquery.magnific-popup.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'odometer', WASHUP_THEME_ASSETS . 'vendors/odometer/odometer.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'jarallax', WASHUP_THEME_ASSETS . 'vendors/jarallax/jarallax.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'wow', WASHUP_THEME_ASSETS . 'vendors/wow/wow.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'isotope', WASHUP_THEME_ASSETS . 'vendors/isotope/isotope.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'countdown', WASHUP_THEME_ASSETS . 'vendors/countdown/countdown.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'owl-carousel', WASHUP_THEME_ASSETS . 'vendors/owl-carousel/owl.carousel.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'bootstrap-select', WASHUP_THEME_ASSETS . 'vendors/bootstrap-select/js/bootstrap-select.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'nice-select', WASHUP_THEME_ASSETS . 'vendors/nice-select/jquery.nice-select.min.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'washup-main', WASHUP_THEME_ASSETS . 'js/washup.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'washup_scripts' );

/*
Register Fonts
 */
function washup_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'washup' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap';
    }
    return $font_url;
}