@assets
@endassets

<x-slot:header>

    <div class="bg-">
        <div class="max-w-screen-xl min-h- px-8 mx-auto flex flex-col lg:flex-row items-start">
            <!--Left Col-->
            <div
                class="flex flex-col w-full items-center  justify-center lg:pt-24 text-center lg:text-left mb-10 md:mb-">
                <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-darken">
                    Deposez votre candidature <span class="text-emerald-500">ISEST</span>


                </h1>
                {{-- <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8"> --}}
                {{-- ADMISSION</p> --}}

            </div>

        </div>
        <div class="text-emerald-100 -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
            <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                    fill="currentColor"></path>
            </svg>
            <div class="bg-gray-100 w-full h-20 -mt-px"></div>
        </div>
    </div>
</x-slot:header>

<div class="container mx-auto px-4">
    @if (session()->has('message'))
        <div id="flash-message" class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('flash-message').style.display = 'none';
            }, 5000); // 5 seconds
        </script>
    @endif

    <form wire:submit.prevent="submit" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="mb-4">
            <label for="firstname" class="block text-gray-700">Prénom</label>
            <input type="text" id="firstname" wire:model="firstname" class="w-full px-3 py-2 border rounded">
            @error('firstname')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="lastname" class="block text-gray-700">Nom</label>
            <input type="text" id="lastname" wire:model="lastname" class="w-full px-3 py-2 border rounded">
            @error('lastname')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Adresse e-mail</label>
            <input type="email" id="email" wire:model="email" class="w-full px-3 py-2 border rounded">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700">Téléphone</label>
            <input type="text" id="phone" wire:model="phone" class="w-full px-3 py-2 border rounded">
            @error('phone')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="date_of_birth" class="block text-gray-700">Date de naissance</label>
            <input type="date" id="date_of_birth" wire:model="date_of_birth" class="w-full px-3 py-2 border rounded">
            @error('date_of_birth')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="place_of_birth" class="block text-gray-700">Lieu de naissance</label>
            <input type="text" id="place_of_birth" wire:model="place_of_birth"
                class="w-full px-3 py-2 border rounded">
            @error('place_of_birth')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="nationality" class="block text-gray-700">Nationalité</label>
            <input type="text" id="nationality" wire:model="nationality" class="w-full px-3 py-2 border rounded">
            @error('nationality')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="program_id" class="block text-gray-700">Programme d'études</label>
            <select id="program_id" wire:model="program_id" class="w-full px-3 py-2 border rounded">
                <option value="">Select Program</option>
                @foreach ($programs as $program)
                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                @endforeach
            </select>
            @error('program_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="academic_year_id" class="block text-gray-700">Année académique</label>
            <select id="academic_year_id" wire:model="academic_year_id" class="w-full px-3 py-2 border rounded">
                <option value="">Sélectionnez l'année académique</option>
                @foreach ($academicYears as $academicYear)
                    <option value="{{ $academicYear->id }}">{{ $academicYear->name }}</option>
                @endforeach
            </select>
            @error('academic_year_id')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="photo" class="block text-gray-700">Photo</label>
            <label for="photo"
                class="flex flex-col items-center justify-center w-full h-16 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex  items-center justify-center pt-5 pb-5 ">
                    <svg class="w-6 h-6 mb-2 text-gray-500 dark:text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 px-2"><span class="font-semibold">Cliquez
                            pour télécharger</span></p>
                    <p class="text-xs text-gray-500 mb-2 dark:text-gray-400">(PNG or JPG)</p>
                </div>
            </label>
            <input type="file" id="photo" wire:model="photo" class="hidden">
            @error('photo')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="diplomas" class="block text-gray-700">Les diplômes</label>
            <label for="diplomas"
                class="flex flex-col items-center justify-center w-full h-16 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex  items-center justify-center pt-5 pb-5 ">
                    <svg class="w-6 h-6 mb-2 text-gray-500 dark:text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 px-2"><span class="font-semibold">Cliquez
                            pour télécharger</span></p>
                    <p class="text-xs text-gray-500 mb-2 dark:text-gray-400">(PNG, JPG or PDF)</p>
                </div>
            </label>
            <input type="file" id="diplomas" wire:model="diplomas" class="hidden">
            @error('diplomas')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="transcripts" class="block text-gray-700">Les relevés de notes</label>
            <label for="transcripts"
                class="flex flex-col items-center justify-center w-full h-16 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex  items-center justify-center pt-5 pb-5 ">
                    <svg class="w-6 h-6 mb-2 text-gray-500 dark:text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 px-2"><span class="font-semibold">Cliquez
                            pour télécharger</span></p>
                    <p class="text-xs text-gray-500 mb-2 dark:text-gray-400">(PNG, JPG or PDF)</p>
                </div>
            </label>
            <input type="file" id="transcripts" wire:model="transcripts" class="hidden">
            @error('transcripts')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="certificate" class="block text-gray-700">Les certificats</label>
            <label for="certificate"
                class="flex flex-col items-center justify-center w-full h-16 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex  items-center justify-center pt-5 pb-5 ">
                    <svg class="w-6 h-6 mb-2 text-gray-500 dark:text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 px-2"><span class="font-semibold">Cliquez
                            pour télécharger</span></p>
                    <p class="text-xs text-gray-500 mb-2 dark:text-gray-400">(PNG, JPG or PDF)</p>
                </div>
            </label>
            <input type="file" id="certificate" wire:model="certificate" class="hidden">
            @error('certificate')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="resume" class="block text-gray-700">Curriculum vitae</label>
            <label for="resume"
                class="flex flex-col items-center justify-center w-full h-16 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex  items-center justify-center pt-5 pb-5 ">
                    <svg class="w-6 h-6 mb-2 text-gray-500 dark:text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 px-2"><span class="font-semibold">Cliquez
                            pour télécharger</span></p>
                    <p class="text-xs text-gray-500 mb-2 dark:text-gray-400">(PNG, JPG or PDF)</p>
                </div>
            </label>
            <input type="file" id="resume" wire:model="resume" class="hidden">
            @error('resume')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="identity_document" class="block text-gray-700">Document d'identité</label>
            <div class="flex items-center justify-center w-full">
                <label for="identity_document"
                    class="flex flex-col items-center justify-center w-full h-16 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex  items-center justify-center pt-5 pb-5 ">
                        <svg class="w-6 h-6 mb-2 text-gray-500 dark:text-gray-400 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400 px-2"><span
                                class="font-semibold">Cliquez
                                pour télécharger</span></p>
                        <p class="text-xs text-gray-500 mb-2 dark:text-gray-400">(PNG, JPG or PDF)</p>
                    </div>
                    <input type="file" id="identity_document" wire:model="identity_document" class="hidden" />
                </label>
            </div>
            {{-- <input type="file" id="identity_document" wire:model="identity_document" --}}
            {{-- class="w-full px-3 py-2 border rounded"> --}}
            @error('identity_document')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-span-1 sm:col-span-2">
            <button type="submit" class="px-4 py-2 bg-emerald-700 text-white rounded">Soumettre la
                candidature</button>
        </div>
    </form>
</div>
