<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;
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
        return view('front/index', $data);
    }

    public function ourCars()
    {
        $car = new CarModel();
        $data = [
            'cars' => $car->orderBy('id', 'DESC')->paginate(20),
            'pager' => $car->pager
        ];
        return view('front/our-cars', $data);
    }

    public function singleCar($id = null)
    {
        $car = new CarModel();
        $data['car'] = $car->where('id', $id)->first();
        return view('front/car-details', $data);
    }

    public function myAccount()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('bookings');
        $builder->select('*');
        $builder->where('user_id', session()->get('id'));
        $builder->join('cars', 'cars.id = bookings.car_id', "left");
        
        $data = [
            'pendingBookings' => $builder->where('status', 'pending')->get()->getResult(),
            'acceptBookings' => $builder->where('status', 'accept')->get()->getResult()
        ];
        return view('front/my-account', $data);
    }
}
