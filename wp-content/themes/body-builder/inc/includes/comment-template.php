<?php
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_list_comments
 * @package event-hub
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 */

function body_builder_comment_template( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
            // Display trackbacks differently than normal comments.
            ?>
            <li <?php comment_class('comment_item'); ?> id="comment-<?php comment_ID();  ?>">
            <p><?php esc_html__( 'Pingback:', 'body-builder' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'body-builder' ), '<span class="edit-link">', '</span>' ); ?></p>
            <?php
            break;
        default :
            // Proceed with normal comments.
            global $post;
            ?>
        <li <?php comment_class('comment_item'); ?> id="li-comment-<?php comment_ID(); ?>">
            <article id="comment-<?php comment_ID(); ?>">
                <div class="profile-image">
                    <?php echo get_avatar( $comment, 70 ); ?>
                </div><!-- /.profile-image -->

                <div class="comment-content">
                    <div class="comment_meta">
                    	<strong><?php echo get_comment_author_link(); ?><span class="sep">,</span></strong>
                        
                        <a class="date-time" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                            <time datetime="<?php echo get_comment_time( 'c' ); ?>">
                                <?php echo sprintf( esc_html__( '%1$s At %2$s', 'body-builder' ), get_comment_date(), get_comment_time() ) ?>
                            </time>
                        </a>
                    </div><!-- /.comment-meta -->

                    <div class="content">
                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'body-builder' ); ?></p>
                        <?php endif; ?>

                        <p><?php comment_text(); ?></p>
                        <?php edit_comment_link( esc_html__( 'Edit', 'body-builder' ), '<p class="edit-link">', '</p>' ); ?>
                    </div><!-- /.content -->

                    <?php
                    	comment_reply_link(
                    		array_merge( $args,
                    			array(
                    				'reply_text' => esc_html__( 'Reply', 'body-builder' ),
                    				'depth' 	 => $depth,
                    				'max_depth'  => $args['max_depth'],
                                    'callback'   => comment_reply_link_filter($content)
                    				)
                    			)
                    		);
                    ?>
                </div><!-- /.contents -->

            </article>
            <?php
            break;
    endswitch; // end comment_type check
}


/**
 * Comment Form
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 */
function body_builder_comment_form() {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'comment_author_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $fields = array(
        'name' => '<input id="author" class="comment_input_name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_attr__( 'Your Name', 'body-builder' ) . '"' . $aria_req . ' />',
        'email'  => '<input id="email" class="comment_input_email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_attr__( 'Your Email', 'body-builder' ) . '"' . $aria_req . ' />',
        'phone'    => '<input id="phone" class="comment_input_phone" name="phone" type="text" value="' . esc_attr( $commenter['comment_author_phone'] ) . '" placeholder="' . esc_attr__( 'Your Phone', 'body-builder' ) . '"/>',
    );
    $comments_args = array(
        'fields' => $fields,
        'title_reply'=> __( 'Get In Touch', 'body-builder' ),
        'title_reply_before'    => '<h3>',
        'title_reply_after'     => '</h3>',
        'label_submit'  => __( 'Submit', 'body-builder' ),
        'comment_notes_before'  => '',
        'comment_field' => '<textarea id="comment" class="comment_input_textarea" name="comment" cols="45" rows="6" placeholder="' . esc_attr__( 'Your Messages', 'body-builder' ) . '" aria-required="true"></textarea>',
        'comment_notes_after' => '',
    );
    comment_form( $comments_args );
}