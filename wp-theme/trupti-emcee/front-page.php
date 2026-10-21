<?php
/**
 * Front Page Template for Trupti Shah Emcee Theme
 *
 * @package Trupti_Emcee
 */

get_header();

// Disable wpautop on front-page to prevent stray paragraph and break injection
// Support the_content() for Elementor & WordPress editor compatibility
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;

get_template_part('template-parts/home-sections');

get_footer();

