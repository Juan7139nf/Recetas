<div class="p-4 max-w-3xl space-y-6">
    <h1 class="text-2xl font-bold">Detalles del Usuario</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
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
            <div>
                @forelse ($user->roles as $role)
                    <span class="inline-block px-2 py-1 text-sm bg-orange-100 text-orange-800 rounded mr-1">
                        {{ $role->display_name ?? $role->name }}
                    </span>
                @empty
                    <span class="text-neutral-500">Sin rol</span>
                @endforelse
            </div>
        </div>
    </div>

    <div class="pt-4">
        <a href="{{ route('admin.manage.user.edit', $user->id) }}"
            class="inline-block px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 transition">
            Editar usuario
        </a>
    </div>
</div>
