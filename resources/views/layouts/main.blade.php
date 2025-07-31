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

    <main class="flex-grow mx-auto w-full h-full  sm:max-w-md md:max-w-xl lg:max-w-5xl  p-1 overflow-y-auto">
            @yield('main')
    </main>

    <footer class="text-center text-sm p-2 shadow-inner border border-2">
        <p>Gemaakt met: Laravel</p>
        <p>Kleuren thema's: <span class="highlight"></span></p>
        <p>Voor het laatst bewerkt op: <span class="highlight">¯\_(ツ)_/¯</span></p>
    </footer>
</body>
</html>
