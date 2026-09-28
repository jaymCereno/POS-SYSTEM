<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $data['customers'] = $customerModel->findAll();

        return view('customers', $data);
    }

    public function new()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'POST') {

            $rules = [
                'full_name' => 'required',
                'email' => 'required|valid_email'
            ];

            if (! $this->validate($rules)) {

                return view('customer', [
                    'validation' => $this->validator
                ]);
            }

            $customerModel = new CustomerModel();

            $customerModel->save([
                'full_name' => $this->request->getPost('full_name'),
                'email' => $this->request->getPost('email')
            ]);

            return redirect()->to('/customers');
        }

        return view('customer');
    }

    public function edit($id)
    {
        helper(['form']);

        $customerModel = new CustomerModel();

        if ($this->request->getMethod() === 'POST') {

            $rules = [
                'full_name' => 'required',
                'email' => 'required|valid_email'
            ];

            if (! $this->validate($rules)) {

                return view('customer_edit', [
                    'validation' => $this->validator,
                    'customer' => $customerModel->find($id)
                ]);
            }

            $customerModel->update($id, [
                'full_name' => $this->request->getPost('full_name'),
                'email' => $this->request->getPost('email')
            ]);

            return redirect()->to('/customers');
        }

        $data['customer'] = $customerModel->find($id);

        return view('customer_edit', $data);
    }
}