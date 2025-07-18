<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class RegisterStep1 extends Component
{
    public $username, $email, $password, $password_confirmation;

    protected $rules = [
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|same:password_confirmation',
        'password_confirmation' => 'required|string|min:6',
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'id' => Str::uuid(),
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        return redirect()->route('auth.complete-profile');
    }

    public function render()
    {
        return view('auth.register-step1')
            ->layout('layouts.register', [
                'title' => __('auth.register_step1'),
            ]);
    }
}
