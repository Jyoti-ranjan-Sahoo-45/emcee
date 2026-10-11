<?php
/**
 * Footer template for Trupti Shah Emcee Theme
 *
 * @package Trupti_Emcee
 */

$phone = get_option('trupti_phone', '+91 9820359087');
$whatsapp_clean = get_option('trupti_whatsapp', '919820359087');
$email = get_option('trupti_email', 'trupti@truptiemcee.com');
$address = get_option('trupti_address', 'Studio 10, 10th Floor, Navjivan Commercial Bldg No 3, Grant Road (E), Mumbai, India');
$fb_url = get_option('trupti_facebook', 'https://www.facebook.com/WeddingSangeetChoreographer/');
$ig_url = get_option('trupti_instagram', 'https://www.instagram.com/truptieventplanner/');
$yt_url = get_option('trupti_youtube', 'https://www.youtube.com/user/mistyraj/videos');
$theme_uri = get_template_directory_uri();
?>

<!-- WhatsApp Floating Button -->
<a
  href="https://wa.me/<?php echo esc_attr($whatsapp_clean); ?>?text=<?php echo rawurlencode('Hello Trupti Shah'); ?>"
  target="_blank"
  rel="noopener noreferrer"
  aria-label="Chat on WhatsApp"
  class="fixed right-6 bottom-20 z-[999] h-[60px] w-[60px] rounded-full p-[2px] bg-gradient-to-r from-lime-400 via-green-500 to-lime-400 shadow-xl cursor-pointer hover:scale-110 transition-transform duration-300 animate-bounce flex items-center justify-center"
>
  <div class="h-full w-full rounded-full bg-green-600/30 backdrop-blur-lg shadow-xl flex items-center justify-center text-white">
    <?php echo trupti_icon('whatsapp', 'text-white', 32); ?>
  </div>
</a>

