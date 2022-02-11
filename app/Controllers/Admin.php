<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;
use App\Models\CarModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        $booking = new BookingModel();
        $user = new UserModel();
        $car = new CarModel();
        $data = [
            'totalBookings' => $booking->countAllResults(),
            'pendingBookings' => $booking->where('status', 'pending')->countAllResults(),
            'totalCusttomers' => $user->where('role', 'customer')->countAllResults(),
            'totalCars' => $car->countAllResults(),
        ];
        return view("back/index", $data);
    }
}
