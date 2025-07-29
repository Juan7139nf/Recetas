<?php

namespace App\Livewire\Admin\Products;

use App\Models\Category;
use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriaBrowser extends Component
{

    use WithPagination;

    public string $search = '';

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
        $categories = Category::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('bread.browser', [
            'items' => $categories,
            'headers' => ['Nombre', 'Pertenece a', 'Imagen'],
            'columns' => ['id', 'name', 'display_parent', 'image_url'],
            'model' => 'admin.product.category.',
            'routes' => [
                'add' => route('admin.product.category.add'),
                'edit' => fn($id) => route('admin.product.category.edit', $id),
                'read' => fn($id) => route('admin.product.category.read', $id),
            ],
            'table' => 'Categorías',
            'labelSearch' => 'Buscar por categoría...',
        ])
            ->layout('layouts.admin', [
                'title' => 'Categorias',
            ]);
    }
}
