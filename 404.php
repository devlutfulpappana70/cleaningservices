<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package washup
 */

get_header();
?>

<!--Start Error Page-->
<section class="error-page">
   <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <?php 
                  $washup_404_bg = get_theme_mod('washup_404_bg',get_template_directory_uri() . '/assets/images/resources/error-page-img-1.png');
                  $washup_error_title = get_theme_mod('washup_error_title', __('404', 'washup'));
                  $washup_error_subtitle = get_theme_mod('washup_error_subtitle', __('Opps! Page Not Found', 'washup'));
                  $washup_error_link_text = get_theme_mod('washup_error_link_text', __('Go To Home', 'washup'));
                  $washup_error_desc = get_theme_mod('washup_error_desc', __('Sorry, but the page you are looking for does not exist.', 'washup'));
               ?>
               <div class="error-page__wrapper text-center">
                     <div class="error-page__content">
                        <h2><?php print esc_html($washup_error_title);?></h2>
                        <h3><?php print esc_html($washup_error_subtitle);?></h3>
                        <p><?php print esc_html($washup_error_desc);?></p>
                        <div class="btn-box">
                           <a href="<?php print esc_url(home_url('/'));?>" class="thm-btn">
                                 <span><?php print esc_html($washup_error_link_text);?></span>
                                 <div class="liquid"></div>
                           </a>
                        </div>
                     </div>
               </div>
            </div>
         </div>
   </div>
</section>
<!--End Error Page-->

<?php
get_footer();
