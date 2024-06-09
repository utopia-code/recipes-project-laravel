<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categories = [
            ['name' => 'Vegetariana', 'slug' => 'vegetariana'],
            ['name' => 'Mediterránea', 'slug' => 'mediterranea'],
            ['name' => 'Tradicional', 'slug' => 'tradicional'],
            ['name' => 'Moderna', 'slug' => 'moderna'],
            ['name' => 'Internacional', 'slug' => 'internacional'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                $category 
            );
        }


        Recipe::where('id', '>', 3)->delete();
        DB::statement('ALTER TABLE recipes AUTO_INCREMENT = 4');

        $fakeRecipes = Recipe::factory(100)->create();

        $fakeRecipes->each(function($recipe) {
            $categories = Category::inRandomOrder()->take(rand(1, 2))->pluck('id');
            $recipe->categories()->attach($categories);
        });
        
    }
}
