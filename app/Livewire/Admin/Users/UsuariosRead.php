<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class UsuariosRead extends Component
{
    public User $user;

    public function mount($id)
    {
        user_has_role();
        $this->user = User::with('roles')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.admin.users.usuarios-read')
            ->layout('layouts.admin', [
                'title' => 'Ver usuario',
            ]);
    }
}
