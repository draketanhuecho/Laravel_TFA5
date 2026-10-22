<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567'],
            ['full_name' => 'Maria Clara', 'email' => 'maria@example.com', 'phone' => '09181234568'],
            ['full_name' => 'Jose Rizal', 'email' => 'jose@example.com', 'phone' => '09191234569'],
            ['full_name' => 'Andres Bonifacio', 'email' => 'andres@example.com', 'phone' => '09201234570'],
            ['full_name' => 'Apolinario Mabini', 'email' => 'apolinario@example.com', 'phone' => '09211234571'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}