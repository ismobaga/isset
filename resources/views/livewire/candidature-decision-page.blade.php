<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <!-- Page header -->
    <div class="sm:flex sm:justify-between sm:items-center mb-8">

        <!-- Left: Title -->
        <div class="mb-4 sm:mb-0">
            <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Apply Decision</h1>
        </div>

    </div>

    <!-- Form -->
    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-sm border border-gray-200 dark:border-gray-700 p-6">
        <form wire:submit.prevent="save">
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label for="decision" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Decision</label>
                    <select id="decision" wire:model="decision" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                        <option value="">Select Decision</option>
                        <option value="Accepted">Accepted</option>
                        <option value="Declined">Declined</option>
                        <option value="Waiting list">Waiting list</option>
                    </select>
                    @error('decision')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="programInfo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Program Information</label>
                    <input type="file" id="programInfo" wire:model="programInfo" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                    @error('programInfo')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mt-6">
                <button type="submit" class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">Save</button>
            </div>
        </form>
    </div>

</div>
