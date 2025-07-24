<div class="p-6 bg-white shadow rounded">
    <h1 class="text-2xl font-bold mb-4">{{ $recipe->title }}</h1>

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