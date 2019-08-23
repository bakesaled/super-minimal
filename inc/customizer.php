<?php
/**
 * super-minimal Theme Customizer
 *
 * @package super-minimal
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function super_minimal_customize_register($wp_customize)
{
    $default = super_minimal_default_theme_options();

    //theme option panel
    $wp_customize->add_panel('theme_option_panel', array('title' => esc_html__('Theme Options', 'super-minimal'), 'priority' => 200, 'capability' => 'edit_theme_options'));

    //header section
    $wp_customize->add_section('super_minimal_header_section',
        array('title' => esc_html__('Header Option', 'super-minimal'),
            'priority' => 200,
            'capability' => 'edit_theme_options',
            'panel' => 'theme_option_panel',
        )
    );

    //header tagline setting.
    $wp_customize->add_setting('super_minimal_header_tagline', array(
        'default' => $default['super_minimal_header_tagline'],
        'sanitize_callback' => 'super_minimal_sanitize_checkbox'));

    //header tagline control
    $wp_customize->add_control('super_minimal_header_tagline',
        array('label' => esc_html__('Show tagline', 'super-minimal'),
            'section' => 'super_minimal_header_section',
            'type' => 'checkbox',
            'priority' => 100,
        )
    );

    //blog option panel
    $wp_customize->add_panel('blog_option_panel', array('title' => esc_html__('Blog Options', 'super-minimal'), 'priority' => 200, 'capability' => 'edit_theme_options'));

    // blog post section
    $wp_customize->add_section('super_minimal_blog_meta_section',
        array('title' => esc_html__('List Post Meta Items', 'super-minimal'),
            'priority' => 500,
            'capability' => 'edit_theme_options',
            'panel' => 'blog_option_panel',
        )
    );

    $wp_customize->add_setting('super_minimal_blog_meta_date',
        array('capability' => 'edit_theme_options',
            'default' => $default['super_minimal_blog_meta_date'],
            'sanitize_callback' => 'super_minimal_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('super_minimal_blog_meta_date',
        array(
            'label' => esc_html__('Enable Date in Blog List', 'super-minimal'),
            'section' => 'super_minimal_blog_meta_section',
            'type' => 'checkbox',
            'priority' => 100,
        )
    );

    $wp_customize->add_setting('super_minimal_blog_meta_author',
        array('capability' => 'edit_theme_options',
            'default' => $default['super_minimal_blog_meta_author'],
            'sanitize_callback' => 'super_minimal_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('super_minimal_blog_meta_author',
        array(
            'label' => esc_html__('Enable Author in Blog List', 'super-minimal'),
            'section' => 'super_minimal_blog_meta_section',
            'type' => 'checkbox',
            'priority' => 100,
        )
    );

    // blog post section
    $wp_customize->add_section('super_minimal_single_blog_meta_section',
        array('title' => esc_html__('Single Post Meta Items', 'super-minimal'),
            'priority' => 500,
            'capability' => 'edit_theme_options',
            'panel' => 'blog_option_panel',
        )
    );

    $wp_customize->add_setting('super_minimal_single_blog_meta_date',
        array('capability' => 'edit_theme_options',
            'default' => $default['super_minimal_single_blog_meta_date'],
            'sanitize_callback' => 'super_minimal_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('super_minimal_single_blog_meta_date',
        array(
            'label' => esc_html__('Enable Date in Single Post', 'super-minimal'),
            'section' => 'super_minimal_single_blog_meta_section',
            'type' => 'checkbox',
            'priority' => 100,
        )
    );

    $wp_customize->add_setting('super_minimal_single_blog_meta_author',
        array('capability' => 'edit_theme_options',
            'default' => $default['super_minimal_single_blog_meta_author'],
            'sanitize_callback' => 'super_minimal_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('super_minimal_single_blog_meta_author',
        array(
            'label' => esc_html__('Enable Author in Single Post', 'super-minimal'),
            'section' => 'super_minimal_single_blog_meta_section',
            'type' => 'checkbox',
            'priority' => 100,
        )
    );

    $wp_customize->add_setting('super_minimal_single_blog_meta_category',
        array('capability' => 'edit_theme_options',
            'default' => $default['super_minimal_single_blog_meta_category'],
            'sanitize_callback' => 'super_minimal_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('super_minimal_single_blog_meta_category',
        array(
            'label' => esc_html__('Enable Category in Single Post', 'super-minimal'),
            'section' => 'super_minimal_single_blog_meta_section',
            'type' => 'checkbox',
            'priority' => 100,
        )
    );

    $wp_customize->add_setting('super_minimal_single_blog_meta_tags',
        array('capability' => 'edit_theme_options',
            'default' => $default['super_minimal_single_blog_meta_tags'],
            'sanitize_callback' => 'super_minimal_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('super_minimal_single_blog_meta_tags',
        array(
            'label' => esc_html__('Enable Tags in Single Post', 'super-minimal'),
            'section' => 'super_minimal_single_blog_meta_section',
            'type' => 'checkbox',
            'priority' => 100,
        )
    );

    //back to top section
    $wp_customize->add_section('super_minimal_backto_top_section',
        array('title' => esc_html__('Back To Top Option', 'super-minimal'),
            'priority' => 600,
            'capability' => 'edit_theme_options',
            'panel' => 'theme_option_panel',
        )
    );
// back to top setting.
    $wp_customize->add_setting('super_minimal_backto_top_status',
        array(
            'default' => $default['super_minimal_backto_top_status'],
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'super_minimal_sanitize_checkbox',
        )
    );
// back to top control
    $wp_customize->add_control('super_minimal_backto_top_status',
        array(
            'label' => esc_html__('Show Back To Top Button', 'super-minimal'),
            'section' => 'super_minimal_backto_top_section',
            'type' => 'checkbox',
            'priority' => 100,
        )
    );

// copyright section
    $wp_customize->add_section('super_minimal_copyright_section',
        array('title' => esc_html__('Copyright Option', 'super-minimal'),
            'priority' => 700,
            'capability' => 'edit_theme_options',
            'panel' => 'theme_option_panel',
        )
    );

    $wp_customize->add_setting('super_minimal_copyright_author',
        array('capability' => 'edit_theme_options',
            'default' => $default['super_minimal_copyright_author'],
            'sanitize_callback' => 'super_minimal_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('super_minimal_copyright_author',
        array('type' => 'checkbox',
            'label' => esc_html__('Show Copyright', 'super-minimal'),
            'section' => 'super_minimal_copyright_section',
        )
    );
}
add_action('customize_register', 'super_minimal_customize_register');
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function super_minimal_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * @param bool $checked Whether the checkbox is checked.
 *
 * @return bool Whether the checkbox is checked.
 */
