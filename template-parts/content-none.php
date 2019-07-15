<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package super-minimal
 */
?>
<section class="no-results not-found">
	<header class="page-title">
		<h1 class="title"><?php esc_html_e('Nothing Found', 'super-minimal');?></h1>
	</header><!-- .page-header -->
	<div class="page-content">
		<?php
if (is_home() && current_user_can('publish_posts')):
    printf(
        '<p>' . wp_kses(
            /* translators: 1: link to WP admin new post page. */
            __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'super-minimal'),
            array(
                'a' => array(
                    'href' => array(),
                ),
            )
        ) . '</p>',
        esc_url(admin_url('post-new.php'))
    );
elseif (is_search()):
?>

			<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'super-minimal');?></p>
			<div class="search-box-wrap">
				<?php get_search_form();?>
			</div>
		<?php else: ?>
			<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'super-minimal');?></p>
			<div class="search-box-wrap">
				<?php get_search_form();?>
			</div>
		<?php endif;?>
	</div><!-- .page-content -->
</section><!-- .no-results -->