<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $data['users'] = $userModel->findAll();

        return view('users', $data);
    }

    public function new()
    {
        helper(['form']);

        if ($this->request->getMethod() === 'POST') {

            $rules = [
                'username'  => 'required|is_unique[users.username]',
                'full_name' => 'required',
                'role'      => 'required'
            ];

            if (! $this->validate($rules)) {

                return view('user', [
                    'validation' => $this->validator
                ]);
            }

            $avatar = $this->request->getFile('avatar');

            $avatarName = null;

            if ($avatar && $avatar->isValid()) {

                $avatarName = $avatar->getRandomName();

                $avatar->move(
                    FCPATH . 'uploads/avatars',
                    $avatarName
                );
            }

            $userModel = new UserModel();

            $userModel->save([
                'username'  => $this->request->getPost('username'),
                'full_name' => $this->request->getPost('full_name'),
                'role'      => $this->request->getPost('role'),
                'avatar'    => $avatarName
            ]);

            return redirect()->to('/users');
        }

        return view('user');
    }

    public function edit($id)
    {
        helper(['form']);

        $userModel = new UserModel();

        if ($this->request->getMethod() === 'POST') {

            $avatar = $this->request->getFile('avatar');

            $data = [
                'full_name' => $this->request->getPost('full_name'),
                'role'      => $this->request->getPost('role')
            ];

            if ($avatar && $avatar->isValid()) {

                $avatarName = $avatar->getRandomName();

                $avatar->move(
                    FCPATH . 'uploads/avatars',
                    $avatarName
                );

                $data['avatar'] = $avatarName;
            }

            $userModel->update($id, $data);

            return redirect()->to('/users');
        }

        $data['user'] = $userModel->find($id);

        return view('user_edit', $data);
    }
}