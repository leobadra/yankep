<div class="modal-overlay" id="passwordModal">
    <div class="modal-card">
        <button class="modal-close" id="closePwdModal" aria-label="Tutup">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <h3 class="modal-title">Ubah Password</h3>
        <p class="modal-desc">Silakan masukkan password lama pelindung akun Anda dan tentukan password baru.</p>
        
        <form id="pwdForm">
            <div class="form-group">
                <label class="form-label" for="oldPwd">Password Saat Ini</label>
                <div style="position: relative; display: flex; align-items: center;">
                    <input type="password" id="oldPwd" class="form-input" required placeholder="Masukkan password saat ini" style="padding-right: 2.5rem;">
                    <button type="button" class="eye-btn" data-target="oldPwd" aria-label="Tampilkan password" style="position: absolute; right: 10px; background: none; border: none; cursor: pointer; color: #94a3b8; display: flex;">
                        <svg class="eye-open" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        <svg class="eye-closed" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="newPwd">Password Baru</label>
                <div style="position: relative; display: flex; align-items: center;">
                    <input type="password" id="newPwd" class="form-input" required placeholder="Buat password baru" style="padding-right: 2.5rem;">
                    <button type="button" class="eye-btn" data-target="newPwd" aria-label="Tampilkan password" style="position: absolute; right: 10px; background: none; border: none; cursor: pointer; color: #94a3b8; display: flex;">
                        <svg class="eye-open" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        <svg class="eye-closed" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="confirmPwd">Konfirmasi Password</label>
                <div style="position: relative; display: flex; align-items: center;">
                    <input type="password" id="confirmPwd" class="form-input" required placeholder="Ketik ulang password baru" style="padding-right: 2.5rem;">
                    <button type="button" class="eye-btn" data-target="confirmPwd" aria-label="Tampilkan password" style="position: absolute; right: 10px; background: none; border: none; cursor: pointer; color: #94a3b8; display: flex;">
                        <svg class="eye-open" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        <svg class="eye-closed" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/></svg>
                    </button>
                </div>
                <div class="error-text" id="pwdError">Password tidak cocok atau salah</div>
            </div>
            
            <button type="submit" class="btn-submit" id="btnSubmitPwd">
                <span>Simpan Perubahan</span>
                <div class="spinner" id="pwdSpinner"></div>
            </button>
        </form>
    </div>
</div>

<div class="success-overlay" id="successPopup">
    <div class="success-card">
        <div class="success-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <h3 class="success-title">Berhasil Diubah!</h3>
        <p class="success-desc">Password Anda telah diperbarui. Anda akan dikeluarkan sebentar lagi untuk login dengan password baru.</p>
        <div class="spinner dark"></div>
    </div>
</div>