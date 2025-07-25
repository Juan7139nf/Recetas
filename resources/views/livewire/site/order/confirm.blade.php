<div class="p-4 space-y-4">
    <h2 class="text-xl font-bold">Recetas en tu pedido</h2>

    @forelse ($detalles as $detalle)
        <div class="flex items-center justify-between p-3 border rounded shadow-sm">
            <div>
                <p class="font-semibold">{{ $detalle->recipe->title ?? 'Receta desconocida' }}</p>
                <p class="text-sm text-gray-500">Precio: ${{ number_format($detalle->price, 2) }}</p>
            </div>
            <button wire:click="eliminarDetalle('{{ $detalle->id }}')"
                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded">
                Eliminar
            </button>
        </div>
    @empty
        <p class="text-gray-500">No hay recetas en tu pedido aún.</p>
    @endforelse

    @if ($orden)
        <div class="mt-4 text-right">
            <p class="font-bold">Total: ${{ number_format($orden->total, 2) }}</p>
        </div>
    @endif
    <div class="mt-6 text-right">
        <button wire:click="confirmarOrden" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
            Confirmar orden
        </button>
    </div>

</div>