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

<body class="font-sans antialiased text-slate-800 relative">
    <!-- Global Background Pattern (Zellige) -->
    <div class="fixed inset-0" style="z-index: -2; 
                background-image: url('/images/zellige_fixed.png'); 
                background-repeat: repeat; 
                background-color: #faf9f6; 
                background-size: 150px;
                opacity: 0.15;">
    </div>

    <!-- Centered Background Logo -->
    <div class="fixed inset-0 pointer-events-none" style="z-index: -1; 
                background-image: url('/images/trophy_stadium_transparent.png'); 
                background-position: center; 
                background-repeat: no-repeat; 
                background-size: 50%;
                opacity: 0.4;">
    </div>

    <div class="min-h-screen flex flex-col relative z-0">
        <!-- Navbar -->
        <x-navbar />

        <!-- Main Content -->
        <main class="flex-1 w-full relative">
            {{ $slot }}
        </main>
    </div>
</body>

</html>