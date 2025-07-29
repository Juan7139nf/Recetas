@php
    $emojis = ['🥴', '😕', '😐', '😊', '😍'];
@endphp

<div class="max-w-5xl mx-auto px-4 py-8 space-y-10">

    {{-- Botón Volver --}}
    <div class="flex items-center justify-end mb-4">
        <a href="{{ url()->previous() }}" class="{{ site('btn.gray') }} relative">
            <svg class="absolute w-10 left-1.5" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                <path class="fill-white"
                    d="M7 7.56c0-.94-1.14-1.42-1.81-.75L.71 11.29c-.39.39-.39 1.02 0 1.41l4.48 4.48c.67.68 1.81.2 1.81-.74 0-.28-.11-.55-.31-.75L3 12l3.69-3.69c.2-.2.31-.47.31-.75M13 9V7.41c0-.89-1.08-1.34-1.71-.71L6.7 11.29c-.39.39-.39 1.02 0 1.41l4.59 4.59c.63.63 1.71.18 1.71-.71V14.9c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11">
                </path>
            </svg>
            <span class="ml-8 text-lg font-bold">Volver</span>
        </a>
    </div>

    {!! str_replace(':title', $recipe->title, site('titulos')) !!}

    {{-- Info General --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-sm text-gray-600 dark:text-gray-300">
        @if ($averageRating)
            <div class="flex items-center gap-2">
                <span class="font-medium">Calificación:</span>
                @for ($i = 1; $i <= 5; $i++)
                    <span
                        class="text-2xl {{ $averageRating >= $i ? 'grayscale-0' : 'grayscale' }}">{{ $emojis[$i - 1] }}</span>
                @endfor
                <span class="text-xs text-gray-500">({{ number_format($averageRating, 1) }}/5)</span>
            </div>
        @endif

        @if (!empty($recipe->settings['difficulty']))
            <div><strong>Dificultad:</strong> {{ $recipe->settings['difficulty'] ?? 'N/A' }}</div>
        @endif
        @if (!empty($recipe->settings['duration_minutes']))
            <div><strong>Duración:</strong> {{ $recipe->settings['duration_minutes'] ?? 0 }} min</div>
        @endif
        @if (!is_null($recipe->price))
            <div><strong>Precio:</strong> {{ $recipe->display_price }}</div>
        @endif
        <div><strong>Licencia:</strong> {{ $recipe->display_license }}</div>
    </div>

    {{-- Imagen de portada --}}
    <div class="max-w-80 mx-auto rounded-lg overflow-hidden shadow-md">
        <img src="{{ $recipe->cover_url }}" alt="Portada" class="w-full h-64 object-cover">
    </div>

    {{-- Partes de la Receta --}}
    <div>
        <div class="space-y-6">
            @foreach ($recipe->parts as $index => $part)
                <div
                    class="p-4 shadow-sm">

                    @if (!empty($part->display))
                        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-2">
                            {{ $part->display}}</h3>
                    @endif

                    <div class="mb-2">
                        <strong class="block text-gray-600 dark:text-gray-300 mb-1">Ingredientes:</strong>
                        <div class="ql-snow">
                            <div class="ql-editor text-gray-800 dark:text-gray-100 mb-4">{!! $part->ingredients !!}</div>
                        </div>
                    </div>

                    <div>
                        <strong class="block text-gray-600 dark:text-gray-300 mb-1">Descripción:</strong>
                        <div class="ql-snow">
                            <div class="ql-editor text-gray-800 dark:text-gray-100 mb-4">{!! $part->description !!}</div>
                        </div>
                    </div>
                </div>
                <hr class="border-gray-300 dark:border-gray-600 my-4">
            @endforeach
        </div>
    </div>

    {{-- Calificar receta --}}
    <div class="mt-10">
        @auth
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">Califica esta receta</h2>

            <div x-data="{
                currentVal: @js(optional($userRating)->score ?? 0),
                originalComment: @js(optional($userRating)->comment ?? ''),
                comment: @entangle('comment').defer,
                setRating(val) {
                    this.currentVal = val;
                },
                isUnchanged() {
                    return this.currentVal === @js(optional($userRating)->score ?? 0) &&
                        this.comment === this.originalComment;
                }
            }" class="space-y-4">

                {{-- Estrellas --}}
                <div class="flex items-center gap-1">
                    @for ($i = 1; $i <= 5; $i++)
                        <label class="cursor-pointer transition hover:scale-110">
                            <input type="radio" class="hidden" name="rating" @click="setRating({{ $i }})">
                            <span class="text-2xl"
                                :class="currentVal >= {{ $i }} ? 'grayscale-0' : 'grayscale'">
                                {{ $emojis[$i - 1] }}
                            </span>
                        </label>
                    @endfor
                </div>

                {{-- Comentario --}}
                <div>
                    <label for="comment" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        ¿Deseas dejar un comentario?
                    </label>
                    <textarea id="comment" wire:model.defer="comment" rows="3"
                        class="w-full mt-1 rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-3"
                        placeholder="Escribe tu opinión..."></textarea>
                </div>

                {{-- Botón enviar --}}
                <div>
                    <button wire:click="rate(currentVal)" :disabled="isUnchanged()"
                        class="{{ site('btn.primary') }} transition duration-300 ease-in-out hover:opacity-80 disabled:cursor-not-allowed disabled:opacity-50">
                        Enviar calificación
                    </button>
                </div>
            </div>
        @else
            <p class="text-sm text-gray-500 dark:text-gray-400">Inicia sesión para calificar esta receta.</p>
        @endauth
    </div>

    {{-- Comentarios --}}
    @if ($recipe->ratings->whereNotNull('comment')->count())
        <div class="mt-10 space-y-4">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Comentarios</h2>
            @foreach ($recipe->ratings->whereNotNull('comment') as $rating)
                <div class="p-4 rounded-md bg-gray-100 dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <p class="text-sm text-gray-800 dark:text-gray-100">
                        <strong>{{ $rating->user->display_name ?? 'Usuario' }}:</strong> {{ $rating->comment }}
                    </p>
                </div>
            @endforeach
        </div>
    @endif

</div>
