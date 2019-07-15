<?php
/**
 * The main template file of frontpage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package super-minimal
 */
get_header();
?>
    <?php if (have_posts()):
    while (have_posts()): the_post();
        get_template_part('template-parts/page/content');
    endwhile;
else:
    get_template_part('template-parts/content', 'none');
endif;
?>
<?php get_footer();?>