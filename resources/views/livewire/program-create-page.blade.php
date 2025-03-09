{{-- <x-app-layout> --}}
<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <!-- Page header -->
    <div class="sm:flex sm:justify-between sm:items-center mb-8">

        <!-- Left: Title -->
        <div class="mb-4 sm:mb-0">
            <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Create Program</h1>
        </div>

    </div>

    <!-- Form -->
    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-sm border border-gray-200 dark:border-gray-700 p-6">
        <form wire:submit.prevent="save">
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                    <input type="text" id="name" wire:model="name"
                        class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                    @error('name')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="niveau"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Niveau</label>
                    <input type="text" id="niveau" wire:model="niveau"
                        class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                    @error('niveau')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="description"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                    @livewire('livewire-quill', [
                        'quillId' => 'description',
                        'data' => $description,
                        'placeholder' => 'Type something...',
                        'classes' => 'bg-white text-primary w-full',
                        // optional classes that can be added to the editor, that are added for this instance only
                        // 'mergeToolbar' => true, // optional, if you want to merge the toolbar with the default toolbar configuration,
                    ])
                    @error('description')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="duration"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Duration</label>
                    <input type="text" id="duration" wire:model="duration"
                        class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                    @error('duration')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="conditions"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Conditions</label>
                    <textarea id="conditions" wire:model="conditions"
                        class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md"></textarea>
                    @error('conditions')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="image"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Image</label>
                    <input type="file" id="image" wire:model="image"
                        class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                    @error('image')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="programInfoPdf"
                        class="block text-sm font-medium text-gray-700 dark:text-gray-300">Program Info PDF</label>
                    <input type="file" id="programInfoPdf" wire:model="programInfoPdf"
                        class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                    @error('programInfoPdf')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mt-6">
                <button type="submit"
                    class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">Save</button>
            </div>
        </form>
    </div>

</div>
{{-- </x-app-layout> --}}
