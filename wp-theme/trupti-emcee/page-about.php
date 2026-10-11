<?php
/**
 * Template Name: About Page Template
 *
 * @package Trupti_Emcee
 */

get_header();

$is_elementor = false;
if (class_exists('\\Elementor\\Plugin')) {
    $elementor_data = get_post_meta(get_the_ID(), '_elementor_data', true);
    if (!empty($elementor_data) && $elementor_data !== '[]') {
        $is_elementor = \Elementor\Plugin::$instance->db->is_built_with_elementor(get_the_ID());
    }
    if (isset($_GET['elementor-preview'])) {
        $is_elementor = true;
    }
}

if ($is_elementor) {
    while (have_posts()) : the_post();
        the_content();
    endwhile;
    get_footer();
    return;
}

$theme_uri = get_template_directory_uri();
$expertise = array(
    array('title' => 'Corporate Events', 'text' => 'Professional hosting that keeps business events engaging, polished and on schedule.', 'icon' => 'building-2'),
    array('title' => 'Weddings', 'text' => 'Warm, energetic and personal hosting that brings every celebration to life.', 'icon' => 'heart'),
    array('title' => 'Awards & Gala', 'text' => 'Elegant stage presence and seamless transitions for prestigious occasions.', 'icon' => 'trophy'),
    array('title' => 'Product Launches', 'text' => 'Creating excitement and maintaining audience energy around important launches.', 'icon' => 'sparkles'),
    array('title' => 'Social Celebrations', 'text' => 'Interactive hosting designed to make guests feel involved and connected.', 'icon' => 'users'),
    array('title' => 'Public Events', 'text' => 'Confident communication and audience engagement across large-scale events.', 'icon' => 'mic2'),
);

$philosophy = array(
    array('num' => '01', 'title' => 'Connect', 'text' => 'Understanding the audience and creating a genuine connection from the very beginning.'),
    array('num' => '02', 'title' => 'Energize', 'text' => 'Bringing the right energy to the stage while adapting naturally to every event.'),
    array('num' => '03', 'title' => 'Engage', 'text' => 'Turning audiences from passive spectators into an active part of the experience.'),
    array('num' => '04', 'title' => 'Remember', 'text' => 'Creating moments that stay with guests long after the event comes to an end.'),
);

$qualities = array(
    array('title' => 'Confident Stage Presence', 'text' => 'A composed and engaging presence that commands attention without overpowering the event.', 'icon' => 'mic2'),
    array('title' => 'Audience Engagement', 'text' => 'Interactive hosting that keeps audiences connected, involved and entertained.', 'icon' => 'users'),
    array('title' => 'Professional Communication', 'text' => 'Clear, polished communication designed for both intimate celebrations and corporate stages.', 'icon' => 'check-circle'),
    array('title' => 'Personalized Hosting', 'text' => 'Every script, transition and moment is customized to suit the specific audience and event flow.', 'icon' => 'sparkles'),
);
?>

