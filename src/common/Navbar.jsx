
import { useState } from "react";
import { Link } from "react-router-dom";
import { ChevronDown, Menu, X } from "lucide-react";
import logo from "../assets/logo2.png";

function Navbar() {
  const [mobileOpen, setMobileOpen] = useState(false);
  const [servicesOpen, setServicesOpen] = useState(false);

  const services = [
    
     {
      name: "Sangeet Anchor",
      path: "/services/sangeet-anchor-mumbai",
    },
     {
      name: "Haldi & Mehendi Anchoring",
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
      name: "Corporate Emcee",
      path: "/services/corporate-event-emcee",
    },
    // {
    //   name: "Dinner & Dance Emcee",
    //   path: "/services/dinner-dance-emcee",
    // },
    {
      name: "Awards & Gala Emcee",
      path: "/services/awards-gala-hostess",
    },
    {
      name: "Opening Ceremony & Official Launch Emcee",
      path: "/services/product-launch-emcee",
    },
    {
      name: "Outdoor Sports And Family Day Emcee",
      path: "/services/outdoor-sports-family-day-emcee",
    },
    
  
    {
      name: "Weddings Emcee",
      path: "/services/weddings-emcee",
    },
   
  ];

  const closeMobileMenu = () => {
    setMobileOpen(false);
    setServicesOpen(false);
  };

  return (
    <nav className="sticky top-0 z-50 w-full border-b border-[#f3c6d5] bg-[#fff8fb]/95 shadow-[0_10px_35px_rgba(190,24,93,0.10)] backdrop-blur-md">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="h-[88px] flex items-center justify-between">

          {/* Logo */}
          <Link
            to="/"
            onClick={closeMobileMenu}
            className="flex items-center shrink-0 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#be123c] focus-visible:ring-offset-4"
          >
            <img
              src={logo}
              alt="Trupti Shah - Emcee and Anchor"
              className="h-[56px] w-auto max-w-[240px] object-contain transition-transform duration-300 hover:scale-[1.02] sm:h-[62px] lg:h-[68px]"
            />
          </Link>

          {/* Desktop Navigation */}
          <div className="hidden lg:flex items-center gap-8">

            <Link
              to="/"
              className="text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300"
            >
              Home
            </Link>

            <Link
              to="/about"
              className="text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300"
            >
              About
            </Link>

            {/* Services Dropdown */}
            <div
              className="relative group"
              onMouseEnter={() => setServicesOpen(true)}
              onMouseLeave={() => setServicesOpen(false)}
            >
              <Link
                to="/"
                className="flex items-center gap-1.5 py-7 text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300"
              >
                Services
                <ChevronDown
                  size={16}
                  className={`transition-transform duration-300 ${
                    servicesOpen ? "rotate-180" : ""
                  }`}
                />
              </Link>

              {/* Dropdown */}
              <div
                  className={`absolute top-full left-1/2 -translate-x-1/2 w-[330px] rounded-xl border border-[#f3c6d5] bg-white p-2 shadow-[0_18px_40px_rgba(190,24,93,0.16)] transition-all duration-300 ${
                  servicesOpen
                    ? "opacity-100 visible translate-y-0"
                    : "opacity-0 invisible -translate-y-2 pointer-events-none"
                }`}
              >
                <Link
                  to="/services"
                  className="block rounded-lg px-4 py-3 text-sm font-semibold text-[#be123c] hover:bg-[#fff1f5] transition-colors"
                >
                  All Services
                </Link>

                <div className="my-1 h-px bg-[#f3c6d5]" />

                {services.map((service) => (
                  <Link
                    key={service.path}
                    to={service.path}
                    className="block rounded-lg px-4 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c] transition-all duration-200"
                  >
                    {service.name}
                  </Link>
                ))}
              </div>
            </div>

            <Link
              to="/contact"
              className="text-[13px] font-semibold uppercase tracking-[0.14em] text-[#5f2436] hover:text-[#be123c] transition-colors duration-300"
            >
              Contact
            </Link>

            <Link
              to="/gallery"
              className="rounded-full border border-[#be123c] bg-[#be123c] px-5 py-2.5 text-[13px] font-semibold uppercase tracking-[0.12em] text-white shadow-[0_6px_16px_rgba(190,24,93,0.22)] transition-all duration-300 hover:border-[#9f1239] hover:bg-[#9f1239] hover:shadow-[0_9px_22px_rgba(190,24,93,0.28)]"
            >
              Gallery
            </Link>

          </div>

          {/* Mobile Menu Button */}
          <button
            type="button"
            onClick={() => setMobileOpen(!mobileOpen)}
            className="lg:hidden rounded-lg p-2 text-[#be123c] hover:bg-[#ffe8f0] transition-colors"
            aria-label="Toggle menu"
          >
            {mobileOpen ? <X size={25} /> : <Menu size={25} />}
          </button>
        </div>

        {/* Mobile Navigation */}
        <div
          className={`lg:hidden overflow-hidden transition-all duration-300 ${
            mobileOpen
              ? "max-h-[700px] opacity-100 pb-5"
              : "max-h-0 opacity-0"
          }`}
        >
          <div className="border-t border-[#f3c6d5] pt-4">

            <Link
              to="/"
              onClick={closeMobileMenu}
              className="block rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]"
            >
              Home
            </Link>

            <Link
              to="/about"
              onClick={closeMobileMenu}
              className="block rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]"
            >
              About
            </Link>

            {/* Mobile Services */}
            <div>
              <button
                type="button"
                onClick={() => setServicesOpen(!servicesOpen)}
                className="w-full flex items-center justify-between rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]"
              >
                <span>Services</span>

                <ChevronDown
                  size={17}
                  className={`transition-transform duration-300 ${
                    servicesOpen ? "rotate-180" : ""
                  }`}
                />
              </button>

              <div
                className={`overflow-hidden transition-all duration-300 ${
                  servicesOpen
                    ? "max-h-[600px] opacity-100"
                    : "max-h-0 opacity-0"
                }`}
              >
                <div className="ml-3 mt-1 border-l border-[#f3c6d5] pl-3">

                  <Link
                    to="/services"
                    onClick={closeMobileMenu}
                    className="block rounded-lg px-3 py-2.5 text-sm font-semibold text-[#be123c] hover:bg-[#fff1f5]"
                  >
                    All Services
                  </Link>

                  {services.map((service) => (
                    <Link
                      key={service.path}
                      to={service.path}
                      onClick={closeMobileMenu}
                      className="block rounded-lg px-3 py-2.5 text-sm text-[#6b3949] hover:bg-[#fff1f5] hover:text-[#be123c]"
                    >
                      {service.name}
                    </Link>
                  ))}
                </div>
              </div>
            </div>

            <Link
              to="/contact"
              onClick={closeMobileMenu}
              className="block rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]"
            >
              Contact
            </Link>

            <Link
              to="/gallery"
              onClick={closeMobileMenu}
              className="block rounded-lg px-3 py-3 text-sm font-medium text-[#5f2436] hover:bg-[#fff1f5] hover:text-[#be123c]"
            >
              Gallery
            </Link>

          </div>
        </div>
      </div>
    </nav>
  );
}

export default Navbar;

