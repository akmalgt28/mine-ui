<?php
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$menus = [
  [
    'label'    => 'Dashboard',
    'href'     => '/apps/yayaajah.php',
    'icon'     => 'fa-house',
    'iconSize' => 'text-base',
  ],
  [
    'label'    => 'Profile',
    'href'     => '/profile.php',
    'icon'     => 'fa-user',
    'iconSize' => 'text-base',
  ],
  [
    'label'    => 'Settings',
    'href'     => '/pages/settings.php',
    'icon'     => 'fa-gear',
    'iconSize' => 'text-base',
  ],
];

function pillClasses(string $href, string $currentPath): string {
  $isActive = ($href === $currentPath);

  $base = 'pill-item flex items-center gap-3 px-4 py-2 rounded-lg text-base font-medium';

  $inactive = 'text-gray-500 hover:bg-brand-500/10 hover:text-brand-500';
  $active   = 'bg-brand-500/20 text-brand-500 hover:bg-brand-500/25';

  return $base . ' ' . ($isActive ? $active : $inactive);
}
?>

<div id="sidebarOverlay" class="sidebar-overlay"></div>
<aside id="sidebar"
  class="fixed top-0 left-0 h-screen border-r border-gray-200 flex flex-col items-center py-6 gap-8 z-50 sidebar-width overflow-hidden bg-background dark:dark:bg-background-dark dark:border-bordercolor-dark">

  <div class="logo-wrapper w-full flex items-center justify-center px-4 gap-2 ">
    <img src="/assets/img/logo.png" class="h-10 w-10">
    <span class="sidebar-text hidden text-brand-500 text-2xl font-bold whitespace-nowrap">
      Mine
    </span>
  </div>

  <nav class="flex flex-col gap-6 text-brand-300 text-sm mt-6 w-full">
    <div class="menu-title w-full flex justify-center px-0 ">
      <h3 class="sidebar-text hidden text-[10px] leading-[18px] text-gray-400 uppercase">
        Menu
      </h3>
    </div>

    <?php foreach ($menus as $menu): ?>
      <a href="<?= $menu['href']; ?>"
         class="menu-item w-full justify-center flex ">

        <div class="<?= pillClasses($menu['href'], $currentPath); ?>">
          <i class="fa-solid <?= $menu['icon']; ?> <?= $menu['iconSize']; ?>"></i>
          <span class="sidebar-text hidden text-base">
            <?= htmlspecialchars($menu['label']); ?>
          </span>
        </div>

      </a>
    <?php endforeach; ?>

  </nav>
</aside>
