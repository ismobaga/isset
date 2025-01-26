    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Edit Academic Year</h1>
            </div>

        </div>

        <!-- Form -->
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-sm border border-gray-200 dark:border-gray-700 p-6">
            <form wire:submit.prevent="update">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="name"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" id="name" wire:model="name"
                            class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                        @error('name')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="active"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Active</label>
                        <input type="checkbox" id="active" wire:model="active" class="mt-1 block">
                        @error('active')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="is_open_for_admission"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Open for
                            Admission</label>
                        <input type="checkbox" id="is_open_for_admission" wire:model="is_open_for_admission"
                            class="mt-1 block">
                        @error('is_open_for_admission')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="start" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Start
                            Date</label>
                        <input type="date" id="start" wire:model="start"
                            class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                        @error('start')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="end" class="block text-sm font-medium text-gray-700 dark:text-gray-300">End
                            Date</label>
                        <input type="date" id="end" wire:model="end"
                            class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 dark:border-gray-700 rounded-md">
                        @error('end')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit"
                        class="btn bg-gray-900 text-gray-100 hover:bg-gray-800 dark:bg-gray-100 dark:text-gray-800 dark:hover:bg-white">Update</button>
                </div>
            </form>
        </div>

    </div>
