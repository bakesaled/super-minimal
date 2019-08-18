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
</div>
<?php
$super_minimal_backto_top_status = super_minimal_get_option('super_minimal_backto_top_status');
$super_minimal_copyright_author = super_minimal_get_option('super_minimal_copyright_author');
?>
    <footer>
        <?php
if (is_active_sidebar('footer-1') ||
    is_active_sidebar('footer-2') ||
    is_active_sidebar('footer-3') ||
    is_active_sidebar('footer-4')):

    get_template_part('template-parts/footer/widgets');

endif;?>
        <?php if ($super_minimal_copyright_author): ?>
            <span>&copy; <?php echo date("Y"); ?> <a href="<?php echo esc_url(home_url()); ?>"><?php echo get_bloginfo('name'); ?></a></span>
        <?php endif;?>
    </footer>
    <?php if ($super_minimal_backto_top_status): ?>
    <a href="#"><?php esc_html_e("Back to top", 'super-minimal')?></a>
    <?php endif;?>
    <?php wp_footer();?>
  </body>
</html>