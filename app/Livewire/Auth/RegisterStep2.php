<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterStep2 extends Component
{
    use WithFileUploads;

    public $name;
    public $lastname;
    public $image;
    public $language = 'es';
    public $theme = 'light';

    protected $rules = [
        'name' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'image' => 'required|image|max:2048',
        'language' => 'required|in:es,en',
        'theme' => 'required|in:light,dark',
    ];

    public function mount()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        $this->name = $user->name;
        $this->lastname = $user->lastname;
        $this->language = $user->getSetting('language', 'es');
        $this->theme = $user->getSetting('theme', 'light');
    }

    public function completeProfile()
    {
        $this->validate();

        $user = Auth::user();
        $user->name = $this->name;
        $user->lastname = $this->lastname;

        if ($this->image) {
            $filename = $user->id . '.' . $this->image->getClientOriginalExtension();
            $path = $this->image->storeAs('public/users', $filename);
            $user->image = ['url' => 'users/' . $filename];
        }

        $user->setSetting('language', $this->language);
        $user->setSetting('theme', $this->theme);

        $user->save();

        return redirect()->route('auth.registration-completed');
    }

    public function render()
    {
        return view('auth.register-step2')
            ->layout('layouts.register', [
                'title' => __('auth.register_step2'),
            ]);
    }
}
