<?php
/**
 * Custom template tags for this theme
 *
 * @package super-minimal
 */

//post author
if (!function_exists('super_minimal_post_author')):
    function super_minimal_post_author()
{
        $author_wrap = sprintf('<a href="%s"><div class="avatar-wrap"><i class="icon-user"></i></div><span class="author-name">' . esc_html(get_the_author()) . '</span></a>', esc_url(get_author_posts_url(get_the_author_meta('ID'))));
        echo wp_kses_post($author_wrap);
    }

endif;

//post date
if (!function_exists('super_minimal_post_date')):
    function super_minimal_post_date()
{
        $archive_year = get_the_time('Y');
        $archive_month = get_the_time('m');
        $archive_day = get_the_time('d');
        $time_link = get_day_link($archive_year, $archive_month, $archive_day);

        $category = get_the_category();
        if ($category[0]->cat_name !== 'Book Reviews') {
            echo '<i class="fa fa-calendar-o" aria-hidden="true"></i>';
            $date_wrap = sprintf('<a href="%1$s" class="post-date">%2$s</a>', esc_url($time_link), esc_html(get_the_date()));
            echo wp_kses_post($date_wrap);
        }
    }
endif;

//post commnet
if (!function_exists('super_minimal_post_comment')):
    function super_minimal_post_comment()
{
        $cmt_link = get_comments_link(get_the_ID());
        $num_comments = get_comments_number();
        if ($num_comments == 0) {
            $comments = esc_html__('0 Comments', 'super-minimal');
        } elseif ($num_comments > 1) {
        $comments = sprintf(esc_html__('%s Comments', 'super-minimal'), $num_comments);
    } else {
        $comments = esc_html__('1 Comment', 'super-minimal');
    }
    echo "<a href='" . esc_url($cmt_link) . "'>" . $comments . "</a>";
}

endif;
//post categories
if (!function_exists('super_minimal_post_categories')):
    function super_minimal_post_categories()
{
        $categories = get_the_category(get_the_ID());
        $separator = ', ';
        if (!empty($categories)) {
            $output = '';
            foreach ($categories as $category) {
                if ($category->name !== 'Uncategorized') {
                    /* translators: %s: category name */
                    $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr($category->name) . '">' . esc_html($category->name) . '</a>' . $separator;
                }
            }
            echo wp_kses_post(trim($output, $separator));
        }
    }
endif;

//post tags
if (!function_exists('super_minimal_post_tags')):
    function super_minimal_post_tags()
{
        $tags = get_the_tag_list(sprintf('<span>%s: </span>', esc_html__('Tags', 'super-minimal')), ' ');
        echo wp_kses_post($tags);
    }
endif;

if (!function_exists('super_minimal_the_posts_navigation')):
    function super_minimal_the_posts_navigation()
{
        the_posts_pagination(
            array(
                'mid_size' => 2,
                'prev_text' => sprintf(
                    '&laquo; <span class="nav-prev-text">%s</span>',
                    __('Newer posts', 'super-minimal')
                ),
                'next_text' => sprintf(
                    '<span class="nav-next-text">%s</span> &raquo;',
                    __('Older posts', 'super-minimal')
                ),
            )
        );
    }
endif;
