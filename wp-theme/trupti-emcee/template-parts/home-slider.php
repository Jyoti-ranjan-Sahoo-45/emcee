<?php
/**
 * Home Slider Section
 *
 * @package Trupti_Emcee
 */

$theme_uri = get_template_directory_uri();
$gallery_count = 48;
?>

<section class="bg-[#fffafb] py-16 md:py-20">
  <div class="container mx-auto px-5 sm:px-8 lg:px-10">

    <!-- Heading -->
    <div class="mb-10 text-center">
      <div class="mb-3 flex items-center justify-center gap-3">
        <span class="h-px w-8 bg-[#c2185b]"></span>
        <span class="text-[10px] font-semibold uppercase tracking-[0.3em] text-[#8b1538]">
          Our Wedding &amp; Events Gallery
        </span>
        <span class="h-px w-8 bg-[#c2185b]"></span>
      </div>

      <h2 class="font-serif text-3xl font-medium text-[#260d16] sm:text-4xl md:text-5xl">
        Moments That <span class="text-[#c2185b]">Speak For Us</span>
      </h2>
    </div>

    <!-- Swiper Container -->
    <div class="relative h-[45vh] min-h-[300px] w-full overflow-hidden rounded-[28px] border border-[#eadde2] bg-white p-2 shadow-[0_20px_60px_rgba(80,20,35,0.08)] sm:h-[50vh] sm:p-3">
      <div class="swiper home-gallery-swiper h-full w-full">
        <div class="swiper-wrapper">
          <?php for ($i = 1; $i <= $gallery_count; $i++) : ?>
            <div class="swiper-slide h-full">
              <div class="group relative h-full w-full overflow-hidden rounded-[20px]">
                <img
                  src="<?php echo esc_url($theme_uri . '/assets/gallery/g' . $i . '.webp'); ?>"
                  alt="Trupti Shah Event Gallery <?php echo $i; ?>"
                  class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                  loading="lazy"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-[#260d16]/70 via-transparent to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>
                <div class="absolute bottom-0 left-0 right-0 translate-y-4 p-5 opacity-0 transition-all duration-500 group-hover:translate-y-0 group-hover:opacity-100">
                  <p class="text-[9px] font-semibold uppercase tracking-[0.25em] text-white/70">
                    Trupti Shah Emcee
                  </p>
                  <p class="mt-1 font-serif text-xl text-white">
                    Beautiful Memories
                  </p>
                </div>
                <div class="absolute right-4 top-4 flex h-8 min-w-8 items-center justify-center rounded-full border border-white/20 bg-black/20 px-2 text-[10px] font-semibold text-white opacity-0 backdrop-blur-md transition-opacity duration-500 group-hover:opacity-100">
                  <?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper !== 'undefined') {
      new Swiper('.home-gallery-swiper', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 14,
        speed: 4000,
        autoplay: {
          delay: 1,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        breakpoints: {
          640: { slidesPerView: 2 },
          768: { slidesPerView: 3 },
          1024: { slidesPerView: 4 }
        }
      });
    }
  });
</script>
