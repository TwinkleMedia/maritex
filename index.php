<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Global Trading Company</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            poppins: ['Poppins', 'sans-serif'],
          },
          colors: {
            navy: '#192653',
          }
        }
      }
    }
  </script>
</head>
<body class="font-poppins">
<?php 
include "./navbar.php"
?>
<!-- HERO SECTION -->
<section class="relative w-full h-[75vh] flex flex-col overflow-hidden">
  <!-- Background Image -->
  <div class="absolute inset-0 overflow-hidden">
    <img
      src="./assets/ship.jpg"
      alt="Marine Engineering"
      class="w-full h-full object-cover object-center"
    />
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#0a1a3a]/90 via-[#192653]/65 to-[#0a1a3a]/40"></div>
  </div>

  <!-- Main Content -->
  <div class="relative z-10 flex-1 w-full max-w-7xl mx-auto px-6 md:px-10 flex flex-col items-start justify-center">

    <!-- Tag line -->
    <div class="flex items-center gap-3 mb-4">
      <span class="block w-8 h-[2px] bg-white flex-shrink-0"></span>
    </div>

    <!-- Heading -->
    <h1 class="font-poppins font-semibold text-white text-3xl sm:text-4xl md:text-5xl leading-tight max-w-2xl mb-4">
      Expert Marine <br/>
      <span class="text-[#7eb3ff]">Engineering Services</span>
    </h1>

    <!-- Subtext -->
    <p class="font-poppins text-white/75 text-sm sm:text-base max-w-xl mb-6 leading-relaxed">
      Specialists in marine engineering, ship repair, engine reconditioning and maritime consultancy — delivering precision and reliability across every vessel.
    </p>

    <!-- Service Pills -->
    <div class="flex flex-wrap gap-2 mb-6">
      <span class="font-poppins text-[10px] sm:text-xs tracking-widest uppercase bg-white/10 border border-white/20 text-white/90 px-3 py-1.5 rounded-full backdrop-blur-sm">Marine Engineers</span>
      <span class="font-poppins text-[10px] sm:text-xs tracking-widest uppercase bg-white/10 border border-white/20 text-white/90 px-3 py-1.5 rounded-full backdrop-blur-sm">Ship Repairers</span>
      <span class="font-poppins text-[10px] sm:text-xs tracking-widest uppercase bg-white/10 border border-white/20 text-white/90 px-3 py-1.5 rounded-full backdrop-blur-sm">Reconditioning</span>
      <span class="font-poppins text-[10px] sm:text-xs tracking-widest uppercase bg-white/10 border border-white/20 text-white/90 px-3 py-1.5 rounded-full backdrop-blur-sm">Marine Consultancy</span>
    </div>

    <!-- CTA Buttons -->
    <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
      <a href="./prouducts.php"
        class="font-poppins font-semibold text-xs sm:text-sm tracking-widest uppercase bg-[#192653] hover:bg-[#1a3570] text-white px-6 py-3 rounded-lg transition-all duration-300 shadow-lg text-center">
        Our Services
      </a>
      <a href="./contactus.php"
        class="font-poppins font-semibold text-xs sm:text-sm tracking-widest uppercase border-2 border-white text-white hover:bg-white hover:text-[#192653] px-6 py-3 rounded-lg transition-all duration-300 text-center">
        Contact Us
      </a>
    </div>

  </div>

  

</section>

