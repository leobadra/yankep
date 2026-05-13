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
});