<div x-data="{ showFilters: false }" class="bg-gray-50">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-800 to-indigo-900 text-white">
        <div class="container px-4 py-16 mx-auto max-w-screen-xl">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Actualités et Événements</h1>
                <p class="text-xl opacity-90 mb-8">Découvrez les dernières actualités et événements de notre
                    établissement</p>

                <!-- Search Bar -->
                <div class="relative max-w-2xl mx-auto z-30">
                    <input wire:model.live.debounce.300ms="search" type="search"
                        class="w-full px-5 py-3 text-gray-700 bg-white border-0 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        placeholder="Rechercher un article...">
                    <button class="absolute right-3 top-3 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Wave Pattern -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 160" class="text-gray-50 w-full h-auto">
                <path fill="currentColor" fill-opacity="1"
                    d="M0,32L48,53.3C96,75,192,117,288,122.7C384,128,480,96,576,85.3C672,75,768,85,864,106.7C960,128,1056,160,1152,154.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl pb-16">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Sidebar/Filter -->
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-sm p-6 sticky top-24">
                    <div class="flex justify-between items-center mb-4 md:hidden">
                        <h3 class="font-bold text-lg">Filtres</h3>
                        <button @click="showFilters = !showFilters" class="text-gray-500">
                            <span x-show="!showFilters">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                            <span x-show="showFilters">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 15l7-7 7 7" />
                                </svg>
                            </span>
                        </button>
                    </div>

                    <div x-show="showFilters || window.innerWidth >= 768" class="space-y-6">
                        <div>
                            <h3 class="font-bold text-lg mb-4 text-gray-800">Catégories</h3>
                            <ul class="space-y-2">
                                <li>
                                    <button wire:click="$set('selectedCategory', '')"
                                        class="w-full text-left px-2 py-1 rounded {{ $selectedCategory === '' ? 'bg-yellow-100 text-yellow-800 font-medium' : 'hover:bg-gray-100' }}">
                                        Toutes les catégories
                                    </button>
                                </li>
                                @foreach ($categories as $category)
                                    <li>
                                        <button wire:click="$set('selectedCategory', '{{ $category->id }}')"
                                            class="w-full text-left px-2 py-1 rounded flex justify-between {{ $selectedCategory == $category->id ? 'bg-yellow-100 text-yellow-800 font-medium' : 'hover:bg-gray-100' }}">
                                            <span>{{ $category->name }}</span>
                                            <span
                                                class="bg-gray-100 text-gray-700 text-xs rounded-full px-2 py-0.5">{{ $category->posts_count }}</span>
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-bold text-lg mb-4 text-gray-800">Affichage</h3>
                            <div class="flex gap-2">
                                <button wire:click="$set('perPage', 9)"
                                    class="px-3 py-1 rounded {{ $perPage === 9 ? 'bg-yellow-100 text-yellow-800 font-medium' : 'bg-gray-100' }}">
                                    9
                                </button>
                                <button wire:click="$set('perPage', 15)"
                                    class="px-3 py-1 rounded {{ $perPage === 15 ? 'bg-yellow-100 text-yellow-800 font-medium' : 'bg-gray-100' }}">
                                    15
                                </button>
                                <button wire:click="$set('perPage', 30)"
                                    class="px-3 py-1 rounded {{ $perPage === 30 ? 'bg-yellow-100 text-yellow-800 font-medium' : 'bg-gray-100' }}">
                                    30
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="md:w-3/4">
                <div wire:loading class="w-full py-8 flex justify-center">
                    <div class="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-yellow-500"></div>
                </div>

                <div wire:loading.remove>
                    @if ($posts->isEmpty())
                        <div class="bg-white rounded-lg shadow-sm p-8 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h3 class="text-xl font-bold text-gray-700 mb-1">Aucun résultat trouvé</h3>
                            <p class="text-gray-500">Essayez de modifier vos critères de recherche ou de réinitialiser
                                les filtres.</p>
                            @if ($search || $selectedCategory)
                                <button wire:click="$set('search', ''); $set('selectedCategory', '')"
                                    class="mt-4 px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md">
                                    Réinitialiser les filtres
                                </button>
                            @endif
                        </div>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($posts as $post)
                                <div
                                    class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 flex flex-col">
                                    <a href="{{ route('posts.show', $post->id) }}">
                                        <img class="w-full h-48 object-cover object-center hover:scale-105 transition-transform duration-300"
                                            src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                                    </a>
                                    <div class="p-5 flex flex-col flex-grow">
                                        <div class="flex items-center gap-2 mb-3">
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">{{ $post->category->name }}</span>
                                            <span
                                                class="text-gray-500 text-xs">{{ $post->created_at->format('d M Y') }}</span>
                                        </div>
                                        <a href="{{ route('posts.show', $post->id) }}" class="hover:text-blue-700">
                                            <h2 class="text-gray-800 font-bold text-xl mb-2 line-clamp-2">
                                                {{ $post->title }}</h2>
                                        </a>
                                        <p class="text-gray-500 mb-4 flex-grow line-clamp-3">
                                            {!! str($post->content)->limit(150) !!}</p>
                                        <a href="{{ route('posts.show', $post->id) }}"
                                            class="text-blue-700 font-medium hover:underline inline-flex items-center">
                                            Lire plus
                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-8">
                            {{ $posts->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
