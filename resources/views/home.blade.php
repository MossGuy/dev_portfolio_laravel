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


    <section class="my-2 p-4 rounded-lg shadow-lg text-center">
        <h3 class="text-xl font-medium">Talen en frameworks waar ik bekent mee ben</h3>
        <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
            <li class="font-semibold flex flex-col">
                HTML
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                CSS
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                Bootstrap
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                Tailwind
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                Javascript
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                MySQL
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                PHP
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                <span>
                    <i class="bi bi-stars highlight"></i>
                    Laravel
                    <i class="bi bi-stars highlight"></i>
                </span>
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                C#
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                ASP.NET
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
            <li class="font-semibold flex flex-col">
                Git / Github
                <span>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                </span>
            </li>
        </ul>
    </section>


@endsection