<!-- ABOUT US SECTION -->
<section class="w-full py-16 bg-white">

  <div class="max-w-6xl mx-auto px-6 md:px-10">

    <!-- Top Label -->
    <div class="flex flex-col items-center mb-12">
      <div class="w-16 h-[3px] bg-[#192653] mb-4 rounded-full"></div>
      <h2 class="font-poppins font-semibold text-[#192653] text-2xl sm:text-3xl tracking-widest uppercase">About Us</h2>
      <p class="font-poppins text-gray-500 text-sm mt-3 tracking-wide">Who We Are</p>
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
          <div class="absolute bottom-5 left-5 bg-[#192653] text-white rounded-xl px-5 py-3 shadow-lg">
            <span class="font-poppins font-semibold text-2xl block leading-none">15+</span>
            <span class="font-poppins text-white/80 text-xs tracking-widest uppercase">Years Experience</span>
          </div>
        </div>
      </div>

      <!-- Text Content -->
      <div class="w-full lg:w-1/2 flex flex-col items-start">

        <h3 class="font-poppins font-semibold text-[#192653] text-xl sm:text-2xl leading-snug mb-4">
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
            <div class="flex-shrink-0 mt-1 w-5 h-5 rounded-full bg-[#192653] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-sm">Certified and experienced marine engineers and master mariners</p>
          </div>

          <div class="flex items-start gap-3">
            <div class="flex-shrink-0 mt-1 w-5 h-5 rounded-full bg-[#192653] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-sm">Well-equipped workshop for reconditioning and repair services</p>
          </div>

          <div class="flex items-start gap-3">
            <div class="flex-shrink-0 mt-1 w-5 h-5 rounded-full bg-[#192653] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-sm">Serving clients across 30+ countries with 500+ ships repaired</p>
          </div>

          <div class="flex items-start gap-3">
            <div class="flex-shrink-0 mt-1 w-5 h-5 rounded-full bg-[#192653] flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <p class="font-poppins text-gray-600 text-sm">24/7 technical support and in-house consultancy team</p>
          </div>

        </div>

        <!-- CTA -->
        <a href="./aboutus.php"
          class="font-poppins font-semibold text-xs tracking-widest uppercase bg-[#192653] hover:bg-[#1a3570] text-white px-7 py-3 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg hover:-translate-y-0.5">
          Read More About Us
        </a>

      </div>
    </div>

    <!-- Bottom Stats Row -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

      <div class="flex flex-col items-center bg-gray-50 rounded-xl py-6 px-4 shadow-sm border border-gray-100">
        <div class="mb-3 bg-[#192653]/10 rounded-full p-3">
          <svg class="w-5 h-5 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <span class="font-poppins font-semibold text-[#192653] text-2xl">15+</span>
        <span class="font-poppins text-gray-500 text-[10px] sm:text-xs tracking-widest uppercase mt-1 text-center">Years Experience</span>
      </div>

      <div class="flex flex-col items-center bg-gray-50 rounded-xl py-6 px-4 shadow-sm border border-gray-100">
        <div class="mb-3 bg-[#192653]/10 rounded-full p-3">
          <svg class="w-5 h-5 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
          </svg>
        </div>
        <span class="font-poppins font-semibold text-[#192653] text-2xl">500+</span>
        <span class="font-poppins text-gray-500 text-[10px] sm:text-xs tracking-widest uppercase mt-1 text-center">Ships Repaired</span>
      </div>

      <div class="flex flex-col items-center bg-gray-50 rounded-xl py-6 px-4 shadow-sm border border-gray-100">
        <div class="mb-3 bg-[#192653]/10 rounded-full p-3">
          <svg class="w-5 h-5 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </div>
        <span class="font-poppins font-semibold text-[#192653] text-2xl">50+</span>
        <span class="font-poppins text-gray-500 text-[10px] sm:text-xs tracking-widest uppercase mt-1 text-center">Expert Engineers</span>
      </div>

      <div class="flex flex-col items-center bg-gray-50 rounded-xl py-6 px-4 shadow-sm border border-gray-100">
        <div class="mb-3 bg-[#192653]/10 rounded-full p-3">
          <svg class="w-5 h-5 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
          </svg>
        </div>
        <span class="font-poppins font-semibold text-[#192653] text-2xl">30+</span>
        <span class="font-poppins text-gray-500 text-[10px] sm:text-xs tracking-widest uppercase mt-1 text-center">Countries Served</span>
      </div>

    </div>

  </div>

</section>


<!-- WHY CHOOSE US -->
<section class="w-full py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6 md:px-10">

    <!-- Section Heading -->
    <div class="flex flex-col items-center mb-14">
      <div class="w-16 h-[3px] bg-[#192653] mb-4 rounded-full"></div>
      <h2 class="font-poppins font-semibold text-[#192653] text-2xl sm:text-3xl tracking-widest uppercase">Why Choose Us</h2>
      <p class="font-poppins text-gray-500 text-sm mt-3 tracking-wide">What Sets Global Trading Company Apart</p>
    </div>

    <!-- Top — Full Width Banner -->
    

    <!-- Middle Row — 3 Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">

      <!-- Card 1 — Certified Experts -->
      <div class="relative bg-white border border-gray-100 rounded-2xl overflow-hidden px-6 py-7 flex flex-col gap-4 hover:border-[#192653] hover:shadow-xl transition-all duration-300">
        <div class="absolute top-0 right-0 w-28 h-28 rounded-full bg-[#192653]/5 -translate-y-10 translate-x-10"></div>
        <span class="absolute top-4 right-5 font-poppins font-semibold text-[#192653]/8 text-5xl leading-none select-none">01</span>
        <div class="relative z-10 w-12 h-12 rounded-xl bg-[#192653]/10 border border-[#192653]/20 flex items-center justify-center">
          <svg class="w-6 h-6 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
          </svg>
        </div>
        <h4 class="relative z-10 font-poppins font-semibold text-[#192653] text-base leading-snug">Certified & Experienced Engineers</h4>
        <p class="relative z-10 font-poppins text-gray-600 text-sm leading-relaxed">Our team of STCW-certified engineers and master mariners bring decades of hands-on experience across all vessel types and engine makes.</p>
        <div class="relative z-10 mt-auto pt-4 border-t border-gray-100">
          <span class="font-poppins text-gray-400 text-[10px] tracking-widest uppercase">STCW · ISM · Lloyd's Approved</span>
        </div>
      </div>

      <!-- Card 2 — 24/7 Support (navy) -->
      <div class="relative bg-[#192653] rounded-2xl overflow-hidden px-6 py-7 flex flex-col gap-4 hover:shadow-xl transition-all duration-300">
        <div class="absolute top-0 right-0 w-28 h-28 rounded-full bg-white/5 -translate-y-10 translate-x-10"></div>
        <span class="absolute top-4 right-5 font-poppins font-semibold text-white/10 text-5xl leading-none select-none">02</span>
        <div class="relative z-10 w-12 h-12 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center">
          <svg class="w-6 h-6 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <h4 class="relative z-10 font-poppins font-semibold text-white text-base leading-snug">24/7 Global Support</h4>
        <p class="relative z-10 font-poppins text-white/70 text-sm leading-relaxed">Round-the-clock technical support available wherever your vessel is docked or in distress — with rapid deployment teams ready to mobilise at short notice.</p>
        <div class="relative z-10 mt-auto pt-4 border-t border-white/10">
          <span class="font-poppins text-white/40 text-[10px] tracking-widest uppercase">Always On · Rapid Response · Worldwide</span>
        </div>
      </div>

      <!-- Card 3 — Fast Turnaround -->
      <div class="relative bg-white border border-gray-100 rounded-2xl overflow-hidden px-6 py-7 flex flex-col gap-4 hover:border-[#192653] hover:shadow-xl transition-all duration-300">
        <div class="absolute top-0 right-0 w-28 h-28 rounded-full bg-[#192653]/5 -translate-y-10 translate-x-10"></div>
        <span class="absolute top-4 right-5 font-poppins font-semibold text-[#192653]/8 text-5xl leading-none select-none">03</span>
        <div class="relative z-10 w-12 h-12 rounded-xl bg-[#192653]/10 border border-[#192653]/20 flex items-center justify-center">
          <svg class="w-6 h-6 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <h4 class="relative z-10 font-poppins font-semibold text-[#192653] text-base leading-snug">Industry-Leading Turnaround</h4>
        <p class="relative z-10 font-poppins text-gray-600 text-sm leading-relaxed">We understand that every hour in port costs money. Our streamlined processes and well-equipped workshop deliver an average turnaround of under 72 hours.</p>
        <div class="relative z-10 mt-auto pt-4 border-t border-gray-100">
          <span class="font-poppins text-gray-400 text-[10px] tracking-widest uppercase">Fast · Efficient · On Schedule</span>
        </div>
      </div>

    </div>

    <!-- Bottom Row — 2 Cards + 1 CTA Card -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

      <!-- Card 4 — Equipped Workshop -->
      <div class="relative bg-white border border-gray-100 rounded-2xl overflow-hidden px-6 py-7 flex flex-col gap-4 hover:border-[#192653] hover:shadow-xl transition-all duration-300">
        <div class="absolute top-0 right-0 w-28 h-28 rounded-full bg-[#192653]/5 -translate-y-10 translate-x-10"></div>
        <span class="absolute top-4 right-5 font-poppins font-semibold text-[#192653]/8 text-5xl leading-none select-none">04</span>
        <div class="relative z-10 w-12 h-12 rounded-xl bg-[#192653]/10 border border-[#192653]/20 flex items-center justify-center">
          <svg class="w-6 h-6 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </div>
        <h4 class="relative z-10 font-poppins font-semibold text-[#192653] text-base leading-snug">Fully Equipped Workshop</h4>
        <p class="relative z-10 font-poppins text-gray-600 text-sm leading-relaxed">Our in-house workshop is fitted with precision machinery to recondition components to OEM standards — saving costs without cutting corners.</p>
        <div class="relative z-10 mt-auto pt-4 border-t border-gray-100">
          <span class="font-poppins text-gray-400 text-[10px] tracking-widest uppercase">OEM Standards · In-House · Precise</span>
        </div>
      </div>

      <!-- Card 5 — Global Reach (navy) -->
      <div class="relative bg-[#192653] rounded-2xl overflow-hidden px-6 py-7 flex flex-col gap-4 hover:shadow-xl transition-all duration-300">
        <div class="absolute top-0 right-0 w-28 h-28 rounded-full bg-white/5 -translate-y-10 translate-x-10"></div>
        <span class="absolute top-4 right-5 font-poppins font-semibold text-white/10 text-5xl leading-none select-none">05</span>
        <div class="relative z-10 w-12 h-12 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center">
          <svg class="w-6 h-6 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
          </svg>
        </div>
        <h4 class="relative z-10 font-poppins font-semibold text-white text-base leading-snug">Worldwide Operational Reach</h4>
        <p class="relative z-10 font-poppins text-white/70 text-sm leading-relaxed">With active operations spanning 30+ countries, we deploy skilled teams directly to your vessel's location — eliminating delays and reducing port time.</p>
        <div class="relative z-10 mt-auto pt-4 border-t border-white/10">
          <span class="font-poppins text-white/40 text-[10px] tracking-widest uppercase">30+ Countries · On-Site · Mobile Teams</span>
        </div>
      </div>

      <!-- Card 6 — CTA Card -->
      <div class="relative bg-gray-50 border-2 border-dashed border-[#192653]/30 rounded-2xl px-6 py-7 flex flex-col items-center justify-center gap-5 hover:border-[#192653] hover:shadow-xl transition-all duration-300 text-center">
        <div class="w-12 h-12 rounded-xl bg-[#192653]/10 border border-[#192653]/20 flex items-center justify-center">
          <svg class="w-6 h-6 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
        </div>
        <div class="flex flex-col gap-1">
          <h4 class="font-poppins font-semibold text-[#192653] text-base">Ready to Work With Us?</h4>
          <p class="font-poppins text-gray-500 text-sm leading-relaxed">Get in touch with our team today for a consultation or rapid deployment request.</p>
        </div>
        <a href="./contactus.php"
          class="w-full font-poppins font-semibold text-xs tracking-widest uppercase bg-[#192653] hover:bg-[#1a3570] text-white px-6 py-3 rounded-lg transition-all duration-300 shadow-md hover:-translate-y-0.5 text-center">
          Contact Us Now
        </a>
      </div>

    </div>

  </div>
</section>


<!-- OUR SERVICES SECTION -->
<section class="w-full py-16 bg-gray-50">

  <!-- Section Heading -->
  <div class="flex flex-col items-center mb-12">
    <div class="w-16 h-[3px] bg-[#192653] mb-4 rounded-full"></div>
    <h2 class="font-poppins font-semibold text-[#192653] text-2xl sm:text-3xl tracking-widest uppercase">Our Services</h2>
    <p class="font-poppins text-gray-500 text-sm mt-3 tracking-wide">What We Offer</p>
  </div>

  <!-- Cards Grid -->
  <div class="max-w-5xl mx-auto px-6">

    <!-- Row 1 — 3 cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-5">

      <!-- Card 1 -->
      <a href="./services.php"
        class="group relative bg-[#192653] hover:bg-[#1a3570] transition-all duration-300 rounded-2xl overflow-hidden flex flex-col items-start justify-between min-h-[190px] px-6 py-7 shadow-md hover:shadow-xl hover:-translate-y-1">

        <div class="absolute top-0 right-0 w-24 h-24 rounded-full bg-white/5 -translate-y-8 translate-x-8"></div>

        <div class="relative z-10 flex items-center justify-between w-full mb-4">
          <div class="bg-white/10 border border-white/20 rounded-xl p-2.5 group-hover:bg-white/20 transition-all duration-300">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <span class="font-poppins font-semibold text-white/10 text-4xl leading-none select-none">01</span>
        </div>

        <p class="relative z-10 font-poppins font-semibold text-white text-xs tracking-widest uppercase leading-relaxed flex-1">
          Marine Diesel Engine Routine &amp; Diagnostic Services
        </p>

        <div class="relative z-10 flex items-center justify-between w-full mt-4 pt-4 border-t border-white/10">
          <span class="font-poppins text-white/40 text-[10px] tracking-widest uppercase">Engine · Diagnostic</span>
          <span class="text-white/50 text-xs font-poppins tracking-widest group-hover:text-white transition-all duration-300">→</span>
        </div>

      </a>

      <!-- Card 2 -->
      <a href="./services.php"
        class="group relative bg-[#192653] hover:bg-[#1a3570] transition-all duration-300 rounded-2xl overflow-hidden flex flex-col items-start justify-between min-h-[190px] px-6 py-7 shadow-md hover:shadow-xl hover:-translate-y-1">

        <div class="absolute top-0 right-0 w-24 h-24 rounded-full bg-white/5 -translate-y-8 translate-x-8"></div>

        <div class="relative z-10 flex items-center justify-between w-full mb-4">
          <div class="bg-white/10 border border-white/20 rounded-xl p-2.5 group-hover:bg-white/20 transition-all duration-300">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <span class="font-poppins font-semibold text-white/10 text-4xl leading-none select-none">02</span>
        </div>

        <p class="relative z-10 font-poppins font-semibold text-white text-xs tracking-widest uppercase leading-relaxed flex-1">
          Electrical and Automation Services
        </p>

        <div class="relative z-10 flex items-center justify-between w-full mt-4 pt-4 border-t border-white/10">
          <span class="font-poppins text-white/40 text-[10px] tracking-widest uppercase">Electrical · Automation</span>
          <span class="text-white/50 text-xs font-poppins tracking-widest group-hover:text-white transition-all duration-300">→</span>
        </div>

      </a>

      <!-- Card 3 -->
      <a href="./services.php"
        class="group relative bg-[#192653] hover:bg-[#1a3570] transition-all duration-300 rounded-2xl overflow-hidden flex flex-col items-start justify-between min-h-[190px] px-6 py-7 shadow-md hover:shadow-xl hover:-translate-y-1 sm:col-span-2 lg:col-span-1">

        <div class="absolute top-0 right-0 w-24 h-24 rounded-full bg-white/5 -translate-y-8 translate-x-8"></div>

        <div class="relative z-10 flex items-center justify-between w-full mb-4">
          <div class="bg-white/10 border border-white/20 rounded-xl p-2.5 group-hover:bg-white/20 transition-all duration-300">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
          </div>
          <span class="font-poppins font-semibold text-white/10 text-4xl leading-none select-none">03</span>
        </div>

        <p class="relative z-10 font-poppins font-semibold text-white text-xs tracking-widest uppercase leading-relaxed flex-1">
          Condition Monitoring Service
        </p>

        <div class="relative z-10 flex items-center justify-between w-full mt-4 pt-4 border-t border-white/10">
          <span class="font-poppins text-white/40 text-[10px] tracking-widest uppercase">Monitoring · Analysis</span>
          <span class="text-white/50 text-xs font-poppins tracking-widest group-hover:text-white transition-all duration-300">→</span>
        </div>

      </a>

    </div>

    <!-- Row 2 — 2 cards centered -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:px-20 lg:px-32">

      <!-- Card 4 -->
      <a href="./services.php"
        class="group relative bg-[#192653] hover:bg-[#1a3570] transition-all duration-300 rounded-2xl overflow-hidden flex flex-col items-start justify-between min-h-[190px] px-6 py-7 shadow-md hover:shadow-xl hover:-translate-y-1">

        <div class="absolute top-0 right-0 w-24 h-24 rounded-full bg-white/5 -translate-y-8 translate-x-8"></div>

        <div class="relative z-10 flex items-center justify-between w-full mb-4">
          <div class="bg-white/10 border border-white/20 rounded-xl p-2.5 group-hover:bg-white/20 transition-all duration-300">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
            </svg>
          </div>
          <span class="font-poppins font-semibold text-white/10 text-4xl leading-none select-none">04</span>
        </div>

        <p class="relative z-10 font-poppins font-semibold text-white text-xs tracking-widest uppercase leading-relaxed flex-1">
          Reconditioning Services
        </p>

        <div class="relative z-10 flex items-center justify-between w-full mt-4 pt-4 border-t border-white/10">
          <span class="font-poppins text-white/40 text-[10px] tracking-widest uppercase">Workshop · OEM</span>
          <span class="text-white/50 text-xs font-poppins tracking-widest group-hover:text-white transition-all duration-300">→</span>
        </div>

      </a>

      <!-- Card 5 -->
      <a href="./services.php"
        class="group relative bg-[#192653] hover:bg-[#1a3570] transition-all duration-300 rounded-2xl overflow-hidden flex flex-col items-start justify-between min-h-[190px] px-6 py-7 shadow-md hover:shadow-xl hover:-translate-y-1">

        <div class="absolute top-0 right-0 w-24 h-24 rounded-full bg-white/5 -translate-y-8 translate-x-8"></div>

        <div class="relative z-10 flex items-center justify-between w-full mb-4">
          <div class="bg-white/10 border border-white/20 rounded-xl p-2.5 group-hover:bg-white/20 transition-all duration-300">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
            </svg>
          </div>
          <span class="font-poppins font-semibold text-white/10 text-4xl leading-none select-none">05</span>
        </div>

        <p class="relative z-10 font-poppins font-semibold text-white text-xs tracking-widest uppercase leading-relaxed flex-1">
          Hydraulic Systems Trouble Shooting and Repair Services
        </p>

        <div class="relative z-10 flex items-center justify-between w-full mt-4 pt-4 border-t border-white/10">
          <span class="font-poppins text-white/40 text-[10px] tracking-widest uppercase">Hydraulic · Repair</span>
          <span class="text-white/50 text-xs font-poppins tracking-widest group-hover:text-white transition-all duration-300">→</span>
        </div>

      </a>

    </div>

  </div>

</section>

<?php 

include "./clients.php"
?>

<!-- CLIENT TESTIMONIALS SECTION -->
<section class="w-full py-16 bg-white">

  <!-- Section Heading -->
  <div class="flex flex-col items-center mb-12">
    <div class="w-16 h-[3px] bg-[#192653] mb-4 rounded-full"></div>
    <h2 class="font-poppins font-semibold text-[#192653] text-2xl sm:text-3xl tracking-widest uppercase">Client Testimonials</h2>
    <p class="font-poppins text-gray-500 text-sm mt-3 tracking-wide">What Our Clients Say</p>
  </div>

  <!-- Carousel Wrapper -->
  <div class="relative max-w-6xl mx-auto px-6 md:px-10">

    <!-- Track -->
    <div class="overflow-hidden">
      <div id="testimonial-track" class="flex gap-6 transition-transform duration-500 ease-in-out">

        <!-- Card 1 -->
        <div class="flex-shrink-0 w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white border border-gray-200 rounded-2xl p-6 flex flex-col gap-4 hover:border-[#192653] hover:shadow-lg transition-all duration-300">
          <div class="text-[#192653] text-5xl font-serif leading-none opacity-20">"</div>
          <div class="flex gap-1">
            <span class="text-amber-400 text-sm">★★★★★</span>
          </div>
          <p class="font-poppins text-gray-600 text-sm leading-relaxed flex-1">
            Global Trading Company provided exceptional engine reconditioning services for our bulk carrier. Their team diagnosed and resolved a complex crankshaft issue within 48 hours — zero downtime beyond schedule. Highly professional and reliable.
          </p>
          <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
            <div class="w-10 h-10 rounded-full bg-[#192653] flex items-center justify-center flex-shrink-0">
              <span class="font-poppins font-semibold text-white text-xs">KM</span>
            </div>
            <div>
              <p class="font-poppins font-semibold text-[#192653] text-sm">Capt. Kevin Moore</p>
              <p class="font-poppins text-gray-400 text-xs tracking-wide">Fleet Manager · Pacific Maritime Ltd.</p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="flex-shrink-0 w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white border border-gray-200 rounded-2xl p-6 flex flex-col gap-4 hover:border-[#192653] hover:shadow-lg transition-all duration-300">
          <div class="text-[#192653] text-5xl font-serif leading-none opacity-20">"</div>
          <div class="flex gap-1">
            <span class="text-amber-400 text-sm">★★★★★</span>
          </div>
          <p class="font-poppins text-gray-600 text-sm leading-relaxed flex-1">
            We engaged GTC for a full electrical and automation overhaul on our tanker fleet. Their engineers were meticulous, well-prepared, and completed every job on time. Their 24/7 support is a genuine lifesaver in international waters.
          </p>
          <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
            <div class="w-10 h-10 rounded-full bg-[#192653] flex items-center justify-center flex-shrink-0">
              <span class="font-poppins font-semibold text-white text-xs">RS</span>
            </div>
            <div>
              <p class="font-poppins font-semibold text-[#192653] text-sm">Rajesh Subramaniam</p>
              <p class="font-poppins text-gray-400 text-xs tracking-wide">Technical Superintendent · Indus Shipping Co.</p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="flex-shrink-0 w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white border border-gray-200 rounded-2xl p-6 flex flex-col gap-4 hover:border-[#192653] hover:shadow-lg transition-all duration-300">
          <div class="text-[#192653] text-5xl font-serif leading-none opacity-20">"</div>
          <div class="flex gap-1">
            <span class="text-amber-400 text-sm">★★★★★</span>
          </div>
          <p class="font-poppins text-gray-600 text-sm leading-relaxed flex-1">
            Their marine consultancy team identified structural inefficiencies that had gone unnoticed for years. The recommendations led to a measurable reduction in fuel consumption. GTC is now our go-to partner for all technical assessments.
          </p>
          <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
            <div class="w-10 h-10 rounded-full bg-[#192653] flex items-center justify-center flex-shrink-0">
              <span class="font-poppins font-semibold text-white text-xs">AL</span>
            </div>
            <div>
              <p class="font-poppins font-semibold text-[#192653] text-sm">Anders Lindqvist</p>
              <p class="font-poppins text-gray-400 text-xs tracking-wide">Operations Director · Nordic Bulk Carriers</p>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="flex-shrink-0 w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white border border-gray-200 rounded-2xl p-6 flex flex-col gap-4 hover:border-[#192653] hover:shadow-lg transition-all duration-300">
          <div class="text-[#192653] text-5xl font-serif leading-none opacity-20">"</div>
          <div class="flex gap-1">
            <span class="text-amber-400 text-sm">★★★★★</span>
          </div>
          <p class="font-poppins text-gray-600 text-sm leading-relaxed flex-1">
            From hydraulic systems repair to condition monitoring, GTC handles everything with precision. They serviced three of our vessels in a single port call — logistics were flawless. Truly a world-class marine engineering team.
          </p>
          <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
            <div class="w-10 h-10 rounded-full bg-[#192653] flex items-center justify-center flex-shrink-0">
              <span class="font-poppins font-semibold text-white text-xs">FO</span>
            </div>
            <div>
              <p class="font-poppins font-semibold text-[#192653] text-sm">Fatima Al-Omari</p>
              <p class="font-poppins text-gray-400 text-xs tracking-wide">VP Operations · Gulf Star Marine</p>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="flex-shrink-0 w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white border border-gray-200 rounded-2xl p-6 flex flex-col gap-4 hover:border-[#192653] hover:shadow-lg transition-all duration-300">
          <div class="text-[#192653] text-5xl font-serif leading-none opacity-20">"</div>
          <div class="flex gap-1">
            <span class="text-amber-400 text-sm">★★★★★</span>
          </div>
          <p class="font-poppins text-gray-600 text-sm leading-relaxed flex-1">
            GTC's reconditioning workshop is second to none. They rebuilt our main engine components to OEM standards at a fraction of the cost of replacement. Exceptional quality, honest timelines, and outstanding communication throughout.
          </p>
          <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
            <div class="w-10 h-10 rounded-full bg-[#192653] flex items-center justify-center flex-shrink-0">
              <span class="font-poppins font-semibold text-white text-xs">TN</span>
            </div>
            <div>
              <p class="font-poppins font-semibold text-[#192653] text-sm">Takeshi Nakamura</p>
              <p class="font-poppins text-gray-400 text-xs tracking-wide">Chief Engineer · Nippon Cargo Lines</p>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="flex-shrink-0 w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] bg-white border border-gray-200 rounded-2xl p-6 flex flex-col gap-4 hover:border-[#192653] hover:shadow-lg transition-all duration-300">
          <div class="text-[#192653] text-5xl font-serif leading-none opacity-20">"</div>
          <div class="flex gap-1">
            <span class="text-amber-400 text-sm">★★★★★</span>
          </div>
          <p class="font-poppins text-gray-600 text-sm leading-relaxed flex-1">
            We've worked with many marine engineering firms across 30 years — GTC stands apart. Their master mariners understand operational realities, not just technical specs. The diagnostic services have transformed our maintenance planning.
          </p>
          <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
            <div class="w-10 h-10 rounded-full bg-[#192653] flex items-center justify-center flex-shrink-0">
              <span class="font-poppins font-semibold text-white text-xs">PB</span>
            </div>
            <div>
              <p class="font-poppins font-semibold text-[#192653] text-sm">Pierre Beaumont</p>
              <p class="font-poppins text-gray-400 text-xs tracking-wide">Managing Director · Atlantis Shipping SA</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Prev Button -->
    <button
      id="testimonial-prev"
      onclick="testimonialSlide(-1)"
      class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 w-10 h-10 rounded-full border-2 border-[#192653] text-[#192653] flex items-center justify-center hover:bg-[#192653] hover:text-white transition-all duration-300 bg-white shadow-md z-10 disabled:border-gray-200 disabled:text-gray-300 disabled:cursor-not-allowed disabled:hover:bg-white disabled:hover:text-gray-300">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
      </svg>
    </button>

    <!-- Next Button -->
    <button
      id="testimonial-next"
      onclick="testimonialSlide(1)"
      class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 w-10 h-10 rounded-full border-2 border-[#192653] text-[#192653] flex items-center justify-center hover:bg-[#192653] hover:text-white transition-all duration-300 bg-white shadow-md z-10 disabled:border-gray-200 disabled:text-gray-300 disabled:cursor-not-allowed disabled:hover:bg-white disabled:hover:text-gray-300">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
      </svg>
    </button>

  </div>

  <!-- Dots -->
  <div id="testimonial-dots" class="flex justify-center items-center gap-2 mt-8"></div>

</section>


<?php 
include "./footer.php"
?>
<script>
  (function () {
    const track = document.getElementById('testimonial-track');
    const dotsContainer = document.getElementById('testimonial-dots');
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');
    const cards = track.querySelectorAll('.flex-shrink-0');
    const total = cards.length;
    let current = 0;

    function getVisible() {
      if (window.innerWidth >= 1024) return 3;
      if (window.innerWidth >= 640) return 2;
      return 1;
    }

    function maxIndex() {
      return total - getVisible();
    }

    function buildDots() {
      dotsContainer.innerHTML = '';
      const count = maxIndex() + 1;
      for (let i = 0; i < count; i++) {
        const dot = document.createElement('button');
        dot.className = i === current
          ? 'w-6 h-2 rounded-full bg-[#192653] transition-all duration-300'
          : 'w-2 h-2 rounded-full bg-gray-300 transition-all duration-300';
        dot.addEventListener('click', () => goTo(i));
        dotsContainer.appendChild(dot);
      }
    }

    function goTo(idx) {
      current = Math.max(0, Math.min(idx, maxIndex()));
      const cardWidth = cards[0].offsetWidth + 24;
      track.style.transform = `translateX(-${current * cardWidth}px)`;
      prevBtn.disabled = current === 0;
      nextBtn.disabled = current >= maxIndex();
      buildDots();
    }

    window.testimonialSlide = function (dir) { goTo(current + dir); };

    buildDots();
    goTo(0);
    window.addEventListener('resize', () => goTo(Math.min(current, maxIndex())));
  })();
</script>
</body>
</html>