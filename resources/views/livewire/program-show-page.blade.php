<div class="container mx-auto px-4 py-8">
    <nav class="flex mb-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/home" class="text-gray-700 hover:text-emerald-600 inline-flex items-center">
                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Accueil
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{ route('formations') }}"
                        class="ml-1 text-gray-700 hover:text-emerald-600 md:ml-2">Formations</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $program->name }}</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="md:flex">
            @if ($program->image)
                <div class="md:w-1/3 p-4">
                    <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->name }}"
                        class="w-full h-auto rounded-md object-cover">

                    <div class="mt-4 space-y-3">
                        @if ($program->duration)
                            <div class="flex items-center text-gray-700">
                                <x-icon name="heroicon-o-clock" class="w-5 h-5 mr-2 text-emerald-600" />
                                <span>Durée: {{ $program->duration }}</span>
                            </div>
                        @endif

                        <div class="flex items-center text-gray-700">
                            <x-icon name="heroicon-o-academic-cap" class="w-5 h-5 mr-2 text-emerald-600" />
                            <span>Niveau: {{ $program->niveau }}</span>
                        </div>

                        @if ($program->program_info_pdf)
                            <div class="mt-6">
                                <a href="{{ asset('storage/' . $program->program_info_pdf) }}"
                                    class="w-full inline-flex justify-center items-center px-4 py-2 bg-emerald-500 text-white font-medium rounded-md hover:bg-emerald-600 transition duration-150 ease-in-out">
                                    <x-icon name="heroicon-o-arrow-down-tray" class="w-5 h-5 mr-2" />
                                    Télécharger la brochure
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            <div class="md:w-2/3 p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $program->name }}</h1>

                <div class="prose max-w-none">
                    {!! $program->description !!}
                </div>

                @if ($program->conditions)
                    <div class="mt-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-3">Conditions d'admission</h2>
                        <div class="prose max-w-none">
                            {!! $program->conditions !!}
                        </div>
                    </div>
                @endif

                <div class="mt-8">
                    <a href="/candidature"
                        class="inline-flex items-center px-6 py-3 bg-emerald-500 text-white font-medium rounded-md hover:bg-emerald-600 transition duration-150 ease-in-out">
                        <x-icon name="heroicon-o-user-plus" class="w-5 h-5 mr-2" />
                        Postuler à ce programme
                    </a>
                </div>
            </div>
        </div>
    </div>

    @if ($relatedPrograms && $relatedPrograms->count() > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6">Programmes similaires</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($relatedPrograms as $related)
                    <div
                        class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        @if ($related->image)
                            <img src="{{ asset('storage/' . $related->image) }}" class="w-full h-48 object-cover"
                                alt="{{ $related->name }}">
                        @endif
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2">{{ $related->name }}</h3>
                            <p class="text-gray-600 line-clamp-3 mb-4">
                                {{ Str::limit(strip_tags($related->description), 100) }}</p>
                            <a href="{{ route('programs.show', $related->id) }}"
                                class="text-emerald-500 hover:text-emerald-700 font-medium">
                                En savoir plus →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