<!-- Main Footer -->
<footer class="relative overflow-hidden bg-[#0d0508] text-white">
  <div class="pointer-events-none absolute -left-40 top-0 h-96 w-96 rounded-full bg-[#9f1239]/20 blur-[130px]"></div>
  <div class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-[#e11d48]/10 blur-[140px]"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-6 py-16 sm:px-8 lg:px-10 lg:py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-10">

      <!-- Brand -->
      <div class="lg:pr-8">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-3">
          <img
            src="<?php echo esc_url($theme_uri . '/assets/logo.jpg'); ?>"
            alt="Trupti Shah Emcee"
            class="h-14 w-14 rounded-xl object-cover ring-2 ring-[#fb7185]/40 shadow-[0_8px_22px_rgba(225,29,72,0.22)]"
          />
          <span class="text-2xl font-bold tracking-[0.18em] text-white">
            EMCEE
          </span>
        </a>

        <p class="mt-6 max-w-sm text-sm leading-7 text-[#d6a9b8]">
          Creating memorable moments, engaging audiences and bringing
          every event to life with energy, elegance and professionalism.
        </p>

        <!-- Social -->
        <div class="flex items-center gap-3 mt-7">
          <a
            href="<?php echo esc_url($fb_url); ?>"
            target="_blank"
            rel="noreferrer"
            aria-label="Facebook"
            class="flex h-10 w-10 items-center justify-center rounded-full border border-[#6f1d3b] bg-[#190a10] text-[#fda4af] transition-all duration-300 hover:border-[#fb7185] hover:bg-[#be123c] hover:text-white"
          >
            <?php echo trupti_icon('facebook', '', 14); ?>
          </a>

          <a
            href="<?php echo esc_url($ig_url); ?>"
            target="_blank"
            rel="noreferrer"
            aria-label="Instagram"
            class="flex h-10 w-10 items-center justify-center rounded-full border border-[#6f1d3b] bg-[#190a10] text-[#fda4af] transition-all duration-300 hover:border-[#fb7185] hover:bg-[#be123c] hover:text-white"
          >
            <?php echo trupti_icon('instagram', '', 16); ?>
          </a>

          <a
            href="<?php echo esc_url($yt_url); ?>"
            target="_blank"
            rel="noreferrer"
            aria-label="YouTube"
            class="flex h-10 w-10 items-center justify-center rounded-full border border-[#6f1d3b] bg-[#190a10] text-[#fda4af] transition-all duration-300 hover:border-[#fb7185] hover:bg-[#be123c] hover:text-white"
          >
            <?php echo trupti_icon('youtube', '', 17); ?>
          </a>
        </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-[0.15em] text-[#fff1f2]">
          Quick Links
        </h3>
        <div class="mt-4 mb-5 h-px w-10 bg-gradient-to-r from-[#fb7185] to-[#be123c]"></div>

        <ul class="space-y-3.5">
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]">
              Home
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]">
              About
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]">
              Services
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]">
              Gallery
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]">
              Contact
            </a>
          </li>
        </ul>
      </div>

      <!-- Services -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-[0.15em] text-[#fff1f2]">
          Services
        </h3>
        <div class="mt-4 mb-5 h-px w-10 bg-gradient-to-r from-[#fb7185] to-[#be123c]"></div>

        <ul class="space-y-3.5">
          <?php
          $footer_services = array(
              array('name' => 'Sangeet Anchor', 'url' => home_url('/services/sangeet-anchor-mumbai/')),
              array('name' => 'Haldi & Mehendi Anchor', 'url' => home_url('/services/haldi-mehendi-anchoring-mumbai/')),
              array('name' => 'Mameru Ceremony Hosting', 'url' => home_url('/services/mameru-ceremony-hosting/')),
              array('name' => 'Birthday Party Host', 'url' => home_url('/services/birthday-party-hostess/')),
              array('name' => 'Anniversary Party Emcee', 'url' => home_url('/services/anniversary-party-emcee/')),
              array('name' => 'Outdoor Sports & Family Day', 'url' => home_url('/services/outdoor-sports-emcee/')),
              array('name' => 'Weddings Emcee', 'url' => home_url('/services/wedding-emcee-mumbai/')),
          );
          foreach ($footer_services as $fs) :
          ?>
            <li>
              <a href="<?php echo esc_url($fs['url']); ?>" class="group flex items-start gap-1 text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]">
                <span><?php echo esc_html($fs['name']); ?></span>
                <span class="mt-0.5 opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                  <?php echo trupti_icon('arrow-up-right', '', 13); ?>
                </span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h3 class="text-sm font-semibold uppercase tracking-[0.15em] text-[#fff1f2]">
          Contact
        </h3>
        <div class="mt-4 mb-5 h-px w-10 bg-gradient-to-r from-[#fb7185] to-[#be123c]"></div>

        <div class="space-y-5">
          <!-- Email -->
          <a href="mailto:<?php echo esc_attr($email); ?>" class="flex items-start gap-3 group">
            <span class="mt-0.5 shrink-0 text-[#fb7185] transition-colors group-hover:text-white">
              <?php echo trupti_icon('mail', '', 18); ?>
            </span>
            <span class="break-all text-sm leading-6 text-[#bd8798] transition-colors group-hover:text-[#fda4af]">
              <?php echo esc_html($email); ?>
            </span>
          </a>

          <!-- Phone -->
          <a href="tel:<?php echo esc_attr(str_replace(' ', '', $phone)); ?>" class="flex items-start gap-3 group">
            <span class="mt-0.5 shrink-0 text-[#fb7185] transition-colors group-hover:text-white">
              <?php echo trupti_icon('phone', '', 18); ?>
            </span>
            <span class="text-sm leading-6 text-[#bd8798] transition-colors group-hover:text-[#fda4af]">
              <?php echo esc_html($phone); ?>
            </span>
          </a>

          <!-- Address -->
          <div class="flex items-start gap-3 group">
            <span class="mt-0.5 shrink-0 text-[#fb7185] transition-colors group-hover:text-white">
              <?php echo trupti_icon('map-pin', '', 19); ?>
            </span>
            <span class="text-sm leading-6 text-[#bd8798] transition-colors group-hover:text-[#fda4af]">
              <?php echo esc_html($address); ?>
            </span>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="relative z-10 border-t border-[#4b172b] bg-black/20">
    <div class="mx-auto max-w-7xl px-6 py-5 sm:px-8 lg:px-10">
      <div class="flex flex-col sm:flex-row items-center justify-between gap-3 text-center sm:text-left">
        <p class="text-xs text-[#9f6677]">
          &copy; <?php echo date('Y'); ?> EMCEE. All rights reserved.
        </p>

        <p class="text-xs text-[#9f6677]">
          Professional Event Hosting &amp; Entertainment
        </p>

        <a
          href="https://serviceexhibition.com/"
          target="_blank"
          rel="noreferrer"
          class="text-xs text-[#f7c5d1] transition-colors duration-300 hover:text-white"
        >
          Designed And Maintain By Greenbacks Lexverse Pvt.Ltd
        </a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
