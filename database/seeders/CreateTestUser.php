<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateTestUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'test@test.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
                'role_id' => 1,
            ]
        );
    }
}
