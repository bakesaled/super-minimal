<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package super-minimal
 */

get_header();
?>

<main>
  <section>
    <header>
      <h1><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'super-minimal');?></h1>
    </header>
    <div>
      <p><?php esc_html_e('Maybe try a search?', 'super-minimal');?></p>
      <?php get_search_form();?>
    </div>
  </section>
</main>
<?php
get_footer();