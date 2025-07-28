<?php

namespace App\Livewire\Admin\Products;

use App\Models\Rating;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RecetasRead extends Component
{
    public $recipe;
    public $userRating = null;
    public $averageRating = null;

    public function mount($id)
    {
        if (request()->routeIs('admin.*')) {
            user_has_role();
        }

        $this->recipe = Recipe::with('parts', 'ratings')
            ->where('id', $id)
            ->orWhere('slug', $id)
            ->firstOrFail();

        $this->recipe->setRelation(
            'parts',
            $this->recipe->parts->sortBy('order')->values()
        );

        if (Auth::check()) {
            $user = Auth::user();
            $userId = $user->id;
            $recipeId = $this->recipe->id;

            if ($user && $user->id && $this->recipe && $this->recipe->id) {
                $this->userRating = Rating::where('user_id', $userId)->where('recipe_id', $recipeId)->first();
            }
        }

        $this->averageRating = round($this->recipe->ratings->avg('score'), 1);
    }

    public function rate($score)
    {
        if (!Auth::check())
            return;

        Rating::updateOrCreate(
            ['user_id' => Auth::id(), 'recipe_id' => $this->recipe->id],
            ['score' => $score]
        );

        $this->userRating = Rating::where('user_id', Auth::id())
            ->where('recipe_id', $this->recipe->id)
            ->first();

        $this->averageRating = round($this->recipe->ratings()->avg('score'), 1);
    }

    public function render()
    {
        if (request()->routeIs('admin.*')) {
            $layout = 'layouts.admin';
            $layoutVars = [
                'title' => 'Admin: ' . $this->recipe->title,
                'breadcrumb' => [
                    ['label' => 'Dashboard', 'url' => route('admin.dashboard')],
                    ['label' => 'Recetas', 'url' => route('admin.product.recipe.browser')],
                    ['label' => $this->recipe->title]
                ],
            ];
        } else {
            $layout = 'layouts.master';
            $layoutVars = [
                'title' => $this->recipe->title,
                'header' => 2,
            ];
        }

        return view('livewire.recipe-read')
            ->layout($layout, $layoutVars);
    }
}
