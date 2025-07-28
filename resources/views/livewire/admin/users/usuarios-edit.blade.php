<div class="p-4 space-y-4 max-w-xl">
    <h1 class="text-2xl font-bold">Editar rol de {{ $user->name }}</h1>

    @if (session()->has('success'))
        <div class="p-3 rounded bg-green-100 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="actualizarRol" class="space-y-4">
        <div>
            <label for="role_id" class="block mb-1 font-medium">Rol</label>
            <select wire:model="role_id" id="role_id"
                class="w-full border border-neutral-300 rounded px-3 py-2 dark:bg-neutral-800 dark:text-white dark:border-neutral-600">
                <option value="">Seleccione un rol</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->display_name ?? $role->name }}</option>
                @endforeach
            </select>

            @error('role_id')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit"
                class="px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 transition">
                Guardar cambios
            </button>

            <a href="{{ route('admin.manage.user.read', $user->id) }}"
                class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 transition dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                Cancelar
            </a>
        </div>
    </form>
</div>
