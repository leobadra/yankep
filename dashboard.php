<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Data User (Didefinisikan di sini agar bisa dibaca oleh semua komponen)
$initials = strtoupper(substr($_SESSION['nama_lengkap'], 0, 1));
$nama     = htmlspecialchars($_SESSION['nama_lengkap']);
$jabatan  = htmlspecialchars($_SESSION['jabatan']);
$nip      = htmlspecialchars($_SESSION['nip']);
$unit     = htmlspecialchars($_SESSION['unit_kerja']);
?>
<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Tim Kerja Keperawatan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>

    <?php include 'components/sidebar.php'; ?>

    <div class="main-area">
        
        <?php include 'components/header.php'; ?>

        <main class="main-content">
            <div class="welcome-section">
                <p class="welcome-greeting">Selamat datang kembali</p>
                <h1 class="welcome-name"><?= $nama ?></h1>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon purple">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div class="stat-value">12</div>
                    <div class="stat-label">Total Personil</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon cyan">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    </div>
                    <div class="stat-value">1</div>
                    <div class="stat-label">Unit Kerja</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon green">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <div class="stat-value">
                        <span class="badge-active"><span class="badge-dot"></span> Aktif</span>
                    </div>
                    <div class="stat-label">Status Sistem</div>
                </div>
            </div>

            <div class="profile-card">
                <h3>Profil Anda</h3>
                <div class="profile-info">
                    <div class="info-item">
                        <span class="info-label">Nama Lengkap</span>
                        <span class="info-value"><?= $nama ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">NIP</span>
                        <span class="info-value"><?= $nip ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Jabatan</span>
                        <span class="info-value"><?= $jabatan ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Unit Kerja</span>
                        <span class="info-value"><?= $unit ?></span>
                    </div>
                </div>
            </div>

            <?php include 'components/audit_table.php'; ?>

        </main>
    </div>

    <?php include 'components/modals.php'; ?>

    <script src="assets/js/dashboard.js"></script>
  
</body>
</html>