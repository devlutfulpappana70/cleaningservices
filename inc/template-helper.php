<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package washup
 */

/** 
 *
 * washup header
 */

function washup_check_header() {
    $washup_header_style = function_exists( 'get_field' ) ? get_field( 'header_style' ) : NULL;
    $washup_default_header_style = get_theme_mod( 'choose_default_header', 'header-style-1' );

    if ( $washup_header_style == 'header-style-1' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-1' );
    } 
    elseif ( $washup_header_style == 'header-style-2' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-2' );
    } else {

        /** default header style **/
        if ( $washup_default_header_style == 'header-style-2' ) {
            get_template_part( 'template-parts/header/header-2' );
        } else {
            get_template_part( 'template-parts/header/header-1' );
        }
    }

}
add_action( 'washup_header_style', 'washup_check_header', 10 );


/**
 * [washup_header_lang description]
 * @return [type] [description]
 */
function washup_header_lang_default() {
    $washup_header_lang = get_theme_mod( 'washup_header_lang', false );
    if ( $washup_header_lang ): ?>

    <ul>
        <li><a href="javascript:void(0)"><?php print esc_html__( 'English', 'washup' );?> <i class="fas fa-angle-down"></i></a>
        <?php do_action( 'washup_language' );?>
        </li>
    </ul>

    <?php endif;?>
<?php
}

/**
 * [washup_language_list description]
 * @return [type] [description]
 */
function _washup_language( $mar ) {
    return $mar;
}
function washup_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul>';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__( 'England', 'washup' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'France', 'washup' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Germany', 'washup' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Italy', 'washup' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Span', 'washup' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _washup_language( $mar );
}
add_action( 'washup_language', 'washup_language_list' );


// header logo
function washup_header_logo() { ?>
        <?php
        $washup_logo_on = function_exists( 'get_field' ) ? get_field( 'is_enable_sec_logo' ) : NULL;
        $washup_logo = get_template_directory_uri() . '/assets/images/resources/logo-1.png';
        $washup_logo_black = get_template_directory_uri() . '/assets/images/resources/footer-logo.png';

        $washup_site_logo = get_theme_mod( 'logo', $washup_logo );
        $washup_secondary_logo = get_theme_mod( 'seconday_logo', $washup_logo_black );
        ?>

        <?php if ( !empty( $washup_logo_on ) ) : ?>
            <a href="<?php print esc_url( home_url( '/' ) );?>">
                <img src="<?php print esc_url( $washup_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'washup' );?>">
            </a>
        <?php else : ?>
            <a href="<?php print esc_url( home_url( '/' ) );?>">
                <img src="<?php print esc_url( $washup_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'washup' );?>">
            </a>
        <?php endif; ?>
   <?php
}

// header logo
function washup_header_sticky_logo() {?>
    <?php
        $washup_logo_black = get_template_directory_uri() . '/assets/images/resources/logo-1.png';
        $washup_secondary_logo = get_theme_mod( 'seconday_logo', $washup_logo_black );
    ?>
      <a class="sticky-logo" href="<?php print esc_url( home_url( '/' ) );?>">
          <img src="<?php print esc_url( $washup_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'washup' );?>" />
      </a>
    <?php
}

function washup_mobile_logo() {
    // side info
    $washup_mobile_logo_hide = get_theme_mod( 'washup_mobile_logo_hide', false );

    $washup_site_logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );

    ?>

    <?php if ( !empty( $washup_mobile_logo_hide ) ): ?>
    <div class="side__logo mb-25">
        <a class="sideinfo-logo" href="<?php print esc_url( home_url( '/' ) );?>">
            <img src="<?php print esc_url( $washup_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'washup' );?>" />
        </a>
    </div>
    <?php endif;?>



<?php }

/**
 * [washup_header_social_profiles description]
 * @return [type] [description]
 */
