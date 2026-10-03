<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Crear roles base
        $adminRole = Role::create(['name' => 'Admin']);
        $salesRole = Role::create(['name' => 'Sales']);
        $warehouseRole = Role::create(['name' => 'Warehouse']);

        // Registrar 3 usuarios
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@halcon.com',
            'password' => Hash::make('password123'),
            'role_id' => $adminRole->id,
        ]);

        User::create([
            'name' => 'Sales Executive',
            'email' => 'sales@halcon.com',
            'password' => Hash::make('password123'),
            'role_id' => $salesRole->id,
        ]);

        User::create([
            'name' => 'Warehouse Operator',
            'email' => 'warehouse@halcon.com',
            'password' => Hash::make('password123'),
            'role_id' => $warehouseRole->id,
        ]);
    }
}