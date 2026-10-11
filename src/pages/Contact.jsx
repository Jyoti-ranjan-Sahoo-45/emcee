
import React, { useState } from "react";
import { motion } from "framer-motion";
import {
  Mail,
  Phone,
  MapPin,
  ArrowUpRight,
  Clock3,
  Send,
  CheckCircle2,
} from "lucide-react";
import { useSiteOptions, usePageData } from "../common/useWpData";

function Contact() {
  const options = useSiteOptions();
  const pageData = usePageData("contact");
  const [submitted, setSubmitted] = useState(false);
  const [loading, setLoading] = useState(false);
  const [statusMessage, setStatusMessage] = useState("");

  const handleSubmit = async (e) => {
    e.preventDefault();
    setLoading(true);
    setStatusMessage("");

    const formEl = e.currentTarget;
    const formData = new FormData(formEl);

    const payload = {
      name: formData.get("name") || "",
      phone: formData.get("phone") || "",
      email: formData.get("email") || "",
      eventType: formData.get("eventType") || "",
      eventDate: formData.get("eventDate") || "Not specified",
      eventLocation: formData.get("eventLocation") || "Not specified",
      details: formData.get("details") || "",
    };

    const message = `New Event Enquiry\n\nName: ${payload.name}\nPhone: ${payload.phone}\nEmail: ${payload.email}\nEvent Type: ${payload.eventType}\nEvent Date: ${payload.eventDate}\nEvent Location: ${payload.eventLocation}\nDetails: ${payload.details}`;

    try {
      await fetch("/wp-json/trupti/v1/contact", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(payload),
      });
    } catch (err) {
      console.warn("Contact API dispatch note:", err);
    }

    // WhatsApp backup notification
    window.open(
      `https://wa.me/${options.whatsapp}?text=${encodeURIComponent(message)}`,
      "_blank",
      "noopener,noreferrer",
    );

    setSubmitted(true);
    setStatusMessage(`Thank you! Your enquiry has been sent to ${options.email}.`);
    formEl.reset();
    setLoading(false);

    setTimeout(() => {
      setSubmitted(false);
      setStatusMessage("");
    }, 6000);
  };

  return (
    <main className="overflow-hidden bg-[#fff9fb] text-slate-900">
      {/* =====================================================
          HERO
      ===================================================== */}
      <section className="relative overflow-hidden border-b border-pink-100 bg-white">
        {/* Background Glows */}
        <div className="absolute -left-40 -top-32 h-96 w-96 rounded-full bg-pink-200/30 blur-[120px]" />
        <div className="absolute -right-40 top-20 h-96 w-96 rounded-full bg-red-200/25 blur-[120px]" />

        {/* Decorative Grid */}
        <div
          className="absolute inset-0 opacity-[0.025]"
          style={{
            backgroundImage:
              "linear-gradient(#be185d 1px, transparent 1px), linear-gradient(90deg, #be185d 1px, transparent 1px)",
            backgroundSize: "55px 55px",
          }}
        />

        <div className="relative z-10 mx-auto max-w-7xl px-6 py-5 text-center sm:py-10 lg:px-8">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.7 }}
          >
            <span className="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.3em] text-pink-600">
              <span className="h-px w-8 bg-gradient-to-r from-pink-500 to-red-500" />
              Get In Touch
              <span className="h-px w-8 bg-gradient-to-r from-red-500 to-pink-500" />
            </span>

            <h1 className="mx-auto mt-5 max-w-3xl text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
              Let's Make Your Event
              <span className="block bg-gradient-to-r from-pink-600 via-rose-500 to-red-600 bg-clip-text text-transparent">
                Truly Memorable.
              </span>
            </h1>

            <p className="mx-auto mt-6 max-w-2xl text-sm leading-7 text-slate-500 sm:text-base">
              Planning a corporate event, wedding, celebration or special
              occasion? Tell us about your event and let's create an experience
              your audience will remember.
            </p>
          </motion.div>
        </div>
      </section>

      {/* =====================================================
          CONTACT CONTENT
      ===================================================== */}
      <section className="relative px-6 py-5 sm:py-10 lg:px-8">
        <div className="mx-auto grid max-w-7xl gap-10 lg:grid-cols-[0.8fr_1.2fr]">
          {/* LEFT — CONTACT INFO */}
          <motion.div
            initial={{ opacity: 0, x: -30 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.7 }}
            className="relative overflow-hidden rounded-[2rem] bg-[#16080d] p-8 text-white shadow-[0_25px_70px_rgba(88,20,45,0.18)] sm:p-10"
          >
            {/* Glows */}
            <div className="absolute -right-24 -top-24 h-64 w-64 rounded-full bg-pink-600/20 blur-[90px]" />
            <div className="absolute -bottom-24 -left-24 h-64 w-64 rounded-full bg-red-600/20 blur-[90px]" />

            <div className="relative z-10">
              <span className="text-xs font-semibold uppercase tracking-[0.25em] text-pink-400">
                Contact Information
              </span>

              <h2 className="mt-4 text-3xl font-bold leading-tight sm:text-4xl">
                Let's Start A
                <span className="block bg-gradient-to-r from-pink-400 to-red-500 bg-clip-text text-transparent">
                  Conversation.
                </span>
              </h2>

              <p className="mt-5 text-sm leading-7 text-white/55">
                Have an event coming up? Share your requirements and we'll
                connect with you to understand your occasion, audience and
                hosting needs.
              </p>

              {/* Contact Details */}
              <div className="mt-10 space-y-6">
                <a
                  href={`mailto:${options.email}`}
                  className="group flex items-start gap-4"
                >
                  <div className="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-pink-400/20 bg-pink-500/10 text-pink-400 transition group-hover:bg-pink-500/20">
                    <Mail size={19} />
                  </div>

                  <div>
                    <p className="text-xs uppercase tracking-wider text-white/40">
                      Email
                    </p>
                    <p className="mt-1 text-sm text-white/80 transition group-hover:text-pink-300">
                      {options.email}
                    </p>
                  </div>
                </a>

                <a
                  href={`tel:${options.phone}`}
                  className="group flex items-start gap-4"
                >
                  <div className="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-pink-400/20 bg-pink-500/10 text-pink-400 transition group-hover:bg-pink-500/20">
                    <Phone size={19} />
                  </div>

                  <div>
                    <p className="text-xs uppercase tracking-wider text-white/40">
                      Phone
                    </p>
                    <p className="mt-1 text-sm text-white/80 transition group-hover:text-pink-300">
                      {options.phone}
                    </p>
                  </div>
                </a>

                <div className="group flex items-start gap-4">
                  <div className="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-pink-400/20 bg-pink-500/10 text-pink-400 transition group-hover:bg-pink-500/20">
                    <MapPin size={19} />
                  </div>

                  <div>
                    <p className="text-xs uppercase tracking-wider text-white/40">
                      Location
                    </p>

                    <p className="mt-1 text-sm leading-6 text-white/80 transition group-hover:text-pink-300">
                      {options.address}
                    </p>
                  </div>
                </div>
              </div>

              {/* Availability */}
              <div className="mt-10 border-t border-white/10 pt-7">
                <div className="flex items-center gap-3">
                  <Clock3 size={17} className="text-pink-400" />

                  <div>
                    <p className="text-sm font-medium text-white">
                      Available for Events
                    </p>
                    <p className="mt-1 text-xs text-white/40">
                      Corporate · Weddings · Celebrations · Special Events
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </motion.div>

          {/* RIGHT — FORM */}
          <motion.div
            initial={{ opacity: 0, x: 30 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.7 }}
            className="rounded-[2rem] border border-pink-100 bg-white p-7 shadow-[0_20px_60px_rgba(190,24,93,0.07)] sm:p-10"
          >
            <div className="mb-4">
              <span className="text-xs font-semibold uppercase tracking-[0.25em] text-pink-600">
                Event Enquiry
              </span>

              <h2 className="mt-1 text-2xl font-bold text-slate-900 sm:text-3xl">
                Tell Us About Your Event
              </h2>

              <p className="mt-1 text-sm leading-6 text-slate-500">
                Fill in the details below and we'll get back to you with the
                next steps.
              </p>
            </div>

            <form onSubmit={handleSubmit} className="space-y-3">
              {/* Name + Phone */}
              <div className="grid gap-5 sm:grid-cols-2">
                <div>
                  <label className="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-600">
                    Your Name
                  </label>

                  <input
                    type="text"
                    required
                    name="name"
                    placeholder="Enter your name"
                    className="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100"
                  />
                </div>

                <div>
                  <label className="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-600">
                    Phone Number
                  </label>

                  <input
                    type="tel"
                    required
                    name="phone"
                    placeholder="+91 XXXXX XXXXX"
                    className="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100"
                  />
                </div>
              </div>

              {/* Email */}
              <div>
                <label className="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-600">
                  Email Address
                </label>

                <input
                  type="email"
                  required
                  name="email"
                  placeholder="you@example.com"
                  className="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100"
                />
              </div>

              {/* Event Type */}
              <div>
                <label className="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-600">
                  Event Type
                </label>

                <select
                  required
                  defaultValue=""
                  name="eventType"
                  className="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-700 outline-none transition focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100"
                >
                  <option value="" disabled>
                    Select event type
                  </option>
                  <option>Corporate Event</option>
                  <option>Wedding</option>
                  <option>Awards & Gala</option>
                  <option>Product Launch</option>
                  <option>Private Celebration</option>
                  <option>Public Event</option>
                  <option>Other</option>
                </select>
              </div>

              {/* Event Details */}
              <div className="grid gap-5 sm:grid-cols-2">
                <div>
                  <label className="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-600">
                    Event Date
                  </label>

                  <input
                    type="date"
                    name="eventDate"
                    className="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-700 outline-none transition focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100"
                  />
                </div>

                <div>
                  <label className="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-600">
                    Event Location
                  </label>

                  <input
                    type="text"
                    name="eventLocation"
                    placeholder="City / Venue"
                    className="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100"
                  />
                </div>
              </div>

              {/* Message */}
              <div>
                <label className="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-600">
                  Tell Us More
                </label>

                <textarea
                  rows="5"
                  required
                  name="details"
                  placeholder="Tell us about your event, audience and hosting requirements..."
                  className="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 focus:border-pink-400 focus:bg-white focus:ring-4 focus:ring-pink-100"
                />
              </div>

              {/* Submit */}
              <button
                type="submit"
                disabled={loading}
                className="group flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-pink-600 via-rose-500 to-red-600 px-6 py-4 text-sm font-semibold text-white shadow-lg shadow-pink-200/50 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-pink-200/60 disabled:opacity-70 disabled:cursor-not-allowed"
              >
                {loading ? (
                  <span>Sending Enquiry...</span>
                ) : submitted ? (
                  <>
                    <CheckCircle2 size={18} />
                    Enquiry Sent
                  </>
                ) : (
                  <>
                    Send Event Enquiry
                    <Send
                      size={17}
                      className="transition-transform group-hover:translate-x-1"
                    />
                  </>
                )}
              </button>

              {statusMessage && (
                <div className="mt-3 rounded-xl border border-green-200 bg-green-50 p-3 text-center text-xs font-medium text-green-800">
                  {statusMessage}
                </div>
              )}
            </form>
          </motion.div>
        </div>
      </section>

      {/* =====================================================
          BOTTOM CTA
      ===================================================== */}
      <section className="px-6 pb-20 lg:px-8">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="relative mx-auto max-w-7xl overflow-hidden rounded-[2rem] bg-gradient-to-r from-pink-600 via-rose-600 to-red-600 px-7 py-10 text-center shadow-[0_20px_60px_rgba(190,24,93,0.20)] sm:px-12 sm:py-12"
        >
          <div className="absolute -left-20 -top-20 h-48 w-48 rounded-full bg-white/10 blur-3xl" />
          <div className="absolute -bottom-20 -right-20 h-48 w-48 rounded-full bg-black/10 blur-3xl" />

          <div className="relative z-10">
            <h3 className="text-2xl font-bold text-white sm:text-3xl">
              Ready To Bring Your Event To Life?
            </h3>

            <p className="mx-auto mt-3 max-w-xl text-sm leading-6 text-white/75">
              Let's talk about your event and create a hosting experience
              your guests will remember.
            </p>

            <a
              href="tel:+919820359087"
              className="mt-6 inline-flex items-center gap-2 rounded-full bg-white px-6 py-3 text-sm font-semibold text-pink-700 transition hover:scale-[1.03]"
            >
              <Phone size={17} />
              +91 9820359087
              <ArrowUpRight size={16} />
            </a>
          </div>
        </motion.div>
      </section>
    </main>
  );
}

export default Contact;

