<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">>
    <div class="flex justify-between mb-5">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Partners</h1>
        <a href="{{ route('partners.create') }}"
            class="inline-flex items-center px-4 py-2 bg-violet-600 border border-transparent rounded-md font-semibold text-xs text-grey-800 uppercase tracking-widest hover:bg-violet-700 focus:bg-violet-700 active:bg-violet-800 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2 transition ease-in-out duration-150">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Ajouter Partner
        </a>
    </div>

    @if (session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @endif

    <div class="mb-4">
        <input wire:model.live="search" type="text" placeholder="Search partners..."
            class="w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-violet-500 focus:border-violet-500">
    </div>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Logo</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Website</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Display</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($partners as $partner)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                {{ $partner->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
                                    class="h-10 w-auto">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                @if ($partner->website)
                                    <a href="{{ $partner->website }}" target="_blank"
                                        class="text-violet-600 hover:text-violet-900 dark:text-violet-400 dark:hover:text-violet-300">
                                        {{ $partner->website }}
                                    </a>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                <button wire:click="toggleDisplay({{ $partner->id }})"
                                    class="relative inline-flex items-center h-6 rounded-full w-11 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500 {{ $partner->display ? 'bg-violet-800' : 'bg-gray-200' }}">
                                    <span class="sr-only">Toggle display</span>
                                    <span
                                        class="translate-x-0 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 {{ $partner->display ? 'translate-x-5' : 'translate-x-1' }}"></span>
                                </button>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('partners.edit', $partner) }}"
                                        class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300"><x-icon
                                            name="heroicon-o-pencil-square" class="w-4 h-4 mr-2" /></a>
                                    <button wire:click="confirmPartnerDeletion({{ $partner->id }})"
                                        class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
                                        <x-icon name="heroicon-o-trash" class="w-4 h-4 mr-2" />

                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-6 py-3">
            {{ $partners->links() }}
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <x-confirmation-modal wire:model="confirmingPartnerDeletion">
        <x-slot name="title">
            Delete Partner
        </x-slot>

        <x-slot name="content">
            Are you sure you want to delete this partner? This action cannot be undone.
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('confirmingPartnerDeletion', false)" wire:loading.attr="disabled">
                Cancel
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="deletePartner" wire:loading.attr="disabled">
                Delete Partner
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
