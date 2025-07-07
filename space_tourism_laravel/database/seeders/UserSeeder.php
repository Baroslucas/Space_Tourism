<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create(['role' => 'user', 'email' => 'user@user.test']);
        User::factory()->create(['role' => 'admin', 'email' => 'admin@admin.test']);
        User::factory()->create(['role' => 'su', 'email' => 'su@su.test']);
    }
}
