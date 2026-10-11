<?php
/**
 * Home About Preview Section
 *
 * @package Trupti_Emcee
 */

$theme_uri = get_template_directory_uri();
$about_img = get_field('about_image') ?: ($theme_uri . '/assets/pic4.jpeg');
?>

<section class="relative overflow-hidden bg-[#fffafa] py-16 sm:py-20 lg:py-24">
  <!-- Glows -->
  <div class="pointer-events-none absolute -left-40 top-1/2 h-[400px] w-[400px] -translate-y-1/2 rounded-full bg-[#f8dce5]/40 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-40 -top-32 h-[420px] w-[420px] rounded-full bg-[#ead1dc]/30 blur-3xl"></div>

  <div class="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">
    <div class="grid items-center gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-20">

      <!-- Left Image Frame -->
      <div class="relative mx-auto w-full max-w-[510px] lg:mx-0">
        <div class="absolute -bottom-4 -left-4 h-full w-full rounded-[120px_120px_18px_18px] border border-[#8B1538]/15"></div>

        <div class="relative z-10 h-[460px] overflow-hidden rounded-[120px_120px_18px_18px] border-[6px] border-white bg-white shadow-[0_25px_60px_rgba(72,25,40,0.14)] sm:h-[520px]">
          <img
            src="<?php echo esc_url($about_img); ?>"
            alt="Trupti Shah - Professional Emcee"
            class="h-full w-full object-cover transition-transform duration-1000 hover:scale-105"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-[#35111f]/30 via-transparent to-transparent"></div>
        </div>

        <!-- Experience Badge -->
        <div class="absolute top-7 -left-2 z-20 flex h-28 w-28 flex-col items-center justify-center rounded-full border-[5px] border-white bg-[#8B1538] text-center shadow-[0_15px_35px_rgba(139,21,56,0.22)] sm:h-32 sm:w-32">
          <span class="mb-1 text-[#f2b0c4]">
            <?php echo trupti_icon('mic2', '', 16); ?>
          </span>
          <span class="font-serif text-2xl text-white sm:text-3xl">500+</span>
          <span class="mt-1 text-[7px] font-semibold uppercase tracking-[0.18em] text-pink-100">Events Hosted</span>
        </div>

        <!-- Floating Since 2010 Card -->
        <div class="absolute -right-3 bottom-10 z-20 hidden w-[155px] rounded-xl border border-white bg-white/95 p-4 shadow-[0_15px_35px_rgba(0,0,0,0.10)] backdrop-blur-md sm:block">
          <div class="flex items-center gap-2">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-[#fff0f4] text-[#C2185B]">
              <?php echo trupti_icon('sparkles', '', 13); ?>
            </span>
            <div>
              <p class="font-serif text-lg leading-none text-[#8B1538]">Since</p>
              <p class="mt-1 text-[9px] uppercase tracking-widest text-gray-400">2010</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Content -->
      <div class="relative z-10 max-w-2xl">
        <div class="mb-4 flex items-center gap-3">
          <span class="h-px w-9 bg-[#C2185B]"></span>
          <span class="flex items-center gap-2 text-[10px] font-semibold uppercase tracking-[0.3em] text-[#9E1746]">
            <?php echo trupti_icon('mic2', '', 11); ?>
            About The Emcee
          </span>
        </div>

        <h2 class="max-w-xl font-serif text-3xl font-medium leading-tight tracking-[-0.02em] text-[#28191e] sm:text-4xl lg:text-[3.2rem]">
          Bringing Energy,
          <span class="block text-[#8B1538]">Creating Moments</span>
        </h2>

        <div class="mt-5 flex items-center gap-2">
          <span class="h-[2px] w-12 bg-[#C2185B]"></span>
          <span class="h-1.5 w-1.5 rounded-full bg-[#C2185B]"></span>
          <span class="h-px w-5 bg-[#C2185B]/30"></span>
        </div>

        <div class="mt-6 space-y-4 text-[14px] leading-7 text-gray-600 sm:text-[15px] sm:leading-7">
          <p>
            Trupti Shah is a professional <span class="font-medium text-[#8B1538]">Emcee &amp; Event Host</span> known for bringing confidence, energy and personality to every stage. With over 500 events, celebrations and shows hosted, she understands how to connect with different audiences and create an atmosphere that feels engaging and memorable.
          </p>
          <p>
            Over the years, Trupti has worked across a wide range of occasions including corporate events, weddings, awards and gala evenings, product launches, public events and private celebrations.
          </p>
          <p>
            Her approach goes beyond simply following a script. From opening a show and introducing important guests to interacting with the audience and managing transitions, every part of the event is handled with professionalism, spontaneity and attention to the moment.
          </p>
          <p>
            Whether the occasion calls for elegance, excitement, warmth or high-energy entertainment, the hosting style is adapted to the audience, event and overall atmosphere.
          </p>
        </div>

        <!-- Highlight Quote -->
        <div class="relative mt-6 border-l-2 border-[#C2185B] bg-[#fff1f5] px-5 py-4">
          <span class="absolute -left-[10px] -top-2 rounded-full bg-[#fffafa] p-0.5 text-[#C2185B]">
            <?php echo trupti_icon('quote', '', 18); ?>
          </span>
          <p class="font-serif text-lg italic leading-7 text-[#68243b] sm:text-xl">
            Every stage has a story. Our job is to make the audience feel like they are part of it.
          </p>
        </div>

        <!-- CTA -->
        <div class="mt-7">
          <a
            href="<?php echo esc_url(home_url('/about/')); ?>"
            class="group inline-flex items-center gap-2 text-sm font-semibold tracking-wide text-[#8B1538]"
          >
            <span>Discover Trupti's Story</span>
            <span class="flex h-8 w-8 items-center justify-center rounded-full border border-[#8B1538]/20 transition-all duration-300 group-hover:border-[#8B1538] group-hover:bg-[#8B1538] group-hover:text-white">
              <?php echo trupti_icon('arrow-up-right', '', 14); ?>
            </span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>
