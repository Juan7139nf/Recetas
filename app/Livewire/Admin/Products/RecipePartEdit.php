<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\RecipePart;

class RecipePartEdit extends Component
{
    public $recipePartId;

    public $recipe_id;
    public $display;
    public $ingredients;
    public $description;
    public $orden;

    public function mount($id)
    {
        $recipePart = RecipePart::findOrFail($id);
        $this->recipePartId = $recipePart->id;
        $this->recipe_id = $recipePart->recipe_id;
        $this->display = $recipePart->display;
        $this->ingredients = $recipePart->ingredients;
        $this->description = $recipePart->description;
        $this->orden = $recipePart->orden;
    }

    public function save()
    {
        $recipePart = RecipePart::findOrFail($this->recipePartId);
        $recipePart->update([
            'display' => $this->display,
            'ingredients' => $this->ingredients,
            'description' => $this->description,
            'orden' => $this->orden,
        ]);

        session()->flash('message', 'Parte de receta actualizada correctamente.');
        // Opcional: redirigir a otra página o emitir evento Livewire
        // return redirect()->route('ruta.deseada');
    }

    public function render()
    {
        return view('livewire.admin.products.recipe-part-edit')
            ->layout('layouts.admin', [
                'title' => 'Editar parte receta',
            ]);
    }
}
