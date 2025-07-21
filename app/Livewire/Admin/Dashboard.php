<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('dashboard.index')
            ->layout('layouts.admin', [
                'title' => __('auth.register_step1'),
            ]);
    }
}
