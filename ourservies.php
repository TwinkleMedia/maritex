<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
include "./navbar.php"
?>
    <!-- SERVICES HERO SECTION -->
<section class="relative w-full h-[56vh] flex flex-col overflow-hidden">

  <!-- Background Image -->
  <div class="absolute inset-0 overflow-hidden">
    <img
      src="./assets/ship.jpg"
      alt="Our Services"
      class="w-full h-full object-cover object-center"
    />
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#0a1a3a]/95 via-[#254991]/70 to-[#0a1a3a]/50"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 flex-1 w-full max-w-7xl mx-auto px-6 md:px-10 flex flex-col justify-center">

    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 mb-4">
      <a href="./index.php" class="font-poppins text-white/50 text-xs tracking-widest uppercase hover:text-white transition-colors duration-300">Home</a>
      <svg class="w-3 h-3 text-white/30 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
      </svg>
      <span class="font-poppins text-[#7eb3ff] text-xs tracking-widest uppercase">Our Services</span>
    </div>

    <!-- Tag Line -->
    <div class="flex items-center gap-3 mb-3">
      <span class="block w-8 h-[2px] bg-white flex-shrink-0"></span>
    </div>

    <!-- Heading -->
    <h1 class="font-poppins font-semibold text-white text-3xl sm:text-4xl md:text-5xl leading-tight max-w-2xl mb-3">
      Our <span class="text-[#7eb3ff]">Services</span>
    </h1>

    <!-- Subtext -->
    <p class="font-poppins text-white/65 text-sm sm:text-base max-w-lg leading-relaxed mb-5">
      Comprehensive marine engineering solutions — from engine diagnostics and reconditioning to electrical systems and hydraulic repairs, delivered with precision worldwide.
    </p>

    

  </div>

  <!-- Bottom Fade -->
  <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>

</section>

