<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class RegistrationCompleted extends Component
{
    public function render()
    {
        return view('auth.registration-completed')
            ->layout('layouts.register', [
                'title' => __('auth.registration-completed'),
            ]);
    }
}
