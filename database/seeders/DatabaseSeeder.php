<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\House;
use App\Models\Member;
use App\Models\Owner;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::factory(5)->create();
        User::factory(5)->create();
        Country::factory(5)->create();
        // Member::factory(5)->create();
        // Owner::factory(5)->create();
        // House::factory(5)->create();
    }
}
