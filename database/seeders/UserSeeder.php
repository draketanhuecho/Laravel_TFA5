<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin_user', 'full_name' => 'System Administrator'],
            ['username' => 'cashier_1', 'full_name' => 'Clara Santos'],
            ['username' => 'cashier_2', 'full_name' => 'Mark Cruz'],
            ['username' => 'inventory_mgr', 'full_name' => 'Angela Reyes'],
            ['username' => 'supervisor_01', 'full_name' => 'Gabriel Torres'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}