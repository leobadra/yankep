<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halaman Login - Tim Kerja Pelayanan Keperawatan">
    <title>Login | Tim Kerja Pelayanan Keperawatan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

    <!-- Floating Orbs Background -->
    <div class="bg-orbs">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
        <div class="orb orb-4"></div>
    </div>

    <!-- ============ POPUP OVERLAY ============ -->
    <div class="popup-overlay" id="popupOverlay">
        <!-- Success Popup -->
        <div class="popup-card popup-success" id="popupSuccess">
            <div class="popup-icon-ring">
                <svg class="popup-checkmark" viewBox="0 0 52 52">
                    <circle class="checkmark-circle" cx="26" cy="26" r="24" fill="none"/>
                    <path class="checkmark-check" fill="none" d="M14 27l7.8 7.8L38 17"/>
                </svg>
            </div>
            <h3 class="popup-title" id="popupTitle">Login Berhasil!</h3>
            <p class="popup-message" id="popupMessage">Selamat datang kembali</p>
            <div class="popup-user-badge" id="popupUserBadge">
                <span class="popup-user-name" id="popupUserName"></span>
                <span class="popup-user-role" id="popupUserRole"></span>
            </div>
            <div class="popup-redirect">
                <div class="popup-loader"></div>
                <span>Mengalihkan ke dashboard...</span>
            </div>
        </div>

        <!-- Error Popup -->
        <div class="popup-card popup-error" id="popupError">
            <div class="popup-icon-ring popup-icon-error">
                <svg viewBox="0 0 52 52" width="52" height="52">
                    <circle cx="26" cy="26" r="24" fill="none" stroke="#ef4444" stroke-width="2.5"/>
                    <line x1="18" y1="18" x2="34" y2="34" stroke="#ef4444" stroke-width="3" stroke-linecap="round"/>
                    <line x1="34" y1="18" x2="18" y2="34" stroke="#ef4444" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>
            <h3 class="popup-title popup-title-error">Login Gagal</h3>
            <p class="popup-message" id="popupErrorMessage">NIP atau Password salah</p>
            <button class="popup-btn-close" id="popupCloseBtn" type="button">Coba Lagi</button>
        </div>
    </div>

    <div class="login-container">
        <!-- Left Panel - Branding -->
        <div class="login-branding">
            <div class="branding-content">
                <h1 class="branding-title">Tim Kerja<br>Pelayanan Keperawatan</h1>
                <p class="branding-subtitle">Sistem Informasi Manajemen Keperawatan</p>
                <div class="branding-features">
                    <div class="feature-item">
                        <span class="feature-dot"></span>
                        <span>Manajemen Data Personil</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-dot"></span>
                        <span>Laporan Terintegrasi</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-dot"></span>
                        <span>Monitoring Real-time</span>
                    </div>
                </div>
            </div>
            <p class="branding-footer">&copy; 2026 Timkeryankep. All rights reserved.</p>
        </div>

        <!-- Right Panel - Login Form -->
        <div class="login-form-panel">
            <div class="form-wrapper">
                <div class="form-header">
                    <h2 class="form-title">Selamat Datang</h2>
                    <p class="form-desc">Silakan masuk ke akun Anda untuk melanjutkan</p>
                </div>

                <form id="loginForm" method="POST" action="proses/login_process.php">
                    <div class="input-group">
                        <label for="nip" class="input-label">NIP</label>
                        <div class="input-wrapper">
                            <svg class="input-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            <input type="text" id="nip" name="nip" placeholder="Masukkan NIP Anda" required autocomplete="username">
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="password" class="input-label">Password</label>
                        <div class="input-wrapper">
                            <svg class="input-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            <input type="password" id="password" name="password" placeholder="Masukkan password" required autocomplete="current-password">
                            <button type="button" class="eye-toggle" id="eyeToggle" aria-label="Tampilkan password">
                                <svg class="eye-open" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                <svg class="eye-closed" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="display:none">
                                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/>
                                    <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/>
                                    <line x1="1" y1="1" x2="23" y2="23"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="checkbox-wrapper" for="remember">
                            <input type="checkbox" id="remember" name="remember">
                            <span class="checkmark"></span>
                            <span class="checkbox-label">Ingat saya</span>
                        </label>
                        <a href="#" class="forgot-link">Lupa password?</a>
                    </div>

                    <button type="submit" id="loginBtn" class="btn-login">
                        <span class="btn-text">Masuk</span>
                        <span class="btn-spinner" id="btnSpinner"></span>
                        <svg class="btn-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"/>
                            <polyline points="12 5 19 12 12 19"/>
                        </svg>
                    </button>
                </form>

                <div class="form-divider">
                    <span>atau</span>
                </div>

                <button class="btn-guest" type="button">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                        <polyline points="10 17 15 12 10 7"/>
                        <line x1="15" y1="12" x2="3" y2="12"/>
                    </svg>
                    Masuk sebagai Tamu
                </button>

                <p class="form-hint">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                    Password default: gunakan NIP Anda
                </p>
            </div>
        </div>
    </div>

   
   <script src="assets/js/login.js"></script>

</body>
</html>
