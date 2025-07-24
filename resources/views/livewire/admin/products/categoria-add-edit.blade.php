<div class="bg-white">
    <h2>{{ $categoryId ? 'Editar' : 'Crear' }} Categoría</h2>

    <form wire:submit.prevent="save">
        <div class="mb-3">
            <label>Nombre</label>
            <input wire:model="name" type="text" class="form-control">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Slug</label>
            <input wire:model="slug" type="text" class="form-control">
            @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Orden</label>
            <input wire:model="sort_order" type="number" class="form-control">
        </div>

        <div class="mb-3">
            <label>Categoría Padre</label>
            <select wire:model="parent_id" class="form-control">
                <option value="">Ninguna</option>
                @foreach($allCategories as $cat)
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
