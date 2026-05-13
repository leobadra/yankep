<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

// Data User
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
    <title>Audit Handover | Tim Kerja Keperawatan</title>
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
            <div class="welcome-section" style="margin-bottom: 1rem;">
                <p class="welcome-greeting">Formulir Penilaian</p>
                <h1 class="welcome-name">Audit Handover</h1>
            </div>

            <?php include 'components/audit_table.php'; ?>
            
        </main>
    </div>

    <?php include 'components/modals.php'; ?>

    <script src="assets/js/dashboard.js"></script>

</body>
</html>