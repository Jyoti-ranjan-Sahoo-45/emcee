<?php
/**
 * Home Stats Section
 *
 * @package Trupti_Emcee
 */
?>

<section class="relative overflow-hidden bg-[#16080d] py-10 sm:py-12">
  <!-- Soft Pink / Red Glows -->
  <div class="absolute -left-32 top-1/2 h-64 w-64 -translate-y-1/2 rounded-full bg-pink-600/20 blur-[100px]"></div>
  <div class="absolute -right-32 top-1/2 h-64 w-64 -translate-y-1/2 rounded-full bg-red-600/20 blur-[100px]"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-5 lg:px-8">
    <!-- Heading -->
    <div class="mb-7 text-center">
      <span class="text-[10px] font-semibold uppercase tracking-[0.3em] text-pink-400 sm:text-xs">
        Experience That Speaks
      </span>
      <h2 class="mt-2 text-2xl font-bold text-white sm:text-3xl">
        Creating Moments That{" "}
        <span class="bg-gradient-to-r from-pink-400 via-rose-400 to-red-500 bg-clip-text text-transparent">
          Matter
        </span>
      </h2>
    </div>

    <!-- Stats Grid -->
    <div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.045] shadow-[0_15px_50px_rgba(0,0,0,0.3)] backdrop-blur-xl">
      <div class="grid grid-cols-2 lg:grid-cols-4">

        <!-- Stat 1 -->
        <div class="group flex items-center justify-center gap-4 px-5 py-7 transition-all duration-300 sm:py-8 border-b border-r border-white/10 lg:border-b-0 hover:bg-white/[0.06]">
          <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-pink-400/20 bg-gradient-to-br from-pink-500/15 to-red-500/15 text-pink-400 transition-all duration-300 group-hover:scale-105 group-hover:border-pink-400/40">
            <?php echo trupti_icon('calendar-days', '', 18); ?>
          </div>
          <div class="text-left">
            <div class="bg-gradient-to-r from-pink-400 via-rose-400 to-red-500 bg-clip-text text-2xl font-bold leading-none text-transparent sm:text-3xl">
              10+
            </div>
            <p class="mt-1.5 text-[10px] font-medium uppercase tracking-[0.1em] text-white/50 sm:text-xs">
              Years Experience
            </p>
          </div>
        </div>

        <!-- Stat 2 -->
        <div class="group flex items-center justify-center gap-4 px-5 py-7 transition-all duration-300 sm:py-8 border-b border-white/10 lg:border-b-0 lg:border-r hover:bg-white/[0.06]">
          <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-pink-400/20 bg-gradient-to-br from-pink-500/15 to-red-500/15 text-pink-400 transition-all duration-300 group-hover:scale-105 group-hover:border-pink-400/40">
            <?php echo trupti_icon('mic2', '', 18); ?>
          </div>
          <div class="text-left">
            <div class="bg-gradient-to-r from-pink-400 via-rose-400 to-red-500 bg-clip-text text-2xl font-bold leading-none text-transparent sm:text-3xl">
              500+
            </div>
            <p class="mt-1.5 text-[10px] font-medium uppercase tracking-[0.1em] text-white/50 sm:text-xs">
              Events Hosted
            </p>
          </div>
        </div>

        <!-- Stat 3 -->
        <div class="group flex items-center justify-center gap-4 px-5 py-7 transition-all duration-300 sm:py-8 border-r border-white/10 lg:border-r hover:bg-white/[0.06]">
          <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-pink-400/20 bg-gradient-to-br from-pink-500/15 to-red-500/15 text-pink-400 transition-all duration-300 group-hover:scale-105 group-hover:border-pink-400/40">
            <?php echo trupti_icon('users', '', 18); ?>
          </div>
          <div class="text-left">
            <div class="bg-gradient-to-r from-pink-400 via-rose-400 to-red-500 bg-clip-text text-2xl font-bold leading-none text-transparent sm:text-3xl">
              50K+
            </div>
            <p class="mt-1.5 text-[10px] font-medium uppercase tracking-[0.1em] text-white/50 sm:text-xs">
              Guests Entertained
            </p>
          </div>
        </div>

        <!-- Stat 4 -->
        <div class="group flex items-center justify-center gap-4 px-5 py-7 transition-all duration-300 sm:py-8 hover:bg-white/[0.06]">
          <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-pink-400/20 bg-gradient-to-br from-pink-500/15 to-red-500/15 text-pink-400 transition-all duration-300 group-hover:scale-105 group-hover:border-pink-400/40">
            <?php echo trupti_icon('star', '', 18); ?>
          </div>
          <div class="text-left">
            <div class="bg-gradient-to-r from-pink-400 via-rose-400 to-red-500 bg-clip-text text-2xl font-bold leading-none text-transparent sm:text-3xl">
              5.0
            </div>
            <p class="mt-1.5 text-[10px] font-medium uppercase tracking-[0.1em] text-white/50 sm:text-xs">
              Client Rating
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