function washup_header_social_profiles() {
    $washup_topbar_fb_url = get_theme_mod( 'washup_topbar_fb_url', __( '#', 'washup' ) );
    $washup_topbar_twitter_url = get_theme_mod( 'washup_topbar_twitter_url', __( '#', 'washup' ) );
    $washup_topbar_youtube_url = get_theme_mod( 'washup_topbar_youtube_url', __( '#', 'washup' ) );
    $washup_topbar_pinterest_url = get_theme_mod( 'washup_topbar_pinterest_url', __( '#', 'washup' ) );
    $washup_topbar_linkedin_url = get_theme_mod( 'washup_topbar_linkedin_url', __( '#', 'washup' ) );
    ?>
        <?php if ( !empty( $washup_topbar_fb_url ) ): ?>
            <a href="<?php print esc_url( $washup_topbar_fb_url );?>"><i class="fab fa-facebook"></i></a>
        <?php endif;?>
        <?php if ( !empty( $washup_topbar_twitter_url ) ): ?>
            <a href="<?php print esc_url( $washup_topbar_twitter_url );?>"><i class="fab fa-twitter"></i></a>
        <?php endif;?>
        <?php if ( !empty( $washup_topbar_youtube_url ) ): ?>
            <a href="<?php print esc_url( $washup_topbar_youtube_url );?>"><i class="fab fa-youtube"></i></a>
        <?php endif;?>
        <?php if ( !empty( $washup_topbar_pinterest_url ) ): ?>
            <a href="<?php print esc_url( $washup_topbar_pinterest_url );?>"><i class="fab fa-pinterest-p"></i></a>
        <?php endif;?>
        <?php if ( !empty( $washup_topbar_linkedin_url ) ): ?>
            <a href="<?php print esc_url( $washup_topbar_linkedin_url );?>"><i class="fab fa-linkedin"></i></a>
        <?php endif;?>
    <?php
}

/**
 * [washup_header_menu description]
 * @return [type] [description]
 */
function washup_header_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => 'main-menu__list',
            'container'      => '',
            'fallback_cb'    => 'washup_Navwalker_Class::fallback',
            'walker'         => new washup_Navwalker_Class,
        ] );
    ?>
    <?php
}

/**
 * [washup_header_menu description]
 * @return [type] [description]
 */
function washup_mobile_menu() {
    ?>
    <?php
        $washup_menu = wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'menu_id'        => 'mobile-menu-active',
            'echo'           => false,
        ] );

    $washup_menu = str_replace( "menu-item-has-children", "menu-item-has-children has-children", $washup_menu );
        echo wp_kses_post( $washup_menu );
    ?>
    <?php
}

/**
 *
 * washup footer
 */
add_action( 'washup_footer_style', 'washup_check_footer', 10 );

function washup_check_footer() {
    $washup_footer_style = function_exists( 'get_field' ) ? get_field( 'footer_style' ) : NULL;
    $washup_default_footer_style = get_theme_mod( 'choose_default_footer', 'footer-style-1' );

    if ( $washup_footer_style == 'footer-style-1' ) {
        get_template_part( 'template-parts/footer/footer-1' );
    } 
    elseif ( $washup_footer_style == 'footer-style-2' ) {
        get_template_part( 'template-parts/footer/footer-2' );
    } else {

        /** default footer style **/
        if ( $washup_default_footer_style == 'footer-style-2' ) {
            get_template_part( 'template-parts/footer/footer-2' );
        } else {
            get_template_part( 'template-parts/footer/footer-1' );
        }
    }
}

// washup_copyright_text
function washup_copyright_text() {
   print get_theme_mod( 'washup_copyright', esc_html__( 'Copyright © 2023 Washup. All Rights Reserved.', 'washup' ) );
}


/**
 *
 * pagination
 */
if ( !function_exists( 'washup_pagination' ) ) {

    function _washup_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function washup_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _washup_pagi_callback( $pagi );
    }
}

