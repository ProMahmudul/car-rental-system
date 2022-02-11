<?php

namespace App\Controllers;

use App\Models\CarModel;
use CodeIgniter\RESTful\ResourceController;

class Car extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $car = new CarModel();
        $data = [
            'cars' => $car->paginate(20),
            'pager' => $car->pager
        ];
        return view('back/pages/car/index', $data);
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
        return view('back/pages/car/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            "title" => "required",
            "brand" => "required",
            "description" => "required",
            "price_per_day" => "required",
            "image" => [
                "rules" => "uploaded[image]|max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]",
                "label" => "Car Image",
            ]
        ];


        if (!$this->validate($rules)) {
            return view("back/pages/car/create", [
                "validation" => $this->validator,
            ]);
        } else {

            $file = $this->request->getFile("image");

            $session = session();
            $image = $file->getName();

            if ($file->move("images", $image)) {

                $carModel = new CarModel();

                $data = [
                    "title" => $this->request->getVar("title"),
                    "brand" => $this->request->getVar("brand"),
                    "description" => $this->request->getVar("description"),
                    "price_per_day" => $this->request->getVar("price_per_day"),
                    "image" => "/images/" . $image
                ];

                if ($carModel->insert($data)) {
                    $session->setFlashdata("success", "Data saved successfully");
                } else {
                    $session->setFlashdata("error", "Failed to save data");
                }
            }
        }

        return redirect()->back()->withInput();
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
        $model = new CarModel();
        $data['car'] = $model->where('id', $id)->delete();
        return redirect()->to(base_url('admin/car'));
    }
}
