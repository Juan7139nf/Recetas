<div class="p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">{{ $recipe->title }}</h1>

    <div class="my-4">
        <h3 class="text-lg font-semibold mb-2">Calificación promedio: {{ $averageRating ?? 'Sin calificar' }} / 5</h3>

        @auth
            <div x-data="{ currentVal: {{ $userRating->score ?? 0 }} }" x-init="$watch('currentVal', value => $wire.rate(value))" class="flex items-center gap-1">
                @for ($i = 1; $i <= 5; $i++)
                    <label class="transition hover:scale-125 has-focus:scale-125 cursor-pointer">
                        <input x-model="currentVal" type="radio" class="sr-only" name="rating" value="{{ $i }}">
                        <span class="text-2xl" :class="currentVal >= {{ $i }} ? 'grayscale-0' : 'grayscale'">
                            @switch($i)
                                @case(1)
                                    🥴
                                @break

                                @case(2)
                                    😕
                                @break

                                @case(3)
                                    😐
                                @break

                                @case(4)
                                    😊
                                @break

                                @case(5)
                                    😍
                                @break
                            @endswitch
                        </span>
                    </label>
                @endfor
            </div>
        @else
            <p class="text-sm text-gray-500 italic">Inicia sesión para calificar esta receta.</p>
        @endauth
    </div>

    <div class="mb-6">
        <p><strong>Dificultad:</strong> {{ $recipe->settings['difficulty'] ?? 'N/A' }}</p>
        <p><strong>Duración:</strong> {{ $recipe->settings['duration_minutes'] ?? 'N/A' }} minutos</p>
        <p><strong>Precio:</strong> ${{ number_format($recipe->price, 2) }}</p>
    </div>

    <h2 class="text-xl font-semibold mb-2">Partes de la receta</h2>

    @foreach ($recipe->parts as $index => $part)
        <div class="mb-4 p-4 border rounded bg-gray-50">
            <h3 class="text-lg font-semibold mb-2">Parte {{ $index + 1 }}: {{ $part->display }}</h3>

            <div class="mb-2">
                <strong>Ingredientes:</strong>
                <div class="ql-snow">
                    <div class="ql-editor">{!! $part->ingredients !!}</div>
                </div>
            </div>

            <div>
                <strong>Descripción:</strong>
                <div class="ql-snow">
                    <div class="ql-editor">{!! $part->description !!}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>
