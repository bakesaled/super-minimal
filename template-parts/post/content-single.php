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
<small>
<?php if ($super_minimal_single_blog_meta_date):
    super_minimal_post_date();
endif;?>
</small>
<?php the_content();?>
</article>