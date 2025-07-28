<?php

namespace App\Livewire\Site\Order;

use App\Models\Recipe;
use Livewire\Component;

class Comprar extends Component
{
    public Recipe $recipe;

    public function mount($id)
    {
        $this->recipe = Recipe::with('user', 'categories')->findOrFail($id);
    }
    
    public function render()
    {
        return view('livewire.site.order.comprar')
            ->layout('layouts.master', [
                'title' => $this->recipe->title,
                'header' => 2,
            ]);
    }
}
