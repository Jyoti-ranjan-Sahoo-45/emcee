<?php
/**
 * Header template for Trupti Shah Emcee Theme
 *
 * @package Trupti_Emcee
 */

$phone = get_option('trupti_phone', '+91 9820359087');
$email = get_option('trupti_email', 'trupti@truptiemcee.com');
$fb_url = get_option('trupti_facebook', 'https://www.facebook.com/WeddingSangeetChoreographer/');
$ig_url = get_option('trupti_instagram', 'https://www.instagram.com/truptieventplanner/');
$yt_url = get_option('trupti_youtube', 'https://www.youtube.com/user/mistyraj/videos');
$theme_uri = get_template_directory_uri();
?><!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo esc_url($theme_uri . '/assets/logo.png'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php wp_head(); ?>
  <style>
    body {
      font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
    }
    .font-serif {
      font-family: 'Playfair Display', Georgia, serif;
    }
  </style>
</head>
<body <?php body_class('bg-[#fff9fb] text-slate-900 antialiased selection:bg-pink-500 selection:text-white'); ?>>
<?php wp_body_open(); ?>

<!-- Topbar -->
<header id="site-topbar" class="w-full bg-[#1e0a13] text-white/95 border-b border-pink-950/20 transition-all duration-500 ease-in-out max-h-20 opacity-100 relative z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="min-h-[42px] flex items-center justify-between gap-4">
      <!-- Contact Details -->
      <div class="flex items-center gap-5 text-sm">
        <a href="tel:<?php echo esc_attr(str_replace(' ', '', $phone)); ?>" class="flex items-center gap-2 text-white/90 hover:text-amber-300 transition-colors duration-300">
          <?php echo trupti_icon('phone', 'shrink-0 text-pink-400', 15); ?>
          <span><?php echo esc_html($phone); ?></span>
        </a>
        <a href="mailto:<?php echo esc_attr($email); ?>" class="hidden sm:flex items-center gap-2 text-white/90 hover:text-amber-300 transition-colors duration-300">
          <?php echo trupti_icon('mail', 'shrink-0 text-pink-400', 15); ?>
          <span><?php echo esc_html($email); ?></span>
        </a>
      </div>

      <!-- Social Media -->
      <div class="flex items-center gap-3.5">
        <a href="<?php echo esc_url($fb_url); ?>" target="_blank" rel="noreferrer" aria-label="Facebook" class="text-white/80 hover:text-amber-300 transition-colors duration-300">
          <?php echo trupti_icon('facebook', '', 14); ?>
        </a>
        <a href="<?php echo esc_url($ig_url); ?>" target="_blank" rel="noreferrer" aria-label="Instagram" class="text-white/80 hover:text-amber-300 transition-colors duration-300">
          <?php echo trupti_icon('instagram', '', 16); ?>
        </a>
        <a href="<?php echo esc_url($yt_url); ?>" target="_blank" rel="noreferrer" aria-label="YouTube" class="text-white/80 hover:text-amber-300 transition-colors duration-300">
          <?php echo trupti_icon('youtube', '', 17); ?>
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Main Navigation -->
<nav class="sticky top-0 z-50 w-full border-b border-[#f3c6d5] bg-[#fff8fb]/95 shadow-[0_10px_35px_rgba(190,24,93,0.08)] backdrop-blur-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="h-[88px] flex items-center justify-between">

      <!-- Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center shrink-0 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#be123c] focus-visible:ring-offset-4">
        <img
          src="<?php echo esc_url($theme_uri . '/assets/logo2.png'); ?>"
          alt="Trupti Shah - Emcee and Anchor"
          class="h-[56px] w-auto max-w-[240px] object-contain transition-transform duration-300 hover:scale-[1.02] sm:h-[62px] lg:h-[68px]"
        />
      </a>

      <!-- Desktop Navigation -->
      <?php if (!function_exists('trupti_render_desktop_nav') || !trupti_render_desktop_nav()) : ?>
      <div class="hidden lg:flex items-center gap-8">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300">
          Home
        </a>

        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300">
          About
        </a>

        <!-- Services Dropdown -->
        <div class="relative group" id="desktop-services-group">
          <a href="<?php echo esc_url(home_url('/services/')); ?>" class="flex items-center gap-1.5 py-7 text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300">
            <span>Services</span>
            <span class="transition-transform duration-300 group-hover:rotate-180">
              <?php echo trupti_icon('chevron-down', '', 16); ?>
            </span>
          </a>

          <!-- Dropdown Menu -->
          <div class="absolute top-full left-1/2 -translate-x-1/2 w-[340px] rounded-xl border border-[#f3c6d5] bg-white p-2 shadow-[0_18px_40px_rgba(190,24,93,0.16)] transition-all duration-300 opacity-0 invisible -translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 pointer-events-none group-hover:pointer-events-auto">
            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="block rounded-lg px-4 py-3 text-sm font-semibold text-[#be123c] hover:bg-[#fff1f5] transition-colors">
              All Services
            </a>
            <div class="my-1 h-px bg-[#f3c6d5]"></div>
            <a href="<?php echo esc_url(home_url('/services/sangeet-anchor-mumbai/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Sangeet Anchor
            </a>
            <a href="<?php echo esc_url(home_url('/services/haldi-mehendi-anchoring-mumbai/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Haldi &amp; Mehendi Anchoring
            </a>
            <a href="<?php echo esc_url(home_url('/services/mameru-ceremony-hosting/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Mameru Ceremony Hosting
            </a>
            <a href="<?php echo esc_url(home_url('/services/birthday-party-hostess/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Birthday Party Host
            </a>
            <a href="<?php echo esc_url(home_url('/services/anniversary-party-emcee/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Anniversary Party Emcee
            </a>
            <a href="<?php echo esc_url(home_url('/services/corporate-event-emcee/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Corporate Emcee
            </a>
            <a href="<?php echo esc_url(home_url('/services/awards-gala-hostess/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Awards &amp; Gala Emcee
            </a>
            <a href="<?php echo esc_url(home_url('/services/product-launch-emcee/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Opening Ceremony &amp; Official Launch Emcee
            </a>
            <a href="<?php echo esc_url(home_url('/services/outdoor-sports-emcee/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Outdoor Sports And Family Day Emcee
            </a>
            <a href="<?php echo esc_url(home_url('/services/wedding-emcee-mumbai/')); ?>" class="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200">
              Weddings Emcee
            </a>
          </div>
        </div>

        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300">
          Contact
        </a>

        <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="rounded-full border border-[#be123c] bg-[#be123c] px-5 py-2.5 text-[13px] font-semibold uppercase tracking-[0.12em] text-white shadow-[0_6px_16px_rgba(190,24,93,0.22)] transition-all duration-300 hover:border-[#9f1239] hover:bg-[#9f1239] hover:shadow-[0_9px_22px_rgba(190,24,93,0.28)]">
          Gallery
        </a>
      </div>
      <?php endif; ?>

      <!-- Mobile Menu Button -->
      <button
        type="button"
        id="mobile-menu-btn"
        class="lg:hidden rounded-lg p-2 text-[#be123c] hover:bg-[#ffe8f0] transition-colors focus:outline-none"
        aria-label="Toggle menu"
      >
        <span id="menu-icon-open"><?php echo trupti_icon('menu', '', 26); ?></span>
        <span id="menu-icon-close" class="hidden"><?php echo trupti_icon('close', '', 26); ?></span>
      </button>

    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu-drawer" class="lg:hidden overflow-hidden transition-all duration-300 max-h-0 opacity-0">
      <?php if (!function_exists('trupti_render_mobile_nav') || !trupti_render_mobile_nav()) : ?>
      <div class="border-t border-[#f3c6d5] pt-4 pb-4 space-y-1">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="block rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]">
          Home
        </a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="block rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]">
          About
        </a>

        <!-- Mobile Services Accordion -->
        <div>
          <button type="button" id="mobile-services-toggle" class="w-full flex items-center justify-between rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]">
            <span>Services</span>
            <span id="mobile-services-arrow" class="transition-transform duration-300">
              <?php echo trupti_icon('chevron-down', '', 17); ?>
            </span>
          </button>
          <div id="mobile-services-sublist" class="overflow-hidden transition-all duration-300 max-h-0 opacity-0">
            <div class="ml-3 mt-1 border-l border-[#f3c6d5] pl-3 space-y-1">
              <a href="<?php echo esc_url(home_url('/services/')); ?>" class="block rounded-lg px-3 py-2 text-sm font-semibold text-[#be123c] hover:bg-[#fff1f5]">
                All Services
              </a>
              <a href="<?php echo esc_url(home_url('/services/sangeet-anchor-mumbai/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Sangeet Anchor
              </a>
              <a href="<?php echo esc_url(home_url('/services/haldi-mehendi-anchoring-mumbai/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Haldi &amp; Mehendi Anchoring
              </a>
              <a href="<?php echo esc_url(home_url('/services/mameru-ceremony-hosting/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Mameru Ceremony Hosting
              </a>
              <a href="<?php echo esc_url(home_url('/services/birthday-party-hostess/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Birthday Party Host
              </a>
              <a href="<?php echo esc_url(home_url('/services/anniversary-party-emcee/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Anniversary Party Emcee
              </a>
              <a href="<?php echo esc_url(home_url('/services/corporate-event-emcee/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Corporate Emcee
              </a>
              <a href="<?php echo esc_url(home_url('/services/awards-gala-hostess/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Awards &amp; Gala Emcee
              </a>
              <a href="<?php echo esc_url(home_url('/services/product-launch-emcee/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Opening Ceremony &amp; Official Launch Emcee
              </a>
              <a href="<?php echo esc_url(home_url('/services/outdoor-sports-emcee/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Outdoor Sports And Family Day Emcee
              </a>
              <a href="<?php echo esc_url(home_url('/services/wedding-emcee-mumbai/')); ?>" class="block rounded-lg px-3 py-2 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]">
                Weddings Emcee
              </a>
            </div>
          </div>
        </div>

        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="block rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]">
          Contact
        </a>
        <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="block rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]">
          Gallery
        </a>
      </div>
      <?php endif; ?>
    </div>

  </div>
</nav>

<script>
  // Topbar scroll behavior
  (function() {
    var topbar = document.getElementById('site-topbar');
    if (!topbar) return;
    window.addEventListener('scroll', function() {
      if (window.scrollY > 20) {
        topbar.classList.remove('max-h-20', 'opacity-100');
        topbar.classList.add('max-h-0', 'opacity-0', 'overflow-hidden');
      } else {
        topbar.classList.remove('max-h-0', 'opacity-0', 'overflow-hidden');
        topbar.classList.add('max-h-20', 'opacity-100');
      }
    });

    // Mobile menu toggle
    var menuBtn = document.getElementById('mobile-menu-btn');
    var drawer = document.getElementById('mobile-menu-drawer');
    var openIcon = document.getElementById('menu-icon-open');
    var closeIcon = document.getElementById('menu-icon-close');
    var servicesToggle = document.getElementById('mobile-services-toggle');
    var servicesSublist = document.getElementById('mobile-services-sublist');
    var servicesArrow = document.getElementById('mobile-services-arrow');

    if (menuBtn && drawer) {
      menuBtn.addEventListener('click', function() {
        var isOpen = drawer.classList.contains('max-h-[700px]');
        if (isOpen) {
          drawer.classList.remove('max-h-[700px]', 'opacity-100');
          drawer.classList.add('max-h-0', 'opacity-0');
          openIcon.classList.remove('hidden');
          closeIcon.classList.add('hidden');
        } else {
          drawer.classList.remove('max-h-0', 'opacity-0');
          drawer.classList.add('max-h-[700px]', 'opacity-100');
          openIcon.classList.add('hidden');
          closeIcon.classList.remove('hidden');
        }
      });
    }

    if (servicesToggle && servicesSublist && servicesArrow) {
      servicesToggle.addEventListener('click', function() {
        var isSubOpen = servicesSublist.classList.contains('max-h-[600px]');
        if (isSubOpen) {
          servicesSublist.classList.remove('max-h-[600px]', 'opacity-100');
          servicesSublist.classList.add('max-h-0', 'opacity-0');
          servicesArrow.classList.remove('rotate-180');
        } else {
          servicesSublist.classList.remove('max-h-0', 'opacity-0');
          servicesSublist.classList.add('max-h-[600px]', 'opacity-100');
          servicesArrow.classList.add('rotate-180');
        }
      });
    }
  })();
</script>
