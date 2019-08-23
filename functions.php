<?php
/**
 * super-minimal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package super-minimal
 */

if (!function_exists('super_minimal_setup')):

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     */

    function super_minimal_setup()
{
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on super-minimal, use a find and replace
         * to change 'super-minimal' to the name of your theme in all the template files.
         */
        load_theme_textdomain('super-minimal', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'super-minimal'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('super_minimal_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        $defaults = array(
            'default-image' => '',
            'width' => 1920,
            'height' => 700,
            'flex-height' => true,
            'flex-width' => true,
            'uploads' => true,
            'random-default' => false,
            'header-text' => true,
            'default-text-color' => '',
        );
        add_theme_support('custom-header', $defaults);
    }
endif;

add_action('after_setup_theme', 'super_minimal_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function super_minimal_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('super_minimal_content_width', 640);
}
add_action('after_setup_theme', 'super_minimal_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function super_minimal_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Footer 1', 'super-minimal'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here.', 'super-minimal'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 2', 'super-minimal'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here.', 'super-minimal'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 3', 'super-minimal'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here.', 'super-minimal'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 4', 'super-minimal'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here.', 'super-minimal'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'super_minimal_widgets_init');

function super_minimal_scripts()
{
    wp_enqueue_style('super-minimal-style', get_template_directory_uri() . '/style.css', array(), '1.0');
    wp_enqueue_style('super-minimal-google-fonts', 'https://fonts.googleapis.com/css?family=Gentium+Book+Basic&display=swap', false);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'super_minimal_scripts');

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/customizer.php';

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function super_minimal_front_page_template($template)
{
    return is_home() ? '' : $template;
}

add_filter('frontpage_template', 'super_minimal_front_page_template');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function super_minimal_skip_link_focus_fix()
{
    // The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
    ?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action('wp_print_footer_scripts', 'super_minimal_skip_link_focus_fix');
