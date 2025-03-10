<div class="bg-gray-50">
    <!-- Post Header Section -->
    <div class="relative bg-gradient-to-r from-blue-800 to-indigo-900 text-white">
        <div class="container px-4 py-16 mx-auto max-w-screen-xl">
            <div class="max-w-3xl mx-auto text-center">
                <span class="bg-yellow-300 text-darken font-semibold px-4 py-1 text-sm rounded-full inline-block mb-4">
                    {{ $post->category->name }}
                </span>
                <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ $post->title }}</h1>
                <div class="flex items-center justify-center gap-4 text-sm opacity-90">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ $post->created_at->format('d M Y') }}
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ ceil(str_word_count($post->content) / 200) }} min read
                    </div>
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

    <!-- Post Content Section -->
    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl pb-16">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Main Content -->
            <div class="lg:w-2/3">
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <img class="w-full h-80 object-cover" src="{{ Storage::url($post->image) }}"
                        alt="{{ $post->title }}">

                    <div class="p-6 md:p-8">
                        <!-- Post Content -->
                        <div class="prose max-w-none prose-lg prose-blue">
                            <p class="text-gray-700">{!! $post->content !!}</p>
                        </div>

                        <!-- Tags -->
                        <div class="border-t border-gray-200 mt-8 pt-6">
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded">
                                    {{ $post->category->name }}
                                </span>
                                <!-- Add more tags if available -->
                            </div>
                        </div>

                        <!-- Social Sharing -->
                        <div class="border-t border-gray-200 mt-6 pt-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Partagez cet article</h3>
                            <div class="flex gap-3">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                    target="_blank" class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}"
                                    target="_blank" class="bg-sky-500 text-white p-2 rounded-full hover:bg-sky-600">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                        </path>
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}"
                                    target="_blank" class="bg-blue-800 text-white p-2 rounded-full hover:bg-blue-900">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="mailto:?subject={{ urlencode($post->title) }}&body={{ urlencode(request()->url()) }}"
                                    class="bg-gray-600 text-white p-2 rounded-full hover:bg-gray-700">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post Navigation -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                    @if ($previous = \App\Models\Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first())
                        <a href="{{ route('posts.show', $previous->id) }}"
                            class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md flex items-start transition-shadow duration-300">
                            <div class="mr-4 text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-sm text-gray-500">Article précédent</span>
                                <h4 class="font-medium text-gray-800 line-clamp-1">{{ $previous->title }}</h4>
                            </div>
                        </a>
                    @endif

                    @if ($next = \App\Models\Post::where('id', '>', $post->id)->orderBy('id', 'asc')->first())
                        <a href="{{ route('posts.show', $next->id) }}"
                            class="bg-white p-4 rounded-lg shadow-sm hover:shadow-md flex items-start justify-end text-right transition-shadow duration-300">
                            <div>
                                <span class="text-sm text-gray-500">Article suivant</span>
                                <h4 class="font-medium text-gray-800 line-clamp-1">{{ $next->title }}</h4>
                            </div>
                            <div class="ml-4 text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </a>
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:w-1/3 space-y-6">
                <!-- Related Posts -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="font-bold text-lg mb-4 text-gray-800">Articles similaires</h3>
                    <div class="space-y-4">
                        @foreach (\App\Models\Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->latest()->take(3)->get() as $relatedPost)
<a href="{{ route('posts.show', $relatedPost->id) }}" class="flex items-center gap-3 group">
                                <img class="w-20 h-20 object-cover rounded" src="{{ Storage::url($relatedPost->image) }}" alt="{{ $relatedPost->title }}">
                                <div>
                                    <h4 class="font-medium text-gray-800 group-hover:text-blue-700 line-clamp-2">{{ $relatedPost->title }}</h4>
                                    <span class="text-xs text-gray-500">{{ $relatedPost->created_at->format('d M Y') }}</span>
                                </div>
                            </a>
@endforeach
                    </div>
                </div>

                <!-- Categories -->
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <h3 class="font-bold text-lg mb-4 text-gray-800">Catégories</h3>
                    <div class="space-y-2">
                        @foreach (\App\Models\Category::withCount('posts')->get() as $category)
                            <a href="{{ route('posts.index', ['selectedCategory' => $category->id]) }}"
                                class="flex justify-between items-center px-3 py-2 rounded hover:bg-gray-100 {{ $post->category_id == $category->id ? 'bg-yellow-100 text-yellow-800 font-medium' : '' }}">
                                <span>{{ $category->name }}</span>
                                <span
                                    class="bg-gray-100 text-gray-700 text-xs rounded-full px-2 py-0.5">{{ $category->posts_count }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
