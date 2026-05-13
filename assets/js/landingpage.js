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
       VIRTUAL MACOS SCROLLBAR LOGIC
       ================================================== */
    // 1. Buat elemen scrollbar dan masukkan ke body
    const scrollbar = document.createElement('div');
    scrollbar.id = 'macos-scrollbar';
    document.body.appendChild(scrollbar);

    let scrollTimeout;

    function updateScrollbar() {
        const docHeight = document.documentElement.scrollHeight;
        const winHeight = window.innerHeight;

        // Jika halaman tidak panjang (tidak butuh scroll), sembunyikan
        if (docHeight <= winHeight) {
            scrollbar.style.display = 'none';
            return;
        } else {
            scrollbar.style.display = 'block';
        }

        // Hitung tinggi scrollbar (dinamis sesuai panjang konten, minimal 40px)
        const scrollbarHeight = Math.max((winHeight / docHeight) * winHeight, 40);
        scrollbar.style.height = `${scrollbarHeight}px`;

        // Hitung posisi Y (turun/naik)
        const scrollY = window.scrollY;
        const maxScrollY = docHeight - winHeight;
        const maxTop = winHeight - scrollbarHeight;
        const scrollbarTop = (scrollY / maxScrollY) * maxTop;

        scrollbar.style.top = `${scrollbarTop}px`;

        // Tampilkan scrollbar (Animasi Smooth Fade-In)
        scrollbar.classList.add('show');

        // Hilangkan scrollbar setelah 1 detik tidak ada pergerakan (Smooth Fade-Out)
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            scrollbar.classList.remove('show');
        }, 1000);
    }

    // Picu fungsi saat user melakukan scroll atau mengubah ukuran layar
    window.addEventListener('scroll', updateScrollbar);
    window.addEventListener('resize', updateScrollbar);
    
    // Panggil sekali di awal untuk kalkulasi
    updateScrollbar();
});
