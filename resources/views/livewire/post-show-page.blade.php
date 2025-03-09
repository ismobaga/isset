<div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">
    <div class="max-w-4xl mx-auto">
        <img class="w-full h-64 object-cover rounded-lg mb-6" src="{{ url($post->image) }}" alt="{{ $post->title }}">
        <span
            class="bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full">{{ $post->category->name }}</span>
        <h1 class="text-darken text-3xl font-semibold my-4">{{ $post->title }}</h1>
        <p class="text-gray-500">{{ $post->content }}</p>
    </div>
</div>
