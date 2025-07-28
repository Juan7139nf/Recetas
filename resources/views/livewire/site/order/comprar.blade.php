<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">{{ $recipe->title }}</h1>

    <p class="text-gray-700 dark:text-gray-300">Creado por: {{ $recipe->user->name ?? 'Anónimo' }}</p>

    @if ($recipe->price > 0)
        <p class="mt-2 text-green-600 font-semibold">Precio: ${{ number_format($recipe->price, 2) }}</p>
    @else
        <p class="mt-2 text-blue-500">Gratis</p>
    @endif

    <p class="mt-4 text-sm text-gray-500">Categorías:
        {{ $recipe->categories->pluck('name')->join(', ') }}
    </p>

    {{-- Aquí podrías agregar un botón para comprar o descargar --}}

    <form action="{{ route('orden.agregar', $recipe->id) }}" method="POST">
        @csrf
        <button type="submit"
            class="flex items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white rounded-sm">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"
                class="size-3.5">
                <path fill-rule="evenodd"
                    d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                    clip-rule="evenodd" />
            </svg>
            Add to Cart
        </button>
    </form>
</div>
