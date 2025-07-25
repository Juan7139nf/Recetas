<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $name, $password, $remember = false, $error = false;

    public function authenticate()
    {
        $user = User::where('email', $this->name)
            ->orWhere('username', $this->name)
            ->first();

        if (!$user || !Hash::check($this->password, $user->password)) {
            $this->error = true;
            return;
        }

        Auth::login($user, $this->remember);

        return redirect()->route('home');
    }

    public function render()
    {
        return view('auth.login')->layout('layouts.login', [
            'title' => __('Login'),
        ]);
    }
}
