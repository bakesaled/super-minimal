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
        // Previous/next post navigation.
        // the_post_navigation(
        //     array(
        //         'next_text' => '<span aria-hidden="true">' . __('&raquo;', 'super-minimal') . '</span> ' .
        //         '<span>' . __('next post', 'super-minimal') . '</span>',
        //         'prev_text' => '<span aria-hidden="true">' . __('&laquo;', 'super-minimal') . '</span> ' .
        //         '<span>' . __('previous', 'super-minimal') . '</span>',
        //     )
        // );
        ?>
	        <small>
					<?php previous_post('&laquo; %', 'previous', 'no');?> |
	                <?php next_post('% &raquo; ', 'next', 'no');?>
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