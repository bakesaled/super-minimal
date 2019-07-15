<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package super-minimal
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<section id="comments">
	<?php
// You can start editing here -- including this comment!
if (have_comments()):
?>
		<h2>
			<?php
printf(
    /* translators: 1: title. */
    esc_html__('Comments', 'super-minimal'),
    '<span>' . get_the_title() . '</span>'
);
?>
		</h2><!-- .comments-title -->

    <?php the_comments_navigation();?>

		<ol class="comment-list">
			<?php
wp_list_comments(array(
    'style' => 'ol',
    'short_ping' => true,
    'avatar_size' => 50,
));
?>
		</ol><!-- .comment-list -->
		<?php
the_comments_navigation();

// If comments are closed and there are comments, leave a message.
if (!comments_open()):
?>
			<p class="no-comments"><?php esc_html_e('Comments are closed.', 'super-minimal');?></p>
			<?php
endif;
endif; // Check for have_comments().

comment_form();
?>
</section>