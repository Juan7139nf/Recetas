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
    public $comment = '';

    public function mount($id)
    {
        if (request()->routeIs('admin.*')) {
            user_has_role();
        }

        $this->loadRecipe($id);
        $this->loadRatings();
    }

    private function loadRecipe($id)
    {
        $this->recipe = Recipe::with('parts', 'ratings')
            ->where('id', $id)
            ->orWhere('slug', $id)
            ->firstOrFail();

        $this->recipe->setRelation(
            'parts',
            $this->recipe->parts->sortBy('order')->values()
        );
    }

    private function loadRatings()
    {
        $userId = Auth::id();

        if ($userId) {
            $this->userRating = Rating::where('user_id', $userId)
                ->where('recipe_id', $this->recipe->id)
                ->first();

            $this->comment = optional($this->userRating)->comment ?? '';
        } else {
            $this->userRating = null;
            $this->comment = '';
        }

        $this->averageRating = round(
            Rating::where('recipe_id', $this->recipe->id)->avg('score'),
            1
        );
    }

    public function rate($score)
    {
        if (!Auth::check() || !in_array($score, [1, 2, 3, 4, 5])) {
            return;
        }

        Rating::updateOrCreate(
            ['user_id' => Auth::id(), 'recipe_id' => $this->recipe->id],
            [
                'score' => $score,
                'comment' => $this->comment ? $this->comment : null,
            ]
        );

        $this->loadRatings();

        // Reordenar partes por si cambió algo en la receta
        $this->recipe->load('parts');
        $this->recipe->setRelation(
            'parts',
            $this->recipe->parts->sortBy('order')->values()
        );
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
