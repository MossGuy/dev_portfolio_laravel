<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css link -->
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('themes/' . strtolower(session('theme') ?? 'basis wit') . '.css') }}">
    <title>Main</title>
</head>
<body class="min-h-screen flex flex-col">
    @include('layouts.navbar')

    <header class="py-6">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            @yield('header')
        </div>
    </header>

    <main class="flex-grow">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            @yield('main')
        </div>
    </main>

    <footer class="text-center text-sm p-2 mt-8 shadow-inner">
        <p>Gemaakt met Laravel</p>
        <p>Uitgevoerd met Docker</p>
        <p>Voor het laatst bewerkt op: <span></span></p>
    </footer>
</body>
</html>
