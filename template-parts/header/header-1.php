<?php 

	/**
	 * Template part for displaying header layout one
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package washup
	*/

	// info
   $washup_topbar_switch = get_theme_mod( 'washup_topbar_switch', false );
   $washup_search = get_theme_mod( 'washup_search', false );
   $washup_phone_num = get_theme_mod( 'washup_phone_num', __( '+5204654544', 'washup' ) );
   $washup_mail_id = get_theme_mod( 'washup_mail_id', __( 'demo@example.com', 'washup' ) );
   $washup_office_time = get_theme_mod( 'washup_office_time', __( 'Sun - Fri: 8.00am - 10.00pm', 'washup' ) );
   $washup_address = get_theme_mod( 'washup_address', __( '24/21, 2nd Rangpur, Sapla', 'washup' ) );

   // header right
   $washup_header_right = get_theme_mod( 'washup_header_right', false );
   
   // contact button
	$washup_button_text = get_theme_mod( 'washup_button_text', __( 'Contact Us', 'washup' ) );
   $washup_button_link = get_theme_mod( 'washup_button_link', __( '#', 'washup' ) );

?>

<header class="main-header clearfix">
   <?php if ( !empty( $washup_topbar_switch ) ): ?>
      <div class="main-header__top clearfix">
            <div class="container clearfix">
               <div class="main-header__top-inner clearfix">
                  <div class="main-header__top-left">
                        <ul class="main-header__top-address">
                           <?php if ( !empty( $washup_mail_id ) ): ?>
                           <li>
                              <div class="icon">
                                    <span class="icon-email"></span>
                              </div>
                              <div class="text">
                                    <p><a href="mailto:<?php echo esc_attr($washup_mail_id); ?>"><?php echo esc_html($washup_mail_id); ?></a></p>
                              </div>
                           </li>
                           <?php endif; ?>
                           <li>
                              <div class="icon">
                                    <span class="icon-wall-clock"></span>
                              </div>
                              <div class="text">
                                    <p><?php echo esc_html($washup_office_time); ?></p>
                              </div>
                           </li>
                        </ul>
                  </div>
                  <div class="main-header__top-right">
                        <?php if ( !empty( $washup_search ) ): ?>
                           <div class="main-header__top-right-search">
                              <a href="#" class="search-toggler"> <i class="fa fa-search"></i></a>
                           </div>
                        <?php endif;?>

                        <div class="main-header__top-right-social">
                           <?php washup_header_social_profiles() ?>
                        </div>

                        <div class="language-switcher header__lang">
                           <?php washup_header_lang_default() ?>
                        </div>
                  </div>
               </div>
            </div>
      </div>
   <?php endif; ?>

   <nav class="main-menu clearfix">
         <div class="container clearfix">
            <div class="main-menu-wrapper clearfix">
               <div class="main-menu-wrapper__left">
                     <div class="main-menu-wrapper__logo">
                        <?php washup_header_logo();?>
                     </div>
               </div>
               <div class="main-menu-wrapper__right">
                     <div class="main-menu-wrapper__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <?php washup_header_menu();?>
                     </div>
                     <?php if ( !empty( $washup_header_right ) ): ?>
                     <?php if ( !empty( $washup_button_text ) ): ?>
                        <a href="<?php echo esc_url($washup_button_link); ?>" class="thm-btn main-header__btn">
                           <span><?php echo esc_html($washup_button_text); ?></span>
                           <i class="liquid"></i>
                        </a>
                     <?php endif; ?>
                     <?php endif; ?>
               </div>
            </div>
         </div>
   </nav>
</header>

<?php get_template_part( 'template-parts/header/header-side-info' ); ?>