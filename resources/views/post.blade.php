<x-layout>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/" class="font-medium  text-xl text-blue-500 hover:underline">&laquo; Kembali</a>
                    <div class="flex items-center space-x-2 mt-6 mb-3">
                        <img class="w-full object-cover rounded-sm h-96" src="{{ $data->image }}" alt="" />
                    </div>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <div>
                                <p class="text-base text-gray-500 dark:text-gray-400"> {{ \Carbon\Carbon::parse($data->created_at)->locale('id')->translatedFormat('l, d F Y') }}</p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $data->title }}</h1>
                </header>
                
                <p>{{ ($data ['body']) }}</p>
                <p href="#" rel="author" class="text-md text-right justify-end font-md text-gray-900 dark:text-white mt-14">Ditulis Oleh <span class="font-bold"> {{ $data->author }}</span></p>


            </article>
        </div>
    </main>
    

  </x-layout>