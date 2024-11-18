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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/flowbite@1.3.3/dist/flowbite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" antialiased">
        <div class="min-h-screen bg-white">
            
            <nav id="navbar" class="fixed top-0 w-full bg-white transition-all duration-300 shadow-xs z-50">
                <div class="w-full mx-auto items-center shadow-md">
                    <div class="h-16">
                        <div class="flex justify-between items-center">
                            <!-- Logo -->
                            <div class="shrink-0 flex">
                                <a href="{{ route('dashboard') }}" class="ml-16 flex gap-8 items-center">
                                    <img src="/image/bms.png" alt="" class="h-12 w-auto">
                                    <div class="text-sm text-gray-800">
                                        <p>Desa Kalibenda Kec Ajibarang</p>
                                        <p class="font-bold">Kab Banyumas</p>
                                    </div>
                                </a>
                            </div>
            
                            <!-- Navigation Links -->
                            <nav class="w-100 pr-10 md:px-auto">
                                <div class="md:h-16 h-16 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
                                    <div class="text-gray-800 order-3 w-full md:w-auto md:order-2">
                                        <ul class="flex font-semibold justify-between">
                                            <li class="md:px-4 md:py-2 text-gray-800 hover:text-gray-900 transition duration-300 ease-in-out font-semibold">
                                                <a href="/">Beranda</a>
                                            </li>
                                            <li class="md:px-4 md:py-2 text-gray-800 hover:text-gray-900 transition duration-300 ease-in-out font-semibold">
                                                <a href="/profil">Profil</a>
                                            </li>
                                            <li class="md:px-4 md:py-2 text-gray-800 hover:text-gray-900 transition duration-300 ease-in-out font-semibold">
                                                <a href="#">Lembaga Desa</a>
                                            </li>
                                            <li class="md:px-4 md:py-2 text-gray-800 hover:text-gray-900 transition duration-300 ease-in-out font-semibold">
                                                <a href="#">Peraturan Desa</a>
                                            </li>
                                            
                                            <li class="relative font-semibold" x-data="{ open: false }">
                                                <button @click="open = !open" class="md:px-4 md:py-2 text-gray-800 hover:text-gray-900 flex items-center">
                                                    Menu
                                                    <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M10 12l-5-5h10l-5 5z" />
                                                    </svg>
                                                </button>
                                                <div x-show="open" @click.away="open = false" class="absolute left-0 w-40 mt-1 bg-white rounded-md shadow-lg">
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-indigo-400">Option 1</a>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-indigo-400">Option 2</a>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-indigo-400">Option 3</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </nav>


            <section id="home" class="bg-cover bg-center h-screen flex items-center justify-center pt-8 opacity-90" style="background-image: url('/image/kalibenda.jpg'); height: 275px">
                <div class="text-center">
                    <h2 class="text-4xl md:text-6xl font-extrabold text-gray-900">Profil Desa Kalibenda</h2>
                    <p class="mt-2 text-lg font-medium text-white"><span class="bg-gray-800 rounded-md px-2 bg-bottom">Sekilas tentang sejarah, visi, dan misi Desa Kalibenda.</span></p>
                </div>
            </section>

            <!-- About Section -->
            <section id="about" class="py-20 pt-14 bg-gray-100">
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!-- Judul Sejarah Desa Kalibenda -->
                    <p class="text-center md:text-4xl text-2xl text-gray-800 mb-2  font-black text-primary uppercase opacity-0 animate-slideInUp animate-duration-1000 animate-delay-200">
                        Sejarah Desa Kalibenda
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <!-- Gambar -->
                        <img src="/image/kalibenda.jpg" alt="Profil Desa" class="  w-full  rounded shadow-lg opacity-0 animate-fadeIn animate-duration-1000">
                        
                        <!-- Konten Text -->
                        <div class="flex flex-col justify-center">
                            <p class="text-gray-900 leading-relaxed font-medium opacity-0 animate-fadeIn animate-duration-1000 animate-delay-400">
                                <span class="ml-10"></span>Desa Kalibenda terletak di Kecamatan Ajibarang, Kabupaten Banyumas, Jawa Tengah, dan memiliki sejarah yang panjang serta budaya yang kental. Desa ini merupakan salah satu desa tua yang telah ada sejak masa kolonial Belanda, dan kini terus berkembang sebagai desa yang mempertahankan nilai-nilai tradisional.
                            </p>
                            <p class="mt-4 text-gray-900 leading-relaxed font-medium opacity-0 animate-fadeIn animate-duration-1000 animate-delay-600">
                                <span class="ml-10"></span>Pada masa penjajahan Belanda, Desa Kalibenda menjadi salah satu pusat perlawanan rakyat Banyumas. Penduduk desa yang mayoritas petani ikut berjuang melawan penjajah, menjadikan desa ini penting dalam sejarah perjuangan rakyat di wilayah Banyumas. Semangat kebersamaan dan gotong royong yang diwariskan dari masa itu masih menjadi ciri khas kehidupan sosial masyarakat Kalibenda hingga kini.
                            </p>
                            <p class="mt-4 text-gray-900 leading-relaxed font-medium indent-8 opacity-0 animate-fadeIn animate-duration-1000 animate-delay-800">
                                Menurut cerita masyarakat setempat, nama "Kalibenda" berasal dari dua kata, yaitu "Kali" yang berarti sungai, dan "Benda" yang merujuk pada sebuah pohon besar yang dulunya tumbuh di pinggir sungai di desa ini. Pohon Benda tersebut menjadi tempat yang disakralkan oleh warga desa dan sering dijadikan tempat bermeditasi. Keberadaan sungai dan pohon besar ini menjadi ikon penting dalam pembentukan identitas Desa Kalibenda.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            
            
            

            <section class="px-80 py-10" id="visi-misi">
                <h1 class="font-black text-3xl text-primary uppercase">Visi Dan Misi</h1>
    
                <div id="visi" class="py-10 space-y-5">
                    <h1 class="font-bold uppercase text-xl">Visi</h1>
                    <p class="text-center font-black">“ Meningkatkan Sumber Daya Manusia, Ekonomi dan Alam  yang dilandasi Akhlak Mulia serta Menciptakan kemudahan pelayanan di segala bidang sehingga tercipta masyarakat yang makmur dan sejahtera. ”</p>
                </div>
                <div id="misi" class="space-y-5">
                    <h1 class="font-bold uppercase text-xl">Misi</h1>
                    <ul class="list-decimal ml-5 font-medium">
                        <li class="font-satoshi">Peninjauan dan Revisi Produk – produk hukum yang ada di Desa.</li>
                        <li class="font-satoshi">Peningkatan SDM Perangkat Desa dan Lembaga Desa.</li>
                        <li class="font-satoshi">Pengadaan sarana dan prasarana pemerintah yang memadai.</li>
                        <li class="font-satoshi">Pengembangan Sarana perasarana air bersih.</li>
                        <li class="font-satoshi">Tersedianaya prasaran sanitasi serta pelayanan kesehatan yang memadai.</li>
                        <li class="font-satoshi">Peningkatan partisipasi masyarakat dalam berswasembada pembangunan.</li>
                        <li class="font-satoshi">Manggali potensi Sumber Daya alam untuk kemakmuran rakyat.</li>
                        <li class="font-satoshi">Memberdayakan seluruh lapisan masyarakat untuk manggali, mengembangkan dan mengelola Sumber Daya yang dimiliki desa.</li>
                        <li class="font-satoshi">Mengadakan Pelatihan – Pelatihan terhadap Masyarakat.</li>
                        <li class="font-satoshi">Menumbuhkembangankan Perekonomian Desa yang berbasis Pada Usaha Ekonomi Mikro.</li>
                        <li class="font-satoshi">Meningkatkan Kegiatan Usaha Masyarakat.</li>
                        <li class="font-satoshi">Menjalin kemitraan dengan pihak lain.</li>
                        <li class="font-satoshi">Meningkatkan pelayanan umum.</li>
                        <li class="font-satoshi">Menjaga Kelestarian dan menumbuh kembangkan budaya dan kesenian lokal.</li>
                    </ul>
                </div>
            </section>


            <!-- Footer Section -->
            <footer class="bg-gray-800 text-gray-300 py-6">
                <div class="max-w-7xl mx-auto px-4  sm:px-6 lg:px-8 text-center">
                    <p>&copy; 2024 Desa Kalibenda.</p>
                </div>
            </footer>
   
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
<script>
    * {
        font-family: "Poppins", serif;
    }
</script>
</html>





