<div class="container mx-auto px-4">
    <div class="flex justify-between mb-5">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            {{ $isCreating ? 'Add Partner' : 'Edit Partner' }}
        </h1>
        <a href="{{ route('partners.index') }}"
            class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                </path>
            </svg>
            Retour vers partenaire
        </a>
    </div>

    <form wire:submit.prevent="save" class="space-y-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <x-label for="name" :value="__('Name')" />
                    <x-input wire:model="name" id="name" class="block mt-1 w-full" type="text" required
                        autofocus />
                    @error('name')
                        <span class="text-red-500 mt-2">{{ $message }}</span>
                    @enderror

                </div>

                <div>
                    <x-label for="website" :value="__('Website URL')" />
                    <x-input wire:model="website" id="website" class="block mt-1 w-full" type="url"
                        placeholder="https://example.com" />
                    @error('website')
                        <span class="text-red-500 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <x-label for="logo" :value="__('Logo')" />
                    <input type="file" wire:model="newLogo" id="logo"
                        class="block mt-1 w-full border border-gray-300 dark:border-gray-700 rounded-md shadow-sm py-2 px-3" />
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Maximum file size: 1MB. Recommended
                        dimensions: 200x100px</p>
                    @error('newLogo')
                        <span class="text-red-500 mt-2">{{ $message }}</span>
                    @enderror

                    @if ($newLogo)
                        <div class="mt-4">
                            <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300">Preview:</h3>
                            <img src="{{ $newLogo->temporaryUrl() }}" class="mt-2 h-16 w-auto">
                        </div>
                    @elseif (!$isCreating && $logo)
                        <div class="mt-4">
                            <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300">Current Logo:</h3>
                            <img src="{{ asset('storage/' . $logo) }}" class="mt-2 h-16 w-auto">
                        </div>
                    @endif
                </div>

                <div>
                    <div class="flex items-center mt-4">
                        <input id="display" type="checkbox" wire:model="display"
                            class="rounded border-gray-300 text-violet-600 shadow-sm focus:border-violet-300 focus:ring focus:ring-violet-200 focus:ring-opacity-50">
                        <x-label for="display" class="ml-2" :value="__('Display on website')" />
                    </div>
                    @error('display')
                        <span class="text-red-500 mt-2">{{ $message }}</span>
                    @enderror

                </div>
            </div>
        </div>

        <div class="flex justify-end">
            <x-button type="button" onclick="history.back();" class="mr-2">
                Cancel
            </x-button>
            <x-button type="submit">
                {{ $isCreating ? 'Créer un partenaire' : 'Mettre à jour le partenaire' }}
            </x-button>
        </div>
    </form>
</div>
