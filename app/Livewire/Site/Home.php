<?php

namespace App\Livewire\Site;

use App\Models\Recipe;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $carrousel = Recipe::inRandomOrder()->get()->take(10);
        $recetas = Recipe::whereNotNull('price')
            ->where('price', '>', 0)->inRandomOrder()
            ->get()->take(15);
        return view('site.home', ['carrousel' => $carrousel, 'recetas' => $recetas])
            ->layout('layouts.master', [
                'title' => __('auth.register_step1'),
                'header' => 1,
            ]);
    }
}
