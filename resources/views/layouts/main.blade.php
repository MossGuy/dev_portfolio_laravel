<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- css link -->
    @vite(['resources/css/app.css'])
    <title>Main</title>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    @include('layouts.navbar')
    <header class="p-6">
        <div class="container mx-auto">
            @yield('header')
        </div>
    </header>

    <main class="flex-grow">
        <div class="container mx-auto px-4 py-8">
            @yield('main')
        </div>
    </main>

    <footer class="bg-gray-800 text-gray-300 text-center p-4 mt-8">
        <p>Gemaakt met Laravel</p>
        <p>Uitgevoerd met Docker</p>
        <p>Ontwikkelaar: Milan</p>
    </footer>
</body>
</html>