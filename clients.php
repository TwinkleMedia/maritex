<!-- TRUSTED CLIENTS -->
<section class="w-full py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-10">

    <!-- Section Heading -->
    <div class="flex flex-col items-center mb-12">
      <div class="w-16 h-[3px] bg-[#254991] mb-4 rounded-full"></div>
      <h2 class="font-poppins font-semibold text-[#254991] text-2xl sm:text-3xl tracking-widest uppercase">Trusted By</h2>
      <p class="font-poppins text-gray-500 text-sm mt-3 tracking-wide">Companies That Trust Global Trading Company</p>
    </div>

  </div>

  <!-- Carousel Outer — full width for edge-to-edge feel -->
  <div class="relative w-full overflow-hidden">

    <!-- Top fade edges -->
    <div class="absolute left-0 top-0 bottom-0 w-24 sm:w-40 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
    <div class="absolute right-0 top-0 bottom-0 w-24 sm:w-40 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

    <!-- Row 1 — Left to Right -->
    <div class="flex gap-6 mb-6 client-track-ltr">

      <?php
        $clients = [
          ['logo' => './assets/c1.png', 'name' => 'Pacific Maritime Ltd'],
          ['logo' => './assets/c2.png', 'name' => 'Indus Shipping Co'],
          ['logo' => './assets/c3.png', 'name' => 'Nordic Bulk Carriers'],
          ['logo' => './assets/c4.png', 'name' => 'Gulf Star Marine'],
          ['logo' => './assets/c5.png', 'name' => 'Nippon Cargo Lines'],
          ['logo' => './assets/c6.png', 'name' => 'Atlantis Shipping SA'],
        ];
        // Duplicate for seamless loop
        $row1 = array_merge($clients, $clients);
        foreach ($row1 as $client): ?>
          <div class="flex-shrink-0 w-52 h-24 bg-gray-50 border border-gray-100 rounded-xl flex items-center justify-center px-6 hover:border-[#254991] hover:shadow-md transition-all duration-300 group">
  <img
    src="<?php echo $client['logo']; ?>"
    alt="<?php echo $client['name']; ?>"
    class="max-h-14 max-w-full w-auto object-contain grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition-all duration-300"
  />
</div>
      <?php endforeach; ?>

    </div>

    <!-- Row 2 — Right to Left -->
    <div class="flex gap-6 client-track-rtl">

      <?php
        $clients2 = [
          ['logo' => './assets/c6.png',  'name' => 'Orion Tankers'],
          ['logo' => './assets/c5.png', 'name' => 'Meridian Offshore'],
          ['logo' => './assets/c4.png', 'name' => 'Eagle Bulk Corp'],
          ['logo' => './assets/c3.png', 'name' => 'Crest Marine Works'],
          ['logo' => './assets/c2.png', 'name' => 'Delta Port Services'],
          ['logo' => './assets/c1.png', 'name' => 'Trident Shipping'],
        ];
        $row2 = array_merge($clients2, $clients2);
        foreach ($row2 as $client): ?>
          <div class="flex-shrink-0 w-52 h-24 bg-gray-50 border border-gray-100 rounded-xl flex items-center justify-center px-6 hover:border-[#254991] hover:shadow-md transition-all duration-300 group">
  <img
    src="<?php echo $client['logo']; ?>"
    alt="<?php echo $client['name']; ?>"
    class="max-h-14 max-w-full w-auto object-contain grayscale group-hover:grayscale-0 opacity-60 group-hover:opacity-100 transition-all duration-300"
  />
</div>
      <?php endforeach; ?>

    </div>

  </div>

</section>

<style>
  /* Row 1 — scrolls left */
  .client-track-ltr {
    width: max-content;
    animation: scrollLTR 30s linear infinite;
  }
  .client-track-ltr:hover {
    animation-play-state: paused;
  }

  /* Row 2 — scrolls right */
  .client-track-rtl {
    width: max-content;
    animation: scrollRTL 30s linear infinite;
  }
  .client-track-rtl:hover {
    animation-play-state: paused;
  }

  @keyframes scrollLTR {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }

  @keyframes scrollRTL {
    0%   { transform: translateX(-50%); }
    100% { transform: translateX(0); }
  }
</style>