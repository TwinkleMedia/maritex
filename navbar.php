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
            navy: '#254991',
          }
        }
      }
    }
  </script>
</head>
<body class="font-poppins">

 <!-- TOP BAR -->
<div class="w-full bg-[#192653] text-white text-sm">
  <div class="max-w-7xl mx-auto px-6 py-2 flex flex-col sm:flex-row flex-wrap items-center justify-between gap-2">

    <!-- LEFT: Phone & Email -->
    <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6">
      <a href="tel:+911234567890" class="flex items-center gap-2 hover:opacity-80 transition-opacity duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 8V5z"/>
        </svg>
        <span class="tracking-wide">+91 12345 67890</span>
      </a>
      <span class="text-white/30 hidden sm:inline">|</span>
      <a href="mailto:info@globaltrading.com" class="flex items-center gap-2 hover:opacity-80 transition-opacity duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
        </svg>
        <span class="tracking-wide">info@globaltrading.com</span>
      </a>
    </div>

    <!-- RIGHT: Location -->
    <div class="flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
      </svg>
      <span class="tracking-wide">Mumbai, Maharashtra, India</span>
    </div>
  </div>
</div>

<!-- MAIN NAVBAR -->
<nav class="w-full bg-white shadow-[0_6px_20px_rgba(0,0,0,0.06)]">
  <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">

    <!-- LOGO -->
    <div class="flex items-center gap-4 flex-shrink-0">
      <img src="./assets/Logo.pdf.png" alt="Global Trading Company Logo" class="h-16 w-auto object-contain"/>
    </div>

    <!-- NAV LINKS - Desktop -->
    <div class="hidden md:flex flex-1 items-center justify-center gap-10">
      <a href="./index.php" class="font-semibold text-sm tracking-widest text-[#254991] hover:opacity-70 transition-opacity duration-200 uppercase relative after:absolute after:bottom-[-4px] after:left-0 after:h-[2px] after:w-0 after:bg-[#254991] after:rounded after:transition-all hover:after:w-full">Home</a>
      <a href="./about.php" class="font-semibold text-sm tracking-widest text-[#254991] hover:opacity-70 transition-opacity duration-200 uppercase relative after:absolute after:bottom-[-4px] after:left-0 after:h-[2px] after:w-0 after:bg-[#254991] after:rounded after:transition-all hover:after:w-full">About Us</a>
      <a href="./ourservies.php" class="font-semibold text-sm tracking-widest text-[#254991] hover:opacity-70 transition-opacity duration-200 uppercase relative after:absolute after:bottom-[-4px] after:left-0 after:h-[2px] after:w-0 after:bg-[#254991] after:rounded after:transition-all hover:after:w-full">Our Servies</a>
      <a href="./contactus.php" class="font-semibold text-sm tracking-widest text-[#254991] hover:opacity-70 transition-opacity duration-200 uppercase relative after:absolute after:bottom-[-4px] after:left-0 after:h-[2px] after:w-0 after:bg-[#254991] after:rounded after:transition-all hover:after:w-full">Contact Us</a>
    </div>

    <!-- Spacer -->
    <div class="hidden md:block w-32 flex-shrink-0"></div>

    <!-- HAMBURGER - Mobile -->
    <button
      id="hamburger-btn"
      class="md:hidden flex flex-col justify-center items-center w-10 h-10 gap-[5px] p-1"
      onclick="toggleNavMenu()"
      aria-label="Toggle menu"
    >
      <span id="ham-line-1" class="block w-[22px] h-[2px] bg-[#254991] rounded transition-all duration-300 origin-center"></span>
      <span id="ham-line-2" class="block w-[22px] h-[2px] bg-[#254991] rounded transition-all duration-300"></span>
      <span id="ham-line-3" class="block w-[22px] h-[2px] bg-[#254991] rounded transition-all duration-300 origin-center"></span>
    </button>
  </div>

  <!-- MOBILE MENU -->
  <div id="mobile-menu" class="hidden md:hidden border-t border-[#e8eef8] overflow-hidden transition-all duration-300">
    <a href="./index.php" class="block font-semibold text-sm tracking-widest text-[#254991] uppercase px-6 py-4 border-b border-[#eef2fb] hover:bg-blue-50 transition-colors">Home</a>
    <a href="./about.php" class="block font-semibold text-sm tracking-widest text-[#254991] uppercase px-6 py-4 border-b border-[#eef2fb] hover:bg-blue-50 transition-colors">About Us</a>
    <a href="./ourservies.php" class="block font-semibold text-sm tracking-widest text-[#254991] uppercase px-6 py-4 border-b border-[#eef2fb] hover:bg-blue-50 transition-colors">Our Products</a>
    <a href="./contactus.php" class="block font-semibold text-sm tracking-widest text-[#254991] uppercase px-6 py-4 hover:bg-blue-50 transition-colors">Contact Us</a>
  </div>
</nav>

<script>
  function toggleNavMenu() {
    const menu = document.getElementById('mobile-menu');
    const l1 = document.getElementById('ham-line-1');
    const l2 = document.getElementById('ham-line-2');
    const l3 = document.getElementById('ham-line-3');
    const isOpen = !menu.classList.contains('hidden');

    menu.classList.toggle('hidden');

    if (!isOpen) {
      l1.style.transform = 'translateY(7px) rotate(45deg)';
      l2.style.opacity = '0';
      l3.style.transform = 'translateY(-7px) rotate(-45deg)';
    } else {
      l1.style.transform = '';
      l2.style.opacity = '';
      l3.style.transform = '';
    }
  }
</script>
</body>
</html>