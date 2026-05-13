document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card-unit');
    const noResults = document.getElementById('noResults');

    // Event listener saat user mengetik
    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase().trim();
        let hasVisibleCards = false;

        cards.forEach(card => {
            // Ambil kata kunci dari atribut data-name
            const cardName = card.getAttribute('data-name');
            
            // Logika pencarian: jika cocok, tampilkan. Jika tidak, sembunyikan.
            if (cardName.includes(searchTerm)) {
                card.style.display = 'flex';
                hasVisibleCards = true;
            } else {
                card.style.display = 'none';
            }
        });

        // Menampilkan pesan "Tidak ada unit" jika tidak ada kartu yang cocok
        if (!hasVisibleCards) {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }
    });

    /* ==================================================
       VIRTUAL MACOS SCROLLBAR LOGIC (OPTIMIZED FOR 60FPS)
       ================================================== */
    const scrollbar = document.createElement('div');
    scrollbar.id = 'macos-scrollbar';
    document.body.appendChild(scrollbar);

    let scrollTimeout;
    let ticking = false; // "Rem" untuk requestAnimationFrame

    function updateScrollbar() {
        const docHeight = document.documentElement.scrollHeight;
        const winHeight = window.innerHeight;

        // Jika halaman tidak bisa discroll, sembunyikan
        if (docHeight <= winHeight) {
            scrollbar.style.display = 'none';
            return;
        } else {
            scrollbar.style.display = 'block';
        }

        // Hitung tinggi scrollbar (dinamis)
        const scrollbarHeight = Math.max((winHeight / docHeight) * winHeight, 40);
        scrollbar.style.height = `${scrollbarHeight}px`;

        // Hitung posisi Y
        const scrollY = window.scrollY;
        const maxScrollY = docHeight - winHeight;
        const maxTop = winHeight - scrollbarHeight;
        const scrollbarTop = (scrollY / maxScrollY) * maxTop;

        // GANTI PENGGUNAAN 'top' DENGAN 'transform' (Diproses GPU = Super Smooth)
        scrollbar.style.transform = `translateY(${scrollbarTop}px)`;

        // Tampilkan scrollbar
        scrollbar.classList.add('show');

        // Hilangkan scrollbar setelah 1 detik tidak ada pergerakan
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            scrollbar.classList.remove('show');
        }, 1000);
    }

    // Gunakan requestAnimationFrame agar animasi menyesuaikan refresh rate monitor
    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                updateScrollbar();
                ticking = false;
            });
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true }); // passive: true membantu browser melakukan scroll native lebih cepat
    window.addEventListener('resize', onScroll);
    
    // Panggil sekali di awal untuk kalkulasi
    updateScrollbar();
});
