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
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <meta name="author" content="">

    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <?php wp_head();?>
  </head>

  <body>
    <header id="masthead">
        <h1 class="blog-title"><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
    </header>
      <?php if (has_nav_menu('primary')): ?>
      <!-- Menu goes here -->
      <?php endif;?>
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
if ($super_minimal_breadcrumb_status):
    super_minimal_breadcrumbs();
endif;
?>
                  </header>
