<?php

namespace App\Livewire\Admin\Products;

use App\Models\Category;
use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriaBrowser extends Component
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
        $categories = Category::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('bread.browser', [
            'items' => $categories,
            'columns' => ['id', 'name', 'image'],
            'model' => 'admin.product.category.',
            'routes' => [
                'add' => route('admin.product.category.add'),
                'edit' => fn($id) => route('admin.product.category.edit', $id),
                'read' => fn($id) => route('admin.product.category.read', $id),
            ],
            'table' => 'Categorias',
        ])
            ->layout('layouts.admin', [
                'title' => 'Categorias',
            ]);
    }
}
