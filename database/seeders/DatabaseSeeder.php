<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Gustavo',
            'email' => 'gst@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
