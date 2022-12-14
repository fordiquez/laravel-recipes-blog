<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws \Exception
     */
    public function run(): void
    {
         $this->call([
             UserSeeder::class,
             CuisineSeeder::class,
             CategorySeeder::class,
             TagSeeder::class,
             PostSeeder::class,
             RecipeSeeder::class,
             IngredientSeeder::class,
             StepSeeder::class,
         ]);
    }
}
