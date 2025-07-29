<div class="">
    <x-admin.breadcrumb principal="products" secondary="Editar Receta"
        urlSecondary="{{ route('admin.product.recipe.edit', $recipe_id) }}"
        name="{{ $recipe['title'] }} parte {{ $orden + 1 }}" accion="return"
        urlAccion="{{ route('admin.product.recipe.edit', $recipe_id) }}" />

    {!! str_replace(':title', $recipe['title'], site('titulos')) !!}

    <form wire:submit.prevent="save">
        <x-forms.input-field colrow="col-span-3" id="display" name="display" label="Display (opcional)"
            wireModel="display" placeholder="Ingresa el display" type="text" viewBox="0 0 16 16"
            icon='<path class="fill-gray-400" d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479z"/>' />

        {{-- Campo editable: Ingredients --}}
        <div class="mt-5">
            <label for="ingredients" class="block font-medium text-gray-700 dark:text-gray-300 mb-1">
                Ingredientes
            </label>

            <div class="mb-2 flex gap-2 flex-wrap">
                <button type="button" onclick="insertFraction('½')"
                    class="px-3 py-1 text-sm rounded bg-gray-200 text-gray-800 hover:bg-gray-300 
               dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                    ½
                </button>
                <button type="button" onclick="insertFraction('¼')"
                    class="px-3 py-1 text-sm rounded bg-gray-200 text-gray-800 hover:bg-gray-300 
               dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                    ¼
                </button>
                <button type="button" onclick="insertFraction('¾')"
                    class="px-3 py-1 text-sm rounded bg-gray-200 text-gray-800 hover:bg-gray-300 
               dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                    ¾
                </button>
                <button type="button" onclick="insertFraction('⅓')"
                    class="px-3 py-1 text-sm rounded bg-gray-200 text-gray-800 hover:bg-gray-300 
               dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                    ⅓
                </button>
                <button type="button" onclick="insertFraction('⅔')"
                    class="px-3 py-1 text-sm rounded bg-gray-200 text-gray-800 hover:bg-gray-300 
               dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                    ⅔
                </button>
            </div>

            {{-- Contenedor que Quill usará como editor --}}
            <div id="quill-ingredients" style="height: 200px;"
                class="bg-white dark:bg-neutral-800 text-black dark:text-white rounded-b-md">
                {!! $ingredients !!}</div>

            {{-- Campo oculto que almacenará el contenido para Livewire --}}
            <textarea hidden wire:model.defer="ingredients" id="ingredients"></textarea>

            @error('ingredients')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        {{-- Campo editable: Description --}}
        <div class="my-5">
            <label for="description" class="block font-medium text-gray-700 dark:text-gray-300 mb-1">Descripción</label>
            {{-- Contenedor que Quill usará como editor --}}
            <div id="quill-description" style="height: 200px;"
                class="bg-white dark:bg-neutral-800 text-black dark:text-white rounded-b-md">
                {!! $description !!}</div>

            <textarea hidden wire:model.defer="description" id="description"></textarea>

            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" wire:loading.attr="disabled" class="w-full {{ site('btn.success') }}">
            <span wire:target="save">Guardar cambios</span>
            <svg wire:loading wire:target="save" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                aria-hidden="true" class="size-5 motion-safe:animate-spin fill-white ml-1">
                <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                    opacity=".25" />
                <path
                    d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
            </svg>
        </button>

        @if (session()->has('message'))
            <div class="alert alert-success mt-3">
                {{ session('message') }}
            </div>
        @endif

        <script>
            let quillIngredients;
            let quillDescription;

            function insertFraction(symbol) {
                const range = quillIngredients.getSelection();
                if (range) {
                    quillIngredients.insertText(range.index, symbol);
                    quillIngredients.setSelection(range.index + symbol.length);
                }
            }
            document.addEventListener('DOMContentLoaded', function() {
                const toolbarOptions = [
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    ['link', 'image', 'video', 'formula'],
                    [{
                        'header': 1
                    }, {
                        'header': 2
                    }],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }, {
                        'list': 'check'
                    }],
                    [{
                        'script': 'sub'
                    }, {
                        'script': 'super'
                    }],
                    [{
                        'indent': '-1'
                    }, {
                        'indent': '+1'
                    }],
                    [{
                        'direction': 'rtl'
                    }],
                    [{
                        'size': ['small', false, 'large', 'huge']
                    }],
                    [{
                        'header': [1, 2, 3, 4, 5, 6, false]
                    }],
                    [{
                        'color': []
                    }, {
                        'background': []
                    }],
                    [{
                        'font': []
                    }],
                    [{
                        'align': []
                    }],
                    ['clean']
                ];

                quillIngredients = new Quill('#quill-ingredients', {
                    modules: {
                        syntax: true,
                        toolbar: toolbarOptions,
                    },
                    theme: 'snow'
                });

                quillDescription = new Quill('#quill-description', {
                    modules: {
                        syntax: true,
                        toolbar: toolbarOptions
                    },
                    theme: 'snow'
                });

                // Inicializar con el contenido actual del textarea
                const textarea = document.getElementById('ingredients');
                quillIngredients.root.innerHTML = textarea.value;
                const textareaDescription = document.getElementById('description');
                quillDescription.root.innerHTML = textareaDescription.value;

                // Actualizar textarea cada vez que se edita
                quillIngredients.on('text-change', function() {
                    textarea.value = quillIngredients.root.innerHTML;
                    // Livewire necesita detectar el cambio si usas wire:model.defer
                    textarea.dispatchEvent(new Event('input'));
                });

                quillDescription.on('text-change', function() {
                    textareaDescription.value = quillDescription.root.innerHTML;
                    // Livewire necesita detectar el cambio si usas wire:model.defer
                    textareaDescription.dispatchEvent(new Event('input'));
                });
            });
        </script>
    </form>
</div>
