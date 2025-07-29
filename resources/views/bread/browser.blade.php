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
                    @foreach ($headers as $col)
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
                            @php
                                $valor = $item->$col;
                            @endphp
                            @if ($col != 'title' && $col != 'id' && $col != 'display_rating')
                                @if ($col === 'cover_url')
                                    <td class="px-4">
                                        <div class="flex w-max items-center gap-2">
                                            <img class="size-10 rounded-full object-cover" src="{{ $item->cover_url }}"
                                                alt="img">
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-neutral-900 dark:text-white">{{ $item->title ?? 'Sin título' }}</span>
                                            </div>
                                        </div>
                                    </td>
                                @elseif ($col === 'image_url')
                                    <td class="px-4">
                                        <div class="flex w-max items-center gap-2">
                                            <img class="size-10 rounded-full object-cover"
                                                src="{{ $item->image_url }}" alt="img">
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
                            @elseif ($col === 'display_rating')
                                <td class="text-center">
                                    {!! $item->display_rating !!}
                                </td>
                            @endif
                        @endforeach


                        <td class="p-4 flex items-center gap-2">
                            <a href="{{ $routes['edit']($item->id) }}" class="{{ site('btn.success') }} relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-pencil-fill absolute left-3 size-5"
                                    viewBox="0 0 16 16">
                                    <path class="fill-white"
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                </svg>
                                <span class="ml-5 text-md font-bold">Editar</span>
                            </a>
                            <a href="{{ $routes['read']($item->id) }}" class="{{ site('btn.primary') }} relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-eye-fill absolute left-2 size-6"
                                    viewBox="0 0 16 16">
                                    <path class="fill-white" d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                    <path class="fill-white"
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                </svg>
                                <span class="ml-5 text-md font-bold">Ver</span>
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
