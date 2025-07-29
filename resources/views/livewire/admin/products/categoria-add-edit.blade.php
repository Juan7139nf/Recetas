<div class="p-4">
    <x-admin.breadcrumb principal="products" secondary="Categoria"
        urlSecondary="{{ route('admin.product.category.browser') }}" name="{{ $categoryId ? 'Editar' : 'Crear' }}"
        accion="return" urlAccion="{{ route('admin.product.category.browser') }}" />

    <form wire:submit.prevent="save">
        <x-forms.input-field id="name" name="name" label="Nombre*" wireModel="name"
            placeholder="Ingresa el nombre de la categoría" type="text" viewBox="0 0 16 16"
            icon='<path class="fill-gray-400" d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479z"/>' />

        <x-forms.input-field id="slug" name="slug" label="Slug (opcional)" wireModel="slug"
            placeholder="Ingresa el slug de la categoría" type="text" viewBox="0 0 16 16"
            icon='<path class="fill-gray-400" d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9c-.086 0-.17.01-.25.031A2 2 0 0 1 7 5.5zM4 6.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm6.5 2.5H12a3 3 0 0 0 0-6H9a3 3 0 0 0-2.83 4H7c.086 0 .17-.01.25-.031A2 2 0 0 1 9 9.5zm2.5-1.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>' />

        <x-forms.input-field id="sort_order" name="sort_order" label="Orden" wireModel="sort_order"
            placeholder="Orden de la categoría" type="number" viewBox="0 0 16 16"
            icon='<path class="fill-gray-400" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>' />

        <x-forms.select-field id="parent_id" name="parent_id" label="Categoría Padre" wireModel="parent_id"
            :options="collect($allCategories)
                ->map(fn($cat) => ['value' => $cat->id, 'label' => $cat->name])
                ->toArray()" placeholder="Seleccione una categoría padre" />


        <div class="mb-4">
            <label class="block">Imagen</label>
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
                <input type="file" wire:model="image" x-ref="fileInput" class="hidden" accept="image/*"
                    @change="previewUrl = $event.target.files[0] ? URL.createObjectURL($event.target.files[0]) : null">

                <template x-if="!previewUrl">
                    <div>
                        @if (isset($existingImage['url']))
                            <img src="{{ asset('storage/' . $existingImage['url']) }}"
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
            @error('image')
                <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="w-100 {{ site('btn.success') }}">
            <span wire:target="save">Guardar</span>
            <svg wire:loading wire:target="save" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                aria-hidden="true" class="size-5 motion-safe:animate-spin fill-white ml-1">
                <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                    opacity=".25" />
                <path
                    d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
            </svg></button>
    </form>
</div>
