
import React from "react";
import { Link } from "react-router-dom";
import { motion } from "framer-motion";
import {
  ArrowUpRight,
  Mic2,
  Sparkles,
  Quote,
} from "lucide-react";

import aboutImage from "../assets/pic4.jpeg";
import { usePageData } from "../common/useWpData";

function AboutSection() {
  const pageData = usePageData("about");
  return (
    <motion.section
      initial={{ opacity: 0, y: 32 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true, amount: 0.2 }}
      transition={{ duration: 0.7, ease: "easeOut" }}
      className="relative overflow-hidden bg-[#fffafa] py-16 sm:py-20 lg:py-24"
    >
      {/* ================= BACKGROUND DECORATION ================= */}

      <div className="pointer-events-none absolute -left-40 top-1/2 h-[400px] w-[400px] -translate-y-1/2 rounded-full bg-[#f8dce5]/40 blur-3xl" />

      <div className="pointer-events-none absolute -right-40 -top-32 h-[420px] w-[420px] rounded-full bg-[#ead1dc]/30 blur-3xl" />

      {/* Large thin circle */}
      <div className="pointer-events-none absolute -left-28 top-1/2 hidden h-[430px] w-[430px] -translate-y-1/2 rounded-full border border-[#8B1538]/[0.06] lg:block" />

      {/* Small decorative circle */}
      <div className="pointer-events-none absolute right-[7%] bottom-16 h-20 w-20 rounded-full border border-[#C2185B]/10" />

      <div className="relative mx-auto max-w-7xl px-5 sm:px-8 lg:px-10">
        <div className="grid items-center gap-12 lg:grid-cols-[0.9fr_1.1fr] lg:gap-20">

          {/* =====================================================
                              LEFT IMAGE
          ====================================================== */}

          <div className="relative mx-auto w-full max-w-[510px] lg:mx-0">

            {/* Decorative offset frame */}
            <div className="absolute -bottom-4 -left-4 h-full w-full rounded-[120px_120px_18px_18px] border border-[#8B1538]/15" />

            {/* Main image */}
            <div className="relative z-10 h-[460px] overflow-hidden rounded-[120px_120px_18px_18px] border-[6px] border-white bg-white shadow-[0_25px_60px_rgba(72,25,40,0.14)] sm:h-[520px]">
              <img
                src={pageData?.about_image || aboutImage}
                alt="Trupti Shah - Professional Emcee"
                className="h-full w-full object-cover transition-transform duration-1000 hover:scale-105"
              />

              {/* Image overlay */}
              <div className="absolute inset-0 bg-gradient-to-t from-[#35111f]/30 via-transparent to-transparent" />
            </div>

            {/* ================= EXPERIENCE BADGE ================= */}

            <div className="absolute top-7 -left-2 z-20 flex h-28 w-28 flex-col items-center justify-center rounded-full border-[5px] border-white bg-[#8B1538] text-center shadow-[0_15px_35px_rgba(139,21,56,0.22)] sm:h-32 sm:w-32">

              <Mic2
                size={16}
                className="mb-1 text-[#f2b0c4]"
              />

              <span className="font-serif text-2xl text-white sm:text-3xl">
                500+
              </span>

              <span className="mt-1 text-[7px] font-semibold uppercase tracking-[0.18em] text-pink-100">
                Events Hosted
              </span>
            </div>

            {/* ================= SMALL FLOATING CARD ================= */}

            <div className="absolute -right-3 bottom-10 z-20 hidden w-[155px] rounded-xl border border-white bg-white/95 p-4 shadow-[0_15px_35px_rgba(0,0,0,0.10)] backdrop-blur-md sm:block">

              <div className="flex items-center gap-2">

                <span className="flex h-8 w-8 items-center justify-center rounded-full bg-[#fff0f4] text-[#C2185B]">
                  <Sparkles size={13} />
                </span>

                <div>
                  <p className="font-serif text-lg leading-none text-[#8B1538]">
                    Since
                  </p>

                  <p className="mt-1 text-[9px] uppercase tracking-widest text-gray-400">
                    2010
                  </p>
                </div>

              </div>

            </div>

            {/* Decorative dots */}
            <div className="absolute -bottom-3 right-10 grid grid-cols-4 gap-1.5">
              {[...Array(12)].map((_, index) => (
                <span
                  key={index}
                  className="h-1.5 w-1.5 rounded-full bg-[#C2185B]/25"
                />
              ))}
            </div>

          </div>

          {/* =====================================================
                              RIGHT CONTENT
          ====================================================== */}

          <div className="relative z-10 max-w-2xl">

            {/* Small heading */}
            <div className="mb-4 flex items-center gap-3">

              <span className="h-px w-9 bg-[#C2185B]" />

              <span className="flex items-center gap-2 text-[10px] font-semibold uppercase tracking-[0.3em] text-[#9E1746]">
                <Mic2 size={11} />
                About The Emcee
              </span>

            </div>

            {/* Elegant heading */}
            <h2 className="max-w-xl font-serif text-3xl font-medium leading-tight tracking-[-0.02em] text-[#28191e] sm:text-4xl lg:text-[3.2rem]">
              Bringing Energy,
              <span className="block text-[#8B1538]">
                Creating Moments
              </span>
            </h2>

            {/* Small line */}
            <div className="mt-5 flex items-center gap-2">
              <span className="h-[2px] w-12 bg-[#C2185B]" />
              <span className="h-1.5 w-1.5 rounded-full bg-[#C2185B]" />
              <span className="h-px w-5 bg-[#C2185B]/30" />
            </div>

            {/* Content */}
            <div className="mt-6 space-y-4 text-[14px] leading-7 text-gray-600 sm:text-[15px] sm:leading-7">

              <p>
                Trupti Shah is a professional{" "}
                <span className="font-medium text-[#8B1538]">
                  Emcee & Event Host
                </span>{" "}
                known for bringing confidence, energy and personality to every
                stage. With over 500 events, celebrations and shows hosted,
                she understands how to connect with different audiences and
                create an atmosphere that feels engaging and memorable.
              </p>

              <p>
                Over the years, Trupti has worked across a wide range of
                occasions including corporate events, weddings, awards and
                gala evenings, product launches, public events and private
                celebrations.
              </p>

              <p>
                Her approach goes beyond simply following a script. From
                opening a show and introducing important guests to interacting
                with the audience and managing transitions, every part of the
                event is handled with professionalism, spontaneity and
                attention to the moment.
              </p>

              <p>
                Whether the occasion calls for elegance, excitement, warmth or
                high-energy entertainment, the hosting style is adapted to the
                audience, event and overall atmosphere.
              </p>

            </div>

            {/* ================= HIGHLIGHT ================= */}

            <div className="relative mt-6 border-l-2 border-[#C2185B] bg-[#fff1f5] px-5 py-4">

              <Quote
                size={18}
                className="absolute -left-[10px] -top-2 rounded-full bg-[#fffafa] p-0.5 text-[#C2185B]"
              />

              <p className="font-serif text-lg italic leading-7 text-[#68243b] sm:text-xl">
                Every stage has a story. Our job is to make the audience feel
                like they are part of it.
              </p>

            </div>

            {/* ================= CTA ================= */}

            <div className="mt-7">

              <Link
                to="/about"
                className="group inline-flex items-center gap-2 text-sm font-semibold tracking-wide text-[#8B1538]"
              >
                Discover Trupti's Story

                <span className="flex h-8 w-8 items-center justify-center rounded-full border border-[#8B1538]/20 transition-all duration-300 group-hover:border-[#8B1538] group-hover:bg-[#8B1538] group-hover:text-white">
                  <ArrowUpRight
                    size={14}
                    className="transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5"
                  />
                </span>
              </Link>

            </div>

          </div>

        </div>
      </div>

      {/* Bottom subtle divider */}
      <div className="pointer-events-none absolute bottom-0 left-1/2 h-px w-2/3 -translate-x-1/2 bg-gradient-to-r from-transparent via-[#8B1538]/10 to-transparent" />

    </motion.section>
  );
}

export default AboutSection;