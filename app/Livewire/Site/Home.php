<?php

namespace App\Livewire\Site;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('site.home')
            ->layout('layouts.master', [
                'title' => __('auth.register_step1'),
            ]);
    }
}