// theme color
function washup_custom_color() {
    $washup_color_option_prim = get_theme_mod( 'washup_color_option_prim', '#004a94' );
    $washup_color_option_sec = get_theme_mod( 'washup_color_option_sec', '#052944' );
    $washup_color_option_body = get_theme_mod( 'washup_color_option_body', '#606060' );
    $washup_color_option_black = get_theme_mod( 'washup_color_option_black', '#03041D' );
    $washup_color_option_white = get_theme_mod( 'washup_color_option_white', '#fff' );
  
    wp_enqueue_style( 'washup-custom', WASHUP_THEME_CSS_DIR . 'washup-custom.css', [] );
  
    if ( !empty($washup_color_option_prim) || !empty($washup_color_option_sec) || !empty($washup_color_option_body) || !empty($washup_color_option_black) || !empty($washup_color_option_white)) {
        $custom_css = '';
  
        $custom_css .= "html:root{ 
          --thm-base: " . $washup_color_option_prim . "; 
          --thm-base-rgb: " . $washup_color_option_prim . "; 
          --thm-black: " . $washup_color_option_sec . "; 
          --thm-black-rgb: " . $washup_color_option_sec . "; 
          --thm-gray: " . $washup_color_option_body . ";
          --thm-gray-rgb: " . $washup_color_option_body . ";
          --washup-black: " . $washup_color_option_black . ";
          --washup-white: " . $washup_color_option_white . "; 
        }";
          
        $custom_css .= "body .footer-widget__title { color: " . $washup_color_option_white . "!important}";
  
  
        wp_add_inline_style( 'washup-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'washup_custom_color' );

// washup_kses_intermediate
function washup_kses_intermediate( $string = '' ) {
    return wp_kses( $string, washup_get_allowed_html_tags( 'intermediate' ) );
}

function washup_get_allowed_html_tags( $level = 'basic' ) {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}


// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function washup_kses($raw){

   $allowed_tags = array(
      'a'                         => array(
         'class'   => array(),
         'href'    => array(),
         'rel'  => array(),
         'title'   => array(),
         'target' => array(),
      ),
      'abbr'                      => array(
         'title' => array(),
      ),
      'b'                         => array(),
      'blockquote'                => array(
         'cite' => array(),
      ),
      'cite'                      => array(
         'title' => array(),
      ),
      'code'                      => array(),
      'del'                    => array(
         'datetime'   => array(),
         'title'      => array(),
      ),
      'dd'                     => array(),
      'div'                    => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'dl'                     => array(),
      'dt'                     => array(),
      'em'                     => array(),
      'h1'                     => array(),
      'h2'                     => array(),
      'h3'                     => array(),
      'h4'                     => array(),
      'h5'                     => array(),
      'h6'                     => array(),
      'i'                         => array(
         'class' => array(),
      ),
      'img'                    => array(
         'alt'  => array(),
         'class'   => array(),
         'height' => array(),
         'src'  => array(),
         'width'   => array(),
      ),
      'li'                     => array(
         'class' => array(),
      ),
      'ol'                     => array(
         'class' => array(),
      ),
      'p'                         => array(
         'class' => array(),
      ),
      'q'                         => array(
         'cite'    => array(),
         'title'   => array(),
      ),
      'span'                      => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'iframe'                 => array(
         'width'         => array(),
         'height'     => array(),
         'scrolling'     => array(),
         'frameborder'   => array(),
         'allow'         => array(),
         'src'        => array(),
      ),
      'strike'                 => array(),
      'br'                     => array(),
      'strong'                 => array(),
      'data-wow-duration'            => array(),
      'data-wow-delay'            => array(),
      'data-wallpaper-options'       => array(),
      'data-stellar-background-ratio'   => array(),
      'ul'                     => array(
         'class' => array(),
      ),
      'svg' => array(
           'class' => true,
           'aria-hidden' => true,
           'aria-labelledby' => true,
           'role' => true,
           'xmlns' => true,
           'width' => true,
           'height' => true,
           'viewbox' => true, // <= Must be lower case!
       ),
       'g'     => array( 'fill' => true ),
       'title' => array( 'title' => true ),
       'path'  => array( 'd' => true, 'fill' => true,  ),
      );

   if (function_exists('wp_kses')) { // WP is here
      $allowed = wp_kses($raw, $allowed_tags);
   } else {
      $allowed = $raw;
   }

   return $allowed;
}