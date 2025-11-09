<?php 

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package washup
*/

$footer_bg_img = get_theme_mod( 'washup_footer_bg' );
$washup_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'washup_footer_bg' ) : '';
$washup_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'washup_footer_bg_color' ) : '';
$footer_bg_color = get_theme_mod( 'washup_footer_bg_color' );

// bg image
$bg_img = !empty( $washup_footer_bg_url_from_page['url'] ) ? $washup_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $washup_footer_bg_color_from_page ) ? $washup_footer_bg_color_from_page : $footer_bg_color;


// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
    if ( is_active_sidebar( 'footer-' . $num ) ) {
        $footer_columns++;
    }
}

switch ( $footer_columns ) {
case '1':
    $footer_class[1] = 'col-lg-12';
    break;
case '2':
    $footer_class[1] = 'col-lg-6 col-md-6 wow fadeInUp';
    $footer_class[2] = 'col-lg-6 col-md-6 wow fadeInUp';
    break;
case '3':
    $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5 wow fadeInUp';
    $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7 wow fadeInUp';
    $footer_class[3] = 'col-xl-4 col-lg-6 wow fadeInUp';
    break;
case '4':
    $footer_class[1] = 'col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp';
    $footer_class[2] = 'col-xl-2 col-lg-2 col-md-6 wow animated fadeInUp';
    $footer_class[3] = 'col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp';
    $footer_class[4] = 'col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp';
    break;
default:
    $footer_class = 'col-xl-3 col-lg-3 col-md-6';
    break;
}

?>

<!--Start Footer One-->
<footer class="footer-one">
    <div class="footer-one__bg" data-bg-color="<?php print esc_attr( $bg_color );?>" data-background="<?php print esc_url( $bg_img );?>"></div>
    <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
    <div class="footer-one__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-one__top-wrapper">
                        <div class="row">
                            <?php
                            if ( $footer_columns > 4 ) {
                                print '<div class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">';
                                dynamic_sidebar( 'footer-1' );
                                print '</div>';

                                print '<div class="col-xl-2 col-lg-2 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">';
                                dynamic_sidebar( 'footer-2' );
                                print '</div>';

                                print '<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">';
                                dynamic_sidebar( 'footer-3' );
                                print '</div>';

                                print '<div class="col-xl-3 col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">';
                                dynamic_sidebar( 'footer-4' );
                                print '</div>';
                                } else {
                                    for ( $num = 1; $num <= $footer_columns; $num++ ) {
                                        if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                            continue;
                                        }
                                        print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                                        dynamic_sidebar( 'footer-' . $num );
                                        print '</div>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <!--Start Footer One Bottom-->
    <div class="footer-one__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-one__bottom-inner">
                        <div class="footer-one__bottom-text">
                            <p><?php print washup_copyright_text(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer One Bottom-->
</footer>
<!--End Footer One-->