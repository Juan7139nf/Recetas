<?php

namespace App\Livewire\Admin\Products;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\RecipePart;
use Livewire\Component;
use Livewire\WithFileUploads;

class RecetasEdit extends Component
{
    use WithFileUploads;

    public $recipeId;
    public $title;
    public $gif_path;
    public $images = [];
    public $cover;
    public $price;
    public $license;
    public $difficulty;
    public $duration_minutes;
    public $existingImages = [];
    public $existingCover;
    public $parts = [];
    public $selectedCategories = [];
    public $allCategories = [];

    public function mount($id)
    {
        $recipe = Recipe::with('parts')->findOrFail($id);
        $this->recipeId = $recipe->id;
        $this->title = $recipe->title;
        $this->gif_path = $recipe->gif_path;
        $this->price = $recipe->price;
        $this->license = $recipe->license;
        $this->difficulty = $recipe->settings['difficulty'] ?? 'easy';
        $this->duration_minutes = $recipe->settings['duration_minutes'] ?? 30;

        // Cargar imágenes existentes y portada
        $this->existingImages = is_array($recipe->image) ? $recipe->image : [];
        $this->existingCover = $recipe->cover ?? null;

        $this->parts = $recipe->parts->sortBy('order')->map(function ($part) {
            return [
                'id' => $part->id,
                'display' => $part->display,
                'ingredients' => $part->ingredients,
                'description' => $part->description,
                'order' => $part->order,
            ];
        })->values()->toArray();

        $this->allCategories = Category::orderBy('name')->get();
        $this->selectedCategories = $recipe->categories()->pluck('id')->toArray();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'price' => 'nullable|numeric',
            'license' => 'required|string',
            'gif_path' => 'nullable|string|max:255',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'difficulty' => 'required|string',
            'duration_minutes' => 'required|integer',
            'selectedCategories' => 'required|array|min:1',
        ]);

        $recipe = Recipe::findOrFail($this->recipeId);

        // Guardar nuevas imágenes subidas y agregar a las existentes
        $newImages = collect($this->images)->map(function ($img) {
            return ['url' => $img->store('site/recipes/images', 'public')];
        })->toArray();

        // Mezclar imágenes ya existentes con las nuevas
        $allImages = array_merge($this->existingImages, $newImages);

        // Si hay un nuevo cover, subir y reemplazar
        if ($this->cover) {
            $cover = ['url' => $this->cover->store('site/recipes/covers', 'public')];
        } else {
            $cover = $this->existingCover;
        }

        $recipe->update([
            'title' => $this->title,
            'gif_path' => $this->gif_path,
            'image' => $allImages,
            'cover' => $cover,
            'price' => $this->price,
            'license' => $this->license,
            'settings' => [
                'difficulty' => $this->difficulty,
                'duration_minutes' => $this->duration_minutes,
            ],
        ]);

        $recipe->categories()->sync($this->selectedCategories);

        foreach ($this->parts as $index => $part) {
            if (isset($part['id'])) {
                // Parte existente → actualizar
                $existingPart = $recipe->parts()->find($part['id']);
                if ($existingPart) {
                    $existingPart->update([
                        'display' => $part['display'] ?? null,
                        'ingredients' => $part['ingredients'] ?? null,
                        'description' => $part['description'] ?? null,
                        'order' => $index,
                    ]);
                }
            } else {
                // Parte nueva → crear
                $recipe->parts()->create([
                    'display' => $part['display'] ?? null,
                    'ingredients' => $part['ingredients'] ?? null,
                    'description' => $part['description'] ?? null,
                    'order' => $index,
                ]);
            }
        }

        return redirect()->route('admin.product.recipe.browser');
    }

    public function removeExistingImage($index)
    {
        if (isset($this->existingImages[$index])) {
            array_splice($this->existingImages, $index, 1);
        }
    }

    // Quitar imagen nueva que se agregó pero no se subió aún
    public function removeImage($index)
    {
        if (isset($this->images[$index])) {
            array_splice($this->images, $index, 1);
        }
    }

    public function addPart()
    {
        $part = RecipePart::create([
            'recipe_id' => $this->recipeId,
            'display' => null,
            'ingredients' => null,
            'description' => null,
            'order' => count($this->parts),
        ]);

        $this->parts[] = $part->toArray();
    }

    public function deletePart($id)
    {
        if ($id) {
            $part = RecipePart::find($id);
            if ($part) {
                $part->delete();
            }
        }

        $this->parts = array_filter($this->parts, fn($p) => $p['id'] !== $id);
        $this->parts = array_values($this->parts);
    }

    public function render()
    {
        return view('livewire.admin.products.recetas-edit')
            ->layout('layouts.admin', [
                'title' => 'Editar receta',
            ]);
    }
}
