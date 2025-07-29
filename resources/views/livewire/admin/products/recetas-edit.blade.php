<div class="p-4">
    <x-admin.breadcrumb principal="products" secondary="Recetas" urlSecondary="{{ route('admin.product.recipe.browser') }}"
        name="Editar" accion="return" urlAccion="{{ route('admin.product.recipe.browser') }}" />


    <div class="">
        <form wire:submit.prevent="save" enctype="multipart/form-data">
            <div class="grid grid-flow-col grid-rows-3 gap-4">
                <x-forms.input-field colrow="col-span-3" id="title" name="title" label="Titulo*" wireModel="title"
                    placeholder="Ingresa el nombre de la receta" type="text" viewBox="0 0 16 16"
                    icon='<path class="fill-gray-400" d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479z"/>' />

                <x-forms.input-field colrow="col-span-1" id="gif_path" name="gif_path" label="GIF (opcional)"
                    wireModel="gif_path" placeholder="Ingresa la URL del GIF" type="text" />

                <x-forms.input-field colrow="col-span-1" id="price" name="price" label="Precio*" wireModel="price"
                    placeholder="Ingresa el precio" type="number" other="step=0.01 min=0" />

                <x-forms.select-field id="license" name="license" label="Licencia" wireModel="license"
                    :options="[
                        ['value' => 'copyright', 'label' => 'Todos los derechos reservados'],
                        ['value' => 'cc_by', 'label' => 'CC BY (Reconocimiento)'],
                        ['value' => 'cc_by_sa', 'label' => 'CC BY-SA (Compartir igual)'],
                        ['value' => 'cc_by_nc', 'label' => 'CC BY-NC (No comercial)'],
                        ['value' => 'cc0', 'label' => 'CC0 (Dominio público)'],
                    ]" placeholder="Seleccione la licencia" />

                <x-forms.select-field id="difficulty" name="difficulty" label="Dificultad" wireModel="difficulty"
                    :options="[
                        ['value' => 'easy', 'label' => 'Fácil'],
                        ['value' => 'medium', 'label' => 'Media'],
                        ['value' => 'hard', 'label' => 'Difícil'],
                    ]" placeholder="Seleccione la dificultad" />

                <x-forms.input-field colrow="col-span-1" id="duration_minutes" name="duration_minutes"
                    label="Duración (minutos)" wireModel="duration_minutes" placeholder="Ingresa la duración"
                    type="number" other="min=0" />
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-2 text-gray-800 dark:text-gray-100">Categorías</label>

                {{-- Botón para desplegar/ocultar la lista --}}
                <button type="button"
                    class="mb-2 px-4 py-2 bg-gray-200 text-gray-800 hover:bg-gray-300 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 rounded"
                    wire:click="$toggle('mostrarCategorias')">
                    {{ $mostrarCategorias ? 'Ocultar categorías' : 'Seleccionar categorías' }}
                </button>

                {{-- Lista de categorías en forma de tarjetas --}}
                @if ($mostrarCategorias)
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-4">
                        @foreach ($allCategories as $category)
                            <div class="border p-2 rounded cursor-pointer transition duration-200
                        {{ in_array($category->id, $selectedCategories)
                            ? 'bg-blue-100 border-blue-500 dark:bg-blue-900 dark:border-blue-400'
                            : 'hover:bg-gray-100 dark:hover:bg-gray-700 dark:border-gray-600 border-gray-300' }}"
                                wire:click="toggleCategory({{ $category->id }})">
                                <span class="text-gray-800 dark:text-gray-100">{{ $category->name }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif

                {{-- Categorías seleccionadas --}}
                @if (count($selectedCategories) > 0)
                    <div class="mb-2">
                        <p class="font-semibold mb-1 text-gray-800 dark:text-gray-100">Seleccionadas:</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($allCategories->whereIn('id', $selectedCategories) as $category)
                                <div
                                    class="flex items-center bg-blue-100 text-blue-800 px-3 py-1 rounded-full
                               dark:bg-blue-900 dark:text-blue-300">
                                    <span class="mr-2">{{ $category->name }}</span>
                                    <button type="button" wire:click="removeCategory({{ $category->id }})"
                                        class="text-red-500 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300">
                                        ✕
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @error('selectedCategories')
                    <span class="text-red-500 dark:text-red-400">{{ $message }}</span>
                @enderror
            </div>


            {{-- Portada --}}
            <div class="mb-4">
                <label class="block text-black dark:text-white">Portada</label>
                <div x-data="{
                    isDragging: false,
                    previewUrl: null,
                    handleDrop(event) {
                        this.isDragging = false;
                        const file = event.dataTransfer.files[0];
                        if (file && file.type.startsWith('image/')) {
                            this.previewUrl = URL.createObjectURL(file);
                            $refs.fileInput.files = event.dataTransfer.files;
                            $refs.fileInput.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    }
                }" x-on:dragover.prevent="isDragging = true"
                    x-on:dragleave.prevent="isDragging = false" x-on:drop.prevent="handleDrop($event)"
                    class="border-2 border-dashed border-gray-300 rounded-md p-6 text-center cursor-pointer transition-all"
                    :class="{ 'border-blue-500 bg-blue-50': isDragging }" @click="$refs.fileInput.click()">
                    <input type="file" wire:model="cover" x-ref="fileInput" class="hidden" accept="image/*"
                        @change="previewUrl = $event.target.files[0] ? URL.createObjectURL($event.target.files[0]) : null">

                    <template x-if="!previewUrl">
                        <div>
                            @if (isset($existingCover['url']))
                                <img src="{{ asset('storage/' . $existingCover['url']) }}"
                                    class="mx-auto mt-4 max-h-48 rounded shadow">
                            @else
                                <p class="text-gray-500">Haz clic o arrastra una imagen aquí</p>
                            @endif
                        </div>
                    </template>

                    <template x-if="previewUrl">
                        <img :src="previewUrl" class="mx-auto mt-4 max-h-48 rounded shadow">
                    </template>
                </div>
                @error('cover')
                    <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </div>

            {{-- Imágenes --}}
            <div class="mb-4">
                <label class="block text-black dark:text-white">Imágenes</label>

                {{-- Mostrar imágenes existentes --}}
                @if (!empty($existingImages))
                    <div class="flex flex-wrap gap-4 mb-4">
                        @foreach ($existingImages as $index => $img)
                            @php
                                $url = $img['url'] ?? null;
                            @endphp
                            @if ($url)
                                <div class="relative w-24 h-24">
                                    <img src="{{ asset('storage/' . $url) }}"
                                        class="object-cover w-full h-full rounded shadow">
                                    <button type="button"
                                        wire:click.prevent="removeExistingImage({{ $index }})"
                                        class="absolute top-0 right-0 bg-red-600 text-white rounded-full px-1.5 hover:bg-red-800">×
                                    </button>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif

                {{-- Subir nuevas imágenes y previews con Alpine --}}
                <div x-data="{
                    isDragging: false,
                    previews: [],
                    handleDrop(event) {
                        this.isDragging = false;
                        const files = Array.from(event.dataTransfer.files);
                        this.addFiles(files);
                    },
                    handleInputChange(event) {
                        const files = Array.from(event.target.files);
                        this.addFiles(files);
                    },
                    addFiles(files) {
                        this.previews = [];
                        files.forEach(file => {
                            if (file.type.startsWith('image/')) {
                                this.previews.push({
                                    file: file,
                                    url: URL.createObjectURL(file)
                                });
                            }
                        });
                        const dt = new DataTransfer();
                        this.previews.forEach(p => dt.items.add(p.file));
                        $refs.fileInput.files = dt.files;
                        $refs.fileInput.dispatchEvent(new Event('change', { bubbles: true }));
                    }
                }" x-on:dragover.prevent="isDragging = true"
                    x-on:dragleave.prevent="isDragging = false" x-on:drop.prevent="handleDrop($event)"
                    class="border-2 border-dashed border-gray-300 rounded-md p-6 text-center cursor-pointer transition-all"
                    :class="{ 'border-blue-500 bg-blue-50': isDragging }" @click="$refs.fileInput.click()">

                    <input type="file" wire:model="images" x-ref="fileInput" class="hidden" accept="image/*"
                        multiple @change="handleInputChange($event)">

                    <template x-if="previews.length === 0">
                        <div>
                            <p class="text-gray-500">Haz clic o arrastra imágenes aquí</p>
                        </div>
                    </template>

                    <template x-if="previews.length > 0">
                        <div class="flex flex-wrap justify-center gap-4 mt-4">
                            <template x-for="(image, index) in previews" :key="index">
                                <div class="relative w-24 h-24">
                                    <img :src="image.url" class="object-cover w-full h-full rounded shadow">
                                </div>
                            </template>
                        </div>
                    </template>
                </div>

                @error('images.*')
                    <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" wire:loading.attr="disabled" class="w-full {{ site('btn.success') }}">
                <span wire:target="save">Guardar Receta</span>
                <svg wire:loading wire:target="save" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    aria-hidden="true" class="size-5 motion-safe:animate-spin fill-white ml-1">
                    <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                        opacity=".25" />
                    <path
                        d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
                </svg>
            </button>

            <div class="flex justify-between items-center mt-6">
                <h2 class="text-lg font-bold mb-4 text-black dark:text-white">Partes de la receta</h2>

                <button type="button" wire:click="addPart" class="{{ site('btn.primary') }} mb-4">
                    Añadir Parte</button>
            </div>
            <div class="text-gray-800 dark:text-gray-100 mb-4 bg-neutral-200 dark:bg-neutral-800 p-4 rounded">
                @foreach ($parts as $index => $part)
                    <div wire:key="part-{{ $index }}" class="mb-4">
                        <div class="flex justify-between">
                            <strong>Parte {{ $index + 1 }}</strong>
                            <a href="{{ route('admin.product.recipe.part', $part['id']) }}"
                                class="{{ site('btn.gray') }}">Editar</a>
                            <button type="button" wire:click="deletePart('{{ $part['id'] }}')"
                                class="{{ site('btn.danger') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" class="bi bi-trash3-fill"
                                    viewBox="0 0 16 16">
                                    <path class="fill-white"
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                </svg></button>
                        </div>

                        <x-forms.input-field id="parts.{{ $index }}.display"
                            name="parts.{{ $index }}.display" label="Display (opcional)"
                            wireModel="parts.{{ $index }}.display" placeholder="Ingresa el display"
                            type="text" viewBox="0 0 16 16"
                            icon='<path class="fill-gray-400" d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479z"/>' />

                        <label>Ingredientes</label>
                        <div class="ql-snow">
                            <div id="ingredients-{{ $index }}" class="ql-editor">{!! $part['ingredients'] !!}</div>
                        </div>

                        <label class="mt-2">Descripción</label>
                        <div class="ql-snow">
                            <div id="description-{{ $index }}" class="ql-editor">{!! $part['description'] !!}</div>
                        </div>

                        <hr>
                    </div>
                @endforeach
            </div>

        </form>
    </div>
</div>
