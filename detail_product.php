<?php
$productId = isset($_GET['id']) ? $_GET['id'] : null;
$product = null;
$pageTitle = "Detail Produk"; // Judul default

if ($productId) {
    $json_file_path = 'produk.json';
    if (file_exists($json_file_path) && is_readable($json_file_path)) {
        $json_data = file_get_contents($json_file_path);
        $products_array = json_decode($json_data, true);

        if (json_last_error() === JSON_ERROR_NONE && is_array($products_array)) {
            foreach ($products_array as $p) {
                if (isset($p['id']) && $p['id'] === $productId) {
                    $product = $p;
                    $pageTitle = htmlspecialchars($product['nama']); 
                    break;
                }
            }
        } else {
            error_log("Error decoding JSON for product detail: " . json_last_error_msg());
        }
    } else {
        error_log("Product JSON file not found or not readable for product detail.");
    }
}

require_once 'header.php'; 
?>

<main class="flex-grow py-12 md:py-16">
    <div class="container mx-auto px-5 max-w-5xl">
        <?php if ($product): ?>
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-start">
            <div class="product-image">
                <?php if (!empty($product['gambarUrl']) && file_exists($product['gambarUrl'])): ?>
                <img src="<?php echo htmlspecialchars($product['gambarUrl']); ?>"
                    alt="<?php echo htmlspecialchars($product['nama']); ?>"
                    class="w-full h-auto object-cover rounded-xl shadow-lg">
                <?php else: ?>
                <div
                    class="w-full h-96 bg-gray-300 rounded-xl shadow-lg flex items-center justify-center text-gray-500">
                    <span>Gambar tidak tersedia</span>
                </div>
                <?php endif; ?>
            </div>

            <div class="product-details">
                <h1 class="text-3xl lg:text-4xl font-bold text-slate-800 mb-3">
                    <?php echo htmlspecialchars($product['nama']); ?></h1>

                <?php if (!empty($product['kategori'])): ?>
                <p class="text-sm text-slate-500 mb-4">Kategori:
                    <a href="produk.php?kategori=<?php echo urlencode($product['kategori']); ?>"
                        class="text-blue-500 hover:text-blue-700">
                    </a>
                    <?php echo htmlspecialchars($product['kategori']); ?>
                </p>
                <?php endif; ?>

                <p class="text-3xl text-blue-600 font-semibold mb-6">Rp
                    <?php echo htmlspecialchars($product['harga']); ?></p>

                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-slate-700 mb-2">Deskripsi Produk</h2>
                    <div class="text-slate-600 leading-relaxed prose prose-sm max-w-none">
                        <?php echo nl2br(htmlspecialchars($product['deskripsi']));  ?>
                    </div>
                </div>

                <div class="mt-8">
                    <button type="button"
                        class="w-full bg-blue-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors text-base">
                        <a href="products.php"> Kembali ke Koleksi Produk</a>
                    </button>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="text-center py-10">
            <h1 class="text-3xl font-bold text-slate-700 mb-4">Produk Tidak Ditemukan</h1>
            <p class="text-slate-600 mb-6">Maaf, produk yang Anda cari tidak dapat ditemukan.</p>
            <a href="products.php"
                class="inline-block bg-blue-500 text-white py-2 px-6 rounded-md font-medium hover:bg-blue-600 transition-colors">
                Kembali ke Koleksi Produk
            </a>
        </div>
        <?php endif; ?>
    </div>
</main>

<?php
require_once 'footer.php';
?>