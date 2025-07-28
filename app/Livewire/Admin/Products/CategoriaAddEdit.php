<?php

namespace App\Livewire\Admin\Products;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class CategoriaAddEdit extends Component
{
    use WithFileUploads;
    public $categoryId;
    public $name, $slug, $sort_order = 1, $parent_id = null, $image = null;

    public $existingImage;

    public function mount($id = null)
    {
        user_has_role();
        $this->categoryId = $id;
        if ($id) {
            $cat = Category::findOrFail($id);
            $this->name = $cat->name;
            $this->slug = $cat->slug;
            $this->sort_order = $cat->sort_order;
            $this->parent_id = $cat->parent_id;
            $this->image = null;
            $this->existingImage = $cat->image ?? null;
        }
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function save()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categories', 'slug')->ignore($this->categoryId),
            ],
            'sort_order' => 'required|integer',
            'parent_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ];

        $data = $this->validate($rules);
        if ($this->image) {
            $data['image'] = ['url' => $this->image->store('categories', 'public')];
        } else {
            $data['image'] = $this->existingImage;
        }

        Category::updateOrCreate(
            ['id' => $this->categoryId],
            $data
        );

        session()->flash('success', 'Categoría guardada correctamente.');
        return redirect()->route('admin.product.category.browser');
    }

    public function render()
    {
        return view('livewire.admin.products.categoria-add-edit', [
            'allCategories' => Category::whereNull('parent_id')->where('id', '!=', $this->categoryId)->get(),
        ])
            ->layout('layouts.admin', [
                'title' => 'Form categorias',
            ]);
    }
}
