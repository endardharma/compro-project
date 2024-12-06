<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Admin',
                'desc' => 'Hak akses sebagai admin',
                'is_active' => true,
                'created_at' => '2024-11-30 17:40:0',
                'updated_at' => '2024-11-30 17:40:0',
            ],
            [
                'id' => 2,
                'name' => 'Photographer',
                'desc' => 'Hak akses sebagai photographer',
                'is_active' => true,
                'created_at' => '2024-11-30 17:40:0',
                'updated_at' => '2024-11-30 17:40:0',
            ],
            [
                'id' => 3,
                'name' => 'Photographer / Videographer',
                'desc' => 'Hak akses sebagai photographer / videographer',
                'is_active' => true,
                'created_at' => '2024-11-30 17:40:0',
                'updated_at' => '2024-11-30 17:40:0',
            ],
            [
                'id' => 4,
                'name' => 'Editor',
                'desc' => 'Hak akses sebagai editor',
                'is_active' => true,
                'created_at' => '2024-11-30 17:40:0',
                'updated_at' => '2024-11-30 17:40:0',
            ],
            [
                'id' => 5,
                'name' => 'Customer',
                'desc' => 'Hak akses sebagai customer',
                'is_active' => true,
                'created_at' => '2024-11-30 17:40:0',
                'update_at' => '2024-11-30 17:40:0',
            ],
        ];

        Role::insert($data);
    }
}
