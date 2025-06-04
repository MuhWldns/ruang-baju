<?php
$pageTitle = "Hubungi Kami"; // Judul spesifik untuk halaman kontak
require_once 'header.php';
?>

<main class="flex-grow py-12 md:py-16">
    <div class="container mx-auto px-5 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-800">Hubungi Kami</h1>
            <p class="text-lg text-slate-600 mt-2">Tulis keluh kesah anda disini, kamu siap membantu
            </p>
        </header>

        <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-start">
            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h2 class="text-2xl font-semibold text-blue-600 mb-6 border-b pb-3 border-gray-200">Informasi Kontak
                </h2>

                <div class="space-y-4 text-slate-700">
                    <div>
                        <h3 class="text-md font-semibold text-slate-500 uppercase tracking-wider">Email</h3>
                        <a href="mailto:info@ruangbaju.com"
                            class="text-blue-500 hover:text-blue-700 text-lg transition-colors">info@ruangbaju.com</a>
                    </div>

                    <div>
                        <h3 class="text-md font-semibold text-slate-500 uppercase tracking-wider">Telepon</h3>
                        <a href="#" class="text-blue-500 hover:text-blue-700 text-lg transition-colors">+62 123 4567
                            890</a>
                    </div>

                    <div>
                        <h3 class="text-md font-semibold text-slate-500 uppercase tracking-wider">Alamat</h3>
                        <p class="text-lg">Jl. Banyak Jalan<br>Kota Modern, Kode Pos 56789<br>Indonesia</p>
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-gray-200">
                    <h3 class="text-md font-semibold text-slate-500 uppercase tracking-wider mb-3">Media Sosial</h3>
                    <div class="flex space-x-4">
                        <a href="#" aria-label="Facebook Ruang Baju"
                            class="text-blue-500 hover:text-blue-700 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram Ruang Baju"
                            class="text-blue-500 hover:text-blue-700 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.048-1.024-.06-1.378-.06-3.808s.012-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.48 2.525c.636-.247 1.363-.416 2.427-.465C8.93 2.013 9.284 2 11.715 2h.6zm-.6 2.177c-2.367 0-2.673.009-3.617.052a2.731 2.731 0 00-1.846.677 2.731 2.731 0 00-.677 1.846c-.043.944-.052 1.25-.052 3.617s.009 2.673.052 3.617a2.731 2.731 0 00.677 1.846 2.731 2.731 0 001.846.677c.944.043 1.25.052 3.617.052s2.673-.009 3.617-.052a2.731 2.731 0 001.846-.677 2.731 2.731 0 00.677-1.846c.043-.944.052-1.25.052-3.617s-.009-2.673-.052-3.617a2.731 2.731 0 00-.677-1.846 2.731 2.731 0 00-1.846-.677c-.944-.043-1.25-.052-3.617-.052zM12 6.865a5.135 5.135 0 100 10.27 5.135 5.135 0 000-10.27zM12 15a3 3 0 110-6 3 3 0 010 6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Twitter Ruang Baju"
                            class="text-blue-500 hover:text-blue-700 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.255 2.25H4.68l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-lg">
                <h2 class="text-2xl font-semibold text-blue-600 mb-6 border-b pb-3 border-gray-200">Kirim Pesan Langsung
                </h2>
                <form action="#" method="POST" class="space-y-5">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-slate-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" autocomplete="name"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            required placeholder="Nama Anda">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Alamat Email</label>
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            required placeholder="email@contoh.com">
                    </div>
                    <div>
                        <label for="subjek" class="block text-sm font-medium text-slate-700 mb-1">Subjek</label>
                        <input type="text" name="subjek" id="subjek"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            required placeholder="Subjek pesan Anda">
                    </div>
                    <div>
                        <label for="pesan" class="block text-sm font-medium text-slate-700 mb-1">Pesan Anda</label>
                        <textarea name="pesan" id="pesan" rows="5"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            required placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-blue-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors text-base">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>

<?php
require_once 'footer.php';
?>