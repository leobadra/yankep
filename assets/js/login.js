document.addEventListener('DOMContentLoaded', function () {
        const form          = document.getElementById('loginForm');
        const btn           = document.getElementById('loginBtn');
        const btnText       = btn.querySelector('.btn-text');
        const btnArrow      = btn.querySelector('.btn-arrow');
        const btnSpinner    = document.getElementById('btnSpinner');
        const overlay       = document.getElementById('popupOverlay');
        const popupSuccess  = document.getElementById('popupSuccess');
        const popupError    = document.getElementById('popupError');
        const closeBtn      = document.getElementById('popupCloseBtn');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Loading state
            btn.classList.add('loading');
            btn.disabled = true;
            btnText.textContent = 'Memproses...';
            btnArrow.style.display = 'none';
            btnSpinner.style.display = 'inline-block';

            const formData = new FormData(form);

            fetch('proses/login_process.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                // Reset button
                btn.classList.remove('loading');
                btn.disabled = false;
                btnText.textContent = 'Masuk';
                btnArrow.style.display = '';
                btnSpinner.style.display = 'none';

                if (data.success) {
                    // Show success popup
                    document.getElementById('popupUserName').textContent = data.user.nama;
                    document.getElementById('popupUserRole').textContent = data.user.jabatan;
                    popupSuccess.style.display = 'flex';
                    popupError.style.display   = 'none';
                    overlay.classList.add('active');

                    // Redirect after 2.5 seconds
                    setTimeout(function () {
                        window.location.href = 'dashboard.php';
                    }, 2500);
                } else {
                    // Show error popup
                    document.getElementById('popupErrorMessage').textContent = data.message;
                    popupError.style.display   = 'flex';
                    popupSuccess.style.display = 'none';
                    overlay.classList.add('active');
                }
            })
            .catch(function () {
                btn.classList.remove('loading');
                btn.disabled = false;
                btnText.textContent = 'Masuk';
                btnArrow.style.display = '';
                btnSpinner.style.display = 'none';

                document.getElementById('popupErrorMessage').textContent = 'Terjadi kesalahan koneksi ke server';
                popupError.style.display   = 'flex';
                popupSuccess.style.display = 'none';
                overlay.classList.add('active');
            });
        });

        // Close error popup
        closeBtn.addEventListener('click', function () {
            overlay.classList.remove('active');
        });

        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                overlay.classList.remove('active');
            }
        });

        // Toggle password visibility
        var eyeToggle = document.getElementById('eyeToggle');
        var pwField   = document.getElementById('password');
        eyeToggle.addEventListener('click', function () {
            var isPassword = pwField.type === 'password';
            pwField.type = isPassword ? 'text' : 'password';
            eyeToggle.querySelector('.eye-open').style.display  = isPassword ? 'none' : 'block';
            eyeToggle.querySelector('.eye-closed').style.display = isPassword ? 'block' : 'none';
        });
    });