<div class="p-4">
    <div class="flex justify-between items-center mb-4">
        <div class="">
            <nav class="text-sm font-medium text-neutral-600 dark:text-neutral-300" aria-label="breadcrumb">
                <ol class="flex flex-wrap items-center gap-1">
                    <li class="flex items-center gap-1.5">
                        <a href="#" aira-label="home" class="hover:text-neutral-900 dark:hover:text-white flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="size-5 shrink-0" aria-hidden="true">
                                <path
                                    d="M10.362 1.093a.75.75 0 0 0-.724 0L2.523 5.018 10 9.143l7.477-4.125-7.115-3.925ZM18 6.443l-7.25 4v8.25l6.862-3.786A.75.75 0 0 0 18 14.25V6.443ZM9.25 18.693v-8.25l-7.25-4v7.807a.75.75 0 0 0 .388.657l6.862 3.786Z">
                                </path>
                            </svg>
                            <span class="ml-2">Productos</span>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true"
                            stroke-width="2" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>
                    <li class="flex items-center gap-1 font-bold text-neutral-900 dark:text-white" aria-current="page">
                        {{ $table }}
                    </li>
                </ol>
            </nav>
        </div>

        <a href="{{ $routes['add'] }}" class="{{ site('btn.primary') }} relative">
            <svg class="absolute w-8 left-2" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                <path class="fill-white"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2m5 11h-4v4h-2v-4H7v-2h4V7h2v4h4z">
                </path>
            </svg>
            <span class="ml-6.5 text-lg font-bold">Crear</span>
        </a>
    </div>

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
