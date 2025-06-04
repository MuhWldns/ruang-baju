<?php
$pageTitle = "Selamat Datang di Ruang Baju "; 
require_once 'header.php';


$json_file_path_index = 'produk.json';
$products_unggulan = [];
if (file_exists($json_file_path_index) && is_readable($json_file_path_index)) {
    $json_data_index = file_get_contents($json_file_path_index);
    $decoded_products_index = json_decode($json_data_index, true);
    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded_products_index)) {
        $products_unggulan = array_slice($decoded_products_index, 0, 3); 
    }
}
?>

<main class="flex-grow">

    <section class="relative text-white py-24 md:py-40 text-center bg-gray-700"
        style="background-image: url('https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">

        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-5 max-w-4xl relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                Temukan Gaya Terbaik Anda Bersama Kami
            </h1>
            <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto">
                Ruang Baju menghadirkan koleksi pakaian modern, minimalis, dan nyaman untuk setiap momen dan
                keseharian Anda.
            </p>
            <a href="products.php"
                class="inline-block bg-blue-500 text-white py-3 px-10 rounded-lg font-semibold hover:bg-blue-600 transition-all duration-150 ease-in-out text-lg transform hover:scale-105 shadow-md">
                Jelajahi Koleksi Sekarang
            </a>
        </div>
    </section>

    <section class="py-12 md:py-20 bg-slate-50">
        <div class="container mx-auto px-5 max-w-6xl">
            <h2 class="text-3xl font-bold text-slate-800 mb-12 text-center">Kategori Populer</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <a href="produk.php?kategori=Kemeja"
                    class="block bg-white rounded-xl shadow-lg overflow-hidden group transition-all duration-300 hover:shadow-2xl">
                    <div class="h-56 w-full overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Kemeja"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                    </div>
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-semibold text-slate-700 group-hover:text-blue-600 transition-colors">
                            Shirt</h3>
                    </div>
                </a>
                <a href="products.php?kategori=Gaun"
                    class="block bg-white rounded-xl shadow-lg overflow-hidden group transition-all duration-300 hover:shadow-2xl">
                    <div class="h-56 w-full overflow-hidden">
                        <img src="https://plus.unsplash.com/premium_photo-1675186049535-fd762eea0325?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Underwear"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                    </div>
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-semibold text-slate-700 group-hover:text-blue-600 transition-colors">
                            Underwear</h3>
                    </div>
                </a>
                <a href="products.php?kategori=Celana"
                    class="block bg-white rounded-xl shadow-lg overflow-hidden group transition-all duration-300 hover:shadow-2xl">
                    <div class="h-56 w-full overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                            alt="Celana"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                    </div>
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-semibold text-slate-700 group-hover:text-blue-600 transition-colors">
                            Celana</h3>
                    </div>
                </a>
                <a href="products.php?kategori=Outerwear"
                    class="block bg-white rounded-xl shadow-lg overflow-hidden group transition-all duration-300 hover:shadow-2xl">
                    <div class="h-56 w-full overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1636831990771-c70381797936?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Outerwear"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">

                    </div>
                    <div class="p-5 text-center">
                        <h3 class="text-xl font-semibold text-slate-700 group-hover:text-blue-600 transition-colors">
                            Outerwear</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-20">
        <div class="container mx-auto px-5 max-w-6xl">
            <h2 class="text-3xl font-bold text-slate-800 mb-12 text-center">Produk

                Pilihan Untuk Anda</h2>
            <?php if (!empty($products_unggulan)): ?>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($products_unggulan as $product_item): ?>
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col group transition-all duration-300 hover:shadow-2xl">
                    <a href="detail_product.php?id=<?php echo htmlspecialchars($product_item['id']); ?>"
                        class="block overflow-hidden h-72">

                        <?php if (!empty($product_item['gambarUrl']) && file_exists($product_item['gambarUrl'])): ?>
                        <img src="<?php echo htmlspecialchars($product_item['gambarUrl']); ?>"
                            alt="<?php echo htmlspecialchars($product_item['nama']); ?>"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <?php else: ?>
                        <div class="bg-gray-300 h-full w-full flex items-center justify-center text-gray-500">
                            <span>Gambar Segera Hadir</span>
                        </div>
                        <?php endif; ?>
                    </a>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3
                            class="text-xl font-semibold text-slate-700 mb-1 group-hover:text-blue-600 transition-colors">
                            <a
                                href="detail_product.php?id=<?php echo htmlspecialchars($product_item['id']); ?>"><?php echo htmlspecialchars($product_item['nama']); ?></a>
                        </h3>
                        <?php if (!empty($product_item['kategori'])): ?>
                        <p class="text-sm text-slate-500 mb-3">
                            <?php echo htmlspecialchars($product_item['kategori']); ?></p>
                        <?php endif; ?>
                        <p class="text-xl text-blue-600 font-semibold mb-4">Rp
                            <?php echo htmlspecialchars($product_item['harga']); ?></p>
                        <a href="detail_product.php?id=<?php echo htmlspecialchars($product_item['id']); ?>"
                            class="mt-auto w-full text-center bg-blue-500 text-white text-sm py-2.5 px-4 rounded-md hover:bg-blue-600 transition-colors font-medium">
                            Lihat Detail
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-16">
                <a href="products.php"
                    class="inline-block bg-slate-700 text-white py-3 px-10 rounded-lg font-semibold hover:bg-slate-800 transition-all duration-150 ease-in-out text-base">
                    Lihat Semua Produk
                </a>
            </div>
            <?php else: ?>
            <p class="text-center text-slate-500">Produk unggulan akan segera hadir.</p>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php
require_once 'footer.php';
?>