<?php
/**
 * Home Services Section
 *
 * @package Trupti_Emcee
 */

$services = array(
    array(
        'title' => 'Sangeet Anchor',
        'desc' => 'Keep the music, dance and celebration flowing with lively hosting for your Sangeet night.',
        'icon' => 'music2',
        'path' => home_url('/services/sangeet-anchor-mumbai/'),
    ),
    array(
        'title' => 'Outdoor Sports Emcee',
        'desc' => 'Keep outdoor celebrations energetic and interactive with engaging hosting for teams, families and audiences.',
        'icon' => 'medal',
        'path' => home_url('/services/outdoor-sports-emcee/'),
    ),
    array(
        'title' => 'Haldi & Mehendi Anchor',
        'desc' => 'Bring warmth, fun and lively moments to your Haldi and Mehendi celebrations.',
        'icon' => 'sparkles',
        'path' => home_url('/services/haldi-mehendi-anchoring-mumbai/'),
    ),
    array(
        'title' => 'Mameru Ceremony Anchor',
        'desc' => 'Thoughtful, engaging hosting for the traditions and joyful moments of your Mameru ceremony.',
        'icon' => 'heart',
        'path' => home_url('/services/mameru-ceremony-hosting/'),
    ),
    array(
        'title' => 'Anniversary Party Emcee',
        'desc' => 'Celebrate your milestones with warm, engaging hosting that brings family and friends together.',
        'icon' => 'heart',
        'path' => home_url('/services/anniversary-party-emcee/'),
    ),
    array(
        'title' => 'Birthday Party Anchor',
        'desc' => 'Make birthdays memorable with a lively host who keeps guests entertained and celebrations flowing.',
        'icon' => 'party-popper',
        'path' => home_url('/services/birthday-party-hostess/'),
    ),
    array(
        'title' => 'Corporate Event Emcee',
        'desc' => 'Polished hosting for conferences, annual days and town halls across Mumbai\'s business venues',
        'icon' => 'building-2',
        'path' => home_url('/services/corporate-event-emcee/'),
    ),
    array(
        'title' => 'Awards Night & Gala Host',
        'desc' => 'Confident, elegant hosting for award ceremonies and gala dinners with smooth stage flow.',
        'icon' => 'trophy',
        'path' => home_url('/services/awards-gala-hostess/'),
    ),
    array(
        'title' => 'Wedding Emcee',
        'desc' => 'Warm, witty hosting for receptions, pheras, varmala and the full celebration, with perfect timing.',
        'icon' => 'heart',
        'path' => home_url('/services/wedding-emcee-mumbai/'),
    ),
);
?>

<section class="relative overflow-hidden bg-[#fffafc] text-slate-900 py-10 sm:py-14 lg:py-16">
  <!-- Glows -->
  <div class="absolute inset-0 pointer-events-none overflow-hidden">
    <div class="absolute -top-40 -left-40 w-[420px] h-[420px] rounded-full bg-pink-200/35 blur-[100px]"></div>
    <div class="absolute -bottom-40 -right-40 w-[450px] h-[450px] rounded-full bg-red-200/25 blur-[110px]"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
    <!-- Section Heading -->
    <div class="max-w-3xl mx-auto text-center mb-8 lg:mb-12">
      <div class="inline-flex items-center gap-2 mb-2">
        <span class="w-8 h-px bg-gradient-to-r from-transparent to-pink-500"></span>
        <span class="text-xs sm:text-sm font-semibold uppercase tracking-[0.22em] text-pink-600">
          What We Do
        </span>
        <span class="w-8 h-px bg-gradient-to-l from-transparent to-red-500"></span>
      </div>

      <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-semibold tracking-tight leading-tight">
        Anchoring &amp; Emcee Services
        <span class="block mt-1 bg-gradient-to-r from-pink-500 via-rose-500 to-red-600 bg-clip-text text-transparent">
          in Mumbai
        </span>
      </h2>

      <p class="mt-3 text-sm sm:text-base leading-7 text-slate-500 max-w-2xl mx-auto">
        From corporate stages to intimate celebrations, Trupti Shah brings confidence, warmth and vibrant energy to every event she hosts.
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
      <?php foreach ($services as $service) : ?>
        <a href="<?php echo esc_url($service['path']); ?>" class="group relative block h-full">
          <!-- Hover Border Gradient -->
          <div class="absolute -inset-[1px] rounded-[22px] bg-gradient-to-br from-pink-400/50 via-red-300/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

          <!-- Card Content -->
          <div class="relative h-full rounded-[21px] bg-white border border-slate-200/80 p-6 sm:p-7 shadow-[0_10px_35px_rgba(15,23,42,0.04)] group-hover:shadow-[0_20px_45px_rgba(225,29,72,0.10)] group-hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between">
            <div>
              <div class="flex items-start justify-between">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-pink-500 to-red-600 text-white flex items-center justify-center shadow-lg shadow-pink-500/20">
                  <?php echo trupti_icon($service['icon'], '', 21); ?>
                </div>

                <div class="w-9 h-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 group-hover:bg-slate-900 group-hover:text-white group-hover:border-slate-900 transition-all duration-300">
                  <?php echo trupti_icon('arrow-up-right', '', 17); ?>
                </div>
              </div>

              <div class="mt-4">
                <h3 class="text-lg font-semibold tracking-tight text-slate-900 group-hover:text-rose-600 transition-colors duration-300">
                  <?php echo esc_html($service['title']); ?>
                </h3>
                <p class="mt-2 text-sm leading-6 text-slate-500">
                  <?php echo esc_html($service['desc']); ?>
                </p>
              </div>
            </div>

            <!-- Bottom Line Accent -->
            <div class="mt-5 h-[2px] w-full bg-gradient-to-r from-transparent via-pink-500 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-full"></div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
