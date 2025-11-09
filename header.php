<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package washup
 */
?>

<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

    <?php wp_body_open();?>


    <?php
        $washup_preloader = get_theme_mod( 'washup_preloader', false );
        $washup_backtotop = get_theme_mod( 'washup_backtotop', false );

        $washup_preloader_logo = get_template_directory_uri() . '/assets/images/loader.png';

        $preloader_logo = get_theme_mod('preloader_logo', $washup_preloader_logo);

    ?>

    <?php if ( !empty( $washup_preloader ) ): ?>
        <!--Start Preloader-->
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <!--End Preloader-->
    <?php endif;?>

    <?php if ( !empty( $washup_backtotop ) ): ?>
    <!-- back to top start -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-angle-up"></i></a>
    <!-- back to top end -->
    <?php endif;?>

    
    <!-- header start -->
    <?php do_action( 'washup_header_style' );?>
    <!-- header end -->
    
    <!-- wrapper-box start -->
    <?php do_action( 'washup_before_main_content' );?>