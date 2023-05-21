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
    <body class="font-sans antialiased" x-data="{ darkMode: false }" x-init="
    if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      localStorage.setItem('darkMode', JSON.stringify(true));
    }
    darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" x-cloak>

    <div x-bind:class="{'dark' : darkMode === true}" class="min-h-screen bg-gray-100">

            <header class="max-w-7xl mx-auto dark:bg-gray-800 px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
                <div class="flex items-center flex-grow gap-4">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo3.png') }}" class="h-12">
                    </a>
                    <form action="" method="GET">
                        <input
                            type="text" name="search" placeholder="Buscar"
                            value=""
                            class="border bg-inherit border-gray-600 text-gray-400 rounded py-2 px-4 w-1/2"
                        >
                    </form>
                </div>

                {{-- toggle theme --}}
                <x-toggle-theme></x-toggle-theme>
                {{-- toggle theme --}}


                @if (Route::has('login'))
                <div class="top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    @endauth
                </div>
                @endif

            </header>

            <main class="bg-gray-100 dark:bg-gray-800">
                @yield('content')
            </main>

        </div>
    </body>
</html>
