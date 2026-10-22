<?php
/**
 * SVG Icons Helper for Trupti Shah Emcee Theme
 *
 * @package Trupti_Emcee
 */

if (!defined('ABSPATH')) {
    exit;
}

function trupti_icon($name, $class = '', $size = 20) {
    $class_attr = $class ? ' class="' . esc_attr($class) . '"' : '';
    $w = is_numeric($size) ? $size : 20;
    $h = is_numeric($size) ? $size : 20;

    switch ($name) {
        case 'phone':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>';

        case 'mail':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>';

        case 'map-pin':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>';

        case 'arrow-up-right':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>';

        case 'chevron-down':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"></path></svg>';

        case 'chevron-left':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"></path></svg>';

        case 'chevron-right':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>';

        case 'menu':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>';

        case 'close':
        case 'x':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>';

        case 'mic':
        case 'mic2':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 8-9.04 9.06a2.82 2.82 0 1 0 3.98 3.98L16 12"></path><circle cx="17" cy="7" r="5"></circle></svg>';

        case 'sparkles':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"></path><path d="M5 3v4"></path><path d="M19 17v4"></path><path d="M3 5h4"></path><path d="M17 19h4"></path></svg>';

        case 'play':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>';

        case 'star':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>';

        case 'quote':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>';

        case 'check':
        case 'check-circle':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>';

        case 'building':
        case 'building-2':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>';

        case 'users':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>';

        case 'calendar':
        case 'calendar-days':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg>';

        case 'heart':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>';

        case 'music':
        case 'music2':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="8" cy="18" r="4"></circle><path d="M12 18V2l7 4"></path></svg>';

        case 'trophy':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path></svg>';

        case 'party-popper':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5.8 11.3 2 22l10.7-3.79"></path><path d="M4 3h.01"></path><path d="M22 8h.01"></path><path d="M15 2h.01"></path><path d="M22 20h.01"></path><path d="m22 2-2.24.75a2.9 2.9 0 0 0-1.96 3.12v0c.1.86-.57 1.63-1.45 1.63h-.38e-2"></path><path d="m11 13 1.9 1.9"></path></svg>';

        case 'medal':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>';

        case 'whatsapp':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>';

        case 'facebook':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>';

        case 'instagram':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>';

        case 'youtube':
            return '<svg' . $class_attr . ' width="' . $w . '" height="' . $h . '" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>';

        default:
            return '';
    }
}

/**
 * Customize Front Page Title for Yoast SEO & WordPress
 */
add_filter('wpseo_title', function($title) {
    if (is_front_page()) {
        return 'Trupti Shah | Professional Emcee & Anchor in Mumbai';
    }
    return $title;
}, 9999);

add_filter('document_title_parts', function($parts) {
    if (is_front_page()) {
        $parts['title'] = 'Trupti Shah';
        $parts['tagline'] = 'Professional Emcee & Anchor in Mumbai';
    }
    return $parts;
}, 9999);

/**
 * Enable WordPress Navigation Menus Support
 */
function trupti_enable_theme_menus() {
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Header Menu', 'trupti-emcee'),
        'footer'  => __('Footer Navigation Menu', 'trupti-emcee'),
    ));
}
add_action('after_setup_theme', 'trupti_enable_theme_menus');

/**
 * Render Desktop Navigation using WordPress Menu
 */
function trupti_render_desktop_nav() {
    $locations = get_nav_menu_locations();
    if (!isset($locations['primary'])) {
        return false;
    }
    $items = wp_get_nav_menu_items($locations['primary']);
    if (empty($items)) {
        return false;
    }

    $tree = array();
    $children = array();
    foreach ($items as $item) {
        if ($item->menu_item_parent == 0) {
            $tree[$item->ID] = $item;
        } else {
            $children[$item->menu_item_parent][] = $item;
        }
    }

    echo '<div class="hidden lg:flex items-center gap-8">';
    foreach ($tree as $parent_id => $item) {
        $has_children = !empty($children[$parent_id]);
        $title = esc_html($item->title);
        $url   = esc_url($item->url);
        $is_gallery = (stripos($title, 'gallery') !== false);

        if ($has_children) {
            ?>
            <div class="relative group" id="desktop-services-group">
                <a href="<?php echo $url; ?>" class="flex items-center gap-1.5 py-7 text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300">
                    <span><?php echo $title; ?></span>
                    <span class="transition-transform duration-300 group-hover:rotate-180">
                        <?php echo trupti_icon('chevron-down', '', 16); ?>
                    </span>
                </a>
                <div class="absolute top-full left-1/2 -translate-x-1/2 w-[340px] rounded-xl border border-[#f3c6d5] bg-white p-2 shadow-[0_18px_40px_rgba(190,24,93,0.16)] transition-all duration-300 opacity-0 invisible -translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 pointer-events-none group-hover:pointer-events-auto">
                    <a href="<?php echo $url; ?>" class="block rounded-lg px-4 py-3 text-sm font-semibold text-[#be123c] hover:bg-[#fff1f5] transition-colors">
                        All <?php echo $title; ?>
                    </a>
                    <div class="my-1 h-px bg-[#f3c6d5]"></div>
                    <?php foreach ($children[$parent_id] as $child) : ?>
                        <a href="<?php echo esc_url($child->url); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
                            <?php echo esc_html($child->title); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php
        } elseif ($is_gallery) {
            ?>
            <a href="<?php echo $url; ?>" class="rounded-full border border-[#be123c] bg-[#be123c] px-5 py-2.5 text-[13px] font-semibold uppercase tracking-[0.12em] text-white shadow-[0_6px_16px_rgba(190,24,93,0.22)] transition-all duration-300 hover:border-[#9f1239] hover:bg-[#9f1239] hover:shadow-[0_9px_22px_rgba(190,24,93,0.28)]">
                <?php echo $title; ?>
            </a>
            <?php
        } else {
            ?>
            <a href="<?php echo $url; ?>" class="text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300">
                <?php echo $title; ?>
            </a>
            <?php
        }
    }
    echo '</div>';
    return true;
}

