<div class="max-w-4xl mx-auto px-4 py-8 space-y-8">
    {{-- Botón Volver --}}
    <div class="flex items-center justify-end mb-4">
        <a href="{{ route('home') }}" class="{{ site('btn.gray') }} relative">
            <svg class="absolute w-10 left-1.5" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                <path class="fill-white"
                    d="M7 7.56c0-.94-1.14-1.42-1.81-.75L.71 11.29c-.39.39-.39 1.02 0 1.41l4.48 4.48c.67.68 1.81.2 1.81-.74 0-.28-.11-.55-.31-.75L3 12l3.69-3.69c.2-.2.31-.47.31-.75M13 9V7.41c0-.89-1.08-1.34-1.71-.71L6.7 11.29c-.39.39-.39 1.02 0 1.41l4.59 4.59c.63.63 1.71.18 1.71-.71V14.9c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11">
                </path>
            </svg>
            <span class="ml-8 text-lg font-bold">Volver</span>
        </a>
    </div>
    {{-- Encabezado --}}
    <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Confirmación de Pedido</h2>
        <p class="text-lg text-gray-600 dark:text-gray-400 mt-1">Revisa las recetas antes de confirmar.</p>
    </div>

    {{-- Lista de recetas --}}
    <div class="space-y-4">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Recetas en tu pedido</h3>

        @forelse ($detalles as $detalle)
            <div
                class="flex items-center justify-between p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm border dark:border-gray-700">
                <div class="flex items-center space-x-4">
                    {{-- Imagen de la receta --}}
                    <img src="{{ $detalle->recipe->cover_url }}" alt="{{ $detalle->recipe->title }}"
                        class="w-16 h-16 object-cover rounded-md">
                    <div class="">
                        <p class="font-medium text-gray-900 dark:text-white">
                            {{ $detalle->recipe->title ?? 'Receta desconocida' }}
                        </p>
                        <p class="text-lg font-bold text-gray-500 dark:text-gray-400">
                            {{ $detalle->recipe->display_price }}
                        </p>
                        {!! $detalle->recipe->display_rating !!}
                    </div>
                </div>
                <button wire:click="eliminarDetalle('{{ $detalle->id }}')" class="{{ site('btn.danger') }} relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pencil-fill absolute left-2 size-6" viewBox="0 0 16 16">
                        <path class="fill-white"
                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                    </svg>
                    <span class="ml-5 text-md font-bold">Eliminar</span>
                </button>
            </div>
        @empty
            <p class="text-gray-800 dark:text-gray-100">No hay recetas en tu pedido aún.</p>
        @endforelse
    </div>

    {{-- Resumen de total y confirmación --}}
    @if ($orden)
        <div class="border-t pt-6 space-y-4 text-right dark:border-gray-700">
            <p class="text-2xl font-extrabold text-gray-900 dark:text-white">
                Total: {{ number_format($orden->total, 2) }} Bs
            </p>
            <button wire:click="confirmarOrden" class="{{ site('btn.success') }} ml-auto">
                <span wire:target="confirmarOrden" class="text-2xl font-extrabold">Confirmar Orden</span>
                <svg wire:loading wire:target="confirmarOrden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    aria-hidden="true" class="size-10 motion-safe:animate-spin fill-white ml-3">
                    <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                        opacity=".25" />
                    <path
                        d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
                </svg>
            </button>
        </div>
    @endif

</div>
