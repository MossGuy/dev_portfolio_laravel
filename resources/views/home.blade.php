@extends('layouts.main')

@section('main')
    <section class="kader my-5 px-4 rounded-lg flex flex-col md:flex-row justify-between lg:justify-center lg:gap-[40px] items-center">
        <img src="{{ asset('images/ik.jpg') }}" class="w-[280px] md:w-[200px] h-70 object-cover object-[center_70%] rounded-xl mt-2 mb-1 md:mb-14 border border-3" alt="Foto van mijzelf"/>
        <ul class=" text-lg font-semibold p-4 md:mb-1 mb-10">
            <li class="text-2xl font-semibold">Ik ben:</li>
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
                <span class="highlight">Planten verzorger</span>
            </li>
            <li>
                <i class="bi bi-emoji-smile"></i>
                <span class="highlight">Anime fan</span>
            </li>
        </ul>
    </section>


    <section class="flex flex-col md:flex-row justify-between lg:justify-center lg:gap-[40px] items-start h-full my-2 p-4 rounded-lg shadow-lg">
        {{-- Mobiel: normale select --}}
        <select name="prog_talen" id="prog_talen" class="block md:hidden border-2 p-2 rounded-lg text-lg font-semibold w-full">
            <option value="" selected disabled>Programmeertalen kennis</option>
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="php">PHP</option>
            <option value="javascript">JavaScript</option>
            <option value="laravel">Laravel</option>
            <option value="tailwindcss">Tailwind CSS</option>
            <option value="bootstrap">Bootstrap</option>
            <option value="git">Git</option>
            <option value="mysql">MySQL</option>
            <option value="csharp">C#</option>
        </select>

        {{-- Desktop: always-open lijst --}}
        <div class="hidden md:block w-full md:w-[240px]">
            <p class="mb-2 text-lg font-semibold">Programmeertalen kennis</p>
            <div class="h-[300px] overflow-y-auto border-1 rounded-lg p-2">
                <!-- select element die permanent open is -->
            </div>
        </div>


        {{-- Afbeelding/beoordeling --}}
        <div class="w-[200px] aspect-square border p-2 rounded-lg flex flex-col items-center text-center">
            <p class="my-auto">afbeelding</p>
            <p class="mt-auto">beoordeling</p>
            <p>toelichting</p>
        </div>

    </section>


@endsection