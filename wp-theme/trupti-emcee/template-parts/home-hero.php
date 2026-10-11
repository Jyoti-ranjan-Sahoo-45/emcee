<?php
/**
 * Home Hero Section
 *
 * @package Trupti_Emcee
 */

$theme_uri = get_template_directory_uri();
$hero_badge = get_field('hero_badge') ?: 'Professional Emcee & Event Host';
$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_img = get_field('hero_image') ?: ($theme_uri . '/assets/anchor.webp');
?>

<section class="relative min-h-[calc(100vh-76px)] overflow-hidden bg-[#fff9fb] text-slate-900">
  <!-- Background Glows & Decorations -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <!-- Pink Glow -->
    <div class="absolute -top-40 -left-40 w-[480px] h-[480px] rounded-full bg-pink-200/40 blur-[110px] animate-pulse"></div>
    <!-- Red Glow -->
    <div class="absolute -bottom-40 -right-40 w-[500px] h-[500px] rounded-full bg-red-200/30 blur-[120px]"></div>

    <!-- Decorative Circles and Lines -->
    <div class="absolute top-24 right-[8%] w-24 h-24 rounded-full border border-pink-200/60"></div>
    <div class="absolute top-32 right-[10%] w-3 h-3 rounded-full bg-pink-400/60"></div>
    <div class="absolute left-[5%] top-[38%] w-16 h-px bg-gradient-to-r from-transparent to-pink-300/60"></div>
    <div class="absolute right-[4%] bottom-[25%] w-20 h-px bg-gradient-to-l from-transparent to-red-300/60"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
    <div class="min-h-[calc(100vh-76px)] grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center py-6 sm:py-8 lg:py-12">

      <!-- Left Content -->
      <div class="max-w-2xl">
        <!-- Label Badge -->
        <div class="inline-flex items-center gap-2 mb-3">
          <span class="flex items-center justify-center w-8 h-8 rounded-full bg-gradient-to-br from-pink-500 to-red-600 text-white">
            <?php echo trupti_icon('mic', 'text-white', 14); ?>
          </span>
          <span class="text-xs sm:text-sm font-semibold uppercase tracking-[0.2em] text-rose-600">
            <?php echo esc_html($hero_badge); ?>
          </span>
        </div>

        <!-- Main Heading -->
        <?php if ($hero_title) : ?>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-medium font-serif tracking-[-0.04em] text-slate-900" style="line-height: 1.08;">
            <span class="bg-gradient-to-r from-pink-500 via-rose-500 to-red-600 bg-clip-text text-transparent">
              <?php echo esc_html($hero_title); ?>
            </span>
          </h1>
        <?php else : ?>
          <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-medium font-serif tracking-[-0.04em] text-slate-900" style="line-height: 1.08;">
            <span class="block">Wedding Emcee &amp;</span>
            <span class="block bg-gradient-to-r from-pink-500 via-rose-500 to-red-600 bg-clip-text text-transparent">Sangeet Anchor</span>
            <span class="block text-slate-900">in Mumbai</span>
          </h1>
        <?php endif; ?>

        <!-- Description -->
        <p class="mt-4 max-w-xl text-sm sm:text-base lg:text-lg leading-7 sm:leading-8 text-slate-500">
          <?php if ($hero_description) : ?>
            <?php echo esc_html($hero_description); ?>
          <?php else : ?>
            Meet <strong class="font-semibold text-slate-800">Trupti Shah</strong>, a professional emcee and anchor based in Mumbai who brings confidence, warmth and vibrant energy to weddings, sangeet, celebrations and unforgettable occasions.
          <?php endif; ?>
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 mt-6">
          <a
            href="<?php echo esc_url(home_url('/contact/')); ?>"
            class="group inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-pink-500 to-red-600 px-7 py-3.5 text-sm font-semibold text-white shadow-xl shadow-pink-500/20 hover:shadow-2xl hover:shadow-pink-500/30 hover:-translate-y-0.5 transition-all duration-300"
          >
            <span>Book Trupti</span>
            <span class="group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
              <?php echo trupti_icon('arrow-up-right', '', 17); ?>
            </span>
          </a>

          <a
            href="<?php echo esc_url(home_url('/gallery/')); ?>"
            class="group inline-flex items-center justify-center gap-3 rounded-full border border-pink-200/80 bg-white/90 backdrop-blur-md px-7 py-3.5 text-sm font-semibold text-slate-800 shadow-sm hover:border-pink-300 hover:text-rose-600 hover:bg-white hover:shadow-md hover:-translate-y-0.5 transition-all duration-300"
          >
            <span class="w-7 h-7 rounded-full bg-pink-50 text-rose-600 group-hover:bg-rose-500 group-hover:text-white flex items-center justify-center transition-colors">
              <?php echo trupti_icon('play', '', 12); ?>
            </span>
            <span>View Highlights</span>
          </a>
        </div>

        <!-- Trust Stars -->
        <div class="flex items-center gap-3 mt-6">
          <div class="flex -space-x-2">
            <span class="w-8 h-8 rounded-full bg-gradient-to-br from-pink-400 to-rose-500 border-2 border-white shadow-sm"></span>
            <span class="w-8 h-8 rounded-full bg-gradient-to-br from-rose-400 to-red-500 border-2 border-white shadow-sm"></span>
            <span class="w-8 h-8 rounded-full bg-gradient-to-br from-red-400 to-pink-500 border-2 border-white shadow-sm"></span>
          </div>
          <div>
            <div class="flex items-center gap-1 text-rose-500 text-xs">
              <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
            </div>
            <p class="text-xs text-slate-500 mt-0.5">
              Creating memorable moments on every stage
            </p>
          </div>
        </div>

      </div>

      <!-- Right Image Frame -->
      <div class="relative flex justify-center lg:justify-end">
        <!-- Glow Backdrop -->
        <div class="absolute w-[80%] h-[80%] bg-gradient-to-br from-pink-400/25 to-red-500/20 blur-[80px] rounded-full"></div>

        <!-- Decorative Ring -->
        <div class="absolute -right-3 sm:right-0 lg:-right-5 top-8 sm:top-12 w-[280px] sm:w-[380px] lg:w-[460px] aspect-square rounded-full border border-dashed border-pink-300/50 animate-spin" style="animation-duration: 35s;"></div>

        <div class="relative w-full max-w-[480px]">
          <div class="relative overflow-hidden rounded-[30px] border border-white/80 bg-white p-2 shadow-[0_30px_80px_rgba(190,24,93,0.15)]">
            <img
              src="<?php echo esc_url($hero_img); ?>"
              alt="Trupti Shah - Professional Emcee"
              class="w-full aspect-[4/5] object-cover rounded-[24px]"
            />

            <!-- Image Overlay Banner -->
            <div class="absolute inset-x-2 bottom-2 p-5 rounded-b-[24px] bg-gradient-to-t from-black/70 via-black/20 to-transparent">
              <div class="flex items-end justify-between">
                <div>
                  <p class="text-xs uppercase tracking-[0.18em] text-pink-200">
                    Your Event
                  </p>
                  <p class="mt-1 text-lg font-semibold text-white">
                    Your Stage. Your Moment.
                  </p>
                </div>
                <div class="w-10 h-10 rounded-full bg-white/15 backdrop-blur-md border border-white/20 flex items-center justify-center text-white">
                  <?php echo trupti_icon('sparkles', '', 17); ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Floating Experience Card -->
          <div class="absolute -left-5 sm:-left-8 bottom-10 sm:bottom-14 bg-white/95 backdrop-blur-xl rounded-2xl border border-white shadow-xl shadow-slate-900/10 px-5 py-4">
            <p class="text-[10px] uppercase tracking-[0.18em] text-slate-400">
              On Stage
            </p>
            <p class="mt-1 text-sm font-semibold text-slate-900">
              Energy &middot; Elegance &middot; Engagement
            </p>
          </div>

          <!-- Small Gradient Badge -->
          <div class="absolute -right-3 sm:-right-6 top-16 bg-gradient-to-br from-pink-500 to-red-600 text-white rounded-2xl px-4 py-3 shadow-xl shadow-pink-500/25">
            <?php echo trupti_icon('sparkles', '', 18); ?>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bottom Scroll Hint -->
  <div class="hidden lg:flex absolute bottom-7 left-1/2 -translate-x-1/2 items-center gap-2 text-[10px] uppercase tracking-[0.2em] text-slate-400">
    <span class="w-8 h-px bg-slate-300"></span>
    Explore
    <span class="w-8 h-px bg-slate-300"></span>
  </div>
</section>
