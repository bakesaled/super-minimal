<?php
/**
 * Template part for displaying posts
 *
 * @package super-minimal
 */
?>

<?php
$super_minimal_blog_meta_date = super_minimal_get_option('super_minimal_blog_meta_date');
$super_minimal_blog_meta_author = super_minimal_get_option('super_minimal_blog_meta_author');
?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
<header>
  <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');?>
</header>
<?php if (has_post_thumbnail()): ?>
    <div class="post-thumbnail">
        <a href="<?php echo esc_url(the_permalink()); ?>" title="<?php the_title_attribute();?>">
            <?php the_post_thumbnail();?>
        </a>
    </div>
<?php endif;?>
<?php if ($super_minimal_blog_meta_date): ?>
<small>
    <?php super_minimal_post_date();?>
</small>
<?php endif;?>
<?php if ($super_minimal_blog_meta_author): ?>
<small>
    <?php super_minimal_post_author();?>
</small>
<?php endif;?>
<?php the_excerpt();?>
</article>