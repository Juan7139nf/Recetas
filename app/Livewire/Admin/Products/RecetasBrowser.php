<?php

namespace App\Livewire\Admin\Products;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class RecetasBrowser extends Component
{
    use WithPagination;

    public $search = '';

    protected $paginationTheme = 'tailwind';

    public function mount()
    {
        user_has_role();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function buscar()
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
            'columns' => ['id', 'cover', 'title', 'price', 'license'],
            'model' => 'admin.product.recipe.',
            'routes' => [
                'add' => route('admin.product.recipe.add'),
                'edit' => fn($id) => route('admin.product.recipe.edit', $id),
                'read' => fn($id) => route('admin.product.recipe.read', $id),
            ],
            'table' => 'Recetas',
            'labelSearch' => 'Buscar por nombre...',
        ])
            ->layout('layouts.admin', [
                'title' => __('auth.register_step1'),
            ]);
    }
}
