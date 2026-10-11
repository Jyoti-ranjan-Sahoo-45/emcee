<?php
/**
 * Template Name: Service Single Template
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

global $post;
$slug = $post->post_name;
require_once get_template_directory() . '/inc/service-data.php';
$svc = trupti_get_service_config($slug);

// If no custom config, check if content exists or fallback to corporate
if (!$svc) {
    $svc = trupti_get_service_config('corporate-event-emcee');
}
?>

<div class="bg-[#fff9fb] text-slate-900 overflow-hidden">

  <!-- ================= HERO ================= -->
  <section class="relative min-h-[85vh] flex items-center px-6 sm:px-10 lg:px-20 py-20 overflow-hidden">
    <!-- Background Glows -->
    <div class="absolute inset-0 pointer-events-none">
      <div class="absolute -top-32 -left-32 w-[420px] h-[420px] bg-pink-300/25 rounded-full blur-[120px]"></div>
      <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-red-300/20 rounded-full blur-[130px]"></div>
      <div
        class="absolute inset-0 opacity-[0.035]"
        style="background-image: linear-gradient(#991b1b 1px, transparent 1px), linear-gradient(90deg, #991b1b 1px, transparent 1px); background-size: 50px 50px;"
      ></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto w-full grid lg:grid-cols-2 gap-14 lg:gap-20 items-center">
      <!-- Content -->
      <div>
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-pink-100 shadow-sm mb-7">
          <span class="w-2 h-2 rounded-full bg-gradient-to-r from-pink-500 to-red-600"></span>
          <span class="text-xs sm:text-sm font-semibold tracking-[0.18em] uppercase text-slate-600">
            <?php echo esc_html($svc['badge']); ?>
          </span>
        </div>

        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.02]">
          <span class="block text-slate-900">
            <?php echo esc_html($svc['title_prefix']); ?>
          </span>
          <span class="block bg-gradient-to-r from-pink-600 via-rose-600 to-red-700 bg-clip-text text-transparent">
            <?php echo esc_html($svc['title_gradient']); ?>
          </span>
        </h1>

        <p class="mt-7 text-lg sm:text-xl text-slate-600 leading-relaxed max-w-xl">
          <?php echo esc_html($svc['description']); ?>
        </p>

        <p class="mt-4 text-slate-500 leading-relaxed max-w-xl">
          <?php echo esc_html($svc['subtext']); ?>
        </p>

        <!-- CTA Buttons -->
        <div class="mt-9 flex flex-wrap gap-4">
          <a
            href="<?php echo esc_url(home_url('/contact/')); ?>"
            class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-gradient-to-r from-pink-600 to-red-600 text-white font-semibold text-sm shadow-xl shadow-pink-500/25 hover:shadow-2xl hover:shadow-pink-500/35 hover:-translate-y-0.5 transition-all duration-300"
          >
            <span>Book For Your Event</span>
            <?php echo trupti_icon('arrow-up-right', '', 17); ?>
          </a>

          <a
            href="https://wa.me/<?php echo esc_attr(get_option('trupti_whatsapp', '919820359087')); ?>?text=<?php echo rawurlencode('Hello Trupti, I am interested in ' . $svc['badge']); ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white border border-slate-200 text-slate-700 font-semibold text-sm hover:border-pink-200 hover:text-pink-600 transition-all duration-300 shadow-sm"
          >
            <?php echo trupti_icon('whatsapp', 'text-green-600', 18); ?>
            <span>WhatsApp Enquiry</span>
          </a>
        </div>
      </div>

      <!-- Right Photo Frame -->
      <div class="relative flex justify-center">
        <div class="relative w-full max-w-[480px]">
          <div class="relative rounded-[32px] overflow-hidden border border-white/80 bg-white p-3 shadow-[0_30px_90px_rgba(190,24,93,0.16)]">
            <img
              src="<?php echo esc_url($svc['image']); ?>"
              alt="<?php echo esc_attr($svc['badge']); ?>"
              class="w-full aspect-[4/5] object-cover rounded-[24px]"
            />
            <div class="absolute inset-x-3 bottom-3 p-6 rounded-b-[24px] bg-gradient-to-t from-black/80 via-black/30 to-transparent text-white">
              <p class="text-xs uppercase tracking-[0.2em] text-pink-300">Trupti Shah</p>
              <p class="font-serif text-xl font-semibold mt-1"><?php echo esc_html($svc['badge']); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= HIGHLIGHTS ================= -->
  <section class="py-16 sm:py-20 lg:py-24 border-t border-pink-100 bg-white">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-20">
      <div class="text-center max-w-2xl mx-auto mb-14">
        <span class="text-xs font-semibold uppercase tracking-[0.25em] text-pink-600">Why It Matters</span>
        <h2 class="mt-2 font-serif text-3xl font-bold sm:text-4xl text-slate-900">What Makes The Difference</h2>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <?php foreach ($svc['highlights'] as $hl) : ?>
          <div class="rounded-3xl border border-slate-200/80 bg-[#fff9fb] p-8 shadow-sm hover:shadow-lg transition-all duration-300">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500 to-red-600 text-white flex items-center justify-center shadow-lg shadow-pink-500/20 mb-6">
              <?php echo trupti_icon($hl['icon'], '', 24); ?>
            </div>
            <h3 class="text-xl font-bold text-slate-900 mb-3"><?php echo esc_html($hl['title']); ?></h3>
            <p class="text-sm leading-7 text-slate-600"><?php echo esc_html($hl['text']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= EVENT TYPES ================= -->
  <section class="py-16 bg-[#16080d] text-white">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-20 text-center">
      <span class="text-xs font-semibold uppercase tracking-[0.25em] text-pink-400">Events Covered</span>
      <h2 class="mt-2 font-serif text-3xl font-bold sm:text-4xl">Occasions We Host</h2>

      <div class="mt-10 flex flex-wrap justify-center gap-3 max-w-4xl mx-auto">
        <?php foreach ($svc['eventTypes'] as $et) : ?>
          <span class="inline-flex items-center gap-2 px-5 py-3 rounded-full border border-white/10 bg-white/[0.05] text-sm font-medium text-pink-200">
            <?php echo trupti_icon('check-circle', 'text-pink-400', 16); ?>
            <?php echo esc_html($et); ?>
          </span>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= APPROACH ================= -->
  <section class="py-16 sm:py-20 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-20">
      <div class="text-center max-w-2xl mx-auto mb-14">
        <span class="text-xs font-semibold uppercase tracking-[0.25em] text-pink-600">The Workflow</span>
        <h2 class="mt-2 font-serif text-3xl font-bold sm:text-4xl text-slate-900">Our Stage Approach</h2>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <?php foreach ($svc['approach'] as $idx => $app) : ?>
          <div class="rounded-3xl border border-pink-100 bg-[#fffbfd] p-8 text-center">
            <span class="inline-block w-12 h-12 rounded-full bg-pink-100 text-pink-700 font-serif font-bold text-lg leading-[48px] mb-4">
              0<?php echo $idx + 1; ?>
            </span>
            <h3 class="text-lg font-bold text-slate-900 mb-2"><?php echo esc_html($app['title']); ?></h3>
            <p class="text-sm leading-6 text-slate-600"><?php echo esc_html($app['text']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= BOTTOM CTA ================= -->
  <section class="relative bg-gradient-to-r from-pink-600 via-rose-600 to-red-700 py-16 text-white text-center">
    <div class="max-w-3xl mx-auto px-6">
      <h2 class="font-serif text-3xl sm:text-4xl font-bold">Plan Your Next Event with Confidence</h2>
      <p class="mt-4 text-pink-100 text-sm sm:text-base leading-7">
        Get in touch today to ensure your event date is secured on Trupti Shah's schedule.
      </p>
      <div class="mt-8 flex justify-center gap-4">
        <a
          href="<?php echo esc_url(home_url('/contact/')); ?>"
          class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white text-rose-700 font-bold text-sm shadow-xl hover:bg-pink-50 transition-colors"
        >
          <span>Get in Touch</span>
          <?php echo trupti_icon('arrow-up-right', '', 16); ?>
        </a>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
