<?php
/**
 * Template Name: Gallery Page Template
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
$gallery_count = 48;
?>

<main class="overflow-hidden bg-[#fff9fb] text-slate-900">

  <!-- ================= HERO ================= -->
  <section class="relative overflow-hidden border-b border-pink-100 bg-white">
    <div class="absolute -left-40 -top-32 h-96 w-96 rounded-full bg-pink-200/30 blur-[120px]"></div>
    <div class="absolute -right-40 top-20 h-96 w-96 rounded-full bg-red-200/25 blur-[120px]"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 py-12 text-center sm:py-16 lg:px-8">
      <span class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.3em] text-pink-600">
        <span class="h-px w-8 bg-gradient-to-r from-pink-500 to-red-500"></span>
        Visual Journey
        <span class="h-px w-8 bg-gradient-to-r from-red-500 to-pink-500"></span>
      </span>

      <h1 class="mt-4 font-serif text-4xl font-medium tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
        Moments From The{" "}
        <span class="bg-gradient-to-r from-pink-600 via-rose-600 to-red-600 bg-clip-text text-transparent">
          Stage
        </span>
      </h1>

      <p class="mx-auto mt-4 max-w-2xl text-base leading-8 text-slate-500">
        A visual showcase of energy, elegance, and unforgettable memories from weddings, corporate galas, and private celebrations.
      </p>
    </div>
  </section>

  <!-- ================= GALLERY GRID ================= -->
  <section class="py-12 sm:py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

      <!-- Gallery Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
        <?php for ($i = 1; $i <= $gallery_count; $i++) : ?>
          <div
            class="gallery-item group relative aspect-square overflow-hidden rounded-2xl bg-slate-100 cursor-pointer shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1"
            data-index="<?php echo $i; ?>"
            data-src="<?php echo esc_url($theme_uri . '/assets/gallery/g' . $i . '.webp'); ?>"
          >
            <img
              src="<?php echo esc_url($theme_uri . '/assets/gallery/g' . $i . '.webp'); ?>"
              alt="Trupti Shah Gallery Image <?php echo $i; ?>"
              class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
              loading="lazy"
            />

            <!-- Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-between p-4 text-white">
              <div class="flex justify-end">
                <span class="rounded-full bg-white/20 backdrop-blur-md p-2 text-white">
                  <?php echo trupti_icon('sparkles', '', 16); ?>
                </span>
              </div>
              <div>
                <p class="text-[10px] uppercase tracking-wider text-pink-300">Trupti Shah Hosting</p>
                <p class="font-serif text-base font-semibold">Event Memory #<?php echo $i; ?></p>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>

    </div>
  </section>

</main>

<!-- Lightbox Modal -->
<div id="gallery-lightbox" class="fixed inset-0 z-[9999] bg-black/95 hidden items-center justify-center p-4">
  <button id="lightbox-close" class="absolute top-6 right-6 text-white hover:text-pink-400 p-2 z-10 focus:outline-none" aria-label="Close">
    <?php echo trupti_icon('close', '', 32); ?>
  </button>

  <button id="lightbox-prev" class="absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 text-white hover:text-pink-400 p-3 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur-md transition-colors z-10 focus:outline-none" aria-label="Previous">
    <?php echo trupti_icon('chevron-left', '', 28); ?>
  </button>

  <button id="lightbox-next" class="absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 text-white hover:text-pink-400 p-3 rounded-full bg-white/10 hover:bg-white/20 backdrop-blur-md transition-colors z-10 focus:outline-none" aria-label="Next">
    <?php echo trupti_icon('chevron-right', '', 28); ?>
  </button>

  <div class="max-w-5xl max-h-[85vh] flex items-center justify-center">
    <img id="lightbox-img" src="" alt="Gallery Preview" class="max-w-full max-h-[85vh] object-contain rounded-xl shadow-2xl" />
  </div>
</div>

<script>
  (function() {
    var items = document.querySelectorAll('.gallery-item');
    var lightbox = document.getElementById('gallery-lightbox');
    var lightboxImg = document.getElementById('lightbox-img');
    var closeBtn = document.getElementById('lightbox-close');
    var prevBtn = document.getElementById('lightbox-prev');
    var nextBtn = document.getElementById('lightbox-next');
    var totalCount = <?php echo $gallery_count; ?>;
    var currentIndex = 1;

    function openLightbox(index) {
      currentIndex = index;
      lightboxImg.src = "<?php echo esc_js($theme_uri); ?>/assets/gallery/g" + currentIndex + ".webp";
      lightbox.classList.remove('hidden');
      lightbox.classList.add('flex');
      document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
      lightbox.classList.add('hidden');
      lightbox.classList.remove('flex');
      document.body.style.overflow = '';
    }

    function showNext() {
      currentIndex = currentIndex >= totalCount ? 1 : currentIndex + 1;
      lightboxImg.src = "<?php echo esc_js($theme_uri); ?>/assets/gallery/g" + currentIndex + ".webp";
    }

    function showPrev() {
      currentIndex = currentIndex <= 1 ? totalCount : currentIndex - 1;
      lightboxImg.src = "<?php echo esc_js($theme_uri); ?>/assets/gallery/g" + currentIndex + ".webp";
    }

    items.forEach(function(item) {
      item.addEventListener('click', function() {
        var idx = parseInt(this.getAttribute('data-index'), 10);
        openLightbox(idx);
      });
    });

    closeBtn.addEventListener('click', closeLightbox);
    nextBtn.addEventListener('click', showNext);
    prevBtn.addEventListener('click', showPrev);

    lightbox.addEventListener('click', function(e) {
      if (e.target === lightbox) {
        closeLightbox();
      }
    });

    document.addEventListener('keydown', function(e) {
      if (!lightbox.classList.contains('flex')) return;
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowRight') showNext();
      if (e.key === 'ArrowLeft') showPrev();
    });
  })();
</script>

<?php get_footer(); ?>
