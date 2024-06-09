<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category) 
    {
        $category->load('recipes');

        return view('categories.category', [
            'recipes' => $category->recipes,
            'name' => $category->name
        ]);
    }
}
