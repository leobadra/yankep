<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Keperawatan | RS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/landingpage.css">
</head>
<body>

    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <header class="landing-header">
        <a href="#" class="brand-logo">
            <div class="brand-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
            </div>
            <div class="brand-text">
                <h1>Portal Keperawatan</h1>
                <p>Sistem Informasi Terpadu</p>
            </div>
        </a>
        <a href="login.php" class="login-btn">Masuk Sistem</a>
    </header>

    <section class="hero-section">
        <h2 class="hero-title">Pilih Unit Layanan Anda</h2>
        <p class="hero-subtitle">Silakan ketik nama ruangan atau pilih dari daftar di bawah ini untuk menuju dashboard ruangan masing-masing.</p>
        
        <div class="search-wrapper">
            <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="text" id="searchInput" class="search-input" placeholder="Cari unit atau ruangan (cth: IGD, IBS)..." autocomplete="off">
        </div>
    </section>

    <main class="container">
        <div class="grid-container" id="unitGrid">
            
            <a href="login.php" class="card-unit" data-name="timkeryankep">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3 class="card-title">Timkeryankep</h3>
            </a>

            <a href="login.php" class="card-unit" data-name="instalasi rawat inap">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </div>
                <h3 class="card-title">Instalasi Rawat Inap</h3>
            </a>

            <a href="login.php" class="card-unit" data-name="instalasi rawat jalan poliklinik">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <h3 class="card-title">Instalasi Rawat Jalan</h3>
            </a>

            <a href="login.php" class="card-unit" data-name="igd instalasi gawat darurat emergency">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
                <h3 class="card-title">IGD</h3>
            </a>

            <a href="login.php" class="card-unit" data-name="icu intensive care unit">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <h3 class="card-title">ICU</h3>
            </a>

            <a href="login.php" class="card-unit" data-name="ipt">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                </div>
                <h3 class="card-title">IPT</h3>
            </a>

            <a href="login.php" class="card-unit" data-name="ibs bedah sentral operasi">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="14.31" y1="8" x2="20.05" y2="17.94"/><line x1="9.69" y1="8" x2="21.17" y2="8"/><line x1="7.38" y1="12" x2="13.12" y2="2.06"/><line x1="9.69" y1="16" x2="3.95" y2="6.06"/><line x1="14.31" y1="16" x2="2.83" y2="16"/><line x1="16.62" y1="12" x2="10.88" y2="21.94"/></svg>
                </div>
                <h3 class="card-title">IBS</h3>
            </a>

            <div id="noResults" class="no-results">
                Tidak ada unit yang cocok dengan pencarian Anda.
            </div>

        </div>
    </main>

    <script src="assets/js/landingpage.js"></script>
</body>
</html>