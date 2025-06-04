<?php

?>
<footer class="bg-gray-100 text-gray-500 text-center py-8 mt-auto text-sm">
    <div class="container mx-auto px-5 max-w-6xl">
        <p>&copy; <span id="currentYear"></span> Ruang Baju.</p>
    </div>
</footer>

<script>
document.getElementById('currentYear').textContent = new Date().getFullYear();

// Menandai link navigasi aktif berdasarkan URL halaman saat ini
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.main-nav a.nav-link');
    // Mendapatkan nama file dari URL saat ini (misalnya, "index.php", "produk.php")
    // Jika Anda menjalankan di root (misal, localhost/index.php atau domain.com/), currentPage bisa jadi "" untuk index.php
    // atau nama filenya langsung jika bukan di root (misal, localhost/folder/index.php -> index.php)
    let currentPage = window.location.pathname.substring(window.location.pathname.lastIndexOf('/') + 1);
    if (currentPage === "") { // Jika di root, anggap sebagai index.php
        currentPage = "index.php";
    }


    navLinks.forEach(link => {
        link.classList.remove('text-blue-500', 'border-blue-500',
            'border-b-2'); // Hapus kelas aktif dari semua
        link.classList.add('text-gray-700'); // Kembalikan ke warna default

        const linkPage = link.getAttribute('href');

        // Jika nama file sama
        if (linkPage === currentPage) {
            link.classList.remove('text-gray-700');
            link.classList.add('text-blue-500', 'border-b-2', 'border-blue-500');
        }
    });
});
</script>
</body>

</html>