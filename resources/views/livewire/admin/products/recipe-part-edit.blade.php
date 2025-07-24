<div class="bg-white">
    <form wire:submit.prevent="save">
        {{-- Solo si deseas mostrar el recipe_id como referencia, sin editar --}}
        <p><strong>Receta ID:</strong> {{ $recipe_id }}</p>

        {{-- Campo editable: Display --}}
        <div class="mb-3">
            <label for="display" class="form-label">Nombre</label>
            <input type="text" wire:model.defer="display" id="display" class="form-control">
            @error('display') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        {{-- Campo editable: Ingredients --}}
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredientes</label>

            <div class="mb-2 flex gap-2">
                <button type="button" onclick="insertFraction('½')" class="btn btn-sm btn-secondary">½</button>
                <button type="button" onclick="insertFraction('¼')" class="btn btn-sm btn-secondary">¼</button>
                <button type="button" onclick="insertFraction('¾')" class="btn btn-sm btn-secondary">¾</button>
                <button type="button" onclick="insertFraction('⅓')" class="btn btn-sm btn-secondary">⅓</button>
                <button type="button" onclick="insertFraction('⅔')" class="btn btn-sm btn-secondary">⅔</button>
            </div>
            {{-- Contenedor que Quill usará como editor --}}
            <div id="quill-ingredients" style="height: 200px;"
                class="bg-white dark:bg-neutral-800 text-black dark:text-white">{!! $ingredients !!}</div>

            {{-- Campo oculto que almacenará el contenido para Livewire --}}
            <textarea hidden wire:model.defer="ingredients" id="ingredients"></textarea>

            @error('ingredients') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        {{-- Campo editable: Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            {{-- Contenedor que Quill usará como editor --}}
            <div id="quill-description" style="height: 200px;">{!! $description !!}</div>

            <textarea hidden wire:model.defer="description" id="description"></textarea>

            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>

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
            document.addEventListener('DOMContentLoaded', function () {
                const toolbarOptions = [
                    ['bold', 'italic', 'underline', 'strike'],
                    ['blockquote', 'code-block'],
                    ['link', 'image', 'video', 'formula'],
                    [{ 'header': 1 }, { 'header': 2 }],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'list': 'check' }],
                    [{ 'script': 'sub' }, { 'script': 'super' }],
                    [{ 'indent': '-1' }, { 'indent': '+1' }],
                    [{ 'direction': 'rtl' }],
                    [{ 'size': ['small', false, 'large', 'huge'] }],
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'font': [] }],
                    [{ 'align': [] }],
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
                quillIngredients.on('text-change', function () {
                    textarea.value = quillIngredients.root.innerHTML;
                    // Livewire necesita detectar el cambio si usas wire:model.defer
                    textarea.dispatchEvent(new Event('input'));
                });

                quillDescription.on('text-change', function () {
                    textareaDescription.value = quillDescription.root.innerHTML;
                    // Livewire necesita detectar el cambio si usas wire:model.defer
                    textareaDescription.dispatchEvent(new Event('input'));
                });
            });
        </script>
    </form>
</div>