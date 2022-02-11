<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                return view('auth/login', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))
                    ->first();

                // Storing session values
                $this->setUserSession($user);

                // Redirecting to dashboard after login
                if ($user['role'] == "admin") {
                    return redirect()->to(base_url('admin'));
                } elseif ($user['role'] == "customer") {
                    return redirect()->to(base_url('my-account'));
                }
            }
        }
        return view('auth/login');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'phone_no' => $user['phone_no'],
            'email' => $user['email'],
            'profile_image' => $user['profile_image'],
            'isLoggedIn' => true,
            "role" => $user['role'],
        ];

        session()->set($data);
        return true;
    }

    public function register()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                "name" => "required|min_length[3]|max_length[40]",
                "email" => "required|valid_email|is_unique[users.email]",
                'phone_no' => 'required|regex_match[/^[0-9]{11}$/]',
                "profile_image" => [
                    "rules" => "uploaded[profile_image]|max_size[profile_image,1024]|is_image[profile_image]|mime_in[profile_image,image/jpg,image/jpeg,image/gif,image/png]",
                    "label" => "Profile Image",
                ],
                'password' => 'required|min_length[8]',
                'password_confirm' => 'required|matches[password]',
            ];


            if (!$this->validate($rules)) {
                return view("auth/register", [
                    "validation" => $this->validator,
                ]);
            } else {

                $file = $this->request->getFile("profile_image");

                $session = session();
                $profile_image = $file->getName();

                if ($file->move("images", $profile_image)) {

                    $userModel = new UserModel();

                    $data = [
                        "name" => $this->request->getVar("name"),
                        "email" => $this->request->getVar("email"),
                        "phone_no" => $this->request->getVar("phone_no"),
                        "role" => $this->request->getVar("role") ?? 'customer',
                        "profile_image" => "/images/" . $profile_image,
                        "password" => password_hash($this->request->getVar("password"), PASSWORD_DEFAULT)
                    ];

                    if ($userModel->insert($data)) {
                        $session->setFlashdata("success", "Registration successul!!");
                    } else {
                        $session->setFlashdata("error", "Failed to register");
                    }
                }
            }
        }
        return view('auth/register');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
