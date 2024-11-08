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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 bg-black antialiased">
        <div class="min-h-screen flex">
      
            <div class="w-full md:w-1/2 flex justify-center items-center px-6 py-4">
                
                <div class="bg-white dark:bg-black shadow-md rounded-lg overflow-hidden w-full sm:max-w-md mt-40">
                    {{ $slot }}
                </div>
            </div>

            
            <div class="w-1/2 h-screen">
                <video class="w-full h-full object-cover" autoplay loop muted>
                    <source src="{{ asset('video/loginvideo.mp4') }}" type="video/mp4">
                    Seu navegador não suporta a tag de vídeo.
                </video>
            </div>
        </div>
    </body>
</html>
