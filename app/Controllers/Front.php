<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CarModel;

class Front extends BaseController
{
    public function index()
    {
        $car = new CarModel();
        $data = [
            'sliders' => $car->limit(3)->find(),
            'cars' => $car->orderBy('id', 'DESC')->findAll()
        ];
        return view('front/index',$data);
    }

    public function ourCars()
    {
        $car = new CarModel();
        $data = [
            'cars' => $car->orderBy('id', 'DESC')->paginate(20)
        ];
        return view('front/our-cars',$data);
    }
}
