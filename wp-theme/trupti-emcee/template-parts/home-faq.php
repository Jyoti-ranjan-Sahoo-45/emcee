<?php
/**
 * Home FAQ Section
 *
 * @package Trupti_Emcee
 */

$faqs = array(
    array(
        'q' => 'What types of events does Trupti Shah host?',
        'a' => 'Trupti Shah hosts a wide range of events including corporate events, weddings, awards and gala nights, dinner and dance events, product launches, opening ceremonies, family days, community events, special occasions and virtual events.',
    ),
    array(
        'q' => 'Can I book Trupti Shah for a corporate event?',
        'a' => 'Yes. Trupti Shah provides professional emcee and event hosting services for corporate conferences, annual celebrations, award ceremonies, launches, team events and other corporate gatherings.',
    ),
    array(
        'q' => 'Do you host weddings and private celebrations?',
        'a' => 'Absolutely. Wedding celebrations, receptions, sangeet nights, engagement ceremonies and other private occasions can be hosted with a personalized approach that matches the style and energy of your event.',
    ),
    array(
        'q' => 'Can the hosting style be customized for my event?',
        'a' => 'Yes. The hosting approach can be adapted according to your event, audience, theme and overall atmosphere. The aim is to keep the audience engaged while maintaining the right tone throughout the event.',
    ),
    array(
        'q' => 'Do you host events outside Mumbai?',
        'a' => 'Yes. Event hosting can be arranged at different locations depending on the event requirements, schedule and availability.',
    ),
    array(
        'q' => 'Do you provide virtual or video hosting?',
        'a' => 'Yes. Virtual and video hosting services are available for online events, digital programs, webinars, virtual celebrations and other video-based events.',
    ),
    array(
        'q' => 'How far in advance should I book an emcee?',
        'a' => 'It is recommended to enquire as early as possible, especially for weddings, large corporate events and dates during busy event seasons. Availability depends on the event date and schedule.',
    ),
    array(
        'q' => 'How can I enquire about booking?',
        'a' => 'You can get in touch through the contact details provided on the website. Share your event date, venue, event type and basic requirements, and the booking process can be discussed further.',
    ),
);
?>

<section class="relative overflow-hidden bg-[#fffafc] py-20 text-slate-900 sm:py-24 lg:py-28">
  <!-- Background Glows -->
  <div class="pointer-events-none absolute -left-32 top-20 h-72 w-72 rounded-full bg-pink-200/20 blur-3xl"></div>
  <div class="pointer-events-none absolute -right-32 bottom-10 h-80 w-80 rounded-full bg-red-200/20 blur-3xl"></div>

  <div class="relative mx-auto max-w-6xl px-6 sm:px-8 lg:px-10">
    <!-- Heading -->
    <div class="mx-auto mb-14 max-w-2xl text-center">
      <div class="mb-5 flex items-center justify-center gap-3">
        <span class="h-px w-10 bg-gradient-to-r from-transparent to-[#c2185b]"></span>
        <span class="text-xs font-semibold uppercase tracking-[0.22em] text-[#c2185b] sm:text-sm">
          Frequently Asked Questions
        </span>
        <span class="h-px w-10 bg-gradient-to-l from-transparent to-[#c2185b]"></span>
      </div>

      <h2 class="text-3xl font-semibold tracking-tight text-[#260d16] sm:text-4xl lg:text-5xl">
        Everything You Need 
        <span class="bg-gradient-to-r from-[#c2185b] to-[#e11d48] bg-clip-text text-transparent">
          to Know
        </span>
      </h2>

      <p class="mt-5 text-sm leading-7 text-slate-500 sm:text-base">
        Find answers to some of the most common questions about Trupti Shah's emcee and event hosting services.
      </p>
    </div>

    <!-- FAQ Accordion List -->
    <div class="mx-auto max-w-4xl">
      <div class="overflow-hidden rounded-2xl border border-[#eadde2] bg-white/80 shadow-[0_20px_60px_rgba(38,13,22,0.06)] backdrop-blur-sm">
        <?php foreach ($faqs as $idx => $faq) : ?>
          <div class="faq-item border-b border-[#eee3e7] last:border-b-0 bg-white transition-colors duration-200">
            <button
              type="button"
              class="faq-trigger w-full flex items-center justify-between p-6 text-left cursor-pointer transition-colors hover:text-[#c2185b]"
              aria-expanded="false"
            >
              <span class="text-base sm:text-lg font-medium text-[#260d16] pr-4">
                <?php echo esc_html($faq['q']); ?>
              </span>
              <span class="faq-arrow shrink-0 text-[#c2185b] transition-transform duration-300">
                <?php echo trupti_icon('chevron-down', '', 20); ?>
              </span>
            </button>
            <div class="faq-content overflow-hidden max-h-0 transition-all duration-300 opacity-0 px-6">
              <p class="pb-6 text-sm sm:text-base leading-7 text-slate-600">
                <?php echo esc_html($faq['a']); ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var triggers = document.querySelectorAll('.faq-trigger');
    triggers.forEach(function(trigger) {
      trigger.addEventListener('click', function() {
        var item = this.closest('.faq-item');
        var content = item.querySelector('.faq-content');
        var arrow = item.querySelector('.faq-arrow');
        var isExpanded = this.getAttribute('aria-expanded') === 'true';

        // Close other items
        document.querySelectorAll('.faq-item').forEach(function(otherItem) {
          if (otherItem !== item) {
            otherItem.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
            var otherContent = otherItem.querySelector('.faq-content');
            otherContent.style.maxHeight = null;
            otherContent.classList.remove('opacity-100');
            otherContent.classList.add('opacity-0');
            otherItem.querySelector('.faq-arrow').classList.remove('rotate-180');
            otherItem.classList.remove('bg-[#fff8fa]');
            otherItem.classList.add('bg-white');
          }
        });

        if (isExpanded) {
          this.setAttribute('aria-expanded', 'false');
          content.style.maxHeight = null;
          content.classList.remove('opacity-100');
          content.classList.add('opacity-0');
          arrow.classList.remove('rotate-180');
          item.classList.remove('bg-[#fff8fa]');
          item.classList.add('bg-white');
        } else {
          this.setAttribute('aria-expanded', 'true');
          content.style.maxHeight = content.scrollHeight + "px";
          content.classList.remove('opacity-0');
          content.classList.add('opacity-100');
          arrow.classList.add('rotate-180');
          item.classList.remove('bg-white');
          item.classList.add('bg-[#fff8fa]');
        }
      });
    });
  });
</script>
