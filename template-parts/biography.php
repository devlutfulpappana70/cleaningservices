<?php
    $author_data = get_the_author_meta( 'description', get_query_var( 'author' ) );
    $facebook_url = get_the_author_meta( 'washup_facebook' );
    $twitter_url = get_the_author_meta( 'washup_twitter' );
    $linkedin_url = get_the_author_meta( 'washup_linkedin' );
    $instagram_url = get_the_author_meta( 'washup_instagram' );
    $youtube_url = get_the_author_meta( 'washup_youtube' );
    $washup_write_by = get_the_author_meta( 'washup_write_by' );
    $author_bio_avatar_size = 180;
    if ( $author_data != '' ):
    
    ?>

    <div class="author-one">
        <div class="author-one__image">
            <?php print get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size, '', '', [ 'class' => 'img-responsive' ] );?> 
        </div>
        <div class="author-one__content">
            <h3><?php print esc_html($washup_write_by); ?></h3> 
            <p><?php the_author_meta( 'description' );?></p>
            <div class="author-social">
                <?php if ( !empty( $facebook_url ) ): ?>
                    <a href="<?php print esc_url($facebook_url); ?>"><i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>
                <?php if ( !empty( $twitter_url ) ): ?>
                    <a href="<?php print esc_url($twitter_url); ?>"><i class="fab fa-twitter"></i></a>
                <?php endif; ?>
                <?php if ( !empty( $linkedin_url ) ): ?>
                    <a href="<?php print esc_url($linkedin_url); ?>"><i class="fab fa-linkedin-in"></i></a>
                <?php endif; ?>
                <?php if ( !empty( $instagram_url ) ): ?>
                    <a href="<?php print esc_url($instagram_url); ?>"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
                <?php if ( !empty( $youtube_url ) ): ?>
                    <a href="<?php print esc_url($youtube_url); ?>"><i class="fab fa-youtube"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php endif;?>
