<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package super-minimal
 */
get_header();
?>
<main>
  <?php if (have_posts()):
    while (have_posts()): the_post();
        get_template_part('template-parts/post/content');
    endwhile;
    super_minimal_the_posts_navigation();
else:
    get_template_part('template-parts/content', 'none');
endif;
?>
</main>
<?php get_footer();?>