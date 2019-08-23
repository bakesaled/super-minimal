<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and <header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package super-minimal
 */

$super_minimal_single_blog_meta_category = super_minimal_get_option('super_minimal_single_blog_meta_category');
$super_minimal_header_tagline = super_minimal_get_option('super_minimal_header_tagline');
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head();?>
  </head>

  <body <?php body_class();?>>
  <?php wp_body_open();?>
  <a class="skip-link screen-reader-text" href="#content">
<?php _e('Skip to content', 'super-minimal');?></a>
    <header id="masthead">
    <div>
    <?php if (display_header_text()): ?>
        <h1 class="blog-title"><a href="<?php echo esc_url(home_url()); ?>"><?php echo get_bloginfo('name'); ?></a></h1>

        <?php if ($super_minimal_header_tagline): ?>
        <p class="site-description"><?php echo esc_html(get_bloginfo('description')); ?></p>
        <?php endif;?>
        <?php endif;?>
        </div>
        <?php if (has_nav_menu('primary')): ?>
            <div class="header-menu">
							<ul class="navbar-items nav pull-right navigation-section">
								<div class="mobile-menu-wrapper">
									<span class="mobile-menu-icon"><i class="icon-menu"></i></span>
								</div>
								<li id="site-navigation" class="main-navigation nav-item" role="navigation">
									<?php wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_id' => 'primary-menu',
    'menu_class' => 'main-menu nav',
));
?>
								</li>
							</ul>
            </div>
						<?php endif;?>
    </header>
      <header>
                  <?php if (is_page() || is_single()) {?>
                    <?php if ($super_minimal_single_blog_meta_category): ?>
			<h3>
				<?php super_minimal_post_categories();?>
                  </h3>
		<?php endif;?>
											<h2><?php echo esc_html(get_the_title()); ?></h2>
										<?php } elseif (is_search()) {?>
										<?php /* translators: %s: search term */
    $page_title = sprintf(esc_html__('Search Results for: %s', 'super-minimal'), get_search_query());
    ?>
										<h2><?php echo esc_html($page_title); ?></h2>
										<?php } elseif (is_404()) {?>
										<h2><?php echo esc_html('Page Not Found: 404', 'super-minimal'); ?></h2>
										<?php } elseif (is_home()) {?>
										<h2><?php single_post_title();?></h2>
										<?php } else {
    the_archive_title('<h2>', '</h2>');
}
?>
                  </header>
                  <div id="content">
