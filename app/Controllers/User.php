<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('back/pages/user/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            "name" => "required|min_length[3]|max_length[40]",
            "email" => "required|valid_email|is_unique[users.email]",
            'phone_no' => 'required|regex_match[/^[0-9]{11}$/]',
            'role' => 'required',
            "profile_image" => [
                "rules" => "uploaded[profile_image]|max_size[profile_image,1024]|is_image[profile_image]|mime_in[profile_image,image/jpg,image/jpeg,image/gif,image/png]",
                "label" => "Profile Image",
            ],
            'password' => 'required|min_length[8]',
            'password_confirm' => 'required|matches[password]',
        ];


        // if (!$validated) {
        //     return redirect()->to(site_url('/admin/user/new'))->withInput()->with('validation', $this->validator);
        // }

        if (!$this->validate($rules)) {

            return view("back/pages/user/create", [
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
                    "role" => $this->request->getVar("role"),
                    "profile_image" => "/images/" . $profile_image,
                    "password" => md5($this->request->getVar("role"))
                ];

                if ($userModel->insert($data)) {
                    $session->setFlashdata("success", "Data saved successfully");
                } else {
                    $session->setFlashdata("error", "Failed to save data");
                }
            }
        }
    }

    public function myForm()
    {
        $rules = [
            "name" => "required|min_length[3]|max_length[40]",
            "email" => "required|valid_email",
            "phone_no" => "required|min_length[9]|max_length[15]",
            "profile_image" => [
                "rules" => "uploaded[profile_image]|max_size[profile_image,1024]|is_image[profile_image]|mime_in[profile_image,image/jpg,image/jpeg,image/gif,image/png]",
                "label" => "Profile Image",
            ],
        ];

        if (!$this->validate($rules)) {

            return view("my-form", [
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
                    "profile_image" => "/images/" . $profile_image,
                ];

                if ($userModel->insert($data)) {

                    $session->setFlashdata("success", "Data saved successfully");
                } else {

                    $session->setFlashdata("error", "Failed to save data");
                }
            }
        }
        return redirect()->to(base_url());
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
