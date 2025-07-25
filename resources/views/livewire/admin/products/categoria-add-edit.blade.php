<div class="">
    <h2>{{ $categoryId ? 'Editar' : 'Crear' }} Categoría</h2>

    <form wire:submit.prevent="save">
        <x-forms.input-field id="name" name="name" label="Nombre*" wireModel="name"
            placeholder="Ingresa el nombre de la categoria" type="text" viewBox="0 0 16 16"
            icon='<path class="fill-gray-400" d="M12.258 3h-8.51l-.083 2.46h.479c.26-1.544.758-1.783 2.693-1.845l.424-.013v7.827c0 .663-.144.82-1.3.923v.52h4.082v-.52c-1.162-.103-1.306-.26-1.306-.923V3.602l.431.013c1.934.062 2.434.301 2.693 1.846h.479z"/>' />

        <x-forms.input-field id="slug" name="slug" label="Slug (opcional)" wireModel="slug"
            placeholder="Ingresa el nombre de la ruta categoria" type="text" />
        <div class="mb-3">
            <label>Nombre</label>
            <input wire:model="name" type="text" class="form-control">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Slug</label>
            <input wire:model="slug" type="text" class="form-control">
            @error('slug')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Orden</label>
            <input wire:model="sort_order" type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label>Categoría Padre</label>
            <select wire:model="parent_id" class="form-control">
                <option value="">Ninguna</option>
                @foreach ($allCategories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Puedes reemplazar esto con un uploader real --}}
        <div class="mb-3">
            <label>Imagen (JSON)</label>
            <input wire:model="image" type="text" class="form-control">
        </div>

        <button class="btn btn-primary">Guardar</button>
    </form>
</div>
