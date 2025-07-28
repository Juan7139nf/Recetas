<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('q');

        $results = Recipe::where('title', 'like', "%{$query}%")
            ->limit(10)
            ->get(['id', 'title', 'cover']);

        return response()->json($results);
    }
}
