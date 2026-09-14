<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'name' => 'John Smith',
                'email' => 'john@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'name' => 'Robert Cruz',
                'email' => 'robert@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'name' => 'Anna Reyes',
                'email' => 'anna@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'name' => 'David Garcia',
                'email' => 'david@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', $data);
    }
}