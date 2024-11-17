<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}

        <div class="bg-white ">
            <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
                <div class="text-center my-4">
                    <h1 class="text-2xl font-bold text-gray-900">Selamat Datang <span class="font-black">{{ Auth::user()->name}}</span></h1>
                    <p class="mt-4 text-lg text-gray-600">Buat berita, informasi, dan kegiatan terbaru tentang desa Kalibenda.</p>
                </div>
            </div>
        </div>
    
        <section class="dark:bg-gray-900">
            <div class="py-2 px-4 mx-auto max-w-screen-xl  lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-4">
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400"></p>
                    <div class="mt-4">
                        <a href="/create" type="button" class="text-white py-3 bg-blue-700 hover:bg-blue-800 focus:ring-4
                         focus:ring-blue-300 font-semibold rounded-lg text-lg px-5 me-2 mb-2 dark:bg-blue-600
                          dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create something</a>
                    </div>
                </div> 
    
                <div class="grid gap-5 lg:grid-cols-3 grid-cols-1">
                    @foreach ($articles as $article)
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-full dark:bg-primary-200 dark:text-primary-800">
                                Read Artikel
                            </span>
                            <span class="text-sm"> {{ \Carbon\Carbon::parse($article->created_at)->locale('id')->diffForHumans() }} </span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <img class="w-56 h-56" src="{{ $article->image }}" alt="Jese Leos avatar" />
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="font-medium dark:text-white">
                                {{ $article->author }}
                            </span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">{{ $article->title }}</a></h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($article ['body'], 180) }}</p>
                        <div class="flex justify-between items-center">
                            <a href="/post/{{ $article->id }}" class="inline-flex items-center font-medium text-blue-600 dark:text-primary-500 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                           
                        </div>
                    </article> 
                    @endforeach 
                </div>
            </div>
        </section>

    </x-slot>

    
</x-app-layout>


        {{-- <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div> --}}
        
        