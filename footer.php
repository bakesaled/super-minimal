<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package super-minimal
 */
?>
<?php
$super_minimal_backto_top_status = super_minimal_get_option('super_minimal_backto_top_status');
$super_minimal_copyright_author = super_minimal_get_option('super_minimal_copyright_author');
?>
    <footer>
        <?php if ($super_minimal_copyright_author): ?>
            <span>&copy; <?php echo date("Y"); ?> <a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></span>
        <?php endif;?>
    </footer>
    <?php if ($super_minimal_backto_top_status): ?>
    <a href="#">Back to top</a>
    <?php endif;?>
    <?php wp_footer();?>
  </body>
</html>