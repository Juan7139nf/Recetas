<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $topUsuariosConRecetas = [];
    public $dataRecetasPorCategoria = [];
    public $topCalificaciones = [];

    public function mount()
    {
        user_has_role();

        $this->topUsuariosConRecetas = User::withCount('recipes')
            ->get()
            ->map(fn($user) => [
                'name' => $user->display_name,
                'count' => $user->recipes_count
            ])
            ->sortByDesc('count')
            ->take(5)
            ->values()
            ->toArray();

        $this->dataRecetasPorCategoria = Category::withCount('recipes')
            ->get()
            ->map(fn($cat) => [
                'name' => $cat->name,
                'count' => $cat->recipes_count
            ])
            ->toArray();

        $this->topCalificaciones = Recipe::with('ratings')
            ->withCount('ratings')
            ->get()
            ->map(function ($recipe) {
                return [
                    'title' => $recipe->title,
                    'avg' => round($recipe->averageRating(), 2),
                    'count' => $recipe->ratings_count
                ];
            })
            ->sortByDesc('avg')
            ->take(7)
            ->values()
            ->toArray();
    }

    public function render()
    {
        return view('dashboard.index')
            ->layout('layouts.admin', [
                'title' => 'Dashboard',
            ]);
    }
}
