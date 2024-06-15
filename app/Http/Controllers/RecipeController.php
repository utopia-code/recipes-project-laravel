<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() 
    {
        $recipes = Recipe::All();

        $recipes->load('categories');

        $selectedFixedRecipes = $recipes->take(2);

        $randomRecipes = $recipes->slice(2);
        $selectedRandomRecipes = $randomRecipes->random(3);

        $selectedRecipes = $selectedFixedRecipes->merge($selectedRandomRecipes);

        return view('recipes.index', ['selectedRecipes' => $selectedRecipes]);
    }

    public function show(Recipe $recipe) 
    {
        return view('recipes.detail', [
            'recipe' => $recipe
        ]);
    }
}
