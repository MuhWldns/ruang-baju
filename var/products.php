<?php

$selected_category = null;
if (isset($_GET['kategori']) && !empty(trim($_GET['kategori']))) {
    $selected_category = urldecode(trim($_GET['kategori']));
}


$pageTitle = "Koleksi Produk";
$page_main_title = "Koleksi Produk Kami";

if ($selected_category) {
    $pageTitle = "Kategori: " . htmlspecialchars($selected_category);
    $page_main_title = "Kategori: " . htmlspecialchars($selected_category);
}

require_once 'header.php';


$json_file_path = 'produk.json';
$all_products = [];
$products_to_display = [];

if (file_exists($json_file_path) && is_readable($json_file_path)) {
    $json_data = file_get_contents($json_file_path);
    $decoded_products = json_decode($json_data, true);
    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded_products)) {
        $all_products = $decoded_products;
    }
}

if ($selected_category && !empty($all_products)) {
    foreach ($all_products as $product_item) {
        if (isset($product_item['kategori']) && strtolower($product_item['kategori']) === strtolower($selected_category)) { 
            $products_to_display[] = $product_item;
        }
    }
} else {
    $products_to_display = $all_products;
}
?>

<main class="flex-grow py-12">
    <div class="container mx-auto px-5 max-w-6xl">

        <nav aria-label="Breadcrumb" class="mb-8 text-sm text-slate-600">
            <ol class="list-none p-0 inline-flex space-x-1.5 items-center">
                <li class="flex items-center">
                    <a href="index.php" class="hover:text-blue-500 hover:underline">Home</a>
                </li>
                <li class="flex items-center">
                    <svg class="w-3 h-3 text-slate-400 mx-1.5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <?php if ($selected_category): ?>
                    <a href="products.php" class="hover:text-blue-500 hover:underline">Koleksi</a>
                    <?php else: ?>
                    <span class="font-medium text-slate-700">Koleksi</span> <?php endif; ?>
                </li>
                <?php if ($selected_category): ?>
                <li class="flex items-center">
                    <svg class="w-3 h-3 text-slate-400 mx-1.5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="font-medium text-slate-700"><?php echo htmlspecialchars($selected_category); ?></span>
                </li>
                <?php endif; ?>
            </ol>
        </nav>
        <h1 class="text-3xl md:text-4xl font-bold text-slate-800 mb-10 text-center">
            <?php echo htmlspecialchars($page_main_title); ?></h1>

        <?php if (!empty($products_to_display)): ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($products_to_display as $product): ?>
            <div
                class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col group transition-all duration-300 hover:shadow-2xl">
                <a href="detail_product.php?id=<?php echo htmlspecialchars($product['id']); ?>"
                    class="block overflow-hidden h-72">
                    <?php if (!empty($product['gambarUrl']) && file_exists($product['gambarUrl'])): ?>
                    <img src="<?php echo htmlspecialchars($product['gambarUrl']); ?>"
                        alt="<?php echo htmlspecialchars($product['nama']); ?>"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <?php else: ?>
                    <div class="bg-gray-300 h-full w-full flex items-center justify-center text-gray-500">
                        <span>Gambar Segera Hadir</span>
                    </div>
                    <?php endif; ?>
                </a>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-semibold text-slate-700 mb-1 group-hover:text-blue-600 transition-colors">
                        <a
                            href="detail_product.php?id=<?php echo htmlspecialchars($product['id']); ?>"><?php echo htmlspecialchars($product['nama']); ?></a>
                    </h3>
                    <?php if (!empty($product['kategori'])): ?>
                    <p class="text-sm text-slate-500 mb-3"><?php echo htmlspecialchars($product['kategori']); ?></p>
                    <?php endif; ?>
                    <p class="text-xl text-blue-600 font-semibold mb-4">Rp
                        <?php echo htmlspecialchars($product['harga']); ?></p>
                    <a href="detail_product.php?id=<?php echo htmlspecialchars($product['id']); ?>"
                        class="mt-auto w-full text-center bg-blue-500 text-white text-sm py-2.5 px-4 rounded-md hover:bg-blue-600 transition-colors font-medium">
                        Lihat Detail
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="text-center py-10 bg-white rounded-xl shadow-lg">
            <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                aria-hidden="true">
                <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
            </svg>
            <h3 class="mt-2 text-lg font-medium text-slate-800">
                <?php if ($selected_category): ?>
                Produk Tidak Ditemukan
                <?php else: ?>
                Belum Ada Produk
                <?php endif; ?>
            </h3>
            <p class="mt-1 text-sm text-slate-500">
                <?php if ($selected_category): ?>
                Maaf, tidak ada produk yang ditemukan untuk kategori
                "<?php echo htmlspecialchars($selected_category); ?>".
                <?php else: ?>
                Silakan cek kembali nanti atau hubungi kami jika ada pertanyaan.
                <?php endif; ?>
            </p>
            <?php if ($selected_category): ?>
            <div class="mt-6">
                <a href="products.php"
                    class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Lihat Semua Koleksi
                </a>
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</main>

<?php
require_once 'footer.php';
?>