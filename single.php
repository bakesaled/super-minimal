<?php
/**
 * The template for displaying all single posts
 *
 * @package super-minimal
 */

get_header();
?>
<?php
while (have_posts()): the_post();
    get_template_part('template-parts/post/content-single');
    if (is_singular('post')) {

        super_minimal_the_posts_navigation();
        ?>
			        <small>
			                <?php previous_post_link('%link', '&laquo; previous', false);?>
			                <?php next_post_link('%link', 'next &raquo;', false);?>
			        </small>
			                <?php
    }

    if (comments_open() || get_comments_number()):
        comments_template();
    endif;
endwhile;
?>

<?php
get_footer();
?>