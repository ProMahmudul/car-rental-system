<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookingModel;

class Booking extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('bookings');
        $builder->select('bookings.*, cars.title, cars.price_per_day, cars.image, users.name, users.email, users.phone_no');
        $builder->join('cars', 'cars.id = bookings.car_id', "left");
        $builder->join('users', 'users.id = bookings.user_id', "left");
        $data = [
            'bookings' => $builder->get()->getResult()
        ];
        return view('back/pages/reservation/index', $data);
    }

    public function create()
    {
        $rules = [
            "user_id" => "required",
            "car_id" => "required",
            "from_date" => "required",
            "to_date" => "required",
            "from_area" => "required",
            "to_area" => "required"
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->with("validation", $this->validator);
        } else {
            $booking = new BookingModel();
            $data = [
                'booking_no' => random_int(100, 100000),
                'user_id' => $this->request->getVar('user_id'),
                'car_id'  => $this->request->getVar('car_id'),
                'from_date'  => $this->request->getVar('from_date'),
                'to_date'  => $this->request->getVar('to_date'),
                'from_area'  => $this->request->getVar('from_area'),
                'to_area'  => $this->request->getVar('to_area'),
                'message'  => $this->request->getVar('message'),
                'status'  => "pending",
            ];
            if ($booking->insert($data)) {
                session()->setFlashdata("success", "Car booked successfully");
            } else {
                session()->setFlashdata("error", "Failed to booked!");
            }
        }
        return redirect()->back()->withInput();
    }

    public function status($id = null)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('bookings');
        $builder->select('bookings.*, cars.title, cars.price_per_day, cars.image, users.name, users.email, users.phone_no');
        $builder->where("bookings.id", $id);
        $builder->join('cars', 'cars.id = bookings.car_id', "left");
        $builder->join('users', 'users.id = bookings.user_id', "left");
        $data = [
            'bookings' => $builder->get()->getResult()
        ];
        return view('back/pages/reservation/show', $data);
    }

    public function update()
    {
        $booking = new BookingModel();
        $id = $this->request->getVar('id');
        $data = [
            'status' => $this->request->getVar('status'),
        ];
        $booking->update($id, $data);
        return redirect('admin/reservations');
    }
}
