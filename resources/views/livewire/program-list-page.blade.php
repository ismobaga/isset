<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-8">Programmes</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($programs as $program)
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2">{{ $program->name }}</h2>
                <p class="text-gray-700 mb-4">{{ $program->description }}</p>
                <a href="{{ route('programs.show', $program->id) }}" class="text-emerald-500 underline">En savoir plus</a>
            </div>
        @endforeach
    </div>
</div>
