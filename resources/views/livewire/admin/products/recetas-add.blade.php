<div class="p-4">
    <div class="flex justify-between items-center mb-4">
        <nav class="text-sm font-medium text-neutral-600 dark:text-neutral-300" aria-label="breadcrumb">
            <ol class="flex flex-wrap items-center gap-1">
                <li class="flex items-center gap-1.5">
                    <a href="#" aira-label="home" class="hover:text-neutral-900 dark:hover:text-white flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="size-5 shrink-0" aria-hidden="true">
                            <path
                                d="M10.362 1.093a.75.75 0 0 0-.724 0L2.523 5.018 10 9.143l7.477-4.125-7.115-3.925ZM18 6.443l-7.25 4v8.25l6.862-3.786A.75.75 0 0 0 18 14.25V6.443ZM9.25 18.693v-8.25l-7.25-4v7.807a.75.75 0 0 0 .388.657l6.862 3.786Z">
                            </path>
                        </svg>
                        <span class="ml-2">Productos</span>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true"
                        stroke-width="2" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="flex items-center gap-1">
                    <a href="#" class="hover:text-neutral-900 dark:hover:text-white">Recetas</a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true"
                        stroke-width="2" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="flex items-center gap-1 font-bold text-neutral-900 dark:text-white" aria-current="page">
                    Crear</li>
            </ol>
        </nav>
        <a href="{{ route('admin.product.recipe.browser') }}" class="{{site('btn.gray')}} relative">
            <svg class="absolute w-10 left-1.5" focusable="false" aria-hidden="true" viewBox="0 0 24 24">
                <path class="fill-white"
                    d="M7 7.56c0-.94-1.14-1.42-1.81-.75L.71 11.29c-.39.39-.39 1.02 0 1.41l4.48 4.48c.67.68 1.81.2 1.81-.74 0-.28-.11-.55-.31-.75L3 12l3.69-3.69c.2-.2.31-.47.31-.75M13 9V7.41c0-.89-1.08-1.34-1.71-.71L6.7 11.29c-.39.39-.39 1.02 0 1.41l4.59 4.59c.63.63 1.71.18 1.71-.71V14.9c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11">
                </path>
            </svg>
            <span class="ml-8 text-lg font-bold">Volver</span>
        </a>
    </div>

    <div class="max-w-xl mx-auto mt-10 p-6 bg-white shadow rounded" wire:submit.prevent="save">
        <form wire:submit.prevent="save" enctype="multipart/form-data">
            <h2 class="text-xl font-bold mb-4">Crear Receta</h2>

            <div class="mb-4">
                <label class="block">Título</label>
                <input type="text" wire:model="title" class="w-full border px-3 py-2 rounded">
                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block">GIF (opcional)</label>
                <input type="text" wire:model="gif_path" class="w-full border px-3 py-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block">Precio</label>
                <input type="number" wire:model="price" step="0.01" class="w-full border px-3 py-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block">Licencia</label>
                <input type="text" wire:model="license" class="w-full border px-3 py-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block">Dificultad</label>
                <select wire:model="difficulty" class="w-full border px-3 py-2 rounded">
                    <option value="easy">Fácil</option>
                    <option value="medium">Media</option>
                    <option value="hard">Difícil</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block">Duración (minutos)</label>
                <input type="number" wire:model="duration_minutes" class="w-full border px-3 py-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block">Imágenes</label>
                <input type="file" wire:model="image" multiple>
                @if ($image)
                    <p>Vista previa:</p>
                    @foreach ($image as $img)
                        <img src="{{ $img->temporaryUrl() }}" width="100" class="inline-block mr-2 mb-2">
                    @endforeach
                @endif
            </div>

            <div class="mb-4">
                <label class="block">Portadas</label>
                <input type="file" wire:model="cover" multiple>
                @if ($cover)
                    <p>Vista previa:</p>
                    @foreach ($cover as $img)
                        <img src="{{ $img->temporaryUrl() }}" width="100" class="inline-block mr-2 mb-2">
                    @endforeach
                @endif
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Guardar Receta
            </button>

            @if (session()->has('message'))
                <div class="mt-4 text-green-600 font-semibold">{{ session('message') }}</div>
            @endif
        </form>
    </div>
</div>