<?php
$title = 'Dashboard';
$pageTitle = 'Dashboard';
require __DIR__ . '/../templates/dashboard/header.php';
?>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

  <div class="bg-[#151936] border border-[#232862] rounded-xl p-6">
    <h3 class="text-sm text-[#9AA0FF] mb-2">Total Users</h3>
    <p class="text-2xl font-bold">1,245</p>
  </div>

  <div class="bg-[#151936] border border-[#232862] rounded-xl p-6">
    <h3 class="text-sm text-[#9AA0FF] mb-2">Total Notes</h3>
    <p class="text-2xl font-bold">8,412</p>
  </div>

  <div class="bg-[#151936] border border-[#232862] rounded-xl p-6">
    <h3 class="text-sm text-[#9AA0FF] mb-2">Active Streak</h3>
    <p class="text-2xl font-bold">345</p>
  </div>

</div>
