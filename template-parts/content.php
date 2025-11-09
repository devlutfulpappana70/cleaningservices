<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package washup
 */

if ( is_single() ) : ?>

    <article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item format-image' );?>>
        <?php if ( has_post_thumbnail() ): ?>
            <div class="blog-details__img">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                <div class="blog-details__date">
                    <p><?php the_time( 'd M' ); ?></p>
                </div>
            </div>
        <?php endif;?>
        <div class="blog-details__content">
            <?php get_template_part( 'template-parts/blog/blog-meta-single' ); ?>
            <div class="postbox__text">
                <?php the_content();?>
                <?php
                    wp_link_pages( [
                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'washup' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ] );
                ?>
            </div>
        </div>
        <div class="blog-details__bottom">
            <?php print washup_get_tag();?>
        </div>
    </article>

<?php else: ?>

    <article id="post-<?php the_ID();?>" <?php post_class( 'blog-standard__single postbox__item format-image' );?>>
        <?php if ( has_post_thumbnail() ): ?>
            <div class="blog-standard__single-img">
                <?php the_post_thumbnail( 'full', ['class' => 'img-responsive'] );?>
                <div class="blog-standard__date">
                    <p><?php the_time( 'd M' ); ?></p>
                </div>
            </div>
        <?php endif;?>
        <div class="blog-standard__single-content">
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <div class="postbox__text">
                <?php the_excerpt();?>
            </div>
            <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
        </div>
    </article>
    
<?php endif;?>