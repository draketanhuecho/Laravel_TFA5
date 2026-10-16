<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin_juan', 'role' => 'Administrator', 'email' => 'admin@pos.com', 'status' => 'Active'],
            ['id' => 2, 'username' => 'cashier_maria', 'role' => 'Cashier', 'email' => 'maria.c@pos.com', 'status' => 'Active'],
            ['id' => 3, 'username' => 'mgr_jose', 'role' => 'Manager', 'email' => 'jose.m@pos.com', 'status' => 'Active'],
            ['id' => 4, 'username' => 'cashier_andres', 'role' => 'Cashier', 'email' => 'andres.b@pos.com', 'status' => 'Inactive'],
            ['id' => 5, 'username' => 'inventory_apolinario', 'role' => 'Inventory Clerk', 'email' => 'apolinario.m@pos.com', 'status' => 'Active'],
        ];

        return view('users.index', compact('users'));
    }
}