<?php
/**
 * Home Testimonials Section
 *
 * @package Trupti_Emcee
 */

$testimonials = array(
    array(
        'name' => 'Rahul Mehta',
        'role' => 'Corporate Event Organizer',
        'text' => 'Trupti brought an incredible amount of energy and professionalism to our event. She kept the audience engaged throughout and handled every moment with confidence.',
    ),
    array(
        'name' => 'Neha Kapoor',
        'role' => 'Wedding Client',
        'text' => 'From the very first interaction, Trupti was warm, professional and extremely easy to work with. She made our celebration feel effortless and truly memorable.',
    ),
    array(
        'name' => 'Amit Sharma',
        'role' => 'Event Manager',
        'text' => 'A fantastic emcee who knows exactly how to connect with an audience. Her stage presence, communication and ability to manage the flow of the event were impressive.',
    ),
);
?>

<section class="relative overflow-hidden bg-[#12080c] text-white py-20 sm:py-24 lg:py-28">
  <!-- Glowing Orbs -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute -top-32 -left-32 w-[420px] h-[420px] rounded-full bg-pink-600/20 blur-[110px]"></div>
    <div class="absolute top-1/3 -right-40 w-[500px] h-[500px] rounded-full bg-red-600/20 blur-[120px]"></div>
    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[450px] h-[300px] rounded-full bg-fuchsia-600/10 blur-[100px]"></div>
  </div>

  <div class="relative z-10 mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
    <!-- Header -->
    <div class="mx-auto mb-16 max-w-3xl text-center">
      <div class="mb-4 inline-flex items-center gap-2 rounded-full border border-pink-500/20 bg-pink-500/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.22em] text-pink-300 backdrop-blur-md">
        <?php echo trupti_icon('sparkles', '', 14); ?>
        <span>Client Experiences</span>
      </div>

      <h2 class="font-serif text-3xl font-medium tracking-tight text-white sm:text-4xl lg:text-5xl">
        Words From Those Who 
        <span class="bg-gradient-to-r from-pink-400 via-rose-400 to-red-500 bg-clip-text text-transparent">
          Celebrated With Us
        </span>
      </h2>

      <p class="mt-4 text-sm leading-7 text-[#d7b2c0] sm:text-base">
        Trusted by corporate leaders, event managers and families across Mumbai to bring warmth, energy and elegance to every occasion.
      </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <?php foreach ($testimonials as $t) : ?>
        <div class="relative flex flex-col justify-between rounded-3xl border border-white/10 bg-white/[0.04] p-8 shadow-[0_20px_50px_rgba(0,0,0,0.3)] backdrop-blur-xl transition-all duration-300 hover:border-pink-500/30 hover:bg-white/[0.06] hover:-translate-y-2">
          <div>
            <div class="flex items-center justify-between mb-6">
              <span class="text-pink-400">
                <?php echo trupti_icon('quote', '', 28); ?>
              </span>
              <div class="flex items-center gap-1 text-pink-400 text-xs">
                <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
              </div>
            </div>

            <p class="text-sm leading-7 text-slate-300 italic">
              &ldquo;<?php echo esc_html($t['text']); ?>&rdquo;
            </p>
          </div>

          <div class="mt-8 border-t border-white/10 pt-5">
            <h4 class="font-semibold text-white"><?php echo esc_html($t['name']); ?></h4>
            <p class="text-xs text-pink-300/80 mt-0.5"><?php echo esc_html($t['role']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
