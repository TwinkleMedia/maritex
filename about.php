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
<!-- ABOUT HERO SECTION -->
<section class="relative w-full h-[56vh] flex flex-col overflow-hidden">

  <!-- Background Image -->
  <div class="absolute inset-0 overflow-hidden">
    <img
      src="./assets/aboutsbg.jpg"
      alt="About Global Trading Company"
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
      <span class="font-poppins text-[#7eb3ff] text-xs tracking-widest uppercase">About Us</span>
    </div>

    <!-- Tag Line -->
    <div class="flex items-center gap-3 mb-3">
      <span class="block w-8 h-[2px] bg-white flex-shrink-0"></span>
    </div>

    <!-- Heading -->
    <h1 class="font-poppins font-semibold text-white text-3xl sm:text-4xl md:text-5xl leading-tight max-w-2xl mb-3">
      About <span class="text-[#7eb3ff]">Us</span>
    </h1>

    <!-- Subtext -->
    <p class="font-poppins text-white/65 text-sm sm:text-base max-w-lg leading-relaxed">
      Over 15 years of trusted marine engineering expertise — built on precision, reliability, and a commitment to excellence at sea.
    </p>

  </div>

  <!-- Bottom Fade -->
  <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>

</section>


<section class="w-full py-16 bg-white">

  <div class="max-w-6xl mx-auto px-6 md:px-10">

    <!-- Top Label -->
    <div class="flex flex-col items-center mb-12">
      <div class="w-16 h-[3px] bg-[#254991] mb-4 rounded-full"></div>
      <h2 class="font-poppins font-semibold text-[#254991] text-2xl sm:text-3xl tracking-widest uppercase">Who We Are</h2>
   
    </div>

    <!-- Main Content: Image + Text -->
    <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 mb-14">

      <!-- Image -->
      <div class="w-full lg:w-1/2 flex-shrink-0">
        <div class="relative rounded-xl overflow-hidden shadow-lg">
          <img
            src="./assets/aboutus.jpg"
            alt="About Global Trading Company"
            class="w-full h-72 sm:h-96 object-cover object-center"
          />
          <!-- Navy overlay bottom -->
          <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-[#0a1a3a]/70 to-transparent"></div>
          <!-- Experience badge -->
          <div class="absolute bottom-5 left-5 bg-[#254991] text-white rounded-xl px-5 py-3 shadow-lg">
            <span class="font-poppins font-semibold text-2xl block leading-none">15+</span>
            <span class="font-poppins text-white/80 text-xs tracking-widest uppercase">Years Experience</span>
          </div>
        </div>
      </div>

      <!-- Text Content -->
      <div class="w-full lg:w-1/2 flex flex-col items-start">

        <h3 class="font-poppins font-semibold text-[#254991] text-xl sm:text-2xl leading-snug mb-4">
          Trusted Marine Engineering <br class="hidden sm:block"/> Specialists Worldwide
        </h3>

        <p class="font-poppins text-gray-600 text-sm sm:text-base leading-relaxed mb-4">
          Global Trading Company is a specialist marine engineering firm providing expert technical services to the maritime industry. With over 15 years of hands-on experience, we have built a strong reputation for precision, reliability, and excellence.
        </p>

        <p class="font-poppins text-gray-600 text-sm sm:text-base leading-relaxed mb-6">
          Our team of highly qualified marine engineers and master mariners delivers comprehensive solutions — from routine engine maintenance and ship repairs to full reconditioning and marine consultancy — ensuring every vessel operates at peak performance.
        </p>

        <!-- Highlights -->
        <div class="flex flex-col gap-3 mb-8 w-full">

          <div class="flex items-start gap-3">
            <div class="flex-shrink-0 mt-1 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-sm">Certified and experienced marine engineers and master mariners</p>
          </div>

          <div class="flex items-start gap-3">
            <div class="flex-shrink-0 mt-1 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-sm">Well-equipped workshop for reconditioning and repair services</p>
          </div>

          <div class="flex items-start gap-3">
            <div class="flex-shrink-0 mt-1 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-sm">Serving clients across 30+ countries with 500+ ships repaired</p>
          </div>

          <div class="flex items-start gap-3">
            <div class="flex-shrink-0 mt-1 w-5 h-5 rounded-full bg-[#254991] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-sm">24/7 technical support and in-house consultancy team</p>
          </div>

        </div>

        <!-- CTA -->
        <a href="./aboutus.php"
          class="font-poppins font-semibold text-xs tracking-widest uppercase bg-[#254991] hover:bg-[#1a3570] text-white px-7 py-3 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg hover:-translate-y-0.5">
          Read More About Us
        </a>

      </div>
    </div>

    <!-- Bottom Stats Row -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

      <div class="flex flex-col items-center bg-gray-50 rounded-xl py-6 px-4 shadow-sm border border-gray-100">
        <div class="mb-3 bg-[#254991]/10 rounded-full p-3">
          <svg class="w-5 h-5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <span class="font-poppins font-semibold text-[#254991] text-2xl">15+</span>
        <span class="font-poppins text-gray-500 text-[10px] sm:text-xs tracking-widest uppercase mt-1 text-center">Years Experience</span>
      </div>

      <div class="flex flex-col items-center bg-gray-50 rounded-xl py-6 px-4 shadow-sm border border-gray-100">
        <div class="mb-3 bg-[#254991]/10 rounded-full p-3">
          <svg class="w-5 h-5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
          </svg>
        </div>
        <span class="font-poppins font-semibold text-[#254991] text-2xl">500+</span>
        <span class="font-poppins text-gray-500 text-[10px] sm:text-xs tracking-widest uppercase mt-1 text-center">Ships Repaired</span>
      </div>

      <div class="flex flex-col items-center bg-gray-50 rounded-xl py-6 px-4 shadow-sm border border-gray-100">
        <div class="mb-3 bg-[#254991]/10 rounded-full p-3">
          <svg class="w-5 h-5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </div>
        <span class="font-poppins font-semibold text-[#254991] text-2xl">50+</span>
        <span class="font-poppins text-gray-500 text-[10px] sm:text-xs tracking-widest uppercase mt-1 text-center">Expert Engineers</span>
      </div>

      <div class="flex flex-col items-center bg-gray-50 rounded-xl py-6 px-4 shadow-sm border border-gray-100">
        <div class="mb-3 bg-[#254991]/10 rounded-full p-3">
          <svg class="w-5 h-5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
          </svg>
        </div>
        <span class="font-poppins font-semibold text-[#254991] text-2xl">30+</span>
        <span class="font-poppins text-gray-500 text-[10px] sm:text-xs tracking-widest uppercase mt-1 text-center">Countries Served</span>
      </div>

    </div>

  </div>

</section>


<!-- MISSION & VISION -->
<section class="w-full py-10 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-10">

    <!-- Section Heading -->
    <div class="flex flex-col items-center mb-10">
      <div class="w-10 h-[2px] bg-[#254991] mb-3 rounded-full"></div>
      <h2 class="font-poppins font-semibold text-[#254991] text-xl sm:text-2xl tracking-widest uppercase">Mission & Vision</h2>
      <p class="font-poppins text-gray-500 text-xs mt-2 tracking-wide">What Drives Us Forward</p>
    </div>

    <!-- Two Column Cards -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-8">

      <!-- Mission Card -->
      <div class="relative bg-[#254991] rounded-2xl overflow-hidden p-5 flex flex-col gap-3 shadow-lg">

        <!-- Background Pattern -->
        <div class="absolute top-0 right-0 w-36 h-36 rounded-full bg-white/5 -translate-y-12 translate-x-12"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 rounded-full bg-white/5 translate-y-10 -translate-x-8"></div>

        <!-- Icon -->
        <div class="relative z-10 w-10 h-10 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center">
          <svg class="w-5 h-5 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>

        <!-- Label -->
        <div class="relative z-10 flex items-center gap-2">
          <span class="block w-4 h-[2px] bg-[#7eb3ff] rounded-full"></span>
          <span class="font-poppins text-[#7eb3ff] text-[9px] tracking-[0.3em] uppercase">Our Purpose</span>
        </div>

        <!-- Title -->
        <h3 class="relative z-10 font-poppins font-semibold text-white text-lg leading-tight -mt-1">
          Our Mission
        </h3>

        <!-- Text -->
        <p class="relative z-10 font-poppins text-white/70 text-xs leading-relaxed">
          To deliver world-class marine engineering services with unwavering precision and reliability — ensuring every vessel we touch operates at peak performance, safely and efficiently, no matter where in the world it sails.
        </p>

        <!-- Highlight Points -->
        <div class="relative z-10 flex flex-col gap-2 mt-1">
          <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-2.5 h-2.5 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-white/75 text-xs">Precision-first engineering on every job</p>
          </div>
          <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-2.5 h-2.5 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-white/75 text-xs">Safety and compliance at every step</p>
          </div>
          <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-2.5 h-2.5 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-white/75 text-xs">Minimising downtime for maximum vessel efficiency</p>
          </div>
        </div>

      </div>

      <!-- Vision Card -->
      <div class="relative bg-gray-50 border border-gray-100 rounded-2xl overflow-hidden p-5 flex flex-col gap-3 hover:border-[#254991] hover:shadow-lg transition-all duration-300">

        <!-- Background Pattern -->
        <div class="absolute top-0 right-0 w-36 h-36 rounded-full bg-[#254991]/5 -translate-y-12 translate-x-12"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 rounded-full bg-[#254991]/5 translate-y-10 -translate-x-8"></div>

        <!-- Icon -->
        <div class="relative z-10 w-10 h-10 rounded-xl bg-[#254991]/10 border border-[#254991]/20 flex items-center justify-center">
          <svg class="w-5 h-5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
          </svg>
        </div>

        <!-- Label -->
        <div class="relative z-10 flex items-center gap-2">
          <span class="block w-4 h-[2px] bg-[#254991] rounded-full"></span>
          <span class="font-poppins text-[#254991] text-[9px] tracking-[0.3em] uppercase">Our Future</span>
        </div>

        <!-- Title -->
        <h3 class="relative z-10 font-poppins font-semibold text-[#254991] text-lg leading-tight -mt-1">
          Our Vision
        </h3>

        <!-- Text -->
        <p class="relative z-10 font-poppins text-gray-600 text-xs leading-relaxed">
          To be the most trusted marine engineering partner across global shipping lanes — recognised for technical mastery, innovation, and an uncompromising commitment to the safety and success of every client we serve.
        </p>

        <!-- Highlight Points -->
        <div class="relative z-10 flex flex-col gap-2 mt-1">
          <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full bg-[#254991]/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-2.5 h-2.5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-xs">Recognised globally as a leader in marine engineering</p>
          </div>
          <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full bg-[#254991]/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-2.5 h-2.5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-xs">Expanding services to every major port worldwide</p>
          </div>
          <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full bg-[#254991]/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-2.5 h-2.5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-xs">Pioneering sustainable and innovative maritime solutions</p>
          </div>
        </div>

      </div>

    </div>

    <!-- Bottom Banner -->
    <div class="relative bg-gradient-to-r from-[#0a1a3a] via-[#254991] to-[#0a1a3a] rounded-2xl overflow-hidden px-6 py-7 flex flex-col sm:flex-row items-center justify-between gap-4">

      <!-- BG Circles -->
      <div class="absolute top-0 right-0 w-48 h-48 rounded-full bg-white/5 -translate-y-20 translate-x-20"></div>
      <div class="absolute bottom-0 left-0 w-32 h-32 rounded-full bg-white/5 translate-y-12 -translate-x-10"></div>

      <div class="relative z-10 flex flex-col gap-1">
        <p class="font-poppins text-white/60 text-[9px] tracking-widest uppercase">Our Commitment</p>
        <h4 class="font-poppins font-semibold text-white text-base sm:text-lg leading-snug max-w-lg">
          Delivering excellence in every port, <span class="text-[#7eb3ff]">on every vessel, every time.</span>
        </h4>
      </div>

      <a href="./contactus.php"
        class="relative z-10 flex-shrink-0 font-poppins font-semibold text-xs tracking-widest uppercase bg-white text-[#254991] hover:bg-[#7eb3ff] hover:text-white px-6 py-2.5 rounded-lg transition-all duration-300 shadow-lg">
        Get In Touch
      </a>

    </div>

  </div>
</section>

<!-- CORE VALUES -->
<section class="w-full py-10 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 md:px-10">

    <!-- Section Heading -->
    <div class="flex flex-col items-center mb-10">
      <div class="w-10 h-[2px] bg-[#254991] mb-3 rounded-full"></div>
      <h2 class="font-poppins font-semibold text-[#254991] text-xl sm:text-2xl tracking-widest uppercase">Core Values</h2>
      <p class="font-poppins text-gray-500 text-xs mt-2 tracking-wide">The Principles We Stand By</p>
    </div>

    <!-- Top Row — 2 large featured cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">

      <!-- Value 1 — Integrity -->
      <div class="relative bg-[#254991] rounded-2xl overflow-hidden p-5 flex flex-col gap-3 group hover:shadow-xl transition-all duration-300">

        <!-- BG Circles -->
        <div class="absolute top-0 right-0 w-32 h-32 rounded-full bg-white/5 -translate-y-10 translate-x-10"></div>
        <div class="absolute bottom-0 left-0 w-20 h-20 rounded-full bg-white/5 translate-y-8 -translate-x-6"></div>

        <!-- Number -->
        <span class="relative z-10 font-poppins font-semibold text-white/8 text-5xl leading-none absolute top-3 right-5 select-none">01</span>

        <!-- Icon -->
        <div class="relative z-10 w-10 h-10 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center">
          <svg class="w-5 h-5 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>

        <!-- Label -->
        <div class="relative z-10 flex items-center gap-2">
          <span class="block w-4 h-[2px] bg-[#7eb3ff] rounded-full"></span>
          <span class="font-poppins text-[#7eb3ff] text-[9px] tracking-[0.3em] uppercase">Core Value</span>
        </div>

        <!-- Title -->
        <h3 class="relative z-10 font-poppins font-semibold text-white text-lg -mt-1">Integrity</h3>

        <!-- Text -->
        <p class="relative z-10 font-poppins text-white/70 text-xs leading-relaxed">
          We operate with complete transparency and honesty in every engagement — building lasting trust with clients, partners, and crew across every ocean we serve.
        </p>

        <!-- Bottom Tag -->
        <div class="relative z-10 mt-auto pt-3 border-t border-white/10">
          <span class="font-poppins text-white/40 text-[9px] tracking-widest uppercase">Honesty · Transparency · Trust</span>
        </div>

      </div>

      <!-- Value 2 — Excellence -->
      <div class="relative bg-white border border-gray-100 rounded-2xl overflow-hidden p-5 flex flex-col gap-3 group hover:border-[#254991] hover:shadow-xl transition-all duration-300">

        <!-- BG Circles -->
        <div class="absolute top-0 right-0 w-32 h-32 rounded-full bg-[#254991]/5 -translate-y-10 translate-x-10"></div>
        <div class="absolute bottom-0 left-0 w-20 h-20 rounded-full bg-[#254991]/5 translate-y-8 -translate-x-6"></div>

        <!-- Number -->
        <span class="relative z-10 font-poppins font-semibold text-[#254991]/8 text-5xl leading-none absolute top-3 right-5 select-none">02</span>

        <!-- Icon -->
        <div class="relative z-10 w-10 h-10 rounded-xl bg-[#254991]/10 border border-[#254991]/20 flex items-center justify-center">
          <svg class="w-5 h-5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
          </svg>
        </div>

        <!-- Label -->
        <div class="relative z-10 flex items-center gap-2">
          <span class="block w-4 h-[2px] bg-[#254991] rounded-full"></span>
          <span class="font-poppins text-[#254991] text-[9px] tracking-[0.3em] uppercase">Core Value</span>
        </div>

        <!-- Title -->
        <h3 class="relative z-10 font-poppins font-semibold text-[#254991] text-lg -mt-1">Excellence</h3>

        <!-- Text -->
        <p class="relative z-10 font-poppins text-gray-600 text-xs leading-relaxed">
          We hold ourselves to the highest technical standards — from the smallest component repair to full vessel overhauls, quality is never compromised.
        </p>

        <!-- Bottom Tag -->
        <div class="relative z-10 mt-auto pt-3 border-t border-gray-100">
          <span class="font-poppins text-gray-400 text-[9px] tracking-widest uppercase">Quality · Precision · Standards</span>
        </div>

      </div>

    </div>

    <!-- Bottom Row — 3 smaller cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

      <!-- Value 3 — Reliability -->
      <div class="relative bg-white border border-gray-100 rounded-2xl overflow-hidden px-5 py-5 flex flex-col gap-3 group hover:border-[#254991] hover:shadow-lg transition-all duration-300">

        <div class="absolute top-0 right-0 w-20 h-20 rounded-full bg-[#254991]/5 -translate-y-8 translate-x-8"></div>

        <span class="absolute top-3 right-4 font-poppins font-semibold text-[#254991]/8 text-4xl leading-none select-none">03</span>

        <div class="relative z-10 w-10 h-10 rounded-xl bg-[#254991]/10 border border-[#254991]/20 flex items-center justify-center">
          <svg class="w-5 h-5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>

        <h3 class="relative z-10 font-poppins font-semibold text-[#254991] text-base">Reliability</h3>

        <p class="relative z-10 font-poppins text-gray-600 text-xs leading-relaxed">
          When vessels are in port or in distress, our clients count on us to respond swiftly — 24/7, anywhere in the world.
        </p>

        <div class="relative z-10 mt-auto pt-3 border-t border-gray-100">
          <span class="font-poppins text-gray-400 text-[9px] tracking-widest uppercase">24/7 · Swift · Dependable</span>
        </div>

      </div>

      <!-- Value 4 — Teamwork -->
      <div class="relative bg-[#254991] rounded-2xl overflow-hidden px-5 py-5 flex flex-col gap-3 group hover:shadow-lg transition-all duration-300">

        <div class="absolute top-0 right-0 w-20 h-20 rounded-full bg-white/5 -translate-y-8 translate-x-8"></div>

        <span class="absolute top-3 right-4 font-poppins font-semibold text-white/10 text-4xl leading-none select-none">04</span>

        <div class="relative z-10 w-10 h-10 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center">
          <svg class="w-5 h-5 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </div>

        <h3 class="relative z-10 font-poppins font-semibold text-white text-base">Teamwork</h3>

        <p class="relative z-10 font-poppins text-white/70 text-xs leading-relaxed">
          Our engineers, mariners and consultants work as one cohesive unit — combining deep expertise to deliver seamless results.
        </p>

        <div class="relative z-10 mt-auto pt-3 border-t border-white/10">
          <span class="font-poppins text-white/40 text-[9px] tracking-widest uppercase">Unity · Expertise · Collaboration</span>
        </div>

      </div>

      <!-- Value 5 — Innovation -->
      <div class="relative bg-white border border-gray-100 rounded-2xl overflow-hidden px-5 py-5 flex flex-col gap-3 group hover:border-[#254991] hover:shadow-lg transition-all duration-300">

        <div class="absolute top-0 right-0 w-20 h-20 rounded-full bg-[#254991]/5 -translate-y-8 translate-x-8"></div>

        <span class="absolute top-3 right-4 font-poppins font-semibold text-[#254991]/8 text-4xl leading-none select-none">05</span>

        <div class="relative z-10 w-10 h-10 rounded-xl bg-[#254991]/10 border border-[#254991]/20 flex items-center justify-center">
          <svg class="w-5 h-5 text-[#254991]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
          </svg>
        </div>

        <h3 class="relative z-10 font-poppins font-semibold text-[#254991] text-base">Innovation</h3>

        <p class="relative z-10 font-poppins text-gray-600 text-xs leading-relaxed">
          We continuously adopt advanced techniques and technologies to deliver smarter, faster, and more sustainable marine solutions.
        </p>

        <div class="relative z-10 mt-auto pt-3 border-t border-gray-100">
          <span class="font-poppins text-gray-400 text-[9px] tracking-widest uppercase">Modern · Smart · Forward</span>
        </div>

      </div>

    </div>

  </div>
</section>

<?php 
include "./footer.php"
?>

    
</body>
</html>