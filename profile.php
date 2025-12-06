<?php
$title = 'Profile | Mine';
$pageTitle = 'Profile';
require __DIR__ . '/templates/dashboard/header.php';
?>

<div class="w-full rounded-xl px-6 pt-4">
    <div class="w-full rounded-xl px-4 py-3 bg-card dark:bg-card-dark border border-bordercolor dark:border-bordercolor-dark">

<!-- DESKTOP TABS -->
        <div class="hidden sm:block">
            <ul class="flex items-center gap-6 text-sm font-medium text-textcolor-muted dark:text-textcolor-dark">
                <li>
                    <button onclick="setTab('profile')" id="tab-profile" class="px-4 py-2 rounded-lg dark:hover:text-textcolor-dark">
                        Profile
                    </button>
                </li>
                <li>
                    <button onclick="setTab('notif')" id="tab-notif" class="px-4 py-2 rounded-lg dark:hover:text-textcolor-dark">
                        Notification
                    </button>
                </li>
                <li>
                    <button onclick="setTab('security')" id="tab-security" class="px-4 py-2 rounded-lg dark:hover:text-textcolor-dark">
                        Security
                    </button>
                </li>
            </ul>
        </div>
<!-- MOBILE TABS -->
        <div class="sm:hidden">
            <select id="mobileTab" onchange="setTab(this.value)" class="block w-full px-4 py-3 rounded-lg bg-card dark:bg-card-dark text-textcolor dark:text-textcolor-dark border border-bordercolor dark:border-bordercolor-dark">
                <option value="profile">Profile</option>
                <option value="notif">Notification</option>
                <option value="security">Security</option>
            </select>
        </div>
    </div>
    <div class="mt-6">
        <div id="content-profile">
            <section class="min-h-screen w-full px-4 py-6 sm:px-6 sm:py-8 lg:px-16 lg:py-14 bg-background dark:bg-background-dark">
                <div class="grid grid-cols-1 md:grid-cols-2 w-full">
                    <div>
                        <h2 class="text-xl font-semibold text-textcolor dark:text-textcolor-dark mb-2">
                            Profile Setting
                        </h2>
                        <p class="mb-4 text-textcolor-muted dark:text-textcolor-muted-dark leading-relaxed max-w-sm">
                            Pengaturan Dasar Akun
                        </p>
                    </div>
                    <div>
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <div>
                                    <label class="block mb-2 text-sm text-textcolor dark:text-textcolor-dark">
                                        First Name</label>
                                    <input type="text" class="w-full px-4 py-3 rounded-xl text-textcolor 
                                                            dark:text-textcolor-dark border border-bordercolor 
                                                            dark:border-bordercolor-dark bg-background dark:bg-background-dark 
                                                            focus:border-brand-500 dark:focus:border-brand-500 focus:ring-2">
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm text-textcolor dark:text-textcolor-dark">
                                        last Name</label>
                                    <input type="text"  class="w-full px-4 py-3 rounded-xl text-textcolor 
                                                            dark:text-textcolor-dark border border-bordercolor 
                                                            dark:border-bordercolor-dark bg-background dark:bg-background-dark 
                                                            focus:border-brand-500 dark:focus:border-brand-500 focus:ring-2">
                                </div>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm text-textcolor dark:text-textcolor-dark">
                                    Email Address</label>
                                <input type="email" class="w-full px-4 py-3 rounded-xl text-textcolor 
                                                        dark:text-textcolor-dark border border-bordercolor 
                                                        dark:border-bordercolor-dark bg-background dark:bg-background-dark 
                                                        focus:border-brand-500 dark:focus:border-brand-500 focus:ring-2">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm text-textcolor dark:text-textcolor-dark">
                                    Username</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl text-textcolor 
                                                        dark:text-textcolor-dark border border-bordercolor 
                                                        dark:border-bordercolor-dark bg-background dark:bg-background-dark 
                                                        focus:border-brand-500 dark:focus:border-brand-500 focus:ring-2">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm text-textcolor dark:text-textcolor-dark">
                                    Phone Number</label>
                                <input type="tel" class="w-full px-4 py-3 rounded-xl text-textcolor 
                                                        dark:text-textcolor-dark border border-bordercolor 
                                                        dark:border-bordercolor-dark bg-background dark:bg-background-dark 
                                                        focus:border-brand-500 dark:focus:border-brand-500 focus:ring-2">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm text-textcolor dark:text-textcolor-dark">
                                    Bio</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl text-textcolor 
                                                        dark:text-textcolor-dark border border-bordercolor 
                                                        dark:border-bordercolor-dark bg-background dark:bg-background-dark 
                                                        focus:border-brand-500 dark:focus:border-brand-500 focus:ring-2">
                            </div>
                            <div class="pt-6">
                                <button class="px-10 py-3 bg-brand-500 text-white rounded-xl">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <div id="content-notif" class="hidden">
            <section class="min-h-screen w-full px-4 py-6 sm:px-6 sm:py-8 lg:px-16 lg:py-14 bg-background dark:bg-background-dark">
                <div class="grid grid-cols-1 md:grid-cols-2 w-full">
                    <div>
                        <h2 class="text-xl font-semibold text-textcolor dark:text-textcolor-dark mb-2">
                            Notification Setting
                        </h2>
                        <p class="mb-4 text-textcolor-muted dark:text-textcolor-muted-dark leading-relaxed max-w-sm">
                            Atur Notifikasi Yang Ingin Kamu Terima
                        </p>
                    </div>
                    <div>
                        <form class="space-y-6">
                            <label class="flex items-center justify-between gap-4 p-4 rounded-xl border border-bordercolor dark:border-bordercolor-dark bg-card dark:bg-card-dark cursor-pointer">
                                <div>
                                    <p class="font-medium text-textcolor dark:text-textcolor-dark">Email Notification</p>
                                    <p class="text-textcolor dark:text-textcolor-dark">Notifikasi Melalui Email</p>
                                </div>
                                <input type="checkbox" class="w-5 h-5 rounded-[5px] bg-background dark:bg-background-dark text-brand-500 transition-all">
                            </label>
                            <label class="flex items-center justify-between gap-4 p-4 rounded-xl border border-bordercolor dark:border-bordercolor-dark bg-card dark:bg-card-dark cursor-pointer">
                                <div>
                                    <p class="font-medium text-textcolor dark:text-textcolor-dark">Push Notification</p>
                                    <p class="text-textcolor dark:text-textcolor-dark">Notifikasi Langsung ke Device</p>
                                </div>
                                <input type="checkbox" class="w-5 h-5 rounded-[5px] bg-background dark:bg-background-dark text-brand-500 transition-all">
                            </label>
                            <div class="pt-6">
                                <button class="px-10 py-3 bg-brand-500 text-white rounded-xl">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <div id="content-security" class="hidden">
            <section class="min-h-screen w-full px-4 py-6 sm:px-6 sm:py-8 lg:px-16 lg:py-14 bg-background dark:bg-background-dark">
                <div class="grid grid-cols-1 md:grid-cols-2 w-full">
                    <div>
                        <h2 class="text-xl font-semibold text-textcolor dark:text-textcolor-dark mb-2">
                            Security Setting
                        </h2>
                        <p class="mb-4 text-textcolor-muted dark:text-textcolor-muted-dark leading-relaxed max-w-sm">
                            Password & Keamanan Akun
                        </p>
                    </div>
                    <div>
                        <form class="space-y-6">
                            <div>
                                <label class="block mb-2 text-sm text-textcolor dark:text-textcolor-dark">Old Password</label>
                                <input type="email" class="w-full px-4 py-3 rounded-xl text-textcolor dark:text-textcolor-dark border border-bordercolor dark:border-bordercolor-dark bg-background dark:bg-background-dark focus:border-brand-500 dark:focus:border-brand-500 focus:ring-2">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm text-textcolor dark:text-textcolor-dark">New Password</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl text-textcolor dark:text-textcolor-dark border border-bordercolor dark:border-bordercolor-dark bg-background dark:bg-background-dark focus:border-brand-500 dark:focus:border-brand-500 focus:ring-2">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm text-textcolor dark:text-textcolor-dark">Confirm New Password</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl text-textcolor dark:text-textcolor-dark border border-bordercolor dark:border-bordercolor-dark bg-background dark:bg-background-dark focus:border-brand-500 dark:focus:border-brand-500 focus:ring-2">
                            </div>
                            <div class="pt-6 flex justify-between">
                                <button class="px-10 py-3 bg-brand-500 text-white rounded-xl" data-modal-target="popup-modal" data-modal-toggle="popup-modal">Save</button>
                                <button type="button" onclick="openDeleteModal()" class="px-8 py-3 bg-red-600 text-white rounded-xl">Delete Account</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div id="popup-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50">
    <div class="bg-background p-6 rounded-xl max-w-md w-full text-center">
        <h3 class="mb-4 font-semibold">Masukkan Password</h3>
        <input type="password" id="deletePassword" class="w-full px-4 py-3 border rounded-xl mb-2">
        <div class="flex justify-center gap-4 mt-4">
            <button onclick="confirmDelete()" class="px-6 py-2 bg-red-600 text-white rounded-xl">
                Yes, Delete
            </button>
            <button onclick="closeDeleteModal()" class="px-6 py-2 border rounded-xl">Cancel</button>
        </div>
    </div>
