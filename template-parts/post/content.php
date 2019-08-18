<?php
/**
 * Template part for displaying posts
 *
 * @package super-minimal
 */
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
<?php
$category = get_the_category();
if ($category[0]->cat_name !== 'Book Reviews') {
    the_excerpt();
}
?>
</article>