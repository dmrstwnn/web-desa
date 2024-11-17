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
    <body class="antialiased">
        <div class="min-h-screen bg-white">
            
            <nav id="navbar" class="fixed top-0 w-full bg-transparent transition-all duration-300 shadow-xs z-50">
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
                                                <a href="/index">Beranda</a>
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
                                            <li class="relative" x-data="{ open: false }">
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
            
    <!-- Hero Section -->
    
    {{-- <section id="home" class="min-h-screen flex items-center justify-center bg-center bg-no-repeat">
         --}}
         <section id="home" class="min-h-screen flex items-center justify-center bg-center bg-no-repeat relative bg-cover" style="background-image: url('/image/kalibenda.jpg');">

            <!-- Teks di tengah -->
            <div class="relative text-center">
                <h2 class="text-6xl text-effect md:text-5xl font-bold text-white mb-4 text-shadow-lg">Selamat Datang di Desa Kalibenda</h2>
                <p class="text-lg text-white mb-16 text-shadow-md">Desa yang asri dengan berbagai potensi alam dan budaya.</p>
                 <a href="#about" 
                 class="inline-block text-white bg-blue-600 border border-transparent rounded-full text-xl font-semibold py-4 px-12 
                        transition-all duration-300 ease-in-out transform 
                        hover:bg-blue-700 hover:scale-110 hover:shadow-2xl hover:text-cyan-200 hover:shadow-blue-500 focus:outline-none 
                        focus:ring-4 focus:ring-blue-300 active:scale-100 active:shadow-none 
                        relative overflow-hidden">
                  <span class="absolute inset-0 bg-blue-500 rounded-full transform scale-0 transition-all duration-300 ease-in-out 
                              group-hover:scale-100"></span>
                  <span class="relative z-10">Jelajahi</span>
                  </a>                               
            </div>
        </section>

        
        
    
            <!-- Berita Section -->
            <section id="berita" class="pb-20 pt-16 bg-white">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-left mb-5">
                        <h2 class="text-4xl font-bold hover-underline-berita text-gray-900 relative inline-block">
                            {{-- <span class="absolute inset-x-0 bottom-0 h-1 bg-blue-600"></span> --}}
                            Berita Terbaru
                        </h2>
                        <p class="mt-3 text-gray-600">Dapatkan informasi terbaru seputar kegiatan dan peristiwa di Desa Kalibenda.</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                        @foreach ($articles as $article)
                        <div class="news-card max-w-5xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                            <span class="absolute top-0 right-0 bg-red-500 text-white text-xs px-2 py-1 rounded-bl ">Baru</span>
                            <a href="#">
                                <!-- Gambar dengan ukuran responsif dan menyesuaikan tanpa merusak layout -->
                                <img class="rounded-t-lg w-full h-40 object-cover" src="{{ $article->image ?? '/image/placeholder.png' }}" alt="" />
                            </a>
                            <div class="pr-2 pt-1 pl-2 m-3 pb-5">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($article->created_at)->locale('id')->translatedFormat('l, d F Y') }}</span>
                                    <span class="text-sm font-medium dark:text-white">Oleh {{ $article->author }}</span>
                                </div>
                                <a href="#">
                                    <h5 class="mb-2 mt-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h5>
                                </a>
                                <p class="mb-10 font-light text-base text-gray-700 dark:text-gray-400">{{ Str::limit($article ['body'], 100) }}</p>
                                <a href="/post/{{ $article->id }}" 
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                     Read more
                                     <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                     </svg>
                                 </a>
                                 
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




<script>
    const navbar = document.querySelector('nav');
    
    window.addEventListener('scroll', () => {
      if (window.scrollY > 220) {
        navbar.classList.add('bg-white');
        navbar.classList.add('text-black');
        navbar.classList.remove('bg-transparent');
        navbar.classList.remove('text-white');
      } else {
        navbar.classList.add('bg-transparent');
        navbar.classList.add('text-white');
        navbar.classList.remove('bg-white');
        navbar.classList.remove('text-black');
      }
    });
</script>
<script>
    document.querySelectorAll('.news-card').forEach((card) => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            });
        }, { threshold: 0.2 });
        card.classList.add('opacity-0', 'translate-y-10');
        observer.observe(card);
    });
</script>
<script>
    * {
        font-family: "Poppins", serif;
    }
</script>
<script>
    
</script>


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