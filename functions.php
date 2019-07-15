<?php
function super_minimal_add_google_fonts()
{

    wp_enqueue_style('super-minimal-google-fonts', 'https://fonts.googleapis.com/css?family=Gentium+Book+Basic&display=swap', false);
}

add_action('wp_enqueue_scripts', 'super_minimal_add_google_fonts');

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/customizer.php';
