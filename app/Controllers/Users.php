<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'fullname' => 'James Matthew Cereno',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Maria Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'fullname' => 'John Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'fullname' => 'Mark Reyes',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Ana Garcia',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}