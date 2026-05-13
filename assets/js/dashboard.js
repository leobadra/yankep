 (function(){
        // === Avatar Popover ===
        var avatarBtn = document.getElementById('avatarBtn');
        var popover   = document.getElementById('avatarPopover');

        avatarBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            var isOpen = popover.classList.contains('show');
            popover.classList.toggle('show');
            avatarBtn.classList.toggle('active');
        });

        document.addEventListener('click', function(e) {
            if (!popover.contains(e.target) && e.target !== avatarBtn) {
                popover.classList.remove('show');
                avatarBtn.classList.remove('active');
            }
        });

        // === Dark Mode Toggle ===
        var darkItem   = document.getElementById('darkModeItem');
        var darkToggle = document.getElementById('darkToggle');
        var html       = document.documentElement;

        // Check stored preference
        if (localStorage.getItem('theme') === 'dark') {
            html.setAttribute('data-theme', 'dark');
            darkToggle.classList.add('on');
        }

        darkItem.addEventListener('click', function() {
            var isDark = html.getAttribute('data-theme') === 'dark';
            if (isDark) {
                html.setAttribute('data-theme', 'light');
                darkToggle.classList.remove('on');
                localStorage.setItem('theme', 'light');
            } else {
                html.setAttribute('data-theme', 'dark');
                darkToggle.classList.add('on');
                localStorage.setItem('theme', 'dark');
            }
        });

        // === Hamburger (Mobile) ===
        var hamburger = document.getElementById('hamburgerBtn');
        var sidebar   = document.getElementById('sidebar');

        hamburger.addEventListener('click', function() {
            sidebar.classList.toggle('open');
        });

        // === Password Modal ===
        var pwdTrigger = document.getElementById('changePwdTrigger');
        var pwdModal   = document.getElementById('passwordModal');
        var closePwd   = document.getElementById('closePwdModal');
        var pwdForm    = document.getElementById('pwdForm');
        var oldPwd     = document.getElementById('oldPwd');
        var newPwd     = document.getElementById('newPwd');
        var confirmPwd = document.getElementById('confirmPwd');
        var pwdError   = document.getElementById('pwdError');
        var btnSubmitPwd = document.getElementById('btnSubmitPwd');
        var pwdSpinner = document.getElementById('pwdSpinner');
        var successPopup = document.getElementById('successPopup');

        // === Fitur Toggle Tampilkan Password ===
        var eyeBtns = document.querySelectorAll('.eye-btn');
        eyeBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var targetId = this.getAttribute('data-target');
                var input = document.getElementById(targetId);
                var eyeOpen = this.querySelector('.eye-open');
                var eyeClosed = this.querySelector('.eye-closed');

                if (input.type === 'password') {
                    input.type = 'text';
                    eyeOpen.style.display = 'none';
                    eyeClosed.style.display = 'block';
                    this.style.color = '#6366f1'; // Ubah warna jadi ungu saat aktif
                } else {
                    input.type = 'password';
                    eyeOpen.style.display = 'block';
                    eyeClosed.style.display = 'none';
                    this.style.color = '#94a3b8'; // Kembali ke warna abu-abu
                }
            });
        });

        pwdTrigger.addEventListener('click', function() {
            popover.classList.remove('show');
            avatarBtn.classList.remove('active');
            pwdModal.classList.add('active');
        });

        closePwd.addEventListener('click', function() {
            pwdModal.classList.remove('active');
            pwdForm.reset();
            pwdError.style.display = 'none';
        });

        pwdForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            pwdError.style.display = 'none';
            oldPwd.classList.remove('input-error');
            confirmPwd.classList.remove('input-error');

            if (newPwd.value !== confirmPwd.value) {
                pwdError.textContent = 'Konfirmasi password tidak cocok.';
                pwdError.style.display = 'block';
                confirmPwd.classList.add('input-error');
                return;
            }

            btnSubmitPwd.disabled = true;
            btnSubmitPwd.querySelector('span').textContent = 'Memproses...';
            pwdSpinner.style.display = 'block';

            var formData = new FormData();
            formData.append('old_pwd', oldPwd.value);
            formData.append('new_pwd', newPwd.value);

            fetch('proses/change_password.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    pwdModal.classList.remove('active');
                    successPopup.classList.add('active');
                    setTimeout(() => {
                        window.location.href = 'proses/logout.php';

                    }, 3500);
                } else {
                    pwdError.textContent = data.message;
                    pwdError.style.display = 'block';
                    oldPwd.classList.add('input-error');
                    btnSubmitPwd.disabled = false;
                    btnSubmitPwd.querySelector('span').textContent = 'Simpan Perubahan';
                    pwdSpinner.style.display = 'none';
                }
            })
            .catch(err => {
                pwdError.textContent = 'Terjadi kesalahan sistem.';
                pwdError.style.display = 'block';
                btnSubmitPwd.disabled = false;
                btnSubmitPwd.querySelector('span').textContent = 'Simpan Perubahan';
                pwdSpinner.style.display = 'none';
            });
        });
    })();