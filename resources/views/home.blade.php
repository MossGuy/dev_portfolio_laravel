@extends('layouts.main')

@section('main')
    <section class="kader my-5 px-4 rounded-lg flex flex-col md:flex-row justify-between lg:justify-center lg:gap-[40px] items-center">
        <img src="{{ asset('images/ik.jpg') }}" class="w-[280px] md:w-[200px] h-70 object-cover object-[center_70%] rounded-xl mt-2 mb-1 md:mb-14 border border-3" alt="Foto van mijzelf"/>
        <div>
            <h3 class="text-3xl font-semibold">Hey, Ik ben <span class="highlight">Milan Pallas</span>!</h3>
            <p>Ik ben:</p>
            <ul class=" text-lg font-semibold p-4 md:mb-1 mb-10">
                <li>
                    <i class="bi bi-code-slash"></i>
                    <span class="highlight">Junior web developer</span>
                </li>
                <li>
                    <i class="bi bi-music-note-list"></i>
                    <span class="highlight">Muzikant</span>
                </li>
                <li>
                    <i class="bi bi-controller"></i>
                    <span class="highlight">Gamer</span>
                </li>
                <li>
                    <i class="bi bi-flower2"></i>
                    <span class="highlight">Planten liefhebber</span>
                </li>
                <li>
                    <i class="bi bi-emoji-smile"></i>
                    <span class="highlight">Anime fan</span>
                </li>
            </ul>
        </div>
    </section>


    <section class="my-2 p-4 rounded-lg shadow-lg text-center" id="ervaring_body">
        <h3 class="text-xl font-medium">Ervaring met talen en frameworks</h3>
        <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
            <li data-skill="html5" class="skill font-semibold flex flex-col cursor-pointer transition rounded-lg p-1 hover:bg-[var(--highlight)] hover:shadow-lg">
                HTML
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li data-skill="cssFramework" class="skill font-semibold flex flex-col cursor-pointer hover:text-blue-500 transition hover:bg-[var(--highlight)] rounded-lg p-1 hover:shadow-lg">
                CSS / Frameworks
                <span> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li data-skill="javascript" class="skill font-semibold flex flex-col cursor-pointer hover:text-blue-500 transition hover:bg-[var(--highlight)] rounded-lg p-1 hover:shadow-lg">
                JavaScript
                <span> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li data-skill="php" class="skill font-semibold flex flex-col cursor-pointer hover:text-blue-500 transition hover:bg-[var(--highlight)] rounded-lg p-1 hover:shadow-lg">
                PHP
                <span> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li data-skill="sql" class="skill font-semibold flex flex-col cursor-pointer hover:text-blue-500 transition hover:bg-[var(--highlight)] rounded-lg p-1 hover:shadow-lg">
                SQL
                <span> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li data-skill="laravel" class="skill font-semibold flex flex-col cursor-pointer hover:text-blue-500 transition hover:bg-[var(--highlight)] rounded-lg p-1 hover:shadow-lg">
                <span>
                    <i class="bi bi-stars highlight"></i>
                    Laravel
                    <i class="bi bi-stars highlight"></i>
                </span>
                <span> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li data-skill="Csharp" class="skill font-semibold flex flex-col cursor-pointer hover:text-blue-500 transition hover:bg-[var(--highlight)] rounded-lg p-1 hover:shadow-lg">
                C#
                <span> 
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li data-skill="AspDotNet" class="skill font-semibold flex flex-col cursor-pointer hover:text-blue-500 transition hover:bg-[var(--highlight)] rounded-lg p-1 hover:shadow-lg">
                ASP.NET
                <span>
                    <i class="bi bi-star-fill"></i> 
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>

            </li>
        </ul>



        <!-- Base url opslaan voor de afbeelding -->
        <script>
            window.assetPath = "{{ asset('images/prog_talen') }}";
        </script>

        <!-- De rest van de javascript - json object en eventListener -->
        @vite('resources/js/home.js')
    </section>
@endsection