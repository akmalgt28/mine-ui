<?php
$title = 'Dashboard';
$pageTitle = 'Dashboard';
require __DIR__ . '/templates/dashboard/header.php';
?>
<!-- BARIS 1 - 4 KOLOM (PENDEK) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 mt-6">

  <div class="bg-card dark:bg-card-dark 
              border border-bordercolor dark:border-bordercolor-dark 
              rounded-xl p-6 min-h-24 
              flex items-center gap-4">

    <!-- ICON DI KIRI -->
    <div class="w-14 h-14 border border-white rounded-xl bg-white/10 
                flex items-center justify-center shrink-0">
      <i class="fa-solid fa-fire text-2xl"></i>
    </div>

    <!-- TEXT DI KANAN -->
    <div class="flex flex-col">
      <p class="text-textcolor dark:text-textcolor-dark text-sm sm:text-base">
        Catatan Hari Ini
      </p>
      <h3 class="text-textcolor dark:text-textcolor-dark font-semibold text-2xl sm:text-3xl">
        0
      </h3>
    </div>

  </div>
  <div class="bg-card dark:bg-card-dark 
              border border-bordercolor dark:border-bordercolor-dark 
              rounded-xl p-6 min-h-24 
              flex items-center gap-4">

    <!-- ICON DI KIRI -->
    <div class="w-14 h-14 border border-white rounded-xl bg-white/10 
                flex items-center justify-center shrink-0">
      <i class="fa-solid fa-fire text-2xl"></i>
    </div>

    <!-- TEXT DI KANAN -->
    <div class="flex flex-col">
      <p class="text-textcolor dark:text-textcolor-dark text-sm sm:text-base">
        Catatan Hari Ini
      </p>
      <h3 class="text-textcolor dark:text-textcolor-dark font-semibold text-2xl sm:text-3xl">
        0
      </h3>
    </div>

  </div>
  <div class="bg-card dark:bg-card-dark 
              border border-bordercolor dark:border-bordercolor-dark 
              rounded-xl p-6 min-h-24 
              flex items-center gap-4">

    <!-- ICON DI KIRI -->
    <div class="w-14 h-14 border border-white rounded-xl bg-white/10 
                flex items-center justify-center shrink-0">
      <i class="fa-solid fa-fire text-2xl"></i>
    </div>

    <!-- TEXT DI KANAN -->
    <div class="flex flex-col">
      <p class="text-textcolor dark:text-textcolor-dark text-sm sm:text-base">
        Catatan Hari Ini
      </p>
      <h3 class="text-textcolor dark:text-textcolor-dark font-semibold text-2xl sm:text-3xl">
        0
      </h3>
    </div>

  </div>
  <div class="bg-card dark:bg-card-dark 
              border border-bordercolor dark:border-bordercolor-dark 
              rounded-xl p-6 min-h-24 
              flex items-center gap-4">

    <!-- ICON DI KIRI -->
    <div class="w-14 h-14 border border-white rounded-xl bg-white/10 
                flex items-center justify-center shrink-0">
      <i class="fa-solid fa-fire text-2xl"></i>
    </div>

    <!-- TEXT DI KANAN -->
    <div class="flex flex-col">
      <p class="text-textcolor dark:text-textcolor-dark text-sm sm:text-base">
        Catatan Hari Ini
      </p>
      <h3 class="text-textcolor dark:text-textcolor-dark font-semibold text-2xl sm:text-3xl">
        0
      </h3>
    </div>

  </div>

</div>


<!-- BARIS 2 - 3 KOLOM (SEDANG) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
  <div class="bg-[#151936] border border-[#232862] rounded-xl p-6 min-h-40">Card 5</div>
  <div class="bg-[#151936] border border-[#232862] rounded-xl p-6 min-h-40">Card 6</div>
  <div class="bg-[#151936] border border-[#232862] rounded-xl p-6 min-h-40">Card 7</div>
</div>

<!-- BARIS 3 - 2 KOLOM (TINGGI) -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
  <div class="bg-[#151936] border border-[#232862] rounded-xl p-6 min-h-56">Card 8</div>
  <div class="bg-[#151936] border border-[#232862] rounded-xl p-6 min-h-56">Card 9</div>
</div>

<!-- BARIS 4 - 1 KOLOM (PALING TINGGI) -->
<div class="grid grid-cols-1 gap-6">
  <div class="bg-[#151936] border border-[#232862] rounded-xl p-6 min-h-80">Card 10</div>
</div>

<div class="max-w-md bg-white rounded-xl shadow p-4">
  <h2 class="text-lg font-semibold mb-4">Recent Sessions</h2>

  <!-- Item 1 -->
  <div class="py-3 border-b">
    <p class="font-medium text-gray-800">Pemrograman Dasar</p>
    <p class="text-sm text-gray-500">8 menit • 2025 12 01 05:59:11</p>
  </div>

  <!-- Item 2 -->
  <div class="py-3 border-b">
    <p class="font-medium text-gray-800">Pemrograman Dasar</p>
    <p class="text-sm text-gray-500">0 menit • 2025 12 01 04:45:51</p>
  </div>

  <!-- Item 3 -->
  <div class="py-3">
    <p class="font-medium text-gray-800">Pemrograman Dasar</p>
    <p class="text-sm text-gray-500">0 menit • 2025 12 01 04:37:29</p>
  </div>
</div>

<div class="bg-white rounded-xl shadow-sm border p-6 min-h-[180px] flex flex-col">
  <h2 class="text-sm font-semibold text-gray-800 mb-4">
    Recent Notes
  </h2>

  <div class="flex flex-1 flex-col items-center justify-center text-center gap-2">
    <i class="fa-regular fa-note-sticky text-2xl text-gray-400"></i>

    <p class="font-medium text-gray-700">
      Belum ada catatan
    </p>
    <p class="text-sm text-gray-400">
      Buat catatan baru dari menu Notes atau YouTube Editor ✏️
    </p>
  </div>
</div>
