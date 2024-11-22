<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('image/LOGO.png') }}" type="image/png">
        <title>{{ config('app.name', 'laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="bg-white dark:bg-gray-900 flex justify-center flex-col items-center">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-[#FF5900] shadow w-full">
                        <div class="w-full px-8 text-center">
                            <marquee behavior="" scrolldelay="30" truespeed="30" hspace="0px" direction="left" class="flex h-6">
                                <div class="flex gap-60">
                                    <p class="text-lg font-semibold dark:text-white text-gray-800 mr-48">Obtenha desconto por Pix</p>
                                    <p class="text-lg font-semibold dark:text-white text-gray-800 mr-48">Parcelamos até 12x</p>
                                    <p class="text-lg font-semibold dark:text-white text-gray-800 mr-48">Garanta seu sneakers!</p>
                                    <p class="text-lg font-semibold dark:text-white text-gray-800 mr-48">Obtenha desconto por Pix</p>
                                    <p class="text-lg font-semibold dark:text-white text-gray-800 mr-48">Parcelamos até 12x</p>
                                    <p class="text-lg font-semibold dark:text-white text-gray-800 mr-48">Garanta seu sneakers!</p>
                                    <p class="text-lg font-semibold dark:text-white text-gray-800 mr-48">Obtenha desconto por Pix</p>
                                    <p class="text-lg font-semibold dark:text-white text-gray-800 mr-48">Parcelamos até 12x</p>
                                    <p class="text-lg font-semibold dark:text-white text-gray-800 mr-48">Garanta seu sneakers!</p>
                                </div>
                            </marquee>
                        </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
            {{ $slot }}
            </main>
        </div>
    </body>
</html>
