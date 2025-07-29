<div class="max-w-4xl mx-auto px-4 py-10 space-y-8">
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
    {{-- Título principal --}}
    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
        {{ $recipe->title }}
    </h1>

    {{-- Información general --}}
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="space-y-1">
            <p class="text-sm text-gray-700 dark:text-gray-300">
                <span class="font-medium">Creado por:</span> {{ $recipe->user->display_name ?? 'Anónimo' }}
            </p>

            <p class="text-sm text-gray-700 dark:text-gray-300">
                <span class="font-medium">Categorías:</span>
                {{ $recipe->categories->pluck('name')->join(', ') ?: 'Sin categoría' }}
            </p>
            {!! $recipe->display_rating !!}
        </div>

        {{-- Precio --}}
        <div>
            @if ($recipe->price > 0)
                <p class="text-xl font-semibold text-green-600 dark:text-green-400">
                    Precio: {{ $recipe->display_price }}
                </p>
            @else
                <p class="text-xl font-semibold text-blue-500 dark:text-blue-400">
                    Gratis
                </p>
            @endif
        </div>
    </div>

    {{-- Imagen --}}
    <div class="overflow-hidden rounded-lg shadow-md">
        <img src="{{ $recipe->cover_url }}" alt="Portada" class="w-full [aspect:3/2] object-cover">
    </div>

    {{-- Botón de compra --}}
    <form action="{{ route('orden.agregar', $recipe->id) }}" method="POST" class="mt-6">
        @csrf
        <button type="submit"
            class="inline-flex items-center gap-2 px-5 py-3 rounded-md bg-black text-white dark:bg-white dark:text-black font-medium hover:opacity-90 transition shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black dark:focus-visible:outline-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                    clip-rule="evenodd" />
            </svg>
            {{ $recipe->price > 0 ? 'Agregar al carrito' : 'Acceder gratis' }}
        </button>
    </form>
</div>
