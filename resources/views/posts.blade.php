<x-layout>
   
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}



    <section class="dark:bg-gray-900">

        <div class=" mt-12">
            <nav id="navbar" class="fixed top-0 w-full bg-white transition-all duration-300 shadow-xs z-50">
                <div class="w-full mx-auto items-center shadow-md">
                    <div class="h-16">
                        <div class="flex justify-between items-center">
                            <!-- Logo -->
                            <div class="shrink-0 flex">
                                <a href="{{ route('dashboard') }}" class="ml-16 flex gap-4 items-center">
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
                                            {{-- <li class="md:px-4 md:py-2 text-gray-800 hover:text-gray-900 transition duration-300 ease-in-out font-semibold">
                                                <a href="#">Lembaga Desa</a>
                                            </li>
                                            <li class="md:px-4 md:py-2 text-gray-800 hover:text-gray-900 transition duration-300 ease-in-out font-semibold">
                                                <a href="#">Peraturan Desa</a>
                                            </li> --}}
                                            
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
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl  lg:py-16 lg:px-6">

            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-left mb-5">
                    <a href="/posts" id="hover-berita" class="text-4xl font-bold hover-underline-berita text-gray-900 relative inline-block">
                        Berita Terbaru
                    </a>
                    <p class="mt-3 text-gray-600">Dapatkan informasi terbaru seputar kegiatan dan peristiwa di Desa Kalibenda.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                    @foreach ($articles as $article)
                    <div class="news-card max-w-5xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
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
        </div>
    </section>
    




    {{-- <a href="/create" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</a>
    @foreach ($articles as $article)
        
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <a href="/posts/{{ $article['id'] }}">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $article ['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="#">{{ $article ['author'] }}</a> | {{ $article->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($article ['body'], 80) }}</p>
            <a href="/post/{{ $article->id }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
    
    @endforeach --}}
    
    
  </x-layout>