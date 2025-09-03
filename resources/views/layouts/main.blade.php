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

    <footer class="text-center text-sm p-2 shadow-inner border-t border-t-2 text-xl flex flex-col md:flex-row justify-evenly lg:justify-evenly">
        <div>
            <p>Vind mij op:</p>
            <p><a target="_blank" href="https://github.com/MossGuy"><i class="bi bi-github"></i> Github</a></p>
            <p><a target="_blank" href="https://www.linkedin.com/in/milan-pallas-b719b0281/"><i class="bi bi-linkedin"></i> LinkedIn</a></p>
        </div>
        <p class="mt-auto">Voor het laatst bewerkt op: <span class="highlight">3-09-2025</span></p>
    </footer>
</body>
</html>
