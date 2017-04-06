<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package body-builder
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="post_comment">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h3>
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( '&ldquo;%2$s&rdquo;', '%1$s  &ldquo;%2$s&rdquo;', get_comments_number(), 'body-builder' ) ),
					number_format_i18n( get_comments_number() ),
					'<h3>' . get_the_title() . '</h3>'
				);
			?>
		</h3><!-- .comments-title -->

		<ul>
			<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
					'callback'	 => 'body_builder_comment_template'
				) );
			?>
		</ul><!-- .comment-list -->

		<?php

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'body-builder' ); ?></p>
	<?php
	endif;

	body_builder_comment_form();
	?>

</div><!-- #comments -->
