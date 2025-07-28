<div class="mb-4">
    <label class="block font-medium text-gray-700 dark:text-gray-200 mb-2">{{ $label }}</label>
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
    }" x-init="previewUrl = {{ $existingImage ? '\'storage/' . $existingImage['url'] . '\'' : 'null' }}" x-on:dragover.prevent="isDragging = true"
        x-on:dragleave.prevent="isDragging = false" x-on:drop.prevent="handleDrop($event)"
        class="border-2 border-dashed border-gray-300 rounded-md p-6 text-center cursor-pointer transition-all"
        :class="{ 'border-blue-500 bg-blue-50': isDragging }" @click="$refs.fileInput.click()">
        <input type="file" wire:model="{{ $wireModel }}" x-ref="fileInput" class="hidden" accept="image/*"
            @change="previewUrl = $event.target.files[0] ? URL.createObjectURL($event.target.files[0]) : null">

        <template x-if="!previewUrl">
            <div>
                @if ($existingImage)
                    <img src="{{ asset('storage/' . $existingImage['url']) }}"
                        class="mx-auto mt-4 max-h-48 rounded shadow" alt="Imagen existente">
                @else
                    <p class="text-gray-500">Haz clic o arrastra una imagen aquí</p>
                @endif
            </div>
        </template>

        <template x-if="previewUrl">
            <img :src="previewUrl" class="mx-auto mt-4 max-h-48 rounded shadow" alt="Vista previa imagen">
        </template>
    </div>
    @error($wireModel)
        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
    @enderror
</div>
