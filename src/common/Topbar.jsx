
import React, { useEffect, useState } from "react";
import { Phone, Mail } from "lucide-react";
import { FaFacebookF, FaInstagram, FaYoutube } from "react-icons/fa";
import { useSiteOptions } from "./useWpData";

function Topbar() {
  const [showTopbar, setShowTopbar] = useState(true);
  const options = useSiteOptions();

  useEffect(() => {
    const handleScroll = () => {
      // Hide topbar when user starts scrolling down
      if (window.scrollY > 20) {
        setShowTopbar(false);
      } else {
        setShowTopbar(true);
      }
    };

    window.addEventListener("scroll", handleScroll);

    return () => {
      window.removeEventListener("scroll", handleScroll);
    };
  }, []);

  return (
    <div
      className={`w-full bg-[#1e0a13] border-b border-pink-950/20 text-white/95 transition-all duration-500 ease-in-out ${
        showTopbar
          ? "max-h-20 opacity-100"
          : "max-h-0 opacity-0 overflow-hidden"
      }`}
    >
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="min-h-[42px] flex items-center justify-between gap-4">
          
          {/* Contact Details */}
          <div className="flex items-center gap-5 text-sm">
            <a
              href={`tel:${options.phone}`}
              className="flex items-center gap-2 hover:text-amber-400 transition-colors duration-300"
            >
              <Phone size={15} />
              <span>{options.phone}</span>
            </a>

            <a
              href={`mailto:${options.email}`}
              className="hidden sm:flex items-center gap-2 hover:text-amber-400 transition-colors duration-300"
            >
              <Mail size={15} />
              <span>{options.email}</span>
            </a>
          </div>

          {/* Social Media */}
          <div className="flex items-center gap-3">
            <a
              href={options.facebook}
              target="_blank"
              rel="noreferrer"
              aria-label="Facebook"
              className="hover:text-amber-400 transition-colors duration-300"
            >
              <FaFacebookF size={14} />
            </a>

            <a
              href={options.instagram}
              target="_blank"
              rel="noreferrer"
              aria-label="Instagram"
              className="hover:text-amber-400 transition-colors duration-300"
            >
              <FaInstagram size={16} />
            </a>

            <a
              href={options.youtube}
              target="_blank"
              rel="noreferrer"
              aria-label="YouTube"
              className="hover:text-amber-400 transition-colors duration-300"
            >
              <FaYoutube size={17} />
            </a>
          </div>

        </div>
      </div>
    </div>
  );
}

export default Topbar;

