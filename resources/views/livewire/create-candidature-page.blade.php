@assets
@endassets

<x-slot:header>

    <div class="bg-">
        <div class="max-w-screen-xl min-h- px-8 mx-auto flex flex-col lg:flex-row items-start">
            <!--Left Col-->
            <div
                class="flex flex-col w-full items-center  justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
                <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-darken">
                    Deposez votre candidature <span class="text-emerald-500">ISEST</span>


                </h1>
                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8">
                    ADMISSION</p>

            </div>

        </div>
        <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
            <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                    fill="currentColor"></path>
            </svg>
            <div class="bg-white w-full h-20 -mt-px"></div>
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
            <label for="firstname" class="block text-gray-700">First Name</label>
            <input type="text" id="firstname" wire:model="firstname" class="w-full px-3 py-2 border rounded">
            @error('firstname') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="lastname" class="block text-gray-700">Last Name</label>
            <input type="text" id="lastname" wire:model="lastname" class="w-full px-3 py-2 border rounded">
            @error('lastname') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" wire:model="email" class="w-full px-3 py-2 border rounded">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700">Phone</label>
            <input type="text" id="phone" wire:model="phone" class="w-full px-3 py-2 border rounded">
            @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="date_of_birth" class="block text-gray-700">Date of Birth</label>
            <input type="date" id="date_of_birth" wire:model="date_of_birth" class="w-full px-3 py-2 border rounded">
            @error('date_of_birth') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="place_of_birth" class="block text-gray-700">Place of Birth</label>
            <input type="text" id="place_of_birth" wire:model="place_of_birth" class="w-full px-3 py-2 border rounded">
            @error('place_of_birth') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="nationality" class="block text-gray-700">Nationality</label>
            <input type="text" id="nationality" wire:model="nationality" class="w-full px-3 py-2 border rounded">
            @error('nationality') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="program_id" class="block text-gray-700">Program</label>
            <select id="program_id" wire:model="program_id" class="w-full px-3 py-2 border rounded">
                <option value="">Select Program</option>
                @foreach ($programs as $program)
                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                @endforeach
            </select>
            @error('program_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="academic_year_id" class="block text-gray-700">Academic Year</label>
            <select id="academic_year_id" wire:model="academic_year_id" class="w-full px-3 py-2 border rounded">
                <option value="">Select Academic Year</option>
                @foreach ($academicYears as $academicYear)
                    <option value="{{ $academicYear->id }}">{{ $academicYear->year }}</option>
                @endforeach
            </select>
            @error('academic_year_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="photo" class="block text-gray-700">Photo</label>
            <input type="file" id="photo" wire:model="photo" class="w-full px-3 py-2 border rounded">
            @error('photo') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="diplomas" class="block text-gray-700">Diplomas</label>
            <input type="file" id="diplomas" wire:model="diplomas" class="w-full px-3 py-2 border rounded">
            @error('diplomas') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="transcripts" class="block text-gray-700">Transcripts</label>
            <input type="file" id="transcripts" wire:model="transcripts" class="w-full px-3 py-2 border rounded">
            @error('transcripts') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="certificate" class="block text-gray-700">Certificate</label>
            <input type="file" id="certificate" wire:model="certificate" class="w-full px-3 py-2 border rounded">
            @error('certificate') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="resume" class="block text-gray-700">Resume</label>
            <input type="file" id="resume" wire:model="resume" class="w-full px-3 py-2 border rounded">
            @error('resume') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="identity_document" class="block text-gray-700">Identity Document</label>
            <input type="file" id="identity_document" wire:model="identity_document" class="w-full px-3 py-2 border rounded">
            @error('identity_document') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="col-span-1 sm:col-span-2">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Submit</button>
        </div>
    </form>
</div>
