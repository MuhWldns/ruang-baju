<?php
// Path ke file JSON
$json_file_path = 'produk.json';
$products = []; 

// Cek apakah file JSON ada dan bisa dibaca
if (file_exists($json_file_path) && is_readable($json_file_path)) {
    $json_data = file_get_contents($json_file_path);
    $decoded_products = json_decode($json_data, true);

    
    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded_products)) {
        $products = $decoded_products;
    } else {
       echo "Terjadi kesalahan saat memuat data produk. Silakan periksa format JSON.";
    }
} else {
    error_log("Product JSON file not found or not readable at: " . $json_file_path);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Koleksi Produk - Ruang Baju </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-slate-800 font-sans leading-relaxed flex flex-col min-h-screen">

    <?php
    require_once 'header.php'; 
    ?>

    <main class="flex-grow py-12">
        <div class="container mx-auto px-5 max-w-6xl">
            <h1 class="text-4xl font-bold text-slate-800 mb-10 text-center">Koleksi Produk Kami</h1>

            <?php if (!empty($products)): ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($products as $product): ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <?php if (!empty($product['gambarUrl']) && file_exists($product['gambarUrl'])): ?>
                    <img src="<?php echo htmlspecialchars($product['gambarUrl']); ?>"
                        alt="<?php echo htmlspecialchars($product['nama']); ?>" class="h-64 w-full object-cover">
                    <?php else: ?>
                    <div class="bg-gray-300 h-64 w-full flex items-center justify-center text-gray-500">
                        <span>Gambar tidak tersedia</span>
                    </div>
                    <?php endif; ?>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-semibold text-slate-700 mb-2">
                            <?php echo htmlspecialchars($product['nama']); ?></h3>
                        <p class="text-lg text-blue-600 font-medium mb-4">Rp
                            <?php echo htmlspecialchars($product['harga']); ?></p>
                        <p class="text-slate-600 text-sm mb-4 flex-grow">
                            <?php echo htmlspecialchars($product['deskripsi']); ?></p>
                        <a href="detail_product.php?id=<?php echo htmlspecialchars($product['id']); ?>"
                            class="mt-auto inline-block bg-blue-500 text-white text-center text-sm py-2 px-4 rounded-md hover:bg-blue-600 transition-colors">

                            Lihat Detail
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <p class="text-center text-slate-500 col-span-full">Tidak ada produk untuk ditampilkan saat ini atau terjadi
                kesalahan saat memuat data produk.</p>
            <?php endif; ?>
        </div>
    </main>

    <?php 
    require_once 'footer.php';
    ?>

    <script>
    document.getElementById('currentYear').textContent = new Date().getFullYear();


    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.main-nav a.nav-link');
        navLinks.forEach(link => {
            link.classList.remove('text-blue-500', 'border-blue-500',
                'border-b-2');
            link.classList.add('text-gray-700');

            if (link.getAttribute('href') === 'produk.php') {
                link.classList.remove('text-gray-700');
                link.classList.add('text-blue-500', 'border-b-2',
                    'border-blue-500');
            }
        });
    });
    </script>

</body>

</html>