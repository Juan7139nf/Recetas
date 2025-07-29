<div class="">
    <x-admin.breadcrumb principal="users" secondary="Usuarios" urlSecondary="{{ route('admin.manage.user.browser') }}"
        name="Detalles del Usuario" accion="return" urlAccion="{{ route('admin.manage.user.browser') }}" />

    <div class="p-6 max-w-4xl mx-auto space-y-8 bg-white dark:bg-neutral-900 rounded-xl shadow-md">
        <h1 class="text-3xl font-bold text-neutral-800 dark:text-neutral-100">
            Detalles del Usuario
        </h1>

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
            <a href="{{ route('admin.manage.user.edit', $user->id) }}" class="{{ site('btn.success') }}">
                Editar usuario
            </a>
        </div>
    </div>
</div>
