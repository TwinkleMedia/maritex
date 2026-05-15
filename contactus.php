<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us — Global Trading Company</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { poppins: ['Poppins', 'sans-serif'] },
          colors: { navy: '#192653' }
        }
      }
    }
  </script>
</head>
<body class="font-poppins bg-white">

<!-- ===================== NAVBAR PLACEHOLDER ===================== -->
<?php include "./navbar.php" ?>

<?php 
include "./whatsapp.php"
?>

<!-- ===================== HERO SECTION ===================== -->
<section class="relative w-full h-[65vh] flex flex-col overflow-hidden">

  <!-- Background Image -->
  <div class="absolute inset-0 overflow-hidden">
    <img
      src="./assets/ship.jpg"
      alt="Contact Global Trading Company"
      class="w-full h-full object-cover object-center"
    />
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#0a1a3a]/95 via-[#192653]/70 to-[#0a1a3a]/50"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 flex-1 w-full max-w-7xl mx-auto px-6 md:px-10 flex flex-col justify-center">

    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 mb-4">
      <a href="./index.php" class="font-poppins text-white/50 text-xs tracking-widest uppercase hover:text-white transition-colors duration-300">Home</a>
      <svg class="w-3 h-3 text-white/30 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
      </svg>
      <span class="font-poppins text-[#7eb3ff] text-xs tracking-widest uppercase">Contact Us</span>
    </div>

    <!-- Tag Line -->
    <div class="flex items-center gap-3 mb-3">
      <span class="block w-8 h-[2px] bg-white flex-shrink-0"></span>
     
    </div>

    <!-- Heading -->
    <h1 class="font-poppins font-semibold text-white text-3xl sm:text-4xl md:text-5xl leading-tight max-w-2xl mb-3">
      Get In <span class="text-[#7eb3ff]">Touch</span>
    </h1>

    <!-- Subtext -->
    <p class="font-poppins text-white/65 text-sm sm:text-base max-w-lg leading-relaxed">
      Have a vessel in need? Our team of expert marine engineers is ready to assist — 24/7, anywhere in the world. Reach out and let's get to work.
    </p>

  </div>

  <!-- Quick Contact Pills -->
  <div class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-10 pb-10">
    <div class="flex flex-wrap gap-3">
      <a href="tel:+911234567890" class="flex items-center gap-2 bg-white/10 border border-white/20 backdrop-blur-sm text-white text-xs px-4 py-2 rounded-full hover:bg-white/20 transition-all duration-300">
        <svg class="w-3.5 h-3.5 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 8V5z"/>
        </svg>
        +91 12345 67890
      </a>
      <a href="mailto:info@globaltrading.com" class="flex items-center gap-2 bg-white/10 border border-white/20 backdrop-blur-sm text-white text-xs px-4 py-2 rounded-full hover:bg-white/20 transition-all duration-300">
        <svg class="w-3.5 h-3.5 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
        </svg>
        info@globaltrading.com
      </a>
      <span class="flex items-center gap-2 bg-white/10 border border-white/20 backdrop-blur-sm text-white text-xs px-4 py-2 rounded-full">
        <svg class="w-3.5 h-3.5 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        Mumbai, India
      </span>
    </div>
  </div>

  <!-- Bottom Fade -->
  <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>

</section>


