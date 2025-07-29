<div class="">
    <x-admin.breadcrumb principal="users" secondary="Usuarios" urlSecondary="{{ route('admin.manage.user.browser') }}"
        name="Editar Rol" accion="return" urlAccion="{{ route('admin.manage.user.browser') }}" />

    <h1 class="text-2xl font-bold">Editar rol de {{ $user->display_name }}</h1>

    @if (session()->has('success'))
        <div class="p-3 rounded bg-green-100 text-green-700">
            {{ session('success') }}
        </div>
    @endif
    <div class="p-6 max-w-4xl mx-auto space-y-8">

        <div class="flex flex-col sm:flex-row items-center gap-6">
            <img src="{{ $user->image_url }}" alt="Avatar"
                class="w-24 h-24 rounded-full object-cover border-4 border-neutral-300 dark:border-neutral-700" />
            <div class="space-y-1 text-center sm:text-left">
                <h2 class="text-xl font-semibold text-neutral-900 dark:text-white">
                    {{ $user->display_name }}
                </h2>
                <p class="text-neutral-600 dark:text-neutral-300">{{ $user->email }}</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-neutral-700 dark:text-neutral-200">
            <div>
                <span class="font-semibold">Nombre:</span>
                <div>{{ $user->name }}</div>
            </div>

            <div>
                <span class="font-semibold">Apellido:</span>
                <div>{{ $user->lastname ?? '-' }}</div>
            </div>

            <div>
                <span class="font-semibold">Email:</span>
                <div>{{ $user->email }}</div>
            </div>

            <div>
                <span class="font-semibold">Teléfono:</span>
                <div>{{ $user->phone ?? '-' }}</div>
            </div>

            <div>
                <span class="font-semibold">Fecha de nacimiento:</span>
                <div>{{ $user->birthdate?->format('d/m/Y') ?? '-' }}</div>
            </div>

            <div>
                <span class="font-semibold">Roles:</span>
                <div class="flex flex-wrap gap-1 mt-1">
                    @forelse ($user->roles as $role)
                        <span
                            class="px-2 py-0.5 text-sm rounded bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200">
                            {{ $role->display_name ?? $role->name }}
                        </span>
                    @empty
                        <span class="text-neutral-400">Sin rol</span>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="pt-6 flex justify-end">
            <a href="{{ route('admin.manage.user.read', $user->id) }}" class="{{ site('btn.primary') }}">
                Ver usuario
            </a>
        </div>
    </div>

    <form wire:submit.prevent="actualizarRol" class="">
        <x-forms.select-field id="role_id" name="role_id" label="Rol" wireModel="role_id" :options="collect($roles)->map(fn($cat) => ['value' => $cat->id, 'label' => $cat->display_name])->toArray()"
            placeholder="Seleccione un rol" />

        <button type="submit" wire:loading.attr="disabled" class="w-full {{ site('btn.success') }}">
            <span wire:target="actualizarRol">Guardar Rol</span>
            <svg wire:loading wire:target="actualizarRol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                aria-hidden="true" class="size-5 motion-safe:animate-spin fill-white ml-1">
                <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                    opacity=".25" />
                <path
                    d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
            </svg>
        </button>
    </form>
</div>
