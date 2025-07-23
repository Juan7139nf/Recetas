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
    public $order;

    protected $rules = [
        'recipe_id' => 'required|exists:recipes,id',
        'display' => 'required|string|max:255',
        'ingredients' => 'nullable|string',
        'description' => 'nullable|string',
        'order' => 'required|integer|min:0',
    ];

    public function mount($id)
    {
        $recipePart = RecipePart::findOrFail($id);
        $this->recipePartId = $recipePart->id;
        $this->recipe_id = $recipePart->recipe_id;
        $this->display = $recipePart->display;
        $this->ingredients = $recipePart->ingredients;
        $this->description = $recipePart->description;
        $this->order = $recipePart->order;
    }

    public function save()
    {
        $this->validate();

        $recipePart = RecipePart::findOrFail($this->recipePartId);
        $recipePart->update([
            'recipe_id' => $this->recipe_id,
            'display' => $this->display,
            'ingredients' => $this->ingredients,
            'description' => $this->description,
            'order' => $this->order,
        ]);

        session()->flash('message', 'Parte de receta actualizada correctamente.');

        // Opcional: redirigir a otra página o emitir evento Livewire
        // return redirect()->route('ruta.deseada');
    }

    public function render()
    {
        return view('livewire.recipe-part-edit');
    }
}
