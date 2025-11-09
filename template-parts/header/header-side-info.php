<?php 

   /**
    * Template part for displaying header side information
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package washup
   */

    $washup_sticky_hide = get_theme_mod( 'washup_sticky_hide', false );
    $washup_side_hide = get_theme_mod( 'washup_side_hide', false );
    $washup_search = get_theme_mod( 'washup_search', false );
    $washup_side_logo = get_theme_mod( 'washup_side_logo', get_template_directory_uri() . '/assets/images/resources/footer-logo1.png' );

    $washup_extra_email = get_theme_mod( 'washup_extra_email', __( 'needhelp@Washup.com', 'washup' ) );
    $washup_extra_phone = get_theme_mod( 'washup_extra_phone', __( '666 888 0000', 'washup' ) );
    $washup_extra_address = get_theme_mod( 'washup_extra_address', __( '24/21, 2nd Rangpur, Sapla', 'washup' ) );
?>

<?php if ( !empty( $washup_sticky_hide ) ): ?>
   <div class="sticky-header sticked-menu main-menu">
      <div class="sticky-header__content"></div>
      <!-- /.sticky-header__content -->
   </div>
<?php endif;?>

<div class="mobile-nav__wrapper">
   <div class="mobile-nav__overlay mobile-nav__toggler"></div>
   <!-- /.mobile-nav__overlay -->
   <div class="mobile-nav__content">
      <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
      
      <?php if ( !empty( $washup_side_logo ) ): ?>
         <div class="logo-box">
            <a href="<?php print esc_url( home_url( '/' ) );?>" aria-label="logo image">
               <img src="<?php print esc_url($washup_side_logo); ?>" width="155" alt="<?php echo esc_attr__('logo','washup'); ?>" />
            </a>
         </div>
      <?php endif;?>
      
      <!-- /.logo-box -->
      <div class="mobile-nav__container"></div>
      <!-- /.mobile-nav__container -->
      
      <?php if ( !empty( $washup_side_hide ) ): ?>
      <ul class="mobile-nav__contact list-unstyled">
         <?php if ( !empty( $washup_extra_email ) ): ?>
         <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:<?php echo esc_attr($washup_extra_email); ?>"><?php echo washup_kses($washup_extra_email); ?></a>
         </li>
         <?php endif;?>
         <?php if ( !empty( $washup_extra_phone ) ): ?>
         <li>
            <i class="fa fa-phone-alt"></i>
            <a href="tel:<?php echo esc_attr($washup_extra_phone); ?>"><?php echo washup_kses($washup_extra_phone); ?></a>
         </li>
         <?php endif;?>
         <?php if ( !empty( $washup_extra_address ) ): ?>
         <li>
            <i class="fas fa-map-marker-alt"></i>
            <?php echo washup_kses($washup_extra_address); ?>
         </li>
         <?php endif;?>
      </ul>
      <!-- /.mobile-nav__contact -->
      <div class="mobile-nav__top">
            <div class="mobile-nav__social">
               <?php washup_header_social_profiles() ?>
            </div>
            <!-- /.mobile-nav__social -->
      </div>
      <?php endif;?>
      <!-- /.mobile-nav__top -->
   </div>
   <!-- /.mobile-nav__content -->
</div>

<div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="<?php print esc_url( home_url( '/' ) );?>">
                <label for="search" class="sr-only"><?php print esc_html( 'search here', 'washup' ); ?></label>
                <!-- /.sr-only -->
                <input type="text" id="search" name="s" placeholder="Search Here..." value="<?php print esc_attr(the_search_query()); ?>" />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->