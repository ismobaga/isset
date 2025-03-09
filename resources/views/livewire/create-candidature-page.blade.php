@assets
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endassets

<x-slot:header>
    <div class="bg-gradient-to-br from-emerald-600 to-emerald-800 text-white">
        <div class="max-w-screen-xl px-8 mx-auto py-12 lg:py-16">
            <div class="flex flex-col items-center text-center">
                <h1 data-aos="fade-right" data-aos-once="true" class="text-4xl md:text-5xl font-bold leading-tight mb-4">
                    Candidature <span class="text-emerald-200">ISEST</span>
                </h1>
                <p data-aos="fade-up" data-aos-once="true" data-aos-delay="200" class="text-xl text-emerald-100">
                    Complétez le formulaire ci-dessous pour soumettre votre candidature
                </p>

                <!-- Progress Steps -->
                <div class="w-full max-w-3xl mt-8">
                    <div class="flex justify-between">
                        <div class="flex flex-col items-center">
                            <div
                                class="w-8 h-8 rounded-full bg-white text-emerald-700 font-bold flex items-center justify-center">
                                1</div>
                            <div class="text-sm mt-1 text-emerald-100">Informations personnelles</div>
                        </div>
                        <div class="flex flex-col items-center">
                            <div
                                class="w-8 h-8 rounded-full bg-white/20 text-white font-bold flex items-center justify-center">
                                2</div>
                            <div class="text-sm mt-1 text-emerald-100">Programme</div>
                        </div>
                        <div class="flex flex-col items-center">
                            <div
                                class="w-8 h-8 rounded-full bg-white/20 text-white font-bold flex items-center justify-center">
                                3</div>
                            <div class="text-sm mt-1 text-emerald-100">Documents</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-emerald-100 z-40 relative">
            <svg class="h-20 w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                    fill="currentColor"></path>
            </svg>
        </div>
    </div>
</x-slot:header>

