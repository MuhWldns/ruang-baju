<?php

$defaultTitle = "Ruang Baju";
$currentPageTitle = isset($pageTitle) ? htmlspecialchars($pageTitle) . " - " . $defaultTitle : $defaultTitle;
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?php echo $currentPageTitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-slate-800 font-sans leading-relaxed flex flex-col min-h-screen">

    <header class="bg-white py-4 border-b border-gray-200 sticky top-0 z-50">
        <div class="container mx-auto px-5 max-w-6xl flex justify-between items-center">
            <a href="index.php" class="text-2xl md:text-3xl font-semibold text-blue-600">
                Ruang Baju
            </a>

            <nav class="main-nav hidden md:flex md:items-center">
                <ul class="flex flex-row items-center space-x-6">
                    <li><a href="index.php"
                            class="nav-link text-gray-700 font-medium pb-1 hover:text-blue-500 hover:border-b-2 hover:border-blue-500">Beranda</a>
                    </li>
                    <li><a href="products.php"
                            class="nav-link text-gray-700 font-medium pb-1 hover:text-blue-500 hover:border-b-2 hover:border-blue-500">Koleksi</a>
                    </li>
                    <li><a href="tentang.php"
                            class="nav-link text-gray-700 font-medium pb-1 hover:text-blue-500 hover:border-b-2 hover:border-blue-500">Tentang</a>
                    </li>
                    <li><a href="contact.php"
                            class="nav-link text-gray-700 font-medium pb-1 hover:text-blue-500 hover:border-b-2 hover:border-blue-500">Kontak</a>
                    </li>
                </ul>
            </nav>

            <div class="md:hidden">
                <button id="burger-menu-button" type="button"
                    class="text-gray-700 hover:text-blue-500 focus:outline-none p-2">
                    <svg id="burger-icon-open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="burger-icon-close" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu"
            class="md:hidden hidden bg-white shadow-md absolute top-full left-0 right-0 z-40 border-t border-gray-200">
            <ul class="flex flex-col items-stretch">
                <li><a href="index.php"
                        class="nav-link-mobile block text-gray-700 font-medium py-3 px-5 hover:bg-blue-50 hover:text-blue-500 text-center border-b border-gray-100">Beranda</a>
                </li>
                <li><a href="products.php"
                        class="nav-link-mobile block text-gray-700 font-medium py-3 px-5 hover:bg-blue-50 hover:text-blue-500 text-center border-b border-gray-100">Koleksi</a>
                </li>
                <li><a href="tentang.php"
                        class="nav-link-mobile block text-gray-700 font-medium py-3 px-5 hover:bg-blue-50 hover:text-blue-500 text-center border-b border-gray-100">Tentang</a>
                </li>
                <li><a href="contact.php"
                        class="nav-link-mobile block text-gray-700 font-medium py-3 px-5 hover:bg-blue-50 hover:text-blue-500 text-center">Kontak</a>
                </li>
            </ul>
        </div>
    </header>
    <script>
    const burgerButton = document.getElementById('burger-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const burgerIconOpen = document.getElementById('burger-icon-open');
    const burgerIconClose = document.getElementById('burger-icon-close');

    if (burgerButton && mobileMenu && burgerIconOpen && burgerIconClose) {
        burgerButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            burgerIconOpen.classList.toggle('hidden');
            burgerIconClose.classList.toggle('hidden');
        });
    }
    </script>

    <body />