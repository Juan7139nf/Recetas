<?php

namespace App\Livewire\Admin\Products;

use App\Models\Recipe;
use Livewire\Component;

class RecetasRead extends Component
{
    public $recipe;

    public function mount($id)
    {
        $this->recipe = Recipe::with('parts')->findOrFail($id);

        $this->recipe->setRelation(
            'parts',
            $this->recipe->parts->sortBy('order')->values()
        );
    }

    public function render()
    {
        return view('livewire.recipe-read')
            ->layout('layouts.admin', [
                'title' => 'Leer receta',
            ]);
    }
}
