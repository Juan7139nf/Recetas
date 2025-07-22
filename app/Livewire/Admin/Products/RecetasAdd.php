<?php

namespace App\Livewire\Admin\Products;

use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class RecetasAdd extends Component
{
    use WithFileUploads;

    public $title;
    public $gif_path;
    public $image = [];
    public $cover = [];
    public $price;
    public $license = 'public_domain';
    public $difficulty = 'easy';
    public $duration_minutes = 30;

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'price' => 'nullable|numeric',
            'license' => 'required|string',
            'gif_path' => 'nullable|string|max:255',
            'image.*' => 'nullable|image|max:2048',
            'cover.*' => 'nullable|image|max:2048',
            'difficulty' => 'required|string',
            'duration_minutes' => 'required|integer',
        ]);

        // Simulamos subir imágenes (aquí deberías guardar en el disco si quieres)
        $images = collect($this->image)->map(function ($img) {
            return ['url' => $img->store('site/recipes/images', 'public')];
        })->toArray();

        $covers = collect($this->cover)->map(function ($img) {
            return ['url' => $img->store('site/recipes/covers', 'public')];
        })->toArray();

        Recipe::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'gif_path' => $this->gif_path,
            'image' => $images,
            'cover' => $covers,
            'price' => $this->price,
            'license' => $this->license,
            'settings' => [
                'difficulty' => $this->difficulty,
                'duration_minutes' => $this->duration_minutes,
            ],
        ]);

        return redirect()->route('admin.product.recipe.browser');
    }
    
    public function render()
    {
        return view('livewire.admin.products.recetas-add')
            ->layout('layouts.admin', [
                'title' => 'Crear recetas',
            ]);
    }
}
