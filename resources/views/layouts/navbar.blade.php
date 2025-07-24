<script src="https://unpkg.com/alpinejs" defer></script>

<nav x-data="{ showFilters: false }">
    <!-- Header -->
    <section class="shadow-md flex justify-between items-center p-4">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/moss.png') }}" class="h-8" alt="Moss Logo" />
            <h1 class="text-2xl font-semibold whitespace-nowrap">Moss productions</h1>
        </a>

        <div class="flex items-center space-x-4 rtl:space-x-reverse">
            <button 
                @click="showFilters = !showFilters" 
                class="cursor-pointer font-medium hover:underline"
                type="button"
            >
                Kleuren Thema
            </button>
        </div>
    </section>

    <!-- Thema-selector -->
    <section x-show="showFilters" x-transition x-cloak>
        <form 
            action="{{ route('set-theme') }}" 
            method="POST" 
            class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-evenly mt-4 mb-2 flex-wrap gap-y-2 font-semibold"
        >
            @csrf

            @php
                $themes = [
                    'Basis Wit', 
                    'Nacht Zwart', 
                    'Moss Groen', 
                    'Marine Blauw', 
                    'Perzik Roze'
                ];
            @endphp

            @foreach ($themes as $theme)
                <input 
                    type="submit" 
                    name="theme" 
                    value="{{ $theme }}" 
                    class="w-36 kleur py-2 px-3 rounded bg-gray-100 hover:bg-gray-200 transition-colors"
                >
            @endforeach

            {{-- <p class="bg-zinc-300 w-36">{{ session('theme') }}</p> --}}
        </form>
    </section>
</nav>
