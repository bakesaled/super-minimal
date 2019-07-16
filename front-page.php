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
<?php if (get_header_image()): ?>
	<div class="header-banner">
		<img src="<?php header_image();?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
	</div>
<?php endif;?>
    <?php if (have_posts()):
    while (have_posts()): the_post();
        get_template_part('template-parts/page/content');
    endwhile;
else:
    get_template_part('template-parts/content', 'none');
endif;
?>
<?php get_footer();?>