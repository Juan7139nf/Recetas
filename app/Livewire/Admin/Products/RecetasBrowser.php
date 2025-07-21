<?php

namespace App\Livewire\Admin\Products;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class RecetasBrowser extends Component
{
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'bootstrap'; // o 'tailwind'

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $recipes = Recipe::query()
            ->where('title', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('bread.browser', [
            'items' => $recipes,
            'columns' => ['title', 'price', 'license'],
            'model' => 'admin.product.recipe.',
        ])
            ->layout('layouts.admin', [
                    'title' => __('auth.register_step1'),
                ]);
    }
}
