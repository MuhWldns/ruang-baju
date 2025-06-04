<?php
$pageTitle = "Tentang Kami"; 
require_once 'header.php';
?>

<main class="flex-grow py-12 md:py-16 bg-slate-50">
    <div class="container mx-auto px-5 max-w-4xl">
        <header class="text-center mb-12 md:mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800">Tentang Kami</h1>
            <p class="text-lg text-slate-600 mt-3 max-w-2xl mx-auto">Memahami bagaimana kami membantu Anda tampil lebih
                stylish dengan desain yang tepat.</p>
        </header>

        <article
            class="bg-white p-8 md:p-12 rounded-xl shadow-xl prose prose-lg max-w-none prose-headings:font-semibold prose-headings:text-blue-600 prose-a:text-blue-500 hover:prose-a:text-blue-600">

            <h2>Misi Kami: Gaya Simpel, Kesan Maksimal</h2>
            <p>Ruang-Baju hadir sebagai sebuah langkah untuk membantu anak muda Indonesia menemukan versi terbaik diri
                mereka, menjadi lebih menarik dengan penampilan yang lebih stylish. Kami memahami bahwa gaya adalah
                bagian penting dari ekspresi diri, terutama bagi kaum milenial yang dinamis.</p>

            <h2 class="mt-10">Desain yang Membedakan</h2>
            <p>Di tengah maraknya pilihan pakaian yang terkadang desainnya terlalu biasa atau justru berlebihan,
                Ruang-baju mengambil jalur berbeda. Kami fokus menciptakan desain pakaian yang mengusung konsep
                kesederhanaan (simple) namun dirancang secara cermat untuk memberikan kesan stylish yang kuat saat
                dikenakan.</p>
            <p>Kami percaya bahwa tampil menarik tidak selalu berarti rumit. Desain kami yang simpel namun penuh
                pertimbangan detail memastikan setiap helai pakaian NOILAFARI terlihat pas, modern, dan meningkatkan
                kepercayaan diri pemakainya tanpa terkesan memaksa.</p>

            <h2 class="mt-10">Untuk Anda, Generasi Stylish</h2>
            <p>Ruang Baju didedikasikan untuk Anda yang menghargai desain yang cerdas – pakaian yang mudah
                dipadupadankan, nyaman dipakai sepanjang hari, dan yang terpenting, membuat Anda terlihat dan merasa
                lebih baik. Kami ingin menjadi bagian dari perjalanan gaya Anda, menawarkan solusi pakaian yang simpel
                namun tetap stylish.</p>

            <div class="mt-12 text-center not-prose">
                <a href="products.php"
                    class="inline-block bg-blue-500 text-white py-3 px-8 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors text-base">
                    Lihat Koleksi
                </a>
            </div>
        </article>
    </div>
</main>

<?php
require_once 'footer.php';
?>