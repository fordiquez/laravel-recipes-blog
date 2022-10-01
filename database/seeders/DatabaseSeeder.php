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
    public function run()
    {
         $this->call([
             UserSeeder::class,
             CuisineSeeder::class,
             CategorySeeder::class,
             TagSeeder::class
         ]);
    }
}
