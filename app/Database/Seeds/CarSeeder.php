<?php

namespace App\Database\Seeds;

use App\Models\CarModel;
use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run()
    {
        $user_object = new CarModel();

        $user_object->insertBatch([
            [
                "title" => "Maruti Suzuki Wagon R",
                "brand" => "Suzuki",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, nobis amet odit aspernatur dolores debitis nihil pariatur aliquid nulla non libero quibusdam totam, ex beatae temporibus inventore molestiae? Corrupti, repellat dolore delectus tempore deleniti amet. Nisi aperiam eligendi labore omnis nulla atque nostrum voluptatum adipisci explicabo, voluptate vero modi nemo..",
                "price_per_day" => "5000",
                "image" => "/images/car-1.jpeg",
                "created_at"  => Time::now(),
                "updated_at"  => Time::now()
            ],
            [
                "title" => "Audi Q8",
                "brand" => "Volkswagen",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, nobis amet odit aspernatur dolores debitis nihil pariatur aliquid nulla non libero quibusdam totam, ex beatae temporibus inventore molestiae? Corrupti, repellat dolore delectus tempore deleniti amet. Nisi aperiam eligendi labore omnis nulla atque nostrum voluptatum adipisci explicabo, voluptate vero modi nemo..",
                "price_per_day" => "10000",
                "image" => "/images/car-1.jpeg",
                "created_at"  => Time::now(),
                "updated_at"  => Time::now()
            ],
        ]);
    }
}
