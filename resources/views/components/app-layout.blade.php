<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AFCON 2025 Dashboard') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50 text-slate-800">
        <div class="min-h-screen flex flex-col">
            <!-- Navbar -->
            <x-navbar />

            <!-- Main Content -->
            <main class="flex-1 w-full relative z-0 overflow-y-auto">
                <!-- Zellige Background Overlay -->
                <div class="absolute inset-0 zellige-pattern -z-10 pointer-events-none"></div>
                
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
