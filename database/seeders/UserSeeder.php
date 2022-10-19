<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'first_name' => 'Richard',
            'last_name' => 'Ford',
            'email' => 'fordiquez@gmail.com',
            'email_verified_at' => now(),
            'role' => 1,
            'photo' => 'assets/images/admin.jpg',
            'password' => '$2y$10$DoIg1SajrTrLiiO8rFpqQOGLX0u1A6nQjGSoMqU.Zm7i85zXFj/FK', // password
            'remember_token' => Str::random(10),
        ]);
        User::factory(10)->create();
    }
}
