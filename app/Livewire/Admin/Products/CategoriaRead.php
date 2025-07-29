<?php

namespace App\Livewire\Admin\Products;

use App\Models\Category;
use Livewire\Component;

class CategoriaRead extends Component
{
    public Category $categoria;

    public function mount($id)
    {
        user_has_role();
        $this->categoria = Category::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.admin.products.categoria-read')
            ->layout('layouts.admin', [
                'title' => 'Ver categoria',
            ]);
    }
}
