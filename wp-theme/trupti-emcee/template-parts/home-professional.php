<?php
/**
 * Home Professional Emcee Section
 *
 * @package Trupti_Emcee
 */
?>

<section class="relative overflow-hidden bg-[#fff9fb] py-16 sm:py-20 lg:py-24">
  <!-- Background Glows -->
  <div class="pointer-events-none absolute -left-40 top-20 h-96 w-96 rounded-full bg-pink-200/25 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-red-200/20 blur-3xl"></div>

  <div class="relative mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
    <!-- Header -->
    <div class="mx-auto mb-14 max-w-3xl text-center">
      <div class="mb-5 flex items-center justify-center gap-3">
        <span class="h-px w-10 bg-gradient-to-r from-transparent to-[#c2185b]"></span>
        <span class="flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.22em] text-[#c2185b] sm:text-sm">
          <?php echo trupti_icon('mic2', '', 15); ?>
          Professional Event Hosting
        </span>
        <span class="h-px w-10 bg-gradient-to-l from-transparent to-[#c2185b]"></span>
      </div>

      <h2 class="font-serif text-3xl font-medium leading-tight text-[#260d16] sm:text-4xl lg:text-5xl">
        Professional Emcee &amp; Anchor in 
        <span class="bg-gradient-to-r from-[#c2185b] to-[#e11d48] bg-clip-text text-transparent">
          Mumbai
        </span>
      </h2>

      <p class="mt-5 text-sm leading-7 text-[#74636a] sm:text-base">
        Meet <strong class="font-semibold text-[#260d16]">Trupti Shah</strong>, a professional emcee and anchor bringing confidence, energy and seamless stage presence to corporate events, weddings, celebrations and special occasions.
      </p>
    </div>

    <!-- Main Content -->
    <div class="grid items-center gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-16">
      <!-- Left Details -->
      <div>
        <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-[#ead5de] bg-white px-4 py-2 text-xs font-medium text-[#6b4d59] shadow-sm">
          <?php echo trupti_icon('map-pin', 'text-[#c2185b]', 15); ?>
          <span>Mumbai, Maharashtra</span>
        </div>

        <h3 class="max-w-xl font-serif text-3xl font-medium leading-tight text-[#260d16] sm:text-4xl">
          A Voice That Brings
          <span class="block bg-gradient-to-r from-[#c2185b] to-[#e11d48] bg-clip-text text-transparent">
            Every Event To Life.
          </span>
        </h3>

        <p class="mt-6 max-w-xl text-sm leading-7 text-[#74636a] sm:text-base">
          Trupti Shah combines polished communication, natural audience interaction and an engaging stage presence to create memorable event experiences. From introducing distinguished guests to keeping the audience connected between performances and presentations, every moment is handled with confidence and professionalism.
        </p>

        <p class="mt-4 max-w-xl text-sm leading-7 text-[#74636a] sm:text-base">
          Whether it is a corporate conference, award ceremony, product launch, wedding celebration, gala evening or special event, Trupti brings the right balance of energy, elegance and personality to the stage.
        </p>

        <!-- Highlights Grid -->
        <div class="mt-8 grid gap-4 sm:grid-cols-2">
          <div class="group rounded-2xl border border-[#eadde2] bg-white p-5 shadow-[0_10px_35px_rgba(38,13,22,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-[#d9a8ba]">
            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff0f5] text-[#c2185b] transition-colors duration-300 group-hover:bg-[#c2185b] group-hover:text-white">
              <?php echo trupti_icon('mic2', '', 19); ?>
            </div>
            <h4 class="text-sm font-semibold text-[#260d16]">Confident Stage Presence</h4>
            <p class="mt-1.5 text-xs leading-5 text-[#7a6970]">Professional and engaging hosting.</p>
          </div>

          <div class="group rounded-2xl border border-[#eadde2] bg-white p-5 shadow-[0_10px_35px_rgba(38,13,22,0.05)] transition-all duration-300 hover:-translate-y-1 hover:border-[#d9a8ba]">
            <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-xl bg-[#fff0f5] text-[#c2185b] transition-colors duration-300 group-hover:bg-[#c2185b] group-hover:text-white">
              <?php echo trupti_icon('sparkles', '', 19); ?>
            </div>
            <h4 class="text-sm font-semibold text-[#260d16]">Audience Engagement</h4>
            <p class="mt-1.5 text-xs leading-5 text-[#7a6970]">Keeping every audience connected.</p>
          </div>
        </div>

        <!-- CTA -->
        <a
          href="<?php echo esc_url(home_url('/contact/')); ?>"
          class="mt-8 inline-flex items-center gap-3 rounded-full bg-[#260d16] px-6 py-3.5 text-sm font-medium text-white shadow-lg transition-all duration-300 hover:bg-[#c2185b] hover:shadow-[0_12px_30px_rgba(194,24,91,0.25)]"
        >
          <span>Enquire About Your Event</span>
          <?php echo trupti_icon('arrow-up-right', '', 17); ?>
        </a>
      </div>

      <!-- Right Video -->
      <div class="relative">
        <div class="absolute -right-3 -top-3 h-24 w-24 rounded-tr-[2rem] border-r border-t border-[#c2185b]/30 sm:-right-5 sm:-top-5 sm:h-32 sm:w-32"></div>
        <div class="absolute -bottom-3 -left-3 h-24 w-24 rounded-bl-[2rem] border-b border-l border-[#e11d48]/30 sm:-bottom-5 sm:-left-5 sm:h-32 sm:w-32"></div>

        <div class="relative overflow-hidden rounded-[1.75rem] border border-white bg-[#16080d] p-2 shadow-[0_25px_70px_rgba(38,13,22,0.18)] sm:p-3">
          <!-- Video Label -->
          <div class="absolute left-6 top-6 z-10 flex items-center gap-2 rounded-full border border-white/20 bg-black/45 px-3 py-1.5 text-xs font-medium text-white backdrop-blur-md">
            <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#c2185b] text-white">
              <?php echo trupti_icon('play', '', 11); ?>
            </span>
            <span>Watch Trupti In Action</span>
          </div>

          <div class="aspect-video overflow-hidden rounded-[1.25rem] bg-black">
            <iframe
              class="h-full w-full"
              src="https://www.youtube.com/embed/alGr-VgT4-0"
              title="Trupti Shah - Professional Emcee &amp; Anchor"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
