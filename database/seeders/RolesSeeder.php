<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Correct the namespace to use the singular "Role" model
use App\Models\Role;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        // Correct model name (singular "Role")
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Editor']);
        Role::create(['name' => 'Viewer']);
    }
}
