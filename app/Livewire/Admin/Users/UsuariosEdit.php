<?php

namespace App\Livewire\Admin\Users;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UsuariosEdit extends Component
{
    public User $user;
    public $role_id;

    public function mount($id)
    {
        user_has_role();
        $this->user = User::with('roles')->findOrFail($id);
        $this->role_id = $this->user->roles->first()?->id ?? null;
    }

    public function actualizarRol()
    {
        $this->validate([
            'role_id' => 'nullable|exists:roles,id',
        ]);

        if (Auth::id() === $this->user->id) {
            abort(403, 'No puedes cambiar tu propio rol.');
        }

        // Sincronizamos el nuevo rol
        $this->user->roles()->sync([$this->role_id]);

        session()->flash('success', 'Rol actualizado correctamente.');
    }

    public function render()
    {
        return view('livewire.admin.users.usuarios-edit', [
            'roles' => Role::all(),
        ])
            ->layout('layouts.admin', [
                'title' => 'Editar usuario',
            ]);
    }
}
