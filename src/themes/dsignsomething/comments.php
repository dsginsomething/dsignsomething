<div id="comments" class="ui container comments-area">
  <h1>COMMENTS:</h1>
  <?php if ( have_comments() ) : ?>
        <div class="comment-list ui comments">
            <?php
                wp_list_comments( array(
                    'callback'    => 'custom_comments',
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </div><!-- .comment-list -->

        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php comment_form(array(
      'id_form'         => 'commentform',
      'class_form'      => 'comment-form ui reply form',
      'id_submit'       => 'submit',
      'class_submit'    => 'submit ui blue button',
      'name_submit'     => 'submit',
      'label_submit'    =>  _('Post'),
    )); ?>

</div>