<main class="overflow-hidden bg-[#fff9fb] text-slate-900">

  <!-- ================= HERO ================= -->
  <section class="relative overflow-hidden border-b border-pink-100 bg-white">
    <div class="absolute -left-40 -top-32 h-96 w-96 rounded-full bg-pink-200/30 blur-[120px]"></div>
    <div class="absolute -right-40 top-20 h-96 w-96 rounded-full bg-red-200/25 blur-[120px]"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 py-16 sm:py-20 lg:px-8">
      <div class="grid items-center gap-14 lg:grid-cols-2 lg:gap-16">
        <div>
          <div class="inline-flex items-center gap-2 rounded-full border border-pink-200 bg-pink-50/70 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-pink-700">
            <span class="h-2 w-2 rounded-full bg-pink-600"></span>
            About Trupti Shah
          </div>

          <h1 class="mt-6 font-serif text-4xl font-medium leading-[1.08] text-slate-900 sm:text-5xl lg:text-6xl">
            Bringing Energy, Elegance &amp;{" "}
            <span class="bg-gradient-to-r from-pink-600 via-rose-600 to-red-600 bg-clip-text text-transparent">
              Connection
            </span>{" "}
            to Every Stage
          </h1>

          <p class="mt-6 text-base leading-8 text-slate-600 sm:text-lg">
            A professional emcee and anchor based in Mumbai with over a decade of experience crafting unforgettable moments across 500+ corporate summits, weddings, and high-profile galas.
          </p>

          <div class="mt-8 flex flex-wrap gap-4">
            <a
              href="<?php echo esc_url(home_url('/contact/')); ?>"
              class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-pink-600 to-red-600 px-7 py-3.5 text-sm font-semibold text-white shadow-lg shadow-pink-500/25 transition-all duration-300 hover:shadow-xl hover:-translate-y-0.5"
            >
              <span>Book For Your Event</span>
              <?php echo trupti_icon('arrow-up-right', '', 17); ?>
            </a>
            <a
              href="<?php echo esc_url(home_url('/gallery/')); ?>"
              class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-7 py-3.5 text-sm font-semibold text-slate-700 transition-all duration-300 hover:border-pink-200 hover:text-pink-600"
            >
              <span>View Gallery</span>
            </a>
          </div>
        </div>

        <!-- Hero Images Grid -->
        <div class="relative mx-auto w-full max-w-lg lg:max-w-none">
          <div class="relative grid grid-cols-2 gap-4">
            <div class="space-y-4">
              <div class="overflow-hidden rounded-3xl border border-white shadow-2xl">
                <img
                  src="<?php echo esc_url($theme_uri . '/assets/pic4.jpeg'); ?>"
                  alt="Trupti Shah Hosting"
                  class="h-72 w-full object-cover"
                />
              </div>
              <div class="rounded-3xl bg-gradient-to-br from-[#2c0404] to-[#450a14] p-6 text-white shadow-xl">
                <p class="text-3xl font-bold text-pink-400">10+ Years</p>
                <p class="mt-1 text-xs uppercase tracking-wider text-pink-200">On Stage Excellence</p>
              </div>
            </div>

            <div class="space-y-4 pt-8">
              <div class="rounded-3xl bg-pink-50 border border-pink-100 p-6 shadow-sm">
                <p class="text-3xl font-bold text-slate-900">500+</p>
                <p class="mt-1 text-xs uppercase tracking-wider text-slate-500">Events Hosted</p>
              </div>
              <div class="overflow-hidden rounded-3xl border border-white shadow-2xl">
                <img
                  src="<?php echo esc_url($theme_uri . '/assets/truptiemcee.jpeg'); ?>"
                  alt="Trupti Shah Portrait"
                  class="h-72 w-full object-cover"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= STORY ================= -->
  <section class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="grid gap-12 lg:grid-cols-2 lg:gap-16 items-center">
        <div>
          <span class="text-xs font-semibold uppercase tracking-[0.25em] text-pink-600">The Journey</span>
          <h2 class="mt-3 font-serif text-3xl font-medium text-slate-900 sm:text-4xl">
            Passionate About the Power of Live Connection
          </h2>
          <div class="mt-6 space-y-4 text-base leading-8 text-slate-600">
            <p>
              For Trupti Shah, anchoring is more than speaking into a microphone—it is about orchestrating human emotion, building anticipation, and ensuring every single attendee feels like a valued participant in the event.
            </p>
            <p>
              Beginning her career in Mumbai, India’s vibrant entertainment hub, she quickly developed a distinct signature style: charming, energetic, adaptable, and composed under pressure.
            </p>
            <p>
              Whether guiding an intricate corporate awards script with strict broadcast timings or leading thousands of wedding guests through a high-spirited Sangeet night, Trupti's presence elevates every occasion.
            </p>
          </div>
        </div>

        <div class="rounded-3xl border border-pink-100 bg-white p-8 shadow-xl shadow-pink-500/5">
          <h3 class="text-xl font-bold text-slate-900">Core Expertise</h3>
          <div class="mt-6 grid gap-4 sm:grid-cols-2">
            <?php foreach ($expertise as $exp) : ?>
              <div class="rounded-2xl border border-slate-100 bg-[#fff9fb] p-5">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-pink-100 text-pink-600 mb-3">
                  <?php echo trupti_icon($exp['icon'], '', 20); ?>
                </div>
                <h4 class="font-semibold text-slate-900 text-sm"><?php echo esc_html($exp['title']); ?></h4>
                <p class="mt-1 text-xs text-slate-500 leading-5"><?php echo esc_html($exp['text']); ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= PHILOSOPHY ================= -->
  <section class="bg-[#16080d] py-20 text-white lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="text-center max-w-2xl mx-auto mb-16">
        <span class="text-xs font-semibold uppercase tracking-[0.25em] text-pink-400">Our Method</span>
        <h2 class="mt-3 font-serif text-3xl font-medium sm:text-4xl">The Hosting Philosophy</h2>
        <p class="mt-3 text-slate-400 text-sm">Four guiding pillars that make every appearance seamless and memorable.</p>
      </div>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($philosophy as $phil) : ?>
          <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-6 backdrop-blur-md">
            <span class="font-serif text-3xl font-bold text-pink-400"><?php echo esc_html($phil['num']); ?></span>
            <h3 class="mt-4 text-lg font-bold text-white"><?php echo esc_html($phil['title']); ?></h3>
            <p class="mt-2 text-xs leading-6 text-slate-400"><?php echo esc_html($phil['text']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= QUALITIES ================= -->
  <section class="py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="text-center max-w-2xl mx-auto mb-16">
        <span class="text-xs font-semibold uppercase tracking-[0.25em] text-pink-600">Why Organizers Trust Trupti</span>
        <h2 class="mt-3 font-serif text-3xl font-medium sm:text-4xl text-slate-900">Key Professional Qualities</h2>
      </div>

      <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($qualities as $q) : ?>
          <div class="rounded-2xl border border-slate-200/80 bg-white p-6 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-pink-500 to-red-600 text-white mb-5 shadow-lg shadow-pink-500/20">
              <?php echo trupti_icon($q['icon'], '', 22); ?>
            </div>
            <h3 class="text-base font-bold text-slate-900"><?php echo esc_html($q['title']); ?></h3>
            <p class="mt-2 text-xs leading-6 text-slate-500"><?php echo esc_html($q['text']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= CTA BANNER ================= -->
  <section class="relative overflow-hidden bg-gradient-to-r from-pink-600 via-rose-600 to-red-700 py-16 text-white text-center">
    <div class="relative z-10 mx-auto max-w-4xl px-6">
      <h2 class="font-serif text-3xl sm:text-4xl font-medium">Ready to Bring Your Stage to Life?</h2>
      <p class="mt-4 text-pink-100 max-w-xl mx-auto text-sm sm:text-base leading-7">
        Get in touch today to check date availability and discuss customized hosting for your upcoming event.
      </p>
      <div class="mt-8 flex justify-center gap-4">
        <a
          href="<?php echo esc_url(home_url('/contact/')); ?>"
          class="inline-flex items-center gap-2 rounded-full bg-white px-8 py-3.5 text-sm font-semibold text-rose-700 shadow-xl hover:bg-pink-50 transition-colors"
        >
          <span>Enquire Now</span>
          <?php echo trupti_icon('arrow-up-right', '', 17); ?>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
