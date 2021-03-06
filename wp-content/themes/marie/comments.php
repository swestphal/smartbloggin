<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Marie
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
	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK
					esc_html( _nx( 'Ein Kommentar: ', '%1$s Kommentare', get_comments_number(), 'comments title', 'marie' ) ),
					number_format_i18n( get_comments_number() )
				);
			?>
		</h2>

<!--		--><?php //if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
<!--		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">-->
<!--			<h2 class="screen-reader-text">--><?php //esc_html_e( 'Comment navigation', 'marie' ); ?><!--</h2>-->
<!--			<div class="nav-links">-->
<!---->
<!--				<div class="nav-previous">--><?php //previous_comments_link( esc_html__( 'Older Comments', 'marie' ) ); ?><!--</div>-->
<!--				<div class="nav-next">--><?php //next_comments_link( esc_html__( 'Newer Comments', 'marie' ) ); ?><!--</div>-->
<!---->
<!--			</div><!-- .nav-links -->
<!--		</nav><!-- #comment-nav-above -->
<!--		--><?php //endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
                    'avatar_size' => 60,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation comment-navigation " role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'marie' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Ältere Kommentare', 'marie' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Neuere Kommentare', 'marie' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'marie' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

<!-- #comments -->
