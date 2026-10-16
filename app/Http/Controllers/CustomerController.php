<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'contact' => '09171234567', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Maria Clara', 'email' => 'maria@example.com', 'contact' => '09182345678', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Jose Rizal', 'email' => 'jose@example.com', 'contact' => '09193456789', 'status' => 'Inactive'],
            ['id' => 4, 'name' => 'Andres Bonifacio', 'email' => 'andres@example.com', 'contact' => '09204567890', 'status' => 'Active'],
            ['id' => 5, 'name' => 'Apolinario Mabini', 'email' => 'apolinario@example.com', 'contact' => '09215678901', 'status' => 'Active'],
        ];

        return view('customers.index', compact('customers'));
    }
}