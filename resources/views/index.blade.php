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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/flowbite@1.3.3/dist/flowbite.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            
            <nav x-data="{ open: false }" class="bg-transparent shadow-md fixed top-0 left-0 w-full z-50" style="background-color: rgb(114, 175, 135);">
                <!-- Primary Navigation Menu -->
                <div class="w-full mx-auto items-center shadow-md">
                    <div class="h-16">
                        <div class="flex justify-between items-center">
                            <!-- Logo -->
                            <div class="shrink-0 flex">
                                <a href="{{ route('dashboard') }}" class="ml-16 flex gap-8 items-center">
                                    <img src="/image/bms.png" alt="" class="h-12 w-auto">
                                    <div class="text-sm text-white">
                                        <p>Desa Kalibenda Kec Ajibarang</p>
                                        <p class="font-bold">Kab Banyumas</p>
                                    </div>
                                </a>
                            </div>
            
                            <!-- Navigation Links -->
                            <nav class="w-100 pr-10 md:px-auto">
                                <div class="md:h-16 h-16 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
                                    <div class="text-white order-3 w-full md:w-auto md:order-2">
                                        <ul class="flex font-semibold justify-between">
                                            <li class="md:px-4 md:py-2 text-white hover:text-gray-200 transition duration-300 ease-in-out font-semibold"><a href="/index">Beranda</a></li>
                                            <li class="md:px-4 md:py-2 text-white hover:text-gray-200 transition duration-300 ease-in-out font-semibold"><a href="/profil">Profil</a></li>
                                            <li class="md:px-4 md:py-2 text-white hover:text-gray-200 transition duration-300 ease-in-out font-semibold"><a href="#">Lembaga Desa</a></li>
                                            <li class="md:px-4 md:py-2 text-white hover:text-gray-200 transition duration-300 ease-in-out font-semibold"><a href="#">Peraturan Desa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>
            
    <!-- Hero Section -->
    
    <section id="home" class="bg-cover bg-center h-screen flex items-center justify-center relative" style="background-image: url('/image/kalibenda.jpg');">
        <!-- Overlay dengan efek blur -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/image/kalibenda.jpg'); filter: blur(2px);">
        </div>
            <div class="text-center px-4 z-10">
                    <h2 class="text-6xl md:text-5xl font-bold text-white mb-4">Selamat Datang di Desa Kalibenda</h2>
                    <p class="text-lg text-white mb-16">Desa yang asri dengan berbagai potensi alam dan budaya.</p>
                    <a href="#about" class="text-white hover:text-cyan-200 border border-white hover:bg-blue-600 hover:border-blue-600 transition-transform focus:ring-4 focus:outline-none focus:ring-blue-700 font-semibold rounded-full text-xl px-16 py-5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Jelajahi</a>
                        
                </div>
            </section>
    
            <!-- Berita Section -->
            <section id="berita" class="py-20 bg-white">
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-gray-900">Berita Terbaru</h2>
                        <p class="mt-4 text-black">Dapatkan informasi terbaru seputar kegiatan dan peristiwa di Desa Kalibenda.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Card 1 -->

                        @foreach ($articles as $article)
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <!-- Gambar dengan ukuran responsif dan menyesuaikan tanpa merusak layout -->
                                <img class="rounded-t-lg w-full h-48 object-cover" src="{{ $article->image }}" alt="" />
                            </a>
                            <div class="pr-4 pt-3 pl-4 m-3 pb-5">
                                <span class="text-sm" > {{ \Carbon\Carbon::parse($article->created_at)->locale('id')->diffForHumans() }} </span>
                                <a href="#">
                                    <h5 class="mb-2 mt-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h5>
                                </a>
                                <p class="mb-10 font-light text-gray-700 dark:text-gray-400">{{ Str::limit($article ['body'], 100) }}</p>
                                <a href="/post/{{ $article->id }}" class="inline-flex items-end px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
                                <span class="font-normal flex mt-2 bottom-0 dark:text-white">
                                   Oleh {{ $article->author }}
                                </span>
                            </div>
                        </div>
                        
                        @endforeach
                        
                    </div>
                </div>
            </section>

            <!-- Profil Section -->
            <section id="about" class="py-20 bg-gray-100">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-10">
                        <h2 class="text-5xl font-bold text-gray-900">Profil Desa Kalibenda</h2>
                        <p class="mt-4 text-black text-lg font-semibold">Sekilas tentang sejarah, visi, dan misi Desa Kalibenda.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4">
                        <img src="/image/kalibenda.jpg" alt="Profil Desa" class="h-auto max-w-lg rounded-lg">
                        <div class="flex flex-col">
                            <p class="mb-4 text-gray-900 leading-relaxed font-medium">Desa Kalibenda terletak di Kecamatan Ajibarang, Kabupaten Banyumas, Jawa Tengah, dan memiliki sejarah yang panjang serta budaya yang kental. Desa ini merupakan salah satu desa tua yang telah ada sejak masa kolonial Belanda, dan kini terus berkembang sebagai desa yang mempertahankan nilai-nilai tradisional.</p>
                            <p class="text-gray-900 leading-relaxed font-medium">Pada masa penjajahan Belanda, Desa Kalibenda menjadi salah satu pusat perlawanan rakyat Banyumas. Penduduk desa yang mayoritas petani ikut berjuang melawan penjajah, menjadikan desa ini penting dalam sejarah perjuangan rakyat di wilayah Banyumas. Semangat kebersamaan dan gotong royong yang diwariskan dari masa itu masih menjadi ciri khas kehidupan sosial masyarakat Kalibenda hingga kini.....</p>
                            <a href="/profil" class="text-blue-600 mt-4 inline-flex items-center hover-underline relative text-base font-normal hover:text-blue-800 origin-center">Pelajari lebih lanjut &nbsp; &raquo;</a>
                        </div>
                    </div>                    
                </div>
            </section>

            <!-- Footer Section -->
            <footer class="bg-gray-800 text-gray-300 py-6">
                <div class="max-w-7xl mx-auto px-4  sm:px-6 lg:px-8 text-center">
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