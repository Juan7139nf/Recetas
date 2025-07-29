<div class="p-4">
    <x-admin.breadcrumb principal="products" secondary="Recetas" urlSecondary="{{ route('admin.product.recipe.browser') }}"
        name="Crear" accion="return" urlAccion="{{ route('admin.product.recipe.browser') }}" />

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        <div class="grid grid-flow-col grid-rows-3 gap-4">
            <x-forms.input-field colrow="col-span-3" id="title" name="title" label="Titulo*" wireModel="title"
                placeholder="Ingresa el nombre de la receta" type="text" viewBox="0 0 16 16"
                icon='<path class="fill-gray-400" d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479z"/>' />

            <x-forms.input-field colrow="col-span-1" id="gif_path" name="gif_path" label="GIF (opcional)"
                wireModel="gif_path" placeholder="Ingresa la URL del GIF" type="text" />

            <x-forms.input-field colrow="col-span-1" id="price" name="price" label="Precio*" wireModel="price"
                placeholder="Ingresa el precio" type="number" other="step=0.01 min=0" />

            <x-forms.select-field id="license" name="license" label="Licencia" wireModel="license" :options="[
                ['value' => 'copyright', 'label' => 'Todos los derechos reservados'],
                ['value' => 'cc_by', 'label' => 'CC BY (Reconocimiento)'],
                ['value' => 'cc_by_sa', 'label' => 'CC BY-SA (Compartir igual)'],
                ['value' => 'cc_by_nc', 'label' => 'CC BY-NC (No comercial)'],
                ['value' => 'cc0', 'label' => 'CC0 (Dominio público)'],
            ]"
                placeholder="Seleccione la licencia" />

            <x-forms.select-field id="difficulty" name="difficulty" label="Dificultad" wireModel="difficulty"
                :options="[
                    ['value' => 'easy', 'label' => 'Fácil'],
                    ['value' => 'medium', 'label' => 'Media'],
                    ['value' => 'hard', 'label' => 'Difícil'],
                ]" placeholder="Seleccione la dificultad" />

            <x-forms.input-field colrow="col-span-1" id="duration_minutes" name="duration_minutes"
                label="Duración (minutos)" wireModel="duration_minutes" placeholder="Ingresa la duración" type="number"
                other="min=0" />
        </div>

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
                    <p class="text-gray-500">Haz clic o arrastra una imagen aquí</p>
                </template>

                <template x-if="previewUrl">
                    <img :src="previewUrl" class="mx-auto mt-4 max-h-48 rounded shadow">
                </template>
            </div>

            @error('cover')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-black dark:text-white">Imágenes</label>
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
                    this.previews = []; // Reiniciar para evitar acumulación
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

                <input type="file" wire:model="images" x-ref="fileInput" class="hidden" accept="image/*" multiple
                    @change="handleInputChange($event)">

                <template x-if="previews.length === 0">
                    <p class="text-gray-500">Haz clic o arrastra imágenes aquí</p>
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
        <button type="submit" wire:loading.attr="disabled" class="w-100 {{ site('btn.success') }}">
            <span wire:target="save">Guardar Receta</span>
            <svg wire:loading wire:target="save" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                aria-hidden="true" class="size-5 motion-safe:animate-spin fill-white ml-1">
                <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                    opacity=".25" />
                <path
                    d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
            </svg>
        </button>

        @if (session()->has('message'))
            <div class="mt-4 text-green-600 font-semibold">{{ session('message') }}</div>
        @endif
    </form>
</div>
