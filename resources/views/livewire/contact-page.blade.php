<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-8 text-gray-800">Contactez-nous</h1>

    @if (session()->has('message'))
        <div id="flash-message" class="bg-green-500 text-white p-4 rounded mb-6 shadow-md flex justify-between items-center">
            <span>{{ session('message') }}</span>
            <button onclick="document.getElementById('flash-message').style.display = 'none'">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('flash-message').style.display = 'none';
            }, 5000); // 5 seconds
        </script>
    @endif

    <div class="bg-white rounded-lg shadow-md p-6 md:p-8">
        <form wire:submit.prevent="submit" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="mb-4 md:col-span-1">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nom</label>
                <input type="text" id="name" wire:model.defer="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4 md:col-span-1">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" wire:model.defer="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4 md:col-span-1">
                <label for="phone" class="block text-gray-700 font-medium mb-2">Téléphone (optionnel)</label>
                <input type="tel" id="phone" wire:model.defer="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                @error('phone') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4 md:col-span-1">
                <label for="subject" class="block text-gray-700 font-medium mb-2">Sujet</label>
                <select id="subject" wire:model.defer="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500">
                    <option value="">Sélectionnez un sujet</option>
                    <option value="information">Demande d'information</option>
                    <option value="devis">Demande de devis</option>
                    <option value="support">Support technique</option>
                    <option value="autre">Autre</option>
                </select>
                @error('subject') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4 md:col-span-2">
                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                <textarea id="message" wire:model.defer="message" rows="6" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-emerald-500 focus:border-emerald-500"></textarea>
                @error('message') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4 md:col-span-2">
                <label class="flex items-center">
                    <input type="checkbox" wire:model.defer="consent" class="rounded text-emerald-500 focus:ring-emerald-500">
                    <span class="ml-2 text-gray-700">J'accepte que mes données soient utilisées pour traiter ma demande conformément à la politique de confidentialité.</span>
                </label>
                @error('consent') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="md:col-span-2">
                <button type="submit" class="px-6 py-3 bg-emerald-500 hover:bg-emerald-600 text-white rounded-md font-medium transition-colors" wire:loading.attr="disabled" wire:target="submit">
                    <span wire:loading.remove wire:target="submit">Envoyer</span>
                    <span wire:loading wire:target="submit">Envoi en cours...</span>
                </button>
            </div>
        </form>
    </div>
</div>
