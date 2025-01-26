<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-8">Contactez-nous</h1>
    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="submit" class="grid grid-cols-1 gap-4">
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nom</label>
            <input type="text" id="name" wire:model="name" class="w-full px-3 py-2 border rounded">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" wire:model="email" class="w-full px-3 py-2 border rounded">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700">Message</label>
            <textarea id="message" wire:model="message" class="w-full px-3 py-2 border rounded"></textarea>
            @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit" class="px-4 py-2 bg-emerald-500 text-white rounded">Envoyer</button>
        </div>
    </form>
</div>
