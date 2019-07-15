<?php
/**
 * Template part for displaying posts
 *
 * @package super-minimal
 */
?>

<?php
$super_minimal_single_blog_meta_date = super_minimal_get_option('super_minimal_single_blog_meta_date');
$post_id = get_the_ID();
?>
<article id="post-<?php the_ID();?>">
<header>
  <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');?>
</header>
<small>
<?php if ($super_minimal_single_blog_meta_date):
    super_minimal_post_date();
endif;?>
</small>
<?php the_excerpt();?>
</article>