import React, { useEffect } from 'react'
import { Route, Routes } from 'react-router-dom'
import Home from './pages/Home'
import About from './pages/About'
import Contact from './pages/Contact'
import Services from './pages/Services'
import Gallery from './pages/Gallery'
import Navbar from './common/Navbar'
import Topbar from './common/Topbar'
import Footer from './common/Footer'
import CorporateEmcee from './Services/CorporateEmcee'

import AwardsGalaEmcee from './Services/AwardsGalaEmcee'
import OpeningCeremonyOfficialLauchEmcee from './Services/OpeningCeremonyOfficialLauchEmcee'
import OutdoorSportsFamilyDayEmcee from './Services/OutdoorSportsFamilyDayEmcee'


import WeddingsEmcee from './Services/WeddingsEmcee'
import { FaWhatsapp } from 'react-icons/fa'
import { motion } from "framer-motion";
import SangeetAnchor from './Services/SangeetAnchor'
import HaldiMehendiAnchor from './Services/HaldiMehendiAnchor'
import MameruCeremonyHosting from './Services/MameruCeremonyHosting'
import BirthdayPartyHost from './Services/BirthdayPartyHost'
import AnniversaryPartyEmcee from './Services/AnniversaryPartyEmcee'
import { useSiteOptions } from './common/useWpData'

function App() {
  const options = useSiteOptions();

  const handleWhatsAppClick = () => {
    const phoneNumber = options.whatsapp;
    const message = encodeURIComponent("Hello Trupti Shah");

    const isMobile =
      /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);

    const whatsappUrl = isMobile
      ? `whatsapp://send?phone=${phoneNumber}&text=${message}`
      : `https://web.whatsapp.com/send?phone=${phoneNumber}&text=${message}`;

    window.open(whatsappUrl, "_blank");
  };


  return (
  <>
  <Topbar/>
  <Navbar/>
     {/* WhatsApp Floating Button */}
      <motion.div
        className="fixed right-6 bottom-20 z-[999] h-[60px] w-[60px] rounded-full p-[2px] bg-gradient-to-r from-lime-400 via-green-500 to-lime-400 bg-[length:200%_200%] shadow-xl cursor-pointer"
        initial={{
          backgroundPosition: "0% 50%",
          y: 0,
        }}
        animate={{
          backgroundPosition: ["0% 50%", "100% 50%", "0% 50%"],
          y: [0, -5, 0],
        }}
        transition={{
          backgroundPosition: {
            duration: 3,
            repeat: Infinity,
            ease: "linear",
          },
          y: {
            duration: 2,
            repeat: Infinity,
            ease: "easeInOut",
          },
        }}
        onClick={handleWhatsAppClick}
      >
        <div className="h-full w-full rounded-full bg-green-600/20 md:bg-white/20 backdrop-blur-lg shadow-xl flex items-center justify-center">
          <FaWhatsapp className="text-3xl text-white" />
        </div>
      </motion.div>
  <Routes>
    <Route path="/" element={<Home/>} />
    <Route path="/about" element={<About/>} />
    <Route path="/contact" element={<Contact/>} />
    <Route path="/services" element={<Services/>} />
    <Route path="/gallery" element={<Gallery/>} />
    <Route path="/services/corporate-event-emcee" element={<CorporateEmcee/>} />
    <Route path="/services/sangeet-anchor-mumbai" element={<SangeetAnchor/>} />
    <Route path="/services/haldi-mehendi-anchoring-mumbai" element={<HaldiMehendiAnchor/>} />
    <Route path="/services/mameru-ceremony-hosting" element={<MameruCeremonyHosting/>} />
    <Route path="/services/birthday-party-hostess" element={<BirthdayPartyHost/>} />
    <Route path="/services/anniversary-party-emcee" element={<AnniversaryPartyEmcee/>} />

    <Route path="/services/awards-gala-hostess" element={<AwardsGalaEmcee/>} />
    <Route path="/services/product-launch-emcee" element={<OpeningCeremonyOfficialLauchEmcee/>} />
    <Route path="/services/outdoor-sports-emcee" element={<OutdoorSportsFamilyDayEmcee/>} />

    <Route path="/services/wedding-emcee-mumbai" element={<WeddingsEmcee/>} />
  </Routes>
  <Footer/>
  </>
  )
}

export default App