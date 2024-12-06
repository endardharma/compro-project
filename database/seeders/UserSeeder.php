<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Endar Dharma Mukti',
                'email' => 'endardharma1@gmail.com',
                'password' => Hash::make('endardharma1'),
                'role_id' => 1,
                'email_verified_at' => '2024-11-30 20:30:00',
                'is_active' => true,
                'created_at' => '2024-11-30 20:30:00',
                'updated_at' => '2024-11-30 20:30:00',
            ]
        ];

        User::insert($data);
    }
}
