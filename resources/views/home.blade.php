@extends('layouts.main')

@section('main')
    <section class="kader my-5 rounded-lg flex flex-col md:flex-row justify-evenly items-center">
        <img src="{{ asset('images/ik.jpg') }}" class="w-[280px] md:w-[200px] h-70 object-cover object-[center_70%] rounded-lg mt-2 mb-1 md:mb-14 border border-3" alt="Foto van mijzelf"/>
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


    <section class="flex flex-col items-center justify-center h-full my-2 p-4 rounded-lg shadow-lg">
        <p>sectie met programmeer talen / frameworks die ik ken</p>
    </section>
@endsection