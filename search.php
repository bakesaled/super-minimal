<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package super-minimal
 */
get_header();
?>
<main>
<?php if (have_posts()): ?>
  <?php while (have_posts()): the_post();
    get_template_part('template-parts/post/content');
endwhile;
the_posts_pagination();
else:
    get_template_part('template-parts/content', 'none');
endif;
?>
</main>
<?php get_footer();