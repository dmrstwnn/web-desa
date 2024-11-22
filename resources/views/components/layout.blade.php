<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.3.3/dist/flowbite.min.js"></script>
    
    <title>Web Desa</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        footer {
            background: #f8f9fa; /* Optional: Add a background color for visibility */
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content">
        {{-- <x-navbar></x-navbar> --}}
        {{-- <x-header>{{ $title }}</x-header> --}}
        <main>
            <div class="max-w-7xl ">
                <!-- Your content -->
                {{ $slot }}

            </div>
        </main>
    </div>

    
    <footer>
        <p class="copyright">
            Copyright © Desa Kalibenda
        </p>
    </footer>
    
</body>
</html>