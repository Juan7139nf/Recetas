<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsuariosBrowser extends Component
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
        $users = User::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->latest()
            ->paginate(10);

        return view('bread.browser', [
            'items' => $users,
            'columns' => ['id', 'name', 'email', 'created_at'],
            'model' => 'admin.users.user.',
            'routes' => [
                'add' => 'no',
                'edit' => fn($id) => route('admin.manage.user.edit', $id),
                'read' => fn($id) => route('admin.manage.user.read', $id),
            ],
            'table' => 'Usuarios',
            'labelSearch' => 'Buscar por nombre o email...',
        ])
            ->layout('layouts.admin', [
                'title' => __('Usuarios'),
            ]);
    }
}
