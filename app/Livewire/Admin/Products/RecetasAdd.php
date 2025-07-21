<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;

class RecetasAdd extends Component
{
    public function render()
    {
        return view('livewire.admin.products.recetas-add')
            ->layout('layouts.admin', [
                    'title' => __('auth.register_step1'),
                ]);
    }
}
