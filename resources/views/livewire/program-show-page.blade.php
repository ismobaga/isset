<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-8">{{ $program->name }}</h1>
    <div class="bg-white shadow-md rounded-lg p-6 flex flex-col md:flex-row">
        @if ($program->image)
            <div class="mb-4 md:mb-0 md:mr-6 w-full h-auto">
                <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->name }}"
                    class="w-full h-auto rounded-md">
            </div>
        @endif
        <div class="prose lg:prose-xl">
            {!! $program->description !!}
            @if ($program->program_info_pdf)
                <a href="{{ asset('storage/' . $program->program_info_pdf) }}"
                    class="inline-flex items-center px-4 py-2 bg-emerald-500 text-white text-sm font-medium rounded-md hover:bg-emerald-600">
                    <x-icon name="heroicon-o-arrow-down-tray" class="w-4 h-4 mr-2" />
                    Brochure
                </a>
            @endif
        </div>
    </div>
</div>
