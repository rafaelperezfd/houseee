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
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen w-full h-full flex justify-center items-center bg-gray-100 dark:bg-black">
            <div class="flex flex-col md:gap-8 md:w-1/2 w-3/4 items-center">

                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>

                <div class="md:w-1/2 w-full sm:max-w-md px-6 py-4 bg-white dark:bg-black shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>

            </div>

            <div class="md:flex md:w-1/2 md:h-screen md:overflow-hidden hidden">
            <video class="w-full h-full object-cover" autoplay loop muted>
                <source src="{{ asset('video/video-page-login.mp4') }}" type="video/mp4">
                Seu navegador não suporta a tag de vídeo.
            </video>
        </div>
        </div>

    </body>
</html>
