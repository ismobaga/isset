<x-app-layout>
    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">
        <h1 class="text-darken text-2xl font-semibold text-center my-8">Tous les articles</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{ url($post->image) }}" alt="{{ $post->title }}">
                    <div class="p-4">
                        <span
                            class="bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full">{{ $post->category->name }}</span>
                        <h2 class="text-gray-800 font-semibold my-3 text-xl">{{ $post->title }}</h2>
                        <p class="text-gray-500 mb-3">{{ str($post->content)->limit(100) }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="underline">En savoir plus</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
