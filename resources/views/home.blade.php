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


    <section 
    x-data="programmeerkennisComponent()" 
    class="my-2 p-4 rounded-lg shadow-lg text-center"
>
    <!-- Overzicht met programmeerkennis -->
    <template x-if="!selected">
        <div>
            <h3 class="text-xl font-medium">Ervaring met talen en frameworks</h3>
            <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
                <template x-for="(data, key) in skills" :key="key">
                    <li 
                        @click="selectSkill(key)"
                        class="skill font-semibold flex flex-col cursor-pointer transition rounded-lg p-1 hover:bg-[var(--highlight)] hover:shadow-lg"
                    >
                        <span x-html="highlightTitle(data.title)"></span>
                        <span>
                            <template x-for="i in starsTotal">
                                <i 
                                    class="bi"
                                    :class="starType(i, data.stars)"
                                ></i>
                            </template>
                        </span>
                    </li>
                </template>
            </ul>
        </div>
    </template>

    <!-- Detailweergave -->
    <template x-if="selected">
        <div 
            x-transition
            class="p-6 mt-6 animate-fadeIn max-w-5xl mx-auto flex flex-col lg:flex-row items-center justify-center gap-8"
        >
            <!-- Afbeeldingen -->
            <div 
                class="bg-[var(--primary)] rounded-xl shadow-lg flex flex-col justify-center items-center my-auto flex-shrink-0 text-center w-full lg:w-1/3 p-6"
            >
                <div class="flex flex-wrap justify-center items-center gap-4">
                    <template x-for="(img, i) in selected.images" :key="i">
                        <img 
                            :src="`${assetPath}/${img}`"
                            :alt="`${selected.title} afbeelding ${i+1}`"
                            class="object-contain mx-auto lg:mx-0 transition-transform duration-300 hover:scale-105"
                            :class="i === 0 ? 'w-40 h-40 lg:w-48 lg:h-48' : 'w-20 h-20 lg:w-28 lg:h-28'"
                        >
                    </template>
                </div>
            </div>

            <!-- Tekst -->
            <div class="flex flex-col justify-center w-full lg:w-2/3">
                <h3 class="text-3xl font-bold text-[var(--highlight)] mb-4" x-text="selected.title"></h3>
                <p class="whitespace-pre-line text-gray-700 dark:text-gray-300 text-justify leading-relaxed text-lg mb-8" x-text="selected.description"></p>
                <button 
                    @click="selected = null"
                    class="mx-auto w-fit items-center gap-2 px-5 py-2
                        bg-[var(--background)] hover:bg-[var(--highlight)] text-[var(--primary)]
                        hover:text-white rounded-lg font-semibold transition duration-300"
                >
                    <i class="bi bi-x-lg"></i> Sluiten
                </button>
            </div>
        </div>
    </template>
</section>

    <!-- Base url opslaan van de afbeelding voor home.js -->
    <script defer>
        window.assetPath = "{{ asset('images/prog_talen') }}";
    </script>
@endsection