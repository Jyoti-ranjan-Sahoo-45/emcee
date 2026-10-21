<?php
/**
 * Template Name: Services Overview Page
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

$services = array(
    array(
        'title' => 'Sangeet Anchor',
        'desc' => 'Keep the music, dance and celebration flowing with lively, high-spirited hosting for your Sangeet night.',
        'icon' => 'music2',
        'path' => home_url('/services/sangeet-anchor-mumbai/'),
    ),
    array(
        'title' => 'Haldi & Mehendi Anchoring',
        'desc' => 'Bring warmth, interactive fun and joyful family moments to traditional Haldi and Mehendi ceremonies.',
        'icon' => 'sparkles',
        'path' => home_url('/services/haldi-mehendi-anchoring-mumbai/'),
    ),
    array(
        'title' => 'Mameru Ceremony Hosting',
        'desc' => 'Thoughtful, culturally attuned hosting that honors traditions and creates heartfelt memories for families.',
        'icon' => 'heart',
        'path' => home_url('/services/mameru-ceremony-hosting/'),
    ),
    array(
        'title' => 'Birthday Party Host',
        'desc' => 'Make milestone birthdays vibrant and entertaining with interactive hosting for guests of all generations.',
        'icon' => 'party-popper',
        'path' => home_url('/services/birthday-party-hostess/'),
    ),
    array(
        'title' => 'Anniversary Party Emcee',
        'desc' => 'Celebrate romantic milestones and family reunions with warm, heartfelt storytelling and entertainment.',
        'icon' => 'heart',
        'path' => home_url('/services/anniversary-party-emcee/'),
    ),
    array(
        'title' => 'Corporate Event Emcee',
        'desc' => 'Sophisticated, timely hosting for conferences, annual general meetings, and corporate town halls.',
        'icon' => 'building-2',
        'path' => home_url('/services/corporate-event-emcee/'),
    ),
    array(
        'title' => 'Awards & Gala Emcee',
        'desc' => 'High-glamour hosting with commanding stage presence for corporate excellence and industry awards ceremonies.',
        'icon' => 'trophy',
        'path' => home_url('/services/awards-gala-hostess/'),
    ),
    array(
        'title' => 'Opening Ceremony & Official Launch',
        'desc' => 'Charismatic unveilings and official inaugurations that deliver powerful first impressions for your brand.',
        'icon' => 'party-popper',
        'path' => home_url('/services/product-launch-emcee/'),
    ),
    array(
        'title' => 'Outdoor Sports & Family Day',
        'desc' => 'High-energy, active crowd engagement for team sports, company family days, and outdoor festivals.',
        'icon' => 'medal',
        'path' => home_url('/services/outdoor-sports-emcee/'),
    ),
    array(
        'title' => 'Weddings Emcee',
        'desc' => 'Polished, emotionally resonant hosting for grand wedding receptions, varmala, and stage moments.',
        'icon' => 'heart',
        'path' => home_url('/services/wedding-emcee-mumbai/'),
    ),
);
?>

<main class="overflow-hidden bg-[#fff9fb] text-slate-900">

  <!-- ================= HERO ================= -->
  <section class="relative overflow-hidden border-b border-pink-100 bg-white">
    <div class="absolute -left-40 -top-32 h-96 w-96 rounded-full bg-pink-200/30 blur-[120px]"></div>
    <div class="absolute -right-40 top-20 h-96 w-96 rounded-full bg-red-200/25 blur-[120px]"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 py-14 text-center sm:py-20 lg:px-8">
      <span class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.3em] text-pink-600">
        <span class="h-px w-8 bg-gradient-to-r from-pink-500 to-red-500"></span>
        Our Expertise
        <span class="h-px w-8 bg-gradient-to-r from-red-500 to-pink-500"></span>
      </span>

      <h1 class="mt-4 font-serif text-4xl font-medium tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
        Anchoring &amp; Emcee 
        <span class="bg-gradient-to-r from-pink-600 via-rose-600 to-red-600 bg-clip-text text-transparent">
          Services
        </span>
      </h1>

      <p class="mx-auto mt-4 max-w-2xl text-base leading-8 text-slate-500">
        From high-stakes corporate summits to vibrant wedding festivities, explore our tailored hosting solutions designed for every stage.
      </p>
    </div>
  </section>

  <!-- ================= SERVICES GRID ================= -->
  <section class="py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        <?php foreach ($services as $s) : ?>
          <a href="<?php echo esc_url($s['path']); ?>" class="group flex flex-col justify-between rounded-3xl border border-slate-200/80 bg-white p-8 shadow-sm transition-all duration-300 hover:border-pink-200 hover:shadow-xl hover:-translate-y-1.5">
            <div>
              <div class="flex items-start justify-between mb-6">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-pink-500 to-red-600 text-white shadow-lg shadow-pink-500/20">
                  <?php echo trupti_icon($s['icon'], '', 24); ?>
                </div>
                <span class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 text-slate-400 group-hover:border-slate-900 group-hover:bg-slate-900 group-hover:text-white transition-colors">
                  <?php echo trupti_icon('arrow-up-right', '', 18); ?>
                </span>
              </div>

              <h2 class="text-xl font-bold text-slate-900 group-hover:text-pink-600 transition-colors">
                <?php echo esc_html($s['title']); ?>
              </h2>
              <p class="mt-3 text-sm leading-6 text-slate-500">
                <?php echo esc_html($s['desc']); ?>
              </p>
            </div>

            <div class="mt-6 flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-pink-600">
              <span>View Service Details</span>
              <?php echo trupti_icon('chevron-right', '', 14); ?>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= CTA ================= -->
  <section class="border-t border-pink-100 bg-[#fff5f8] py-16 text-center">
    <div class="mx-auto max-w-3xl px-6">
      <h3 class="font-serif text-3xl font-medium text-slate-900">Have a Unique Event Requirement?</h3>
      <p class="mt-3 text-sm text-slate-600 leading-7">
        Every event is special. We are happy to design a custom hosting schedule and script that matches your vision.
      </p>
      <div class="mt-6">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-pink-600 to-red-600 px-8 py-3.5 text-sm font-semibold text-white shadow-lg shadow-pink-500/20 hover:shadow-xl transition-all">
          <span>Discuss Your Event</span>
          <?php echo trupti_icon('arrow-up-right', '', 16); ?>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
