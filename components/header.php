<header class="navbar">
    <div style="display:flex;align-items:center;gap:0.75rem">
        <button class="hamburger" id="hamburgerBtn" aria-label="Toggle sidebar">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
        <div class="navbar-left">
            <h2>Dashboard</h2>
        </div>
    </div>
    <div class="navbar-right">
        <button class="nav-bell" aria-label="Notifikasi">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
            </svg>
        </button>
        <div style="position:relative;">
            <button class="avatar-btn" id="avatarBtn" aria-label="Menu pengguna"><?= $initials ?></button>

            <div class="popover" id="avatarPopover">
                <div class="popover-header">
                    <div class="popover-name"><?= $nama ?></div>
                    <div class="popover-email">NIP: <?= $nip ?></div>
                </div>
                <div class="popover-body">
                    <div class="popover-item popover-item-toggle" id="darkModeItem">
                        <span class="toggle-left">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                            </svg>
                            Mode Gelap
                        </span>
                        <span class="toggle-switch" id="darkToggle"></span>
                    </div>
                    <button class="popover-item" id="changePwdTrigger">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                        Ubah Password
                    </button>
                </div>
                <div class="popover-footer">
                    <a class="popover-item danger" href="proses/logout.php">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                            <polyline points="16 17 21 12 16 7"/>
                            <line x1="21" y1="12" x2="9" y2="12"/>
                        </svg>
                        Keluar
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>