</div>
<script>
  const tabs = ['profile', 'notif', 'security'];
  const storageKey = 'activeTabSettings';

  function setTab(tab) {
    localStorage.setItem(storageKey, tab);

    tabs.forEach(item => {
      document.getElementById('content-' + item).classList.add('hidden');

      const btn = document.getElementById('tab-' + item);
      if (btn) btn.classList.remove('bg-brand-500', 'text-white');
    });

    document.getElementById('content-' + tab).classList.remove('hidden');

    const activeBtn = document.getElementById('tab-' + tab);
    if (activeBtn) activeBtn.classList.add('bg-brand-500', 'text-white');

    const mobileSelect = document.getElementById('mobileTab');
    if (mobileSelect) mobileSelect.value = tab;
  }

  document.addEventListener('DOMContentLoaded', () => {
    const savedTab = localStorage.getItem(storageKey) || 'account';
    setTab(savedTab);
  });

// Pop Up Modal
const deleteModal = document.getElementById('popup-modal');
const deletePassword = document.getElementById('deletePassword');
const deleteError = document.getElementById('deleteError');

function openDeleteModal() {
  deleteModal.classList.remove('hidden');
}

function closeDeleteModal() {
  deleteModal.classList.add('hidden');
}

function confirmDelete() {
  if (deletePassword.value.length < 6) {
    deleteError.classList.remove('hidden');
    return;
  }

  deleteError.classList.add('hidden');
  alert("Akun berhasil dihapus (simulasi) ❌");
  closeDeleteModal();
}
</script>