<?php
/**
 * Front Page Template for Trupti Shah Emcee Theme
 *
 * @package Trupti_Emcee
 */

get_header();

// Disable wpautop on front-page to prevent stray paragraph and break injection
remove_filter('the_content', 'wpautop');

get_template_part('template-parts/home-sections');

get_footer();
