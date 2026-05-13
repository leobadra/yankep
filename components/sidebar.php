<?php
// Mendapatkan nama file yang sedang dibuka (contoh: dashboard.php atau audit_handover.php)
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
        </div>
        <div class="sidebar-brand">
            Timkeryankep
            <small>Sistem Informasi</small>
        </div>
    </div>

    <nav class="sidebar-nav">
        <p class="nav-label">Menu Utama</p>
        
        <a class="nav-item <?= ($currentPage == 'dashboard.php') ? 'active' : '' ?>" href="dashboard.php">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7" rx="1"/>
                <rect x="14" y="3" width="7" height="7" rx="1"/>
                <rect x="3" y="14" width="7" height="7" rx="1"/>
                <rect x="14" y="14" width="7" height="7" rx="1"/>
            </svg>
            Dashboard
        </a>

        <a class="nav-item <?= ($currentPage == 'audit_handover.php') ? 'active' : '' ?>" href="audit_handover.php">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            Audit Handover
        </a>
    </nav>

    <div class="sidebar-footer">
        <div class="sidebar-user">
            <div class="sidebar-avatar-sm"><?= $initials ?></div>
            <div class="sidebar-user-info">
                <div class="sidebar-user-name"><?= $nama ?></div>
                <div class="sidebar-user-role"><?= $jabatan ?></div>
            </div>
        </div>
    </div>
</aside>