<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}

        <div class="bg-white mt-24 ml-10 ">
            <div class="max-w-7xl text-left px-6 sm:px-6 lg:px-8">
                <div class=" my-4">
                    <h1 class="text-4xl font-normal text-gray-900">Selamat Datang <span class="font-black">{{ Auth::user()->name}}</span></h1>
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
                <h2 class="text-3xl font-bold uppercase border-b-2 border-gray-700 m-5" style="width: fit-content;">
                    Semua Berita
                </h2>
                
                <div class="grid gap-5 lg:grid-cols-3 grid-cols-1">
                    @foreach ($articles as $article)
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-xl dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-3 text-gray-500">
                            <span class="text-sm"> {{ \Carbon\Carbon::parse($article->created_at)->locale('id')->translatedFormat('l, d F Y') }}</span>
                        </div>
                        <div class="flex items-center space-x-2 mb-3">
                            <img class="w-full object-cover rounded-sm h-60" src="{{ $article->image }}" alt="" />
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="font-medium text-md dark:text-white">
                                Oleh {{ $article->author }} <span class="font-medium"></span>
                            </span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">{{ $article->title }}</a></h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($article ['body'], 180) }}</p>
                        <div class="flex  items-center">
                            <a href="{{ route('articles.edit', $article->id) }}" class="inline-flex items-center mr-4 px-4 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 mt-4">
                                Edit Article
                            </a>
                            <a href="{{ route('delete', $article->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 mt-4">
                                hapus 
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
        
        