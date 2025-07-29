<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('q');
        $user = Auth::user();

        $results = Recipe::where('title', 'like', "%{$query}%")
            ->limit(10)
            ->get();

        $results->transform(function ($recipe) use ($user) {
            $recipe->url = $recipe->getRouteForUser($user);
            return $recipe;
        });

        return response()->json($results);
    }

    public function table()
    {
        $tabla = User::all();

        return response()->json($tabla);
    }
}
