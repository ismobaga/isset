<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-8">{{ $program->name }}</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <p class="text-gray-700 mb-4">{{ $program->description }}</p>
        @if ($program->image)
            <img src="{{ Storage::url($program->image) }}" alt="{{ $program->name }}" class="mb-4">
        @endif
        <p class="text-gray-700 mb-4"><strong>Duration:</strong> {{ $program->duration }}</p>
        <p class="text-gray-700 mb-4"><strong>Conditions:</strong> {{ $program->conditions }}</p>
        @if ($program->parent)
            <p class="text-gray-700 mb-4"><strong>Parent Program:</strong> {{ $program->parent->name }}</p>
        @endif
        @if ($program->program_info_pdf)
            <p class="text-gray-700 mb-4"><strong>Program Info PDF:</strong> <a href="{{ Storage::url($program->program_info_pdf) }}" class="text-emerald-500 underline" target="_blank">Download</a></p>
        @endif
    </div>
</div>
