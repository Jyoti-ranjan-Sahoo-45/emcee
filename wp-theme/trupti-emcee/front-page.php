<?php
/**
 * Front Page Template for Trupti Shah Emcee Theme
 *
 * @package Trupti_Emcee
 */

get_header();

$is_elementor = false;
if (class_exists('\\Elementor\\Plugin')) {
    $elementor_data = get_post_meta(get_the_ID(), '_elementor_data', true);
    if (!empty($elementor_data) && $elementor_data !== '[]') {
        $is_elementor = \Elementor\Plugin::$instance->db->is_built_with_elementor(get_the_ID());
    }
    if (isset($_GET['elementor-preview'])) {
        $is_elementor = true;
    }
}

if ($is_elementor) {
    while (have_posts()) : the_post();
        the_content();
    endwhile;
} else {
    get_template_part('template-parts/home-sections');
}

get_footer();

