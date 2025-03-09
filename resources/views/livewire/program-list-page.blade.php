<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-2">Formations</h1>
    <p class="text-gray-600 mb-8">Découvrez nos programmes de formation pour construire votre avenir dans le domaine de
        la santé.</p>

    <div class="mb-8">
        <div class="flex flex-wrap items-center gap-4">
            <div class="font-medium text-gray-700">Filtrer par niveau:</div>
            <button wire:click="filterByLevel('all')"
                class="@if ($selectedLevel === 'all') bg-emerald-500 text-white @else bg-gray-100 text-gray-800 hover:bg-gray-200 @endif px-4 py-2 rounded-md transition duration-150 ease-in-out">
                Tous
            </button>
            @foreach ($levels as $level)
                <button wire:click="filterByLevel('{{ $level }}')"
                    class="@if ($selectedLevel === $level) bg-emerald-500 text-white @else bg-gray-100 text-gray-800 hover:bg-gray-200 @endif px-4 py-2 rounded-md transition duration-150 ease-in-out">
                    {{ $level }}
                </button>
            @endforeach
        </div>
    </div>

    @if ($programs->isEmpty())
        <div class="flex flex-col items-center justify-center py-12">
            <x-icon name="heroicon-o-magnifying-glass" class="w-16 h-16 text-gray-300" />
            <h3 class="mt-2 text-lg font-medium text-gray-900">Aucun programme trouvé</h3>
            <p class="mt-1 text-gray-500">Veuillez essayer un autre critère de recherche.</p>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($programs as $program)
                <div
                    class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    @if ($program->image)
                        <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->name }}"
                            class="w-full h-48 object-cover">
                    @else
                        <div class="h-48 bg-gray-200 flex items-center justify-center">
                            <x-icon name="heroicon-o-academic-cap" class="w-12 h-12 text-gray-400" />
                        </div>
                    @endif

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="bg-emerald-100 text-emerald-800 text-xs font-medium px-3 py-1 rounded-full">{{ $program->niveau }}</span>
                            @if ($program->duration)
                                <span class="text-gray-600 text-sm flex items-center">
                                    <x-icon name="heroicon-o-clock" class="w-4 h-4 mr-1" />
                                    {{ $program->duration }}
                                </span>
                            @endif
                        </div>

                        <h2 class="text-xl font-semibold mb-3 text-gray-800">{{ $program->name }}</h2>

                        <div class="text-gray-600 mb-4 line-clamp-3">
                            {!! Str::limit(strip_tags($program->description), 150) !!}
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('programs.show', $program->id) }}"
                                class="text-emerald-500 hover:text-emerald-700 font-medium inline-flex items-center">
                                En savoir plus
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>

                            @if ($program->program_info_pdf)
                                <a href="{{ asset('storage/' . $program->program_info_pdf) }}"
                                    class="text-gray-600 hover:text-gray-900 inline-flex items-center">
                                    <x-icon name="heroicon-o-document" class="w-4 h-4 mr-1" />
                                    Brochure
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