<!-- OUR SERVICES SHOWCASE -->
<section class="w-full py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-10">

    <!-- Section Heading -->
    <div class="flex flex-col items-center mb-14">
      <div class="w-16 h-[3px] bg-[#254991] mb-4 rounded-full"></div>
      <h2 class="font-poppins font-semibold text-[#254991] text-2xl sm:text-3xl tracking-widest uppercase">What We Offer</h2>
      <p class="font-poppins text-gray-500 text-sm mt-3 tracking-wide">Explore Our Full Range of Marine Engineering Services</p>
    </div>

    <!-- SERVICE 1 — Marine Diesel Engine -->
    <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 mb-16 pb-16 border-b border-gray-100">

      <!-- Image -->
      <div class="w-full lg:w-1/2 flex-shrink-0">
        <div class="relative rounded-2xl overflow-hidden shadow-lg group">
          <img
            src="./assets/servies1.jpg"
            alt="Marine Diesel Engine Services"
            class="w-full h-72 sm:h-80 object-cover object-center group-hover:scale-105 transition-transform duration-500"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-[#0a1a3a]/70 to-transparent"></div>
          <!-- Service Number -->
          <div class="absolute top-4 left-4 w-10 h-10 rounded-xl bg-[#254991] flex items-center justify-center shadow-lg">
            <span class="font-poppins font-semibold text-white text-sm">01</span>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="w-full lg:w-1/2 flex flex-col gap-5">

        <!-- Label -->
        <div class="flex items-center gap-3">
          <span class="block w-6 h-[2px] bg-[#254991] rounded-full"></span>
          <span class="font-poppins text-[#254991] text-[10px] tracking-[0.3em] uppercase">Service 01</span>
        </div>

        <!-- Title -->
        <h3 class="font-poppins font-semibold text-[#0a1a3a] text-xl sm:text-2xl leading-snug">
          Marine Diesel Engine Routine & Diagnostic Services
        </h3>

        <!-- Description -->
        <p class="font-poppins text-gray-600 text-sm leading-relaxed">
          Our certified engineers carry out comprehensive routine maintenance and advanced diagnostics on all types of marine diesel engines — ensuring optimal performance, fuel efficiency, and compliance with international maritime standards.
        </p>

        <!-- Sub Services -->
        <div class="flex flex-col gap-3">

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Routine engine inspections & scheduled maintenance</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Fuel injection system testing & calibration</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Turbocharger & exhaust system diagnostics</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Cylinder head overhaul & performance optimisation</p>
          </div>

        </div>

        <a href="./contactus.php"
          class="self-start font-poppins font-semibold text-xs tracking-widest uppercase bg-[#254991] hover:bg-[#1a3570] text-white px-6 py-3 rounded-lg transition-all duration-300 shadow-md hover:-translate-y-0.5">
          Enquire Now
        </a>

      </div>
    </div>

    <!-- SERVICE 2 — Hydraulic Systems (image right) -->
    <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 mb-16 pb-16 border-b border-gray-100">

      <!-- Image -->
      <div class="w-full lg:w-1/2 flex-shrink-0">
        <div class="relative rounded-2xl overflow-hidden shadow-lg group">
          <img
            src="./assets/servies2.webp"
            alt="Hydraulic Systems Services"
            class="w-full h-72 sm:h-80 object-cover object-center group-hover:scale-105 transition-transform duration-500"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-[#0a1a3a]/70 to-transparent"></div>
          <div class="absolute top-4 left-4 w-10 h-10 rounded-xl bg-[#254991] flex items-center justify-center shadow-lg">
            <span class="font-poppins font-semibold text-white text-sm">02</span>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="w-full lg:w-1/2 flex flex-col gap-5">

        <div class="flex items-center gap-3">
          <span class="block w-6 h-[2px] bg-[#254991] rounded-full"></span>
          <span class="font-poppins text-[#254991] text-[10px] tracking-[0.3em] uppercase">Service 02</span>
        </div>

        <h3 class="font-poppins font-semibold text-[#0a1a3a] text-xl sm:text-2xl leading-snug">
          Hydraulic Systems Troubleshooting & Repair Services
        </h3>

        <p class="font-poppins text-gray-600 text-sm leading-relaxed">
          We provide end-to-end hydraulic system services for marine vessels — from fault diagnosis and component replacement to full system overhauls — restoring operational integrity quickly and efficiently.
        </p>

        <div class="flex flex-col gap-3">

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Hydraulic pump & motor overhaul and replacement</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Valve block testing, repair & reconfiguration</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Hydraulic cylinder seal replacement & leak repairs</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Deck machinery & steering gear hydraulic servicing</p>
          </div>

        </div>

        <a href="./contactus.php"
          class="self-start font-poppins font-semibold text-xs tracking-widest uppercase bg-[#254991] hover:bg-[#1a3570] text-white px-6 py-3 rounded-lg transition-all duration-300 shadow-md hover:-translate-y-0.5">
          Enquire Now
        </a>

      </div>
    </div>

    <!-- SERVICE 3 — Electrical & Automation (image left) -->
    <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 mb-16 pb-16 border-b border-gray-100">

      <!-- Image -->
      <div class="w-full lg:w-1/2 flex-shrink-0">
        <div class="relative rounded-2xl overflow-hidden shadow-lg group">
          <img
            src="./assets/servies3.jpg"
            alt="Electrical and Automation Services"
            class="w-full h-72 sm:h-80 object-cover object-center group-hover:scale-105 transition-transform duration-500"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-[#0a1a3a]/70 to-transparent"></div>
          <div class="absolute top-4 left-4 w-10 h-10 rounded-xl bg-[#254991] flex items-center justify-center shadow-lg">
            <span class="font-poppins font-semibold text-white text-sm">03</span>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="w-full lg:w-1/2 flex flex-col gap-5">

        <div class="flex items-center gap-3">
          <span class="block w-6 h-[2px] bg-[#254991] rounded-full"></span>
          <span class="font-poppins text-[#254991] text-[10px] tracking-[0.3em] uppercase">Service 03</span>
        </div>

        <h3 class="font-poppins font-semibold text-[#0a1a3a] text-xl sm:text-2xl leading-snug">
          Electrical & Automation Services
        </h3>

        <p class="font-poppins text-gray-600 text-sm leading-relaxed">
          Our electrical and automation specialists handle the full spectrum of marine electrical systems — from switchboard repairs and rewiring to advanced PLC and automation upgrades that improve vessel safety and efficiency.
        </p>

        <div class="flex flex-col gap-3">

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Main & emergency switchboard repair and maintenance</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">PLC, SCADA & automation system programming</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Motor rewinding & electrical fault diagnosis</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Navigation & communication system installations</p>
          </div>

        </div>

        <a href="./contactus.php"
          class="self-start font-poppins font-semibold text-xs tracking-widest uppercase bg-[#254991] hover:bg-[#1a3570] text-white px-6 py-3 rounded-lg transition-all duration-300 shadow-md hover:-translate-y-0.5">
          Enquire Now
        </a>

      </div>
    </div>

    <!-- SERVICE 4 — Condition Monitoring (image right) -->
    <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 mb-16 pb-16 border-b border-gray-100">

      <!-- Image -->
      <div class="w-full lg:w-1/2 flex-shrink-0">
        <div class="relative rounded-2xl overflow-hidden shadow-lg group">
          <img
            src="./assets/servies4.jpg"
            alt="Condition Monitoring Service"
            class="w-full h-72 sm:h-80 object-cover object-center group-hover:scale-105 transition-transform duration-500"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-[#0a1a3a]/70 to-transparent"></div>
          <div class="absolute top-4 left-4 w-10 h-10 rounded-xl bg-[#254991] flex items-center justify-center shadow-lg">
            <span class="font-poppins font-semibold text-white text-sm">04</span>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="w-full lg:w-1/2 flex flex-col gap-5">

        <div class="flex items-center gap-3">
          <span class="block w-6 h-[2px] bg-[#254991] rounded-full"></span>
          <span class="font-poppins text-[#254991] text-[10px] tracking-[0.3em] uppercase">Service 04</span>
        </div>

        <h3 class="font-poppins font-semibold text-[#0a1a3a] text-xl sm:text-2xl leading-snug">
          Condition Monitoring Service
        </h3>

        <p class="font-poppins text-gray-600 text-sm leading-relaxed">
          Through advanced condition monitoring techniques, we provide real-time insights into the health of your vessel's machinery — detecting early-stage failures before they become costly breakdowns at sea.
        </p>

        <div class="flex flex-col gap-3">

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Vibration analysis & bearing condition assessment</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Lube oil & fuel analysis with detailed reporting</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Thermographic & ultrasonic inspection services</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Predictive maintenance planning & advisory reports</p>
          </div>

        </div>

        <a href="./contactus.php"
          class="self-start font-poppins font-semibold text-xs tracking-widest uppercase bg-[#254991] hover:bg-[#1a3570] text-white px-6 py-3 rounded-lg transition-all duration-300 shadow-md hover:-translate-y-0.5">
          Enquire Now
        </a>

      </div>
    </div>

    <!-- SERVICE 5 — Workshop Reconditioning (image left) -->
    <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">

      <!-- Image -->
      <div class="w-full lg:w-1/2 flex-shrink-0">
        <div class="relative rounded-2xl overflow-hidden shadow-lg group">
          <img
            src="./assets/servies5.jpg"
            alt="Workshop Reconditioning Service"
            class="w-full h-72 sm:h-80 object-cover object-center group-hover:scale-105 transition-transform duration-500"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-[#0a1a3a]/70 to-transparent"></div>
          <div class="absolute top-4 left-4 w-10 h-10 rounded-xl bg-[#254991] flex items-center justify-center shadow-lg">
            <span class="font-poppins font-semibold text-white text-sm">05</span>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="w-full lg:w-1/2 flex flex-col gap-5">

        <div class="flex items-center gap-3">
          <span class="block w-6 h-[2px] bg-[#254991] rounded-full"></span>
          <span class="font-poppins text-[#254991] text-[10px] tracking-[0.3em] uppercase">Service 05</span>
        </div>

        <h3 class="font-poppins font-semibold text-[#0a1a3a] text-xl sm:text-2xl leading-snug">
          Workshop Reconditioning Service
        </h3>

        <p class="font-poppins text-gray-600 text-sm leading-relaxed">
          Our fully equipped workshop handles the reconditioning and restoration of marine engine components to OEM standards — offering a cost-effective alternative to new part replacement without compromising on quality or reliability.
        </p>

        <div class="flex flex-col gap-3">

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Crankshaft, camshaft & liner reconditioning</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Fuel pump & injector overhaul to OEM specifications</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Turbocharger cartridge assembly & balancing</p>
          </div>

          <div class="flex items-start gap-3 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 hover:border-[#254991] transition-all duration-300">
            <div class="flex-shrink-0 mt-0.5 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-700 text-sm">Pressure testing & quality certification on all parts</p>
          </div>

        </div>

        <a href="./contactus.php"
          class="self-start font-poppins font-semibold text-xs tracking-widest uppercase bg-[#254991] hover:bg-[#1a3570] text-white px-6 py-3 rounded-lg transition-all duration-300 shadow-md hover:-translate-y-0.5">
          Enquire Now
        </a>

      </div>
    </div>

  </div>
</section>

<?php 
include "./footer.php"
?>
    
</body>
</html>