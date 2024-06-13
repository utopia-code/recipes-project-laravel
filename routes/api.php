<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecipesController;
use App\Http\Controllers\Api\RecipeController;
use App\Http\Controllers\Api\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::get('/recipes/{page}', [RecipesController::class, 'index']);
Route::get('/recipe/{id}', [RecipeController::class, 'show']);
Route::get('/category/{id}/{page}', [CategoryController::class, 'index']);