if (!function_exists('super_minimal_sanitize_checkbox')):

    function super_minimal_sanitize_checkbox($checked)
{
        return ((isset($checked) && true === $checked) ? true : false);
    }
endif;

if (!function_exists('super_minimal_default_theme_options')):

    function super_minimal_default_theme_options()
{
        $defaults = array();
        $defaults['super_minimal_header_tagline'] = false;
        $defaults['super_minimal_blog_meta_date'] = true;
        $defaults['super_minimal_blog_meta_author'] = true;
        $defaults['super_minimal_single_blog_meta_date'] = true;
        $defaults['super_minimal_single_blog_meta_author'] = true;
        $defaults['super_minimal_single_blog_meta_category'] = true;
        $defaults['super_minimal_single_blog_meta_tags'] = true;
        $defaults['super_minimal_backto_top_status'] = true;
        $defaults['super_minimal_copyright_author'] = true;

        return $defaults;
    }
endif;

/**
 * Get theme option.
 * @param string $key Option key.
 * @return mixed Option value.
 */

if (!function_exists('super_minimal_get_option')):
    function super_minimal_get_option($key)
{
        if (empty($key)) {
            return;
        }
        $value = '';
        $default = super_minimal_default_theme_options();
        $default_value = null;
        if (is_array($default) && isset($default[$key])) {
            $default_value = $default[$key];
        }
        if (null !== $default_value) {
            $value = get_theme_mod($key, $default_value);
        } else {
            $value = get_theme_mod($key);
        }
        return $value;
    }
endif;
