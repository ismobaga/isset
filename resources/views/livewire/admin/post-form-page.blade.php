<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold mb-6">
            {{ $isEdit ? 'Edit Post' : 'Create Post' }}
        </h1>

        <form wire:submit="save" class="space-y-6">
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                <input type="text" wire:model="title" id="title"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                @error('post.title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Category -->
            <div>
                <label for="category_id"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Category</label>
                <select wire:model="category_id" id="category_id"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                    <option value="">Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('post.category_id')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    {{ $isEdit ? 'Image (leave empty to keep current image)' : 'Image' }}
                </label>
                <input type="file" wire:model="image" id="image" accept="image/*" class="mt-1 block w-full">
                @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <div wire:loading wire:target="image" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                    Uploading...
                </div>

                @if ($image)
                    <div class="mt-2">
                        <img src="{{ $image->temporaryUrl() }}" class="w-32 h-32 object-cover rounded">
                    </div>
                @elseif ($isEdit && $post->image)
                    <div class="mt-2">
                        <img src="{{ Storage::url($post->image) }}" class="w-32 h-32 object-cover rounded">
                    </div>
                @endif
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Content</label>
                @livewire('livewire-quill', [
                    'quillId' => 'content',
                    'data' => $post->content,
                    'placeholder' => 'Write your post content here...',
                    'classes' => 'bg-white text-primary w-full',
                    // 'mergeToolbar' => true,
                ])
                @error('content')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <a href="{{ route('admin.posts.index') }}"
                    class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-gray-700 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 mr-3">
                    Cancel
                </a>
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-emerald-500 border border-transparent rounded-md font-semibold text-white hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                    {{ $isEdit ? 'Update' : 'Create' }}
                </button>
            </div>
        </form>
    </div>
</div>
