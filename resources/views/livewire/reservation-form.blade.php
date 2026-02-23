<div>
    @if(session()->has('success'))
        <div class="bg-green-50 border border-green-200 text-green-800 rounded px-4 py-4 mb-8 text-center font-medium shadow-sm">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="nom" class="block text-sm font-semibold text-gray-800 mb-1">Nom <span class="text-red-500">*</span></label>
                <input type="text" wire:model.blur="nom" id="nom" class="input-field">
                @error('nom') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="prenom" class="block text-sm font-semibold text-gray-800 mb-1">Prénom <span class="text-red-500">*</span></label>
                <input type="text" wire:model.blur="prenom" id="prenom" class="input-field">
                @error('prenom') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="telephone" class="block text-sm font-semibold text-gray-800 mb-1">Téléphone <span class="text-red-500">*</span></label>
                <input type="tel" wire:model.blur="telephone" id="telephone" class="input-field" placeholder="06 XX XX XX XX">
                @error('telephone') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-800 mb-1">Email <span class="text-red-500">*</span></label>
                <input type="email" wire:model.blur="email" id="email" class="input-field" placeholder="email@exemple.com">
                @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <label for="date" class="block text-sm font-semibold text-gray-800 mb-1">Date de réservation <span class="text-red-500">*</span></label>
                <input type="date" wire:model.blur="date" id="date" min="{{ date('Y-m-d') }}" class="input-field">
                @error('date') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="nombre_personnes" class="block text-sm font-semibold text-gray-800 mb-1">Nombre de personnes <span class="text-red-500">*</span></label>
                <input type="number" wire:model.blur="nombre_personnes" id="nombre_personnes" min="1" max="30" class="input-field">
                @error('nombre_personnes') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="pt-4">
            <p class="text-xs text-gray-500 mb-6 flex items-start">
                <span class="mt-0.5 mr-2">ℹ️</span>
                <span>En envoyant ma demande, j’accepte d’être contacté(e) pour confirmer ma réservation. La réservation n’est confirmée qu’après validation par le restaurant.</span>
            </p>
            
            <button type="submit" class="w-full bg-or text-white px-8 py-4 rounded font-bold text-lg hover-bg-or transition-colors shadow-sm cursor-pointer relative">
                <span wire:loading.remove wire:target="submit">Envoyer ma demande</span>
                <span wire:loading wire:target="submit">Envoi en cours...</span>
            </button>
        </div>
    </form>
</div>
