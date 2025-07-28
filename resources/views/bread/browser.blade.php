<div class="p-4">
    <x-admin.breadcrumb principal="products" name="{{ $table }}"
        accion="{{ $routes['add'] != 'no' ? 'create' : '' }}" urlAccion="{{ $routes['add'] }}" />

    <form wire:submit.prevent="buscar" class="w-full max-w-md">
        <div class="relative flex items-center mb-4">
            <!-- Icono de lupa -->
            <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-neutral-400 dark:text-neutral-500"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.2-5.2M16 10a6 6 0 11-12 0 6 6 0 0112 0z" />
            </svg>

            <!-- Campo de búsqueda -->
            <input type="search" wire:model.debounce.300ms="search"
                class="w-full rounded-full pl-10 pr-12 py-2 text-sm border border-neutral-300 bg-white shadow-sm transition focus:outline-none focus:ring-2 focus:ring-orange-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:placeholder-neutral-500 dark:focus:ring-orange-400"
                placeholder="{{ $labelSearch }}" name="search" />

            <!-- Botón buscar -->
            <button type="submit"
                class="absolute right-2 top-1/2 -translate-y-1/2 p-1.5 bg-orange-600 hover:bg-orange-700 text-white rounded-full transition focus:outline-none focus:ring-2 focus:ring-orange-500 dark:focus:ring-orange-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.2-5.2M16 10a6 6 0 11-12 0 6 6 0 0112 0z" />
                </svg>
            </button>
        </div>

        @if ($search)
            <button wire:click="$set('search', '')" type="button"
                class="text-sm text-orange-600 dark:text-orange-400 hover:underline ml-2 mb-3 transition">
                Limpiar
            </button>
        @endif
    </form>

    <div class="overflow-hidden w-full overflow-x-auto rounded-sm border border-neutral-300 dark:border-neutral-700">
        <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
            <thead
                class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                <tr>
                    @foreach ($columns as $col)
                        @if ($col != 'cover' && $col != 'id')
                            <th scope="col" class="p-4">{{ ucfirst(str_replace('_', ' ', $col)) }}</th>
                        @endif
                    @endforeach
                    <th scope="col" class="p-4">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                @forelse ($items as $item)
                    <tr>
                        @foreach ($columns as $col)
                            @if ($col != 'title' && $col != 'id')
                                @php $valor = data_get($item, $col); @endphp
                                @if ($col === 'cover' && is_array($valor) && isset($valor['url']))
                                    <td class="px-4">
                                        <div class="flex w-max items-center gap-2">
                                            <img class="size-10 rounded-full object-cover"
                                                src="{{ asset('storage/' . $valor['url']) }}" alt="img">
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-neutral-900 dark:text-white">{{ $item->title ?? 'Sin título' }}</span>
                                            </div>
                                        </div>
                                    </td>
                                @elseif ($col === 'image' && is_array($valor) && isset($valor['url']))
                                    <td class="px-4">
                                        <div class="flex w-max items-center gap-2">
                                            <img class="size-10 rounded-full object-cover"
                                                src="{{ asset('storage/' . $valor['url']) }}" alt="img">
                                        </div>
                                    </td>
                                @elseif (is_array($valor))
                                    <td class="p-4">
                                        {{ json_encode($valor) }}</td>
                                @else
                                    <td class="p-4">
                                        {{ $valor }}
                                    </td>
                                @endif
                            @endif
                        @endforeach


                        <td class="p-4">
                            <a href="{{ $routes['edit']($item->id) }}"
                                class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">
                                Edit
                            </a>
                            <a href="{{ $routes['read']($item->id) }}"
                                class="whitespace-nowrap rounded-sm bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">
                                Ver
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($columns) + 1 }}" class="text-center py-4">Sin resultados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $items->links() }}
    </div>
</div>
