<?php
/**
 * Template part for displaying posts
 *
 * @package super-minimal
 */
?>

<?php
$super_minimal_single_blog_meta_date = super_minimal_get_option('super_minimal_single_blog_meta_date');
$super_minimal_single_blog_meta_author = super_minimal_get_option('super_minimal_single_blog_meta_author');
$super_minimal_single_blog_meta_tags = super_minimal_get_option('super_minimal_single_blog_meta_tags');
?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
<?php if ($super_minimal_single_blog_meta_date): ?>
<small>
    <?php super_minimal_post_date();?>
</small>
    <?php endif;?>
<?php if ($super_minimal_single_blog_meta_author): ?>
			<small>
				<?php super_minimal_post_author();?>
</small>
		<?php endif;?>
<?php the_content();?>
<?php wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __('Pages:', 'super-minimal'),
        'after' => '</div>',
    )
);
?>
<?php if ($super_minimal_single_blog_meta_tags): ?>
				<?php if (has_tag()): ?>
				<small>
					 <?php super_minimal_post_tags();?>
</small>
				<?php endif;?>
			<?php endif;?>
</article>