<!-- ===================== CONTACT SECTION ===================== -->
<section class="w-full py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-10">

    <!-- Section Heading -->
    <div class="flex flex-col items-center mb-14">
      <div class="w-16 h-[3px] bg-[#192653] mb-4 rounded-full"></div>
      <h2 class="font-poppins font-semibold text-[#192653] text-2xl sm:text-3xl tracking-widest uppercase">Contact Us</h2>
      <p class="font-poppins text-gray-500 text-sm mt-3 tracking-wide">We'd Love to Hear From You</p>
    </div>

    <!-- Main Grid: Form + Info -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-12">

      <!-- ===== LEFT: Contact Info ===== -->
      <div class="lg:col-span-2 flex flex-col gap-5">

        <!-- Info Header -->
        <div>
          <h3 class="font-poppins font-semibold text-[#192653] text-xl leading-snug mb-2">Let's Work Together</h3>
          <p class="font-poppins text-gray-500 text-sm leading-relaxed">
            Whether you need urgent vessel assistance or want to discuss a long-term maintenance contract, our team is ready to help — 24 hours a day, 7 days a week.
          </p>
        </div>

        <!-- Divider -->
        <div class="w-12 h-[2px] bg-[#192653] rounded-full"></div>

        <!-- Info Cards -->
        <div class="flex flex-col gap-4">

          <!-- Phone -->
          <div class="flex items-start gap-4 bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 hover:border-[#192653] hover:shadow-md transition-all duration-300">
            <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-[#192653]/10 border border-[#192653]/20 flex items-center justify-center mt-0.5">
              <svg class="w-5 h-5 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 8V5z"/>
              </svg>
            </div>
            <div>
              <p class="font-poppins text-[10px] tracking-widest uppercase text-gray-400 mb-0.5">Phone</p>
              <a href="tel:+911234567890" class="font-poppins font-semibold text-[#192653] text-sm hover:opacity-70 transition-opacity">+91 12345 67890</a>
              <p class="font-poppins text-gray-400 text-xs mt-0.5">Available 24/7</p>
            </div>
          </div>

          <!-- Email -->
          <div class="flex items-start gap-4 bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 hover:border-[#192653] hover:shadow-md transition-all duration-300">
            <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-[#192653]/10 border border-[#192653]/20 flex items-center justify-center mt-0.5">
              <svg class="w-5 h-5 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
            </div>
            <div>
              <p class="font-poppins text-[10px] tracking-widest uppercase text-gray-400 mb-0.5">Email</p>
              <a href="mailto:info@globaltrading.com" class="font-poppins font-semibold text-[#192653] text-sm hover:opacity-70 transition-opacity">info@globaltrading.com</a>
              <p class="font-poppins text-gray-400 text-xs mt-0.5">We reply within 24 hours</p>
            </div>
          </div>

          <!-- Address -->
          <div class="flex items-start gap-4 bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 hover:border-[#192653] hover:shadow-md transition-all duration-300">
            <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-[#192653]/10 border border-[#192653]/20 flex items-center justify-center mt-0.5">
              <svg class="w-5 h-5 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <div>
              <p class="font-poppins text-[10px] tracking-widest uppercase text-gray-400 mb-0.5">Address</p>
              <p class="font-poppins font-semibold text-[#192653] text-sm">Mumbai, Maharashtra</p>
              <p class="font-poppins text-gray-400 text-xs mt-0.5">India — 400 001</p>
            </div>
          </div>

          <!-- Working Hours -->
          <div class="flex items-start gap-4 bg-gray-50 border border-gray-100 rounded-2xl px-5 py-4 hover:border-[#192653] hover:shadow-md transition-all duration-300">
            <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-[#192653]/10 border border-[#192653]/20 flex items-center justify-center mt-0.5">
              <svg class="w-5 h-5 text-[#192653]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <div>
              <p class="font-poppins text-[10px] tracking-widest uppercase text-gray-400 mb-0.5">Working Hours</p>
              <p class="font-poppins font-semibold text-[#192653] text-sm">Mon – Sat: 9:00 AM – 6:00 PM</p>
              <p class="font-poppins text-gray-400 text-xs mt-0.5">Emergency support: 24/7</p>
            </div>
          </div>

        </div>

        <!-- Navy CTA Banner -->
        <div class="relative bg-[#192653] rounded-2xl overflow-hidden px-5 py-6 mt-1">
          <div class="absolute top-0 right-0 w-28 h-28 rounded-full bg-white/5 -translate-y-10 translate-x-10"></div>
          <div class="absolute bottom-0 left-0 w-20 h-20 rounded-full bg-white/5 translate-y-8 -translate-x-6"></div>
          <div class="relative z-10 flex items-center gap-3 mb-2">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-4 h-4 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <p class="font-poppins font-semibold text-white text-sm">Need Urgent Assistance?</p>
          </div>
          <p class="relative z-10 font-poppins text-white/70 text-xs leading-relaxed mb-4">
            Our rapid deployment team can mobilise within hours. Call us directly for emergency marine support.
          </p>
          <a href="tel:+911234567890"
            class="relative z-10 inline-flex items-center gap-2 font-poppins font-semibold text-xs tracking-widest uppercase bg-white text-[#192653] hover:bg-[#7eb3ff] hover:text-white px-5 py-2.5 rounded-lg transition-all duration-300">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 8V5z"/>
            </svg>
            Call Us Now
          </a>
        </div>

      </div>

      <!-- ===== RIGHT: Contact Form ===== -->
      <div class="lg:col-span-3">
        <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-7 sm:p-9 hover:shadow-lg transition-shadow duration-300">

          <!-- Form Header -->
          <div class="mb-7">
            <div class="flex items-center gap-2 mb-2">
              <span class="block w-5 h-[2px] bg-[#192653] rounded-full"></span>
              <span class="font-poppins text-[#192653] text-[10px] tracking-[0.3em] uppercase">Send a Message</span>
            </div>
            <h3 class="font-poppins font-semibold text-[#0a1a3a] text-xl">How Can We Help You?</h3>
          </div>

          <!-- Form -->
          <form id="contactForm" onsubmit="handleSubmit(event)" novalidate>

            <!-- Row 1: Name + Company -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">

              <div class="flex flex-col gap-1.5">
                <label class="font-poppins text-xs tracking-widest uppercase text-gray-500 font-medium">
                  Full Name <span class="text-red-400">*</span>
                </label>
                <input
                  type="text"
                  id="fullName"
                  placeholder="Capt. John Smith"
                  class="font-poppins text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-[#192653] focus:bg-white focus:ring-2 focus:ring-[#192653]/10 transition-all duration-300 placeholder:text-gray-300"
                  required
                />
                <p class="font-poppins text-[10px] text-red-400 hidden" id="err-fullName">Please enter your full name.</p>
              </div>

              <div class="flex flex-col gap-1.5">
                <label class="font-poppins text-xs tracking-widest uppercase text-gray-500 font-medium">
                  Company Name
                </label>
                <input
                  type="text"
                  id="company"
                  placeholder="Pacific Maritime Ltd."
                  class="font-poppins text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-[#192653] focus:bg-white focus:ring-2 focus:ring-[#192653]/10 transition-all duration-300 placeholder:text-gray-300"
                />
              </div>

            </div>

            <!-- Row 2: Email + Phone -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">

              <div class="flex flex-col gap-1.5">
                <label class="font-poppins text-xs tracking-widest uppercase text-gray-500 font-medium">
                  Email Address <span class="text-red-400">*</span>
                </label>
                <input
                  type="email"
                  id="email"
                  placeholder="john@maritime.com"
                  class="font-poppins text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-[#192653] focus:bg-white focus:ring-2 focus:ring-[#192653]/10 transition-all duration-300 placeholder:text-gray-300"
                  required
                />
                <p class="font-poppins text-[10px] text-red-400 hidden" id="err-email">Please enter a valid email address.</p>
              </div>

              <div class="flex flex-col gap-1.5">
                <label class="font-poppins text-xs tracking-widest uppercase text-gray-500 font-medium">
                  Phone Number
                </label>
                <input
                  type="tel"
                  id="phone"
                  placeholder="+91 98765 43210"
                  class="font-poppins text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-[#192653] focus:bg-white focus:ring-2 focus:ring-[#192653]/10 transition-all duration-300 placeholder:text-gray-300"
                />
              </div>

            </div>

            <!-- Row 3: Service + Vessel Type -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">

              <div class="flex flex-col gap-1.5">
                <label class="font-poppins text-xs tracking-widest uppercase text-gray-500 font-medium">
                  Service Required <span class="text-red-400">*</span>
                </label>
                <div class="relative">
                  <select
                    id="service"
                    class="w-full font-poppins text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-[#192653] focus:bg-white focus:ring-2 focus:ring-[#192653]/10 transition-all duration-300 appearance-none cursor-pointer"
                    required
                  >
                    <option value="" class="text-gray-300">Select a service...</option>
                    <option value="diesel">Marine Diesel Engine Services</option>
                    <option value="electrical">Electrical & Automation Services</option>
                    <option value="condition">Condition Monitoring Service</option>
                    <option value="reconditioning">Reconditioning Services</option>
                    <option value="hydraulic">Hydraulic Systems Repair</option>
                    <option value="consultancy">Marine Consultancy</option>
                    <option value="other">Other / General Enquiry</option>
                  </select>
                  <div class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                  </div>
                </div>
                <p class="font-poppins text-[10px] text-red-400 hidden" id="err-service">Please select a service.</p>
              </div>

              <div class="flex flex-col gap-1.5">
                <label class="font-poppins text-xs tracking-widest uppercase text-gray-500 font-medium">
                  Vessel Type
                </label>
                <div class="relative">
                  <select
                    id="vessel"
                    class="w-full font-poppins text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-[#192653] focus:bg-white focus:ring-2 focus:ring-[#192653]/10 transition-all duration-300 appearance-none cursor-pointer"
                  >
                    <option value="">Select vessel type...</option>
                    <option value="bulk">Bulk Carrier</option>
                    <option value="tanker">Tanker</option>
                    <option value="container">Container Ship</option>
                    <option value="cargo">General Cargo</option>
                    <option value="offshore">Offshore Vessel</option>
                    <option value="tug">Tug / Workboat</option>
                    <option value="other">Other</option>
                  </select>
                  <div class="pointer-events-none absolute right-4 top-1/2 -translate-y-1/2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                  </div>
                </div>
              </div>

            </div>

            <!-- Row 4: Message -->
            <div class="flex flex-col gap-1.5 mb-6">
              <label class="font-poppins text-xs tracking-widest uppercase text-gray-500 font-medium">
                Message <span class="text-red-400">*</span>
              </label>
              <textarea
                id="message"
                rows="5"
                placeholder="Describe your requirement — vessel name, port location, urgency, or any other relevant details..."
                class="font-poppins text-sm text-gray-700 bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 outline-none focus:border-[#192653] focus:bg-white focus:ring-2 focus:ring-[#192653]/10 transition-all duration-300 resize-none placeholder:text-gray-300"
                required
              ></textarea>
              <p class="font-poppins text-[10px] text-red-400 hidden" id="err-message">Please enter your message.</p>
            </div>

            <!-- Submit -->
            <button
              type="submit"
              id="submitBtn"
              class="w-full font-poppins font-semibold text-xs tracking-widest uppercase bg-[#192653] hover:bg-[#1a3570] text-white px-8 py-4 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg hover:-translate-y-0.5 flex items-center justify-center gap-3"
            >
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
              </svg>
              Send Message
            </button>

          </form>

          <!-- Success Message (hidden by default) -->
          <div id="successMsg" class="hidden mt-5 bg-green-50 border border-green-200 rounded-xl px-5 py-4 flex items-start gap-3">
            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-green-100 flex items-center justify-center mt-0.5">
              <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
              </svg>
            </div>
            <div>
              <p class="font-poppins font-semibold text-green-700 text-sm">Message Sent Successfully!</p>
              <p class="font-poppins text-green-600 text-xs mt-0.5 leading-relaxed">Thank you for reaching out. Our team will get back to you within 24 hours.</p>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>


<!-- ===================== MAP SECTION ===================== -->
<section class="w-full bg-gray-50 py-16">
  <div class="max-w-6xl mx-auto px-6 md:px-10">

    <!-- Section Heading -->
    <div class="flex flex-col items-center mb-10">
      <div class="w-16 h-[3px] bg-[#192653] mb-4 rounded-full"></div>
      <h2 class="font-poppins font-semibold text-[#192653] text-2xl sm:text-3xl tracking-widest uppercase">Find Us</h2>
      <p class="font-poppins text-gray-500 text-sm mt-3 tracking-wide">Our Office Location</p>
    </div>

    <!-- Map Embed Wrapper -->
    <div class="relative rounded-2xl overflow-hidden shadow-md border border-gray-100 h-72 sm:h-96">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609793432!2d72.74109995!3d19.08219865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1697000000000"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        class="w-full h-full"
      ></iframe>
      <!-- Map Overlay Badge -->
      <div class="absolute top-4 left-4 bg-[#192653] text-white rounded-xl px-4 py-2.5 shadow-lg flex items-center gap-2">
        <svg class="w-4 h-4 text-[#7eb3ff]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        <span class="font-poppins font-semibold text-xs tracking-wide">Mumbai, India</span>
      </div>
    </div>

  </div>
</section>
<!-- ===================== FOOTER PLACEHOLDER ===================== -->
<?php include "./footer.php" ?>
<!-- ===================== FORM VALIDATION SCRIPT ===================== -->
<script>
  function handleSubmit(e) {
    e.preventDefault();
    let valid = true;

    const fields = [
      { id: 'fullName',  errId: 'err-fullName',  check: v => v.trim().length >= 2 },
      { id: 'email',     errId: 'err-email',      check: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()) },
      { id: 'service',   errId: 'err-service',    check: v => v !== '' },
      { id: 'message',   errId: 'err-message',    check: v => v.trim().length >= 10 },
    ];

    fields.forEach(({ id, errId, check }) => {
      const el  = document.getElementById(id);
      const err = document.getElementById(errId);
      if (!check(el.value)) {
        el.classList.add('border-red-300', 'bg-red-50');
        el.classList.remove('border-gray-200', 'bg-gray-50');
        err.classList.remove('hidden');
        valid = false;
      } else {
        el.classList.remove('border-red-300', 'bg-red-50');
        el.classList.add('border-gray-200', 'bg-gray-50');
        err.classList.add('hidden');
      }
    });

    if (!valid) return;

    // Simulate submission
    const btn = document.getElementById('submitBtn');
    btn.disabled = true;
    btn.innerHTML = `
      <svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
      </svg>
      Sending...
    `;

    setTimeout(() => {
      document.getElementById('contactForm').reset();
      document.getElementById('successMsg').classList.remove('hidden');
      btn.disabled = false;
      btn.innerHTML = `
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
        </svg>
        Send Message
      `;
      setTimeout(() => document.getElementById('successMsg').classList.add('hidden'), 5000);
    }, 1500);
  }

  // Live clear errors on input
  ['fullName','email','service','message'].forEach(id => {
    document.getElementById(id).addEventListener('input', function() {
      document.getElementById('err-' + id).classList.add('hidden');
      this.classList.remove('border-red-300', 'bg-red-50');
      this.classList.add('border-gray-200', 'bg-gray-50');
    });
  });
</script>

</body>
</html>