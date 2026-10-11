
import React from "react";
import { motion } from "framer-motion";
import {
  ArrowUpRight,
  Play,
  Sparkles,
  Mic2,
} from "lucide-react";
import { Link } from "react-router-dom";
import heroImage from "../assets/anchor.webp";
import { Helmet } from "react-helmet-async";
import { usePageData } from "../common/useWpData";

function HeroSection() {
  const pageData = usePageData("home");
  return (
<>
<Helmet>
        <title>
          Sangeet Anchor & Wedding Emcee in Mumbai | Trupti Shah
        </title>

        <meta
          name="description"
          content="Trupti Shah is a professional anchor and emcee in Mumbai for weddings, sangeet, haldi, birthdays, anniversaries and corporate events. Check availability."
        />

        <meta
          name="keywords"
          content="Sangeet Anchor Mumbai, Wedding Emcee Mumbai, Wedding Anchor Mumbai, Professional Emcee Mumbai, Trupti Shah, Sangeet Emcee, Wedding Anchor"
        />

        <meta name="author" content="Trupti Shah" />

        <meta
          property="og:title"
          content="Sangeet Anchor & Wedding Emcee in Mumbai | Trupti Shah"
        />

        <meta
          property="og:description"
          content="Trupti Shah is a professional anchor and emcee in Mumbai for weddings, sangeet, haldi, birthdays, anniversaries and corporate events."
        />

        <meta property="og:type" content="website" />

        <meta
          property="og:image"
          content="/assets/anchor.webp"
        />

        <meta
          name="twitter:card"
          content="summary_large_image"
        />

        <meta
          name="twitter:title"
          content="Sangeet Anchor & Wedding Emcee in Mumbai | Trupti Shah"
        />

        <meta
          name="twitter:description"
          content="Trupti Shah is a professional anchor and emcee in Mumbai for weddings, sangeet, haldi, birthdays, anniversaries and corporate events."
        />
      </Helmet>

    <section className="relative min-h-[calc(100vh-76px)] overflow-hidden bg-[#fff9fb] text-slate-900">

      {/* =====================================================
          BACKGROUND
      ====================================================== */}

      <div className="absolute inset-0 pointer-events-none overflow-hidden">

        {/* Pink Glow */}
        <motion.div
          animate={{
            x: [0, 50, -20, 0],
            y: [0, -30, 40, 0],
            scale: [1, 1.12, 0.95, 1],
          }}
          transition={{
            duration: 15,
            repeat: Infinity,
            ease: "easeInOut",
          }}
          className="absolute -top-40 -left-40 w-[480px] h-[480px] rounded-full bg-pink-200/40 blur-[110px]"
        />

        {/* Red Glow */}
        <motion.div
          animate={{
            x: [0, -50, 30, 0],
            y: [0, 40, -20, 0],
            scale: [1, 0.92, 1.08, 1],
          }}
          transition={{
            duration: 17,
            repeat: Infinity,
            ease: "easeInOut",
          }}
          className="absolute -bottom-40 -right-40 w-[500px] h-[500px] rounded-full bg-red-200/30 blur-[120px]"
        />

        {/* Decorative Circle */}
        <div className="absolute top-24 right-[8%] w-24 h-24 rounded-full border border-pink-200/60" />

        <div className="absolute top-32 right-[10%] w-3 h-3 rounded-full bg-pink-400/60" />

        {/* Decorative Lines */}
        <div className="absolute left-[5%] top-[38%] w-16 h-px bg-gradient-to-r from-transparent to-pink-300/60" />

        <div className="absolute right-[4%] bottom-[25%] w-20 h-px bg-gradient-to-l from-transparent to-red-300/60" />
      </div>

      {/* =====================================================
          HERO CONTENT
      ====================================================== */}

      <div className="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">

        <div className="min-h-[calc(100vh-76px)] grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center py-1 sm:py-2 lg:py-5">

          {/* =================================================
              LEFT CONTENT
          ================================================== */}

          <div className="max-w-2xl">

            {/* Label */}
            <motion.div
              initial={{ opacity: 0, y: 15 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.6 }}
              className="inline-flex items-center gap-2 mb-3"
            >
              <span className="flex items-center justify-center w-8 h-8 rounded-full bg-gradient-to-br from-pink-500 to-red-600 text-white">
                <Mic2 size={14} />
              </span>

              <span className="text-xs sm:text-sm font-semibold uppercase tracking-[0.2em] text-rose-600">
                {pageData?.hero_badge || "Professional Emcee & Event Host"}
              </span>
            </motion.div>

            {/* Heading */}
            {pageData?.hero_title ? (
              <motion.h1
                initial={{ opacity: 0, y: 25 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ duration: 0.75, delay: 0.1 }}
                className="text-5xl sm:text-6xl lg:text-6xl xl:text-7xl font-medium font-serif tracking-[-0.04em] leading-[1.02]"
              >
                <span className="bg-gradient-to-r from-pink-500 via-rose-500 to-red-600 bg-clip-text text-transparent">
                  {pageData.hero_title}
                </span>
              </motion.h1>
            ) : (
              <motion.h1
                initial={{ opacity: 0, y: 25 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ duration: 0.75, delay: 0.1 }}
                className="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-medium font-serif tracking-[-0.04em] text-slate-900"
                style={{ lineHeight: 1.08 }}
              >
                <span className="block">Wedding Emcee &amp;</span>
                <span className="block bg-gradient-to-r from-pink-500 via-rose-500 to-red-600 bg-clip-text text-transparent">
                  Sangeet Anchor
                </span>
                <span className="block text-slate-900">
                  in Mumbai
                </span>
              </motion.h1>
            )}

            {/* Description */}
            <motion.p
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.7, delay: 0.25 }}
              className="mt-4 max-w-xl text-sm sm:text-base lg:text-lg leading-7 sm:leading-8 text-slate-500"
            >
              {pageData?.hero_description || (
                <>
                  Meet <strong className="font-semibold text-slate-800">Trupti Shah</strong>, a professional emcee and anchor based in Mumbai who brings confidence, warmth and vibrant energy to weddings, sangeet, celebrations and unforgettable occasions.
                </>
              )}
            </motion.p>

            {/* Buttons */}
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.7, delay: 0.35 }}
              className="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 mt-3"
            >
              <Link
                to="/contact"
                className="group inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-pink-500 to-red-600 px-7 py-3.5 text-sm font-semibold text-white shadow-xl shadow-pink-500/20 hover:shadow-2xl hover:shadow-pink-500/30 hover:-translate-y-0.5 transition-all duration-300"
              >
                Book Trupti

                <ArrowUpRight
                  size={17}
                  className="group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"
                />
              </Link>

              <Link
                to="/gallery"
                className="group inline-flex items-center justify-center gap-3 rounded-full border border-slate-200 bg-white/70 backdrop-blur-sm px-7 py-3.5 text-sm font-semibold text-slate-700 hover:border-pink-200 hover:text-rose-600 hover:bg-white transition-all duration-300"
              >
                <span className="w-7 h-7 rounded-full bg-slate-100 group-hover:bg-pink-50 flex items-center justify-center transition-colors">
                  <Play size={12} fill="currentColor" />
                </span>

                View Highlights
              </Link>
            </motion.div>

            {/* Trust Line */}
            <motion.div
              initial={{ opacity: 0 }}
              animate={{ opacity: 1 }}
              transition={{ duration: 0.8, delay: 0.55 }}
              className="flex items-center gap-3 mt-5"
            >
              <div className="flex -space-x-2">
                <span className="w-8 h-8 rounded-full bg-gradient-to-br from-pink-400 to-rose-500 border-2 border-white" />
                <span className="w-8 h-8 rounded-full bg-gradient-to-br from-rose-400 to-red-500 border-2 border-white" />
                <span className="w-8 h-8 rounded-full bg-gradient-to-br from-red-400 to-pink-500 border-2 border-white" />
              </div>

              <div>
                <div className="flex items-center gap-1">
                  {[1, 2, 3, 4, 5].map((star) => (
                    <span
                      key={star}
                      className="text-rose-500 text-xs"
                    >
                      ★
                    </span>
                  ))}
                </div>

                <p className="text-xs text-slate-500 mt-0.5">
                  Creating memorable moments on every stage
                </p>
              </div>
            </motion.div>
          </div>

          {/* =================================================
              RIGHT IMAGE
          ================================================== */}

          <motion.div
            initial={{ opacity: 0, scale: 0.96, x: 30 }}
            animate={{ opacity: 1, scale: 1, x: 0 }}
            transition={{
              duration: 0.9,
              delay: 0.15,
              ease: "easeOut",
            }}
            className="relative flex justify-center lg:justify-end"
          >

            {/* Main Image Glow */}
            <div className="absolute w-[80%] h-[80%] bg-gradient-to-br from-pink-400/25 to-red-500/20 blur-[80px] rounded-full" />

            {/* Decorative Ring */}
            <motion.div
              animate={{ rotate: 360 }}
              transition={{
                duration: 30,
                repeat: Infinity,
                ease: "linear",
              }}
              className="absolute -right-3 sm:right-0 lg:-right-5 top-8 sm:top-12 w-[280px] sm:w-[380px] lg:w-[460px] aspect-square rounded-full border border-dashed border-pink-300/50"
            />

            {/* Image Frame */}
            <div className="relative w-full max-w-[480px]">

              {/* <div className="absolute -inset-3 rounded-[35px] bg-gradient-to-br from-pink-400/30 via-rose-300/10 to-red-500/20 blur-xl" /> */}

              <div className="relative overflow-hidden rounded-[30px] border border-white/80 bg-white p-2 shadow-[0_30px_80px_rgba(190,24,93,0.15)]">

                <img
                  src={pageData?.hero_image || heroImage}
                  alt="Trupti Shah - Professional Emcee"
                  className="w-full aspect-[4/5] object-cover rounded-[24px]"
                />

                {/* Image Overlay */}
                <div className="absolute inset-x-2 bottom-2 p-5 rounded-b-[24px] bg-gradient-to-t from-black/70 via-black/20 to-transparent">

                  <div className="flex items-end justify-between">

                    <div>
                      <p className="text-xs uppercase tracking-[0.18em] text-pink-200">
                        Your Event
                      </p>

                      <p className="mt-1 text-lg font-semibold text-white">
                        Your Stage. Your Moment.
                      </p>
                    </div>

                    <div className="w-10 h-10 rounded-full bg-white/15 backdrop-blur-md border border-white/20 flex items-center justify-center">
                      <Sparkles size={17} className="text-white" />
                    </div>

                  </div>
                </div>
              </div>

              {/* Floating Experience Card */}
              <motion.div
                animate={{
                  y: [0, -8, 0],
                }}
                transition={{
                  duration: 4,
                  repeat: Infinity,
                  ease: "easeInOut",
                }}
                className="absolute -left-5 sm:-left-8 bottom-10 sm:bottom-14 bg-white/95 backdrop-blur-xl rounded-2xl border border-white shadow-xl shadow-slate-900/10 px-5 py-4"
              >
                <p className="text-[10px] uppercase tracking-[0.18em] text-slate-400">
                  On Stage
                </p>

                <p className="mt-1 text-sm font-semibold text-slate-900">
                  Energy · Elegance · Engagement
                </p>
              </motion.div>

              {/* Small Gradient Badge */}
              <motion.div
                animate={{
                  y: [0, 7, 0],
                }}
                transition={{
                  duration: 4.5,
                  repeat: Infinity,
                  ease: "easeInOut",
                }}
                className="absolute -right-3 sm:-right-6 top-16 bg-gradient-to-br from-pink-500 to-red-600 text-white rounded-2xl px-4 py-3 shadow-xl shadow-pink-500/25"
              >
                <Sparkles size={18} />
              </motion.div>

            </div>
          </motion.div>
        </div>
      </div>

      {/* Bottom Scroll Hint */}
      <motion.div
        animate={{ y: [0, 6, 0] }}
        transition={{
          duration: 2,
          repeat: Infinity,
          ease: "easeInOut",
        }}
        className="hidden lg:flex absolute bottom-7 left-1/2 -translate-x-1/2 items-center gap-2 text-[10px] uppercase tracking-[0.2em] text-slate-400"
      >
        <span className="w-8 h-px bg-slate-300" />
        Explore
        <span className="w-8 h-px bg-slate-300" />
      </motion.div>

    </section>
    </>
  );
}

export default HeroSection;

