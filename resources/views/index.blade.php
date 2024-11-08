<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/flowbite@1.3.3/dist/flowbite.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            
        <nav x-data="{ open: false }" class="bg-transparent z-10 border-b border-gray-100 shadow-md">
    <!-- Primary Navigation Menu -->
            <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 fixed bg-white bg-transparent z-10  shadow-md">
                <div class="flex justify-between items-center h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}" class="ml-32">
                            <img src="/image/bms.png" alt="" class="h-12 w-auto">
                            </a>
                        </div>

                                <!-- component -->
                        <nav class="w-100 px-36 md:px-auto justify-items-center">
                            <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
                                <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
                                    <ul class="flex font-semibold justify-between">
                                        <!-- Active Link = text-indigo-500
                                        Inactive Link = hover:text-indigo-500 -->
                                        <li class="md:px-4 md:py-2 text-black hover:text-indigo-500 transition duration-300 ease-in-out font-semibold"><a href="#">Beranda</a></li>
                                        <li class="md:px-4 md:py-2 text-black hover:text-indigo-500 transition duration-300 ease-in-out font-semibold"><a href="#">Profil</a></li>
                                        <li class="md:px-4 md:py-2 text-black hover:text-indigo-500 transition duration-300 ease-in-out font-semibold"><a href="#">Lembaga Desa</a></li>
                                        <li class="md:px-4 md:py-2 text-black hover:text-indigo-500 transition duration-300 ease-in-out font-semibold"><a href="#">Peraturan Desa</a></li>
                                        <li class="md:px-4 md:py-2 text-black hover:text-indigo-500 transition duration-300 ease-in-out font-semibold"><a href="#">Potensi</a></li>
                                        <li class="md:px-4 md:py-2 text-black hover:text-indigo-500 transition duration-300 ease-in-out font-semibold"><a href="#">Menu Publik</a></li>
                                        <li class="md:px-4 md:py-2 text-black hover:text-indigo-500 transition duration-300 ease-in-out font-semibold"><a href="#">Pelayanan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

    <!-- Hero Section -->
    
            <section id="home" class="bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('/image/kalibenda.jpg');">
                <div class="text-center px-4">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Selamat Datang di Desa Kalibenda</h2>
                    <p class="text-lg text-white mb-8">Desa yang asri dengan berbagai potensi alam dan budaya.</p>
                    <a href="#about" class="bg-indigo-500 text-white px-6 py-3 rounded hover:bg-indigo-600 transition duration-300">Jelajahi Lebih Lanjut</a>
                </div>
            </section>

            <!-- About Section -->
            <section id="about" class="py-20 bg-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-900">Profil Desa Kalibenda</h2>
                        <p class="mt-4 text-black">Sekilas tentang sejarah, visi, dan misi Desa Kalibenda.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <img src="/image/kalibenda.jpg" alt="Profil Desa" class="w-full h-auto rounded shadow-lg">
                        <div class="flex flex-col justify-center">
                            <p class="mb-4 text-gray-700 leading-relaxed">Desa Kalibenda terletak di Kecamatan Ajibarang, Kabupaten Banyumas, Jawa Tengah, dan memiliki sejarah yang panjang serta budaya yang kental. Desa ini merupakan salah satu desa tua yang telah ada sejak masa kolonial Belanda, dan kini terus berkembang sebagai desa yang mempertahankan nilai-nilai tradisional.</p>
                            <p class="text-gray-700 leading-relaxed">Pada masa penjajahan Belanda, Desa Kalibenda menjadi salah satu pusat perlawanan rakyat Banyumas. Penduduk desa yang mayoritas petani ikut berjuang melawan penjajah, menjadikan desa ini penting dalam sejarah perjuangan rakyat di wilayah Banyumas. Semangat kebersamaan dan gotong royong yang diwariskan dari masa itu masih menjadi ciri khas kehidupan sosial masyarakat Kalibenda hingga kini..</p>
                            <a href="#" class="text-indigo-500 mt-4 inline-flex items-center">Pelajari lebih lanjut</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- News Section -->
            <section id="news" class="py-20 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-gray-900">Berita Terbaru</h2>
                        <p class="mt-4 text-black">Dapatkan informasi terbaru seputar kegiatan dan peristiwa di Desa Kalibenda.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Card 1 -->
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                            <img src="/image/kalibenda.jpg" alt="Berita 1" class="w-full h-40 object-cover rounded-lg mb-6">
                            <h3 class="text-lg font-semibold mb-4">Kegiatan Gotong Royong Desa</h3>
                            <p class="text-black mb-4">Masyarakat desa bersama-sama melaksanakan kegiatan gotong royong membersihkan lingkungan.</p>
                            <a href="#" class="text-indigo-500 hover:underline">Baca selengkapnya</a>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                            <img src="/image/kalibenda.jpg" alt="Berita 2" class="w-full h-40 object-cover rounded-lg mb-6">
                            <h3 class="text-lg font-semibold mb-4">Festival Seni Budaya Desa</h3>
                            <p class="text-black mb-4">Berbagai kesenian tradisional dipentaskan dalam acara tahunan festival seni budaya desa.</p>
                            <a href="#" class="text-indigo-500 hover:underline">Baca selengkapnya</a>
                        </div>
                        <!-- Card 3 -->
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                            <img src="/image/kalibenda.jpg" alt="Berita 3" class="w-full h-40 object-cover rounded-lg mb-6">
                            <h3 class="text-lg font-semibold mb-4">Pembangunan Infrastruktur Desa</h3>
                            <p class="text-black mb-4">Proyek pembangunan infrastruktur desa dimulai untuk meningkatkan aksesibilitas.</p>
                            <a href="#" class="text-indigo-500 hover:underline">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer Section -->
            <footer class="bg-gray-800 text-gray-300 py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <p>&copy; 2024 Desa Kalibenda.</p>
                </div>
            </footer>

</nav>     
</div>

<!-- <script>
    // JavaScript to change navbar background on scroll
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('nav');
        if (window.scrollY > 100) {
            nav.classList.add('bg-white', 'backdrop-blur-md', 'shadow-md');
            nav.classList.remove('bg-transparent');
        } else {
            nav.classList.remove('bg-white', 'backdrop-blur-md', 'shadow-md');
            nav.classList.add('bg-transparent');
        }
    });
</script> -->

</body>
</html>






<!-- Hamburger -->
<!-- <div class="-me-2 flex items-center sm:hidden">
    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div> -->