/**
 * Render Mobile Navigation using WordPress Menu
 */
function trupti_render_mobile_nav() {
    $locations = get_nav_menu_locations();
    if (!isset($locations['primary'])) {
        return false;
    }
    $items = wp_get_nav_menu_items($locations['primary']);
    if (empty($items)) {
        return false;
    }

    $tree = array();
    $children = array();
    foreach ($items as $item) {
        if ($item->menu_item_parent == 0) {
            $tree[$item->ID] = $item;
        } else {
            $children[$item->menu_item_parent][] = $item;
        }
    }

    echo '<div class="border-t border-[#f3c6d5] pt-4 pb-4 space-y-1">';
    foreach ($tree as $parent_id => $item) {
        $has_children = !empty($children[$parent_id]);
        $title = esc_html($item->title);
        $url   = esc_url($item->url);

        if ($has_children) {
            ?>
            <div>
                <button type="button" id="mobile-services-toggle" class="w-full flex items-center justify-between rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]">
                    <span><?php echo $title; ?></span>
                    <span id="mobile-services-arrow" class="transition-transform duration-300">
                        <?php echo trupti_icon('chevron-down', '', 17); ?>
                    </span>
                </button>
                <div id="mobile-services-sublist" class="overflow-hidden transition-all duration-300 max-h-0 opacity-0">
                    <div class="ml-3 mt-1 border-l border-[#f3c6d5] pl-3 space-y-1">
                        <a href="<?php echo $url; ?>" class="block rounded-lg px-3 py-2 text-sm font-semibold text-[#be123c] hover:bg-[#fff1f5]">
                            All <?php echo $title; ?>
                        </a>
                        <?php foreach ($children[$parent_id] as $child) : ?>
                            <a href="<?php echo esc_url($child->url); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                                <?php echo esc_html($child->title); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php
        } else {
            ?>
            <a href="<?php echo $url; ?>" class="block rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]">
                <?php echo $title; ?>
            </a>
            <?php
        }
    }
    echo '</div>';
    return true;
}

/**
 * Register ACF Field Groups for Homepage
 */
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_home_cms',
        'title' => 'Homepage Sections (Trupti Shah)',
        'fields' => array(
            array('key' => 'tab_hero', 'label' => 'Hero Banner', 'type' => 'tab'),
            array('key' => 'f_hero_badge', 'label' => 'Hero Badge Text', 'name' => 'hero_badge', 'type' => 'text', 'default_value' => 'Professional Emcee & Event Host'),
            array('key' => 'f_hero_title', 'label' => 'Hero Title Override', 'name' => 'hero_title', 'type' => 'text'),
            array('key' => 'f_hero_desc', 'label' => 'Hero Bio Description', 'name' => 'hero_description', 'type' => 'textarea', 'rows' => 3),
            array('key' => 'f_hero_img', 'label' => 'Hero Image (URL or Media)', 'name' => 'hero_image', 'type' => 'image', 'return_format' => 'url'),

            array('key' => 'tab_stats', 'label' => 'Stats Counters', 'type' => 'tab'),
            array('key' => 'f_s1_v', 'label' => 'Stat 1 Value', 'name' => 'stat_1_val', 'type' => 'text', 'default_value' => '10+'),
            array('key' => 'f_s1_l', 'label' => 'Stat 1 Label', 'name' => 'stat_1_lbl', 'type' => 'text', 'default_value' => 'Years Experience'),
            array('key' => 'f_s2_v', 'label' => 'Stat 2 Value', 'name' => 'stat_2_val', 'type' => 'text', 'default_value' => '500+'),
            array('key' => 'f_s2_l', 'label' => 'Stat 2 Label', 'name' => 'stat_2_lbl', 'type' => 'text', 'default_value' => 'Events Hosted'),
            array('key' => 'f_s3_v', 'label' => 'Stat 3 Value', 'name' => 'stat_3_val', 'type' => 'text', 'default_value' => '50K+'),
            array('key' => 'f_s3_l', 'label' => 'Stat 3 Label', 'name' => 'stat_3_lbl', 'type' => 'text', 'default_value' => 'Guests Entertained'),
            array('key' => 'f_s4_v', 'label' => 'Stat 4 Value', 'name' => 'stat_4_val', 'type' => 'text', 'default_value' => '5.0'),
            array('key' => 'f_s4_l', 'label' => 'Stat 4 Label', 'name' => 'stat_4_lbl', 'type' => 'text', 'default_value' => 'Client Rating'),

            array('key' => 'tab_about', 'label' => 'About Preview', 'type' => 'tab'),
            array('key' => 'f_about_img', 'label' => 'About Section Image', 'name' => 'about_image', 'type' => 'image', 'return_format' => 'url'),
        ),
        'location' => array(
            array(
                array('param' => 'page_type', 'operator' => '==', 'value' => 'front_page'),
            ),
            array(
                array('param' => 'page', 'operator' => '==', 'value' => '7'),
            ),
        ),
    ));
});


