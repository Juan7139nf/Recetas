<div class="p-4">
    <div class="flex justify-between items-center mb-4">
        <input type="text" wire:model.debounce.300ms="search" placeholder="Buscar..."
            class="border rounded px-3 py-2 w-1/3" />

        <a href="{{ route($model.'add') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
            + Crear Nuevo
        </a>
    </div>

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                @foreach ($columns as $col)
                    <th class="px-4 py-2 border-b">{{ ucfirst(str_replace('_', ' ', $col)) }}</th>
                @endforeach
                <th class="px-4 py-2 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    @foreach ($columns as $col)
                        <td class="px-4 py-2 border-b">{{ data_get($item, $col) }}</td>
                    @endforeach
                    <td class="px-4 py-2 border-b">
                        <a href="" class="text-blue-600">Ver</a> |
                        <a href="" class="text-yellow-600">Editar</a> |

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($columns) + 1 }}" class="text-center py-4">Sin resultados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $items->links() }}
    </div>
</div>