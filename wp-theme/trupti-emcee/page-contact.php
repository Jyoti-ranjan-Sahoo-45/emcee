<?php
/**
 * Template Name: Contact Page Template
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

$phone = get_option('trupti_phone', '+91 9820359087');
$whatsapp_num = get_option('trupti_whatsapp', '919820359087');
$email = get_option('trupti_email', 'trupti@truptiemcee.com');
$address = get_option('trupti_address', 'Studio 10, 10th Floor, Navjivan Commercial Bldg No 3, Grant Road (E), Mumbai, India');
?>

<main class="overflow-hidden bg-[#fff9fb] text-slate-900">

  <!-- ================= HERO ================= -->
  <section class="relative overflow-hidden border-b border-pink-100 bg-white">
    <div class="absolute -left-40 -top-32 h-96 w-96 rounded-full bg-pink-200/30 blur-[120px]"></div>
    <div class="absolute -right-40 top-20 h-96 w-96 rounded-full bg-red-200/25 blur-[120px]"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-6 py-12 text-center sm:py-16 lg:px-8">
      <span class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.3em] text-pink-600">
        <span class="h-px w-8 bg-gradient-to-r from-pink-500 to-red-500"></span>
        Get In Touch
        <span class="h-px w-8 bg-gradient-to-r from-red-500 to-pink-500"></span>
      </span>

      <h1 class="mt-4 font-serif text-4xl font-medium tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
        Let's Make Your Event{" "}
        <span class="bg-gradient-to-r from-pink-600 via-rose-600 to-red-600 bg-clip-text text-transparent">
          Unforgettable
        </span>
      </h1>

      <p class="mx-auto mt-4 max-w-2xl text-base leading-8 text-slate-500">
        Whether you are planning a grand wedding celebration or an executive corporate summit, share your details below to check date availability.
      </p>
    </div>
  </section>

  <!-- ================= MAIN CONTENT ================= -->
  <section class="py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="grid gap-12 lg:grid-cols-[1fr_1.3fr] lg:gap-16">

        <!-- Left: Contact Information -->
        <div class="space-y-6">
          <div>
            <span class="text-xs font-semibold uppercase tracking-[0.25em] text-pink-600">Direct Contact</span>
            <h2 class="mt-2 font-serif text-3xl font-medium text-slate-900">Reach Out Anytime</h2>
            <p class="mt-3 text-sm leading-7 text-slate-500">
              We respond promptly to all event enquiries and booking requests. Feel free to connect directly via call, email, or WhatsApp.
            </p>
          </div>

          <div class="space-y-4">
            <!-- Email Card -->
            <a href="mailto:<?php echo esc_attr($email); ?>" class="group flex items-start gap-4 rounded-2xl border border-slate-200/80 bg-white p-5 shadow-sm transition-all duration-300 hover:border-pink-200 hover:shadow-md">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-pink-50 text-pink-600 transition-colors group-hover:bg-pink-600 group-hover:text-white">
                <?php echo trupti_icon('mail', '', 22); ?>
              </div>
              <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Email Address</p>
                <p class="mt-1 text-sm font-semibold text-slate-900 group-hover:text-pink-600"><?php echo esc_html($email); ?></p>
                <p class="text-xs text-slate-500 mt-0.5">Checked continuously</p>
              </div>
            </a>

            <!-- Phone Card -->
            <a href="tel:<?php echo esc_attr(str_replace(' ', '', $phone)); ?>" class="group flex items-start gap-4 rounded-2xl border border-slate-200/80 bg-white p-5 shadow-sm transition-all duration-300 hover:border-pink-200 hover:shadow-md">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-pink-50 text-pink-600 transition-colors group-hover:bg-pink-600 group-hover:text-white">
                <?php echo trupti_icon('phone', '', 22); ?>
              </div>
              <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Phone &amp; WhatsApp</p>
                <p class="mt-1 text-sm font-semibold text-slate-900 group-hover:text-pink-600"><?php echo esc_html($phone); ?></p>
                <p class="text-xs text-slate-500 mt-0.5">Mon - Sun, 9:00 AM - 9:00 PM</p>
              </div>
            </a>

            <!-- Address Card -->
            <div class="flex items-start gap-4 rounded-2xl border border-slate-200/80 bg-white p-5 shadow-sm">
              <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-pink-50 text-pink-600">
                <?php echo trupti_icon('map-pin', '', 22); ?>
              </div>
              <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Office Location</p>
                <p class="mt-1 text-sm font-semibold text-slate-900"><?php echo esc_html($address); ?></p>
                <p class="text-xs text-slate-500 mt-0.5">Available for in-person meetings by appointment</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Contact & Booking Form -->
        <div class="rounded-3xl border border-slate-200/80 bg-white p-8 shadow-xl shadow-slate-900/5 sm:p-10">
          <h3 class="font-serif text-2xl font-medium text-slate-900">Send an Event Enquiry</h3>
          <p class="mt-2 text-sm text-slate-500">All submissions are sent immediately to <?php echo esc_html($email); ?>.</p>

          <form id="trupti-ajax-contact-form" class="mt-8 space-y-5">
            <div id="form-feedback-box" class="hidden rounded-xl p-4 text-sm font-medium"></div>

            <div class="grid gap-5 sm:grid-cols-2">
              <div>
                <label for="c-name" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Your Full Name *</label>
                <input
                  type="text"
                  id="c-name"
                  name="name"
                  required
                  placeholder="e.g. Rahul Sharma"
                  class="w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-sm text-slate-900 outline-none transition-all focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-500/10"
                />
              </div>

              <div>
                <label for="c-phone" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Phone Number *</label>
                <input
                  type="tel"
                  id="c-phone"
                  name="phone"
                  required
                  placeholder="+91 98765 43210"
                  class="w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-sm text-slate-900 outline-none transition-all focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-500/10"
                />
              </div>
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
              <div>
                <label for="c-email" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Email Address</label>
                <input
                  type="email"
                  id="c-email"
                  name="email"
                  placeholder="name@example.com"
                  class="w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-sm text-slate-900 outline-none transition-all focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-500/10"
                />
              </div>

              <div>
                <label for="c-eventType" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Event Type *</label>
                <select
                  id="c-eventType"
                  name="eventType"
                  required
                  class="w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-sm text-slate-900 outline-none transition-all focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-500/10"
                >
                  <option value="">Select Event Type</option>
                  <option value="Wedding Emcee">Wedding Emcee</option>
                  <option value="Sangeet Anchor">Sangeet Anchor</option>
                  <option value="Haldi & Mehendi">Haldi &amp; Mehendi</option>
                  <option value="Mameru Ceremony">Mameru Ceremony</option>
                  <option value="Corporate Event">Corporate Event</option>
                  <option value="Awards & Gala">Awards &amp; Gala</option>
                  <option value="Birthday Party">Birthday Party</option>
                  <option value="Anniversary Party">Anniversary Party</option>
                  <option value="Product Launch">Product Launch</option>
                  <option value="Sports & Family Day">Sports &amp; Family Day</option>
                  <option value="Other Celebration">Other Celebration</option>
                </select>
              </div>
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
              <div>
                <label for="c-eventDate" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Event Date</label>
                <input
                  type="date"
                  id="c-eventDate"
                  name="eventDate"
                  class="w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-sm text-slate-900 outline-none transition-all focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-500/10"
                />
              </div>

              <div>
                <label for="c-eventLocation" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Event Venue / City</label>
                <input
                  type="text"
                  id="c-eventLocation"
                  name="eventLocation"
                  placeholder="e.g. Taj Lands End, Mumbai"
                  class="w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-sm text-slate-900 outline-none transition-all focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-500/10"
                />
              </div>
            </div>

            <div>
              <label for="c-details" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Event Details &amp; Requirements</label>
              <textarea
                id="c-details"
                name="details"
                rows="4"
                placeholder="Tell us about the schedule, crowd size, expected languages or special hosting requirements..."
                class="w-full rounded-xl border border-slate-200 bg-slate-50/50 px-4 py-3 text-sm text-slate-900 outline-none transition-all focus:border-pink-500 focus:bg-white focus:ring-2 focus:ring-pink-500/10"
              ></textarea>
            </div>

            <button
              type="submit"
              id="c-submit-btn"
              class="w-full inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-pink-600 via-rose-600 to-red-600 px-8 py-4 text-sm font-semibold text-white shadow-xl shadow-pink-500/25 transition-all duration-300 hover:shadow-2xl hover:shadow-pink-500/35 hover:-translate-y-0.5 cursor-pointer"
            >
              <span id="btn-text">Submit Event Enquiry</span>
              <span id="btn-spinner" class="hidden animate-spin">
                <svg class="h-5 w-5 text-white" viewBox="0 0 24 24" fill="none">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                </svg>
              </span>
              <?php echo trupti_icon('arrow-up-right', 'shrink-0', 17); ?>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

</main>

<script>
  (function() {
    var form = document.getElementById('trupti-ajax-contact-form');
    var feedback = document.getElementById('form-feedback-box');
    var submitBtn = document.getElementById('c-submit-btn');
    var btnText = document.getElementById('btn-text');
    var btnSpinner = document.getElementById('btn-spinner');

    if (!form) return;

    form.addEventListener('submit', async function(e) {
      e.preventDefault();
      btnText.textContent = 'Sending Enquiry...';
      btnSpinner.classList.remove('hidden');
      submitBtn.disabled = true;
      feedback.classList.add('hidden');

      var formData = new FormData(form);
      var payload = {
        name: formData.get('name') || '',
        phone: formData.get('phone') || '',
        email: formData.get('email') || '',
        eventType: formData.get('eventType') || '',
        eventDate: formData.get('eventDate') || 'Not specified',
        eventLocation: formData.get('eventLocation') || 'Not specified',
        details: formData.get('details') || ''
      };

      try {
        var response = await fetch('/wp-json/trupti/v1/contact', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        });
        var result = await response.json();

        if (response.ok && result.success) {
          feedback.className = 'rounded-xl p-4 text-sm font-medium bg-emerald-50 text-emerald-800 border border-emerald-200 block';
          feedback.textContent = result.message || 'Thank you! Your enquiry has been sent to <?php echo esc_js($email); ?>.';
          form.reset();

          // WhatsApp notification backup
          var waText = encodeURIComponent("New Event Enquiry\nName: " + payload.name + "\nPhone: " + payload.phone + "\nType: " + payload.eventType + "\nDate: " + payload.eventDate);
          window.open("https://wa.me/<?php echo esc_js($whatsapp_num); ?>?text=" + waText, "_blank");
        } else {
          feedback.className = 'rounded-xl p-4 text-sm font-medium bg-rose-50 text-rose-800 border border-rose-200 block';
          feedback.textContent = result.message || 'There was an error sending your enquiry. Please try calling directly.';
        }
      } catch (err) {
        feedback.className = 'rounded-xl p-4 text-sm font-medium bg-rose-50 text-rose-800 border border-rose-200 block';
        feedback.textContent = 'Network error. Please try reaching us directly at <?php echo esc_js($phone); ?>.';
      } finally {
        btnText.textContent = 'Submit Event Enquiry';
        btnSpinner.classList.add('hidden');
        submitBtn.disabled = false;
      }
    });
  })();
</script>

<?php get_footer(); ?>
