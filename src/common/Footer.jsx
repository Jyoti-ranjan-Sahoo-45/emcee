
import { Mail, Phone, MapPin, ArrowUpRight } from "lucide-react";
import {
  FaFacebookF,
  FaInstagram,
  FaYoutube,
} from "react-icons/fa";
import { Link } from "react-router-dom";
import logo from "../assets/logo.jpg";
import { useSiteOptions } from "./useWpData";

function Footer() {
  const options = useSiteOptions();
  const services = [
   
   
    {
      name: "Sangeet Anchor",
      path: "/services/sangeet-anchor-mumbai",
    },
    {
      name: "Haldi & Mehendi Anchor",
      path: "/services/haldi-mehendi-anchoring-mumbai",
    },
    {
      name: "Mameru Ceremony Hosting",
      path: "/services/mameru-ceremony-hosting",
    },
    {
      name: "Birthday Party Host",
      path: "/services/birthday-party-hostess",
    },
    {
      name: "Anniversary Party Emcee",
      path: "/services/anniversary-party-emcee",
    },

    {
      name: "Outdoor Sports & Family Day",
      path: "/services/outdoor-sports-family-day-emcee",
    },
    {
      name: "Weddings Emcee",
      path: "/services/weddings-emcee",
    },
  ];

  return (
    <footer className="relative overflow-hidden bg-[#0d0508] text-white">
      <div className="pointer-events-none absolute -left-40 top-0 h-96 w-96 rounded-full bg-[#9f1239]/20 blur-[130px]" />
      <div className="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-[#e11d48]/10 blur-[140px]" />

      {/* Main Footer */}
      <div className="relative z-10 mx-auto max-w-7xl px-6 py-16 sm:px-8 lg:px-10 lg:py-20">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-10">

          {/* Brand */}
          <div className="lg:pr-8">
            <Link to="/" className="inline-flex items-center gap-3">
              <img
                src={logo}
                alt="Trupti Shah Emcee"
                className="h-14 w-14 rounded-xl object-cover ring-2 ring-[#fb7185]/40 shadow-[0_8px_22px_rgba(225,29,72,0.22)]"
              />
              <span className="text-2xl font-bold tracking-[0.18em] text-white">
                EMCEE
              </span>
            </Link>

            <p className="mt-6 max-w-sm text-sm leading-7 text-[#d6a9b8]">
              Creating memorable moments, engaging audiences and bringing
              every event to life with energy, elegance and professionalism.
            </p>

            {/* Social */}
            <div className="flex items-center gap-3 mt-7">
              <a
                href={options.facebook}
                target="_blank"
                rel="noreferrer"
                aria-label="Facebook"
                className="flex h-10 w-10 items-center justify-center rounded-full border border-[#6f1d3b] bg-[#190a10] text-[#fda4af] transition-all duration-300 hover:border-[#fb7185] hover:bg-[#be123c] hover:text-white"
              >
                <FaFacebookF size={14} />
              </a>

              <a
                href={options.instagram}
                target="_blank"
                rel="noreferrer"
                aria-label="Instagram"
                className="flex h-10 w-10 items-center justify-center rounded-full border border-[#6f1d3b] bg-[#190a10] text-[#fda4af] transition-all duration-300 hover:border-[#fb7185] hover:bg-[#be123c] hover:text-white"
              >
                <FaInstagram size={16} />
              </a>

              <a
                href={options.youtube}
                target="_blank"
                rel="noreferrer"
                aria-label="YouTube"
                className="flex h-10 w-10 items-center justify-center rounded-full border border-[#6f1d3b] bg-[#190a10] text-[#fda4af] transition-all duration-300 hover:border-[#fb7185] hover:bg-[#be123c] hover:text-white"
              >
                <FaYoutube size={17} />
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h3 className="text-sm font-semibold uppercase tracking-[0.15em] text-[#fff1f2]">
              Quick Links
            </h3>

            <div className="mt-4 mb-5 h-px w-10 bg-gradient-to-r from-[#fb7185] to-[#be123c]" />

            <ul className="space-y-3.5">
              <li>
                <Link
                  to="/"
                  className="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]"
                >
                  Home
                </Link>
              </li>

              <li>
                <Link
                  to="/about"
                  className="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]"
                >
                  About
                </Link>
              </li>

              <li>
                <Link
                  to="/services"
                  className="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]"
                >
                  Services
                </Link>
              </li>

              <li>
                <Link
                  to="/gallery"
                  className="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]"
                >
                  Gallery
                </Link>
              </li>

              <li>
                <Link
                  to="/contact"
                  className="text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]"
                >
                  Contact
                </Link>
              </li>
            </ul>
          </div>

          {/* Services */}
          <div>
            <h3 className="text-sm font-semibold uppercase tracking-[0.15em] text-[#fff1f2]">
              Services
            </h3>

            <div className="mt-4 mb-5 h-px w-10 bg-gradient-to-r from-[#fb7185] to-[#be123c]" />

            <ul className="space-y-3.5">
              {services.map((service) => (
                <li key={service.path}>
                  <Link
                    to={service.path}
                    className="group flex items-start gap-1 text-sm text-[#bd8798] transition-colors duration-300 hover:text-[#fda4af]"
                  >
                    <span>{service.name}</span>
                    <ArrowUpRight
                      size={13}
                      className="mt-0.5 opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300"
                    />
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h3 className="text-sm font-semibold uppercase tracking-[0.15em] text-[#fff1f2]">
              Contact
            </h3>

            <div className="mt-4 mb-5 h-px w-10 bg-gradient-to-r from-[#fb7185] to-[#be123c]" />

            <div className="space-y-5">

              {/* Email */}
              <a
                href={`mailto:${options.email}`}
                className="flex items-start gap-3 group"
              >
                <Mail
                  size={18}
                  className="mt-0.5 shrink-0 text-[#fb7185] transition-colors group-hover:text-white"
                />

                <span className="break-all text-sm leading-6 text-[#bd8798] transition-colors group-hover:text-[#fda4af]">
                  {options.email}
                </span>
              </a>

              {/* Phone */}
              <a
                href={`tel:${options.phone}`}
                className="flex items-start gap-3 group"
              >
                <Phone
                  size={18}
                  className="mt-0.5 shrink-0 text-[#fb7185] transition-colors group-hover:text-white"
                />

                <span className="text-sm leading-6 text-[#bd8798] transition-colors group-hover:text-[#fda4af]">
                  {options.phone}
                </span>
              </a>

              {/* Address */}
              <div className="flex items-start gap-3 group">
                <MapPin
                  size={19}
                  className="mt-0.5 shrink-0 text-[#fb7185] transition-colors group-hover:text-white"
                />

                <span className="text-sm leading-6 text-[#bd8798] transition-colors group-hover:text-[#fda4af]">
                  {options.address}
                </span>
              </div>

            </div>
          </div>
        </div>
      </div>

      {/* Bottom Bar */}
      <div className="relative z-10 border-t border-[#4b172b] bg-black/20">
        <div className="mx-auto max-w-7xl px-6 py-5 sm:px-8 lg:px-10">
          <div className="flex flex-col sm:flex-row items-center justify-between gap-3 text-center sm:text-left">
            <p className="text-xs text-[#9f6677]">
              © {new Date().getFullYear()} EMCEE. All rights reserved.
            </p>

            <p className="text-xs text-[#9f6677]">
              Professional Event Hosting & Entertainment
            </p>

            <a
              href="https://serviceexhibition.com/"
              target="_blank"
              rel="noreferrer"
              className="text-xs text-[#f7c5d1] transition-colors duration-300 hover:text-white"
            >
              Designed And Maintain By Greenbacks Lexverse Pvt.Ltd
            </a>
          </div>
        </div>
      </div>
    </footer>
  );
}

export default Footer;