<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page Title -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Enrolled Courses</h1>
            </div>
        </div>

        <!-- Enrolled Courses -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($courses as $course)
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <img src="{{ $course['courseimage'] }}" alt="{{ $course['fullname'] }}"
                        class="w-full h-32 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">{{ $course['fullname'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $course['shortname'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
