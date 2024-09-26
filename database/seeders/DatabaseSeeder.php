<?php

namespace Database\Seeders;

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
        factory(App\Group::class, 3)->create();

        factory(App\Level::class,3)->create(['name'=>'Oro']);
        factory(App\Level::class,3)->create(['name'=>'PLata']);
        factory(App\Level::class,3)->create(['name'=>'Bronce']);
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
