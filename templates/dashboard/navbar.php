<header class="fixed top-0 left-0 right-0 xl:right-0 xl:left-[var(--sidebar-width)] z-[9999] flex h-[70px] items-center border-b border-bordercolor dark:border-bordercolor-dark bg-background dark:bg-background-dark ">
  <div class="flex w-full items-center justify-between px-4 xl:px-6">
    <div class="flex items-center gap-4">

      <!-- MOBILE MENU BUTTON -->
      <button id="toggleDesktop" class="hidden xl:flex h-10 w-10 items-center justify-center rounded-lg border border-bordercolor dark:border-bordercolor-dark bg-transparent text-textcolor-muted dark:text-textcolor-muted-dark  active:scale-95 hover:text-brand-500">
        <i class="fa-solid fa-bars-staggered"></i>
      </button>

      <button id="toggleMobile" class="flex xl:hidden h-10 w-10 items-center justify-center rounded-lg border border-bordercolor dark:border-bordercolor-dark bg-transparent text-textcolor-muted dark:text-textcolor-muted-dark  active:scale-95 hover:text-brand-500">
        <i id="mobileIcon" class="fa-solid fa-bars-staggered"></i>
      </button>

      <h1 class="text-lg font-semibold text-textcolor dark:text-textcolor-dark">
        <?= htmlspecialchars($pageTitle) ?>
      </h1>
    </div>

    <!-- DARK MODE + NOTIF + PROFILE -->
    <div class="flex items-center gap-4">

      <!-- DARK MODE BUTTON -->
      <button id="darkModeToggle" class="relative h-11 w-11 items-center justify-center rounded-lg border border-bordercolor dark:border-bordercolor-dark bg-transparent text-textcolor-muted dark:text-textcolor-muted-dark hover:bg-hoverbrand dark:hover:bg-hoverbrand-dark">
        <i class="fa-regular fa-moon"></i>
      </button>

      <!-- NOTIF MENU -->
      <div class="relative">
        <button id="notifBtn" class="relative flex h-11 w-11 items-center justify-center rounded-lg border border-bordercolor dark:border-bordercolor-dark bg-transparent text-textcolor-muted dark:text-textcolor-muted-dark hover:bg-hoverbrand dark:hover:bg-hoverbrand-dark">
          <i class="fa-regular fa-bell"></i>
        </button>

        <div id="notifMenu" class="hidden absolute right-0 mt-3 z-50 flex-col overflow-hidden h-[350px] w-[260px] sm:w-[300px] rounded-2xl border border-bordercolor dark:border-bordercolor-dark bg-card dark:bg-card-dark shadow-xl p-3">
          <div class="mb-3 flex items-center justify-between border-b border-bordercolor dark:border-bordercolor-dark pb-3">
            <h5 class="text-lg font-semibold text-textcolor dark:text-textcolor-dark">Notifikasi</h5>
            <button id="closeNotifBtn" class="text-textcolor-muted dark:text-textcolor-muted-dark hover:text-danger ">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- PROFILE MENU -->
      <div class="relative">
        <button id="profileBtn" class="flex items-center gap-2 text-sm text-textcolor dark:text-textcolor-dark">
          <img src="https://i.pravatar.cc/40" class="h-9 w-9 rounded-full border border-bordercolor dark:border-bordercolor-dark">
          <span class="hidden xl:block font-medium">Mamal</span>
          <i id="profileArrow" class="fa-solid fa-chevron-down text-xs text-textcolor-muted dark:text-textcolor-muted-dark "></i>
        </button>

        <div id="profileMenu" class="hidden absolute right-0 mt-3 w-[260px] rounded-2xl border border-bordercolor dark:border-bordercolor-dark bg-card dark:bg-card-dark shadow-xl overflow-hidden z-50">

          <div class="px-4 py-4 border-b border-bordercolor dark:border-bordercolor-dark">
            <p class="font-semibold text-textcolor dark:text-textcolor-dark">Mamal Naresh</p>
            <p class="text-sm text-textcolor-muted dark:text-textcolor-muted-dark">mamal@ronekimedia.com</p>
          </div>

          <div class="py-2">
            <a href="" class="flex items-center gap-3 px-4 py-2.5 mx-2 rounded-lg hover:bg-hoverbrand dark:hover:bg-hoverbrand-dark text-textcolor-soft dark:text-textcolor-soft-dark text-sm">
              <i class="fa-regular fa-user w-4 text-textcolor-muted dark:text-textcolor-muted-dark"></i> Edit profile
            </a>
            <a href="" class="flex items-center gap-3 px-4 py-2.5 mx-2 rounded-lg hover:bg-hoverbrand dark:hover:bg-hoverbrand-dark text-textcolor-soft dark:text-textcolor-soft-dark text-sm">
              <i class="fa-solid fa-gear w-4 text-textcolor-muted dark:text-textcolor-muted-dark"></i> Account settings
            </a>
            <a href="" class="flex items-center gap-3 px-4 py-2.5 mx-2 rounded-lg hover:bg-hoverbrand dark:hover:bg-hoverbrand-dark text-textcolor-soft dark:text-textcolor-soft-dark text-sm">
              <i class="fa-regular fa-circle-question w-4 text-textcolor-muted dark:text-textcolor-muted-dark"></i> Support
            </a>
          </div>

          <div class="border-t border-bordercolor dark:border-bordercolor-dark my-1">
            <a href="" class="flex items-center gap-3 px-4 py-3 mx-2 mb-2 rounded-lg text-danger hover:bg-dangerover dark:hover:bg-dangerover-dark">
              <i class="fa-solid fa-right-from-bracket w-4"></i> Sign out
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>

  <script src="../assets/js/navbar.js"></script>
</header>