<div class="container mx-auto px-4 py-10" x-data="{ step: 1 }">
    @if (session()->has('message'))
        <div id="flash-message" class="bg-green-500 text-white p-4 rounded-lg mb-6 flex justify-between items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                {{ session('message') }}
            </div>
            <button onclick="document.getElementById('flash-message').style.display = 'none'">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('flash-message').style.display = 'none';
            }, 5000);
        </script>
    @endif

    <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <form wire:submit.prevent="submit">
            <!-- Step Navigation -->
            <div class="bg-gray-50 px-6 py-4 border-b">
                <div class="hidden sm:flex justify-between">
                    <button type="button" @click="step = 1" class="font-medium"
                        :class="step === 1 ? 'text-emerald-700' : 'text-gray-500'">
                        1. Informations personnelles
                    </button>
                    <button type="button" @click="step = 2" class="font-medium"
                        :class="step === 2 ? 'text-emerald-700' : 'text-gray-500'">
                        2. Programme d'études
                    </button>
                    <button type="button" @click="step = 3" class="font-medium"
                        :class="step === 3 ? 'text-emerald-700' : 'text-gray-500'">
                        3. Documents requis
                    </button>
                </div>
                <div class="sm:hidden">
                    <select @change="step = $event.target.value"
                        class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-emerald-500 focus:border-emerald-500">
                        <option value="1" :selected="step === 1">1. Informations personnelles</option>
                        <option value="2" :selected="step === 2">2. Programme d'études</option>
                        <option value="3" :selected="step === 3">3. Documents requis</option>
                    </select>
                </div>
            </div>

            <!-- Step 1: Personal Information -->
            <div x-show="step === 1" class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Informations personnelles</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                        <input type="text" id="firstname" wire:model="firstname"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500">
                        @error('firstname')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <input type="text" id="lastname" wire:model="lastname"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500">
                        @error('lastname')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse
                            e-mail</label>
                        <input type="email" id="email" wire:model="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500">
                        @error('email')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                        <input type="text" id="phone" wire:model="phone"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500">
                        @error('phone')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="date_of_birth" class="block text-sm font-medium text-gray-700 mb-1">Date de
                            naissance</label>
                        <input type="date" id="date_of_birth" wire:model="date_of_birth"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500">
                        @error('date_of_birth')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="place_of_birth" class="block text-sm font-medium text-gray-700 mb-1">Lieu de
                            naissance</label>
                        <input type="text" id="place_of_birth" wire:model="place_of_birth"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500">
                        @error('place_of_birth')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="nationality"
                            class="block text-sm font-medium text-gray-700 mb-1">Nationalité</label>
                        <input type="text" id="nationality" wire:model="nationality"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500">
                        @error('nationality')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <button type="button" @click="step = 2"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        Continuer
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Step 2: Program Information -->
            <div x-show="step === 2" class="p-6" x-cloak>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Programme d'études</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="col-span-1 sm:col-span-2">
                        <label for="program_id" class="block text-sm font-medium text-gray-700 mb-1">Programme
                            d'études</label>
                        <select id="program_id" wire:model="program_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500">
                            <option value="">Sélectionnez un programme</option>
                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->name }}</option>
                            @endforeach
                        </select>
                        @error('program_id')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-1 sm:col-span-2">
                        <label for="academic_year_id" class="block text-sm font-medium text-gray-700 mb-1">Année
                            académique</label>
                        <select id="academic_year_id" wire:model="academic_year_id"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-emerald-500 focus:border-emerald-500">
                            <option value="">Sélectionnez l'année académique</option>
                            @foreach ($academicYears as $academicYear)
                                <option value="{{ $academicYear->id }}">{{ $academicYear->name }}</option>
                            @endforeach
                        </select>
                        @error('academic_year_id')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mt-8 flex justify-between">
                    <button type="button" @click="step = 1"
                        class="inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Précédent
                    </button>
                    <button type="button" @click="step = 3"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        Continuer
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Step 3: Required Documents -->
            <div x-show="step === 3" class="p-6" x-cloak>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Documents requis</h2>

                <div class="space-y-8">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h3 class="text-lg font-semibold mb-3 text-gray-700">Photo d'identité</h3>
                        <div class="flex items-center">
                            <label for="photo"
                                class="relative flex-1 cursor-pointer bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 p-6 text-center hover:bg-gray-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-emerald-500 focus-within:ring-offset-2">
                                <div class="flex flex-col items-center justify-center space-y-1">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4h-12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="text-sm font-medium text-gray-600">Cliquez pour télécharger</span>
                                    <span class="text-xs text-gray-500">(PNG or JPG)</span>
                                </div>
                                <input id="photo" type="file" wire:model="photo" class="sr-only">
                            </label>
                            @if ($photo)
                                <div class="ml-4 flex-shrink-0">
                                    <div
                                        class="h-24 w-24 rounded-md border border-gray-200 bg-gray-100 flex items-center justify-center">
                                        <img class="max-h-full max-w-full object-cover"
                                            src="{{ $photo->temporaryUrl() }}" alt="Photo preview">
                                    </div>
                                </div>
                            @endif
                        </div>
                        @error('photo')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h3 class="text-lg font-semibold mb-3 text-gray-700">Diplômes</h3>
                            <label for="diplomas"
                                class="block cursor-pointer bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 p-6 text-center hover:bg-gray-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-emerald-500 focus-within:ring-offset-2">
                                <div class="flex flex-col items-center justify-center space-y-1">
                                    <svg class="h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <span class="text-sm font-medium text-gray-600">Cliquez pour télécharger</span>
                                    <span class="text-xs text-gray-500">(PDF, PNG ou JPG)</span>
                                </div>
                                <input id="diplomas" type="file" wire:model="diplomas" class="hidden">
                            </label>
                            @error('diplomas')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h3 class="text-lg font-semibold mb-3 text-gray-700">Relevés de notes</h3> <label
                                for="transcripts"
                                class="block cursor-pointer bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 p-6 text-center hover:bg-gray-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-emerald-500 focus-within:ring-offset-2">
                                <div class="flex flex-col items-center justify-center space-y-1"> <svg
                                        class="h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg> <span class="text-sm font-medium text-gray-600">Cliquez pour
                                        télécharger</span> <span class="text-xs text-gray-500">(PDF, PNG ou JPG)</span>
                                </div> <input id="transcripts" type="file" wire:model="transcripts"
                                    class="hidden">
                            </label> @error('transcripts')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h3 class="text-lg font-semibold mb-3 text-gray-700">Certificats</h3> <label
                                for="certificate"
                                class="block cursor-pointer bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 p-6 text-center hover:bg-gray-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-emerald-500 focus-within:ring-offset-2">
                                <div class="flex flex-col items-center justify-center space-y-1"> <svg
                                        class="h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg> <span class="text-sm font-medium text-gray-600">Cliquez pour
                                        télécharger</span> <span class="text-xs text-gray-500">(PDF, PNG ou JPG)</span>
                                </div> <input id="certificate" type="file" wire:model="certificate"
                                    class="hidden">
                            </label> @error('certificate')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h3 class="text-lg font-semibold mb-3 text-gray-700">CV</h3> <label for="resume"
                                class="block cursor-pointer bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 p-6 text-center hover:bg-gray-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-emerald-500 focus-within:ring-offset-2">
                                <div class="flex flex-col items-center justify-center space-y-1"> <svg
                                        class="h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg> <span class="text-sm font-medium text-gray-600">Cliquez pour
                                        télécharger</span> <span class="text-xs text-gray-500">(PDF)</span> </div>
                                <input id="resume" type="file" wire:model="resume" class="hidden">
                            </label> @error('resume')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="border border-gray-200 rounded-lg p-4">
                            <h3 class="text-lg font-semibold mb-3 text-gray-700">Document d'identité</h3> <label
                                for="identity_document"
                                class="block cursor-pointer bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 p-6 text-center hover:bg-gray-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-emerald-500 focus-within:ring-offset-2">
                                <div class="flex flex-col items-center justify-center space-y-1"> <svg
                                        class="h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                    </svg> <span class="text-sm font-medium text-gray-600">Cliquez pour
                                        télécharger</span> <span class="text-xs text-gray-500">(PDF, PNG ou JPG)</span>
                                </div> <input id="identity_document" type="file" wire:model="identity_document"
                                    class="hidden">
                            </label> @error('identity_document')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-8 flex justify-between"> <button type="button" @click="step = 2"
                        class="inline-flex items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Précédent
                    </button>
                    <button type="submit"
                        class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 relative">
                        <span>Soumettre la candidature</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <span wire:loading wire:target="submit"
                            class="absolute inset-0 flex items-center justify-center bg-emerald-600 rounded-md">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Form completion tips -->
    <div class="max-w-5xl mx-auto mt-8 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3 flex-1">
                <h3 class="text-sm font-medium text-blue-800">Conseils pour compléter votre candidature</h3>
                <div class="mt-2 text-sm text-blue-700">
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Assurez-vous que tous les documents sont clairement lisibles</li>
                        <li>Les formats acceptés sont PNG, JPG et PDF</li>
                        <li>Taille maximale des fichiers : 2Mo</li>
                        <li>Complétez tous les champs obligatoires marqués par un astérisque (*)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        // Show file name after upload
        const fileInputs = ['photo', 'diplomas', 'transcripts', 'certificate', 'resume', 'identity_document'];
        fileInputs.forEach(input => {
            document.getElementById(input)?.addEventListener('change', function(e) {
                const fileName = e.target.files[0]?.name;
                if (fileName) {
                    // You can update UI to show the filename if needed
                    console.log(`File selected for ${input}: ${fileName}`);
                }
            });
        });

        // Update progress steps when moving between form sections
        Livewire.on('stepChanged', (step) => {
            document.querySelectorAll('.progress-step').forEach((el, index) => {
                if (index < step) {
                    el.classList.add('bg-emerald-500');
                    el.classList.remove('bg-gray-300');
                } else {
                    el.classList.remove('bg-emerald-500');
                    el.classList.add('bg-gray-300');
                }
            });
        });
    });
</script>
