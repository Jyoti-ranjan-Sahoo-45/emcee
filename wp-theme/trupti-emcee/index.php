<?php
/**
 * Main Template File for Trupti Shah Emcee Theme
 *
 * @package Trupti_Emcee
 */

if (is_front_page()) {
    include get_template_directory() . '/front-page.php';
    return;
}

get_header();

$is_elementor = false;
if (class_exists('\\Elementor\\Plugin')) {
    $is_elementor = \Elementor\Plugin::$instance->db->is_built_with_elementor(get_the_ID()) || isset($_GET['elementor-preview']);
}

if ($is_elementor) {
    while (have_posts()) : the_post();
        the_content();
    endwhile;
} else {
    echo '<div class="max-w-7xl mx-auto px-6 py-16 text-slate-900">';
    if (have_posts()) :
        while (have_posts()) : the_post();
            echo '<article class="prose max-w-none">';
            echo '<h1 class="text-4xl font-serif font-bold mb-6">' . get_the_title() . '</h1>';
            the_content();
            echo '</article>';
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    echo '</div>';
}

get_footer();
