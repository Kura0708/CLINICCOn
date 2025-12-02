<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateTestUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'admin'],
            [
                'name' => 'Admin User',
                'email' => 'admin@clinic.test',
                'password' => Hash::make('password'),
                'role_id' => 1,
            ]
        );

        echo "Test user created: username=admin, password=password\n";
    }
}
