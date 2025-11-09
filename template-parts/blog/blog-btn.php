<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package washup
 */

$washup_blog_btn = get_theme_mod( 'washup_blog_btn', 'Read More' );
$washup_blog_btn_switch = get_theme_mod( 'washup_blog_btn_switch', true );

?>

<?php if ( !empty( $washup_blog_btn_switch ) ): ?>
<div class="btn-box postbox__read-more">
    <a href="<?php the_permalink();?>" class="tp-btn postbox__more-btn"><?php print esc_html( $washup_blog_btn );?> <span class="icon-plus"></span></a>
</div>
<?php